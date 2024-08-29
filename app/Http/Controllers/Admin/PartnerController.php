<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Traits\CustomeFileHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnersRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PartnerController extends Controller
{
    use CustomeFileHandler;
    public function index()
    {
        return view('admin.pages.partners.index');
    }

    public function store(PartnersRequest $request)
    {
        $this->validate($request, ["image" => "required"]);
        $partner = Partner::create($request->validated());

        if ($request->hasFile('image')) {
            $path = $this->uploadFile('partners', $request->image);
            $partner->update(["image" => $path]);
        }

        return http_response_code(200);
    }

    public function getPartnersList()
    {
        $data = Partner::orderBy('created_at', 'desc')->get();
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
                $btns = <<<HTML
                    <div class="dropdown d-flex justify-content-center">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item edit-btn"
                             data-id="{$row->id}"
                             data-title-en = "{$row->title_en}"
                             data-title-ar = "{$row->title_ar}"
                              data-bs-toggle="modal"
                              data-bs-target = "#editCategoryModal"
                              href="javascript:void(0);"><i class="bx bx-edit me-0 me-2 text-primary"></i>{$edit_text}</a></li>
                             <li>
                              <a class="dropdown-item delete-btn"
                                data-id = "{$row->id}"
                              href="javascript:void(0);"><i class="bx bx-trash me-0 me-2 text-danger"></i>{$delete_text}</a></li>
                          </ul>
                        </div>
                HTML;

                if (auth('admin')->user()->hasAbilityTo('edit partners')) {
                    return $btns;
                }
                return;
            })
            ->rawColumns(['actions', 'image'])
            ->make(true);
    }

    public function destroy(Request $request)
    {
        $partner = Partner::findOrFail($request->id);

        if ($partner->image) {
            $this->deleteFile($partner->image);
        }

        $partner->delete();

        return http_response_code(200);
    }

    public function update(PartnersRequest $request)
    {
        $partner = Partner::findOrFail($request->id);
        $partner->update([
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
        ]);

        if ($request->hasFile('image')) {
            if ($partner->image) {
                $this->deleteFile($partner->image);
            }
            $path = $this->uploadFile('partners', $request->image);
            $partner->update(["image" => $path]);
        }

        return http_response_code(200);
    }
}
