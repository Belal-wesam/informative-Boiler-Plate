<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\CustomeFileHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ProjectUpdateRequest;

class ProjectController extends Controller
{
    use CustomeFileHandler;
    public function index()
    {
        return view('admin.pages.projects.index');
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.pages.projects.create', compact('services'));
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        unset($data['image']);
        $data["slug"] = Str::slug($request->title_en);
        $project = Project::create($data);

        if ($request->hasFile('image')) {
            $path = $this->uploadFile('projects', $request->image);

            $project->update(["image" => $path]);
        }

        return to_route('admin.projects.index')->with('success', trans('general.create_success'));
    }

    public function getProjectsList()
    {
        $data = Project::orderBy('created_at', 'desc')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d-m-Y');
            })

            ->editcolumn('image', function ($row) {
                $path = Storage::url($row->image);
                return <<<HTML
                        <img src="{$path}" width="100" height="50" alt="Avatar" class="rounded">
                HTML;
            })
            ->addColumn('actions', function ($row) {
                $edit_text = trans('general.edit');
                $delete_text = trans('general.delete');
                $edit_route = route('admin.projects.edit', $row->id);
                $btns = <<<HTML
                    <div class="dropdown d-flex justify-content-center">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item "

                              href="{$edit_route}"><i class="bx bx-edit me-0 me-2 text-primary"></i>{$edit_text}</a></li>
                             <li>
                              <a class="dropdown-item delete-btn"
                                data-id = "{$row->id}"
                              href="javascript:void(0);"><i class="bx bx-trash me-0 me-2 text-danger"></i>{$delete_text}</a></li>
                          </ul>
                        </div>
                HTML;

                if (auth('admin')->user()->hasAbilityTo('edit projects')) {
                    return $btns;
                }
                return;
            })
            ->rawColumns(['actions', 'image'])
            ->make(true);
    }

    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->id);
        if ($project->image) {
            $this->deleteFile($project->image);
        }

        $project->delete();
        return http_response_code(200);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $services = Service::all();
        return view('admin.pages.projects.edit', compact('project', 'services'));
    }

    public function update($id, ProjectUpdateRequest $request)
    {
        $project = Project::findOrFail($id);
        $project->update([
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,

            "slug" => Str::slug($request->title_en),
            "url" => $request->url
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                $this->deleteFile($project->image);
            }

            $path = $this->uploadFile('projects', $request->image);

            $project->update(["image" => $path]);
        }
        return to_route('admin.projects.index')->with('success', trans('general.edit_success'));
    }
}
