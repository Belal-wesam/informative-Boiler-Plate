<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\CustomeFileHandler;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ArticleStorerequest;
use App\Http\Requests\ArticleUpdaterequest;

class ArticleController extends Controller
{
    use CustomeFileHandler;
    public function index()
    {
        return view('admin.pages.articles.index');
    }

    public function create()
    {
        return view('admin.pages.articles.create');
    }

    public function store(ArticleStorerequest $request)
    {
        $data = $request->validated();
        unset($data['image']);
        $data["slug"] = Str::slug($request->title_en);
        $article = Article::create($data);

        if ($request->hasFile('image')) {
            $path = $this->uploadFile('articles', $request->image);
            $article->update(["image" => $path]);
        }

        return to_route('admin.articles.index')->with('success', trans('general.create_success'));
    }

    public function getArticlesList()
    {
        $data = Article::orderBy('created_at', 'desc')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d-m-Y');
            })
            ->editColumn('image', function ($row) {
                $path = Storage::url($row->image);
                return <<<HTML
                        <img src="{$path}" width="100" height="50" alt="Avatar" class="rounded">
                HTML;
            })
            ->addColumn('actions', function ($row) {
                $edit_text = trans('general.edit');
                $delete_text = trans('general.delete');

                $edit_route = route('admin.articles.edit', $row->id);
                $btns = <<<HTML
                    <div class="dropdown d-flex justify-content-center">
                        <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item"
                              href="{$edit_route}"><i class="bx bx-edit me-0 me-2 text-primary"></i>{$edit_text}</a></li>
                             <li>
                              <a class="dropdown-item delete-btn"
                                data-id = "{$row->id}"
                              href="javascript:void(0);"><i class="bx bx-trash me-0 me-2 text-danger"></i>{$delete_text}</a></li>
                          </ul>
                        </div>
                HTML;

                if (auth('admin')->user()->hasAbilityTo('edit articles')) {
                    return $btns;
                }
                return;
            })
            ->rawColumns(['actions', 'image'])
            ->make(true);
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.pages.articles.edit', compact('article'));
    }
    public function destroy(Request $request)
    {
        $article = Article::findOrFail($request->id);
        if ($article->image) {
            $this->deleteFile($article->image);
        }

        $article->delete();
        return http_response_code(200);
    }


    public function update($id, ArticleUpdaterequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update([
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "body_en" => $request->body_en,
            "body_ar" => $request->body_ar,
            "slug" => Str::slug($request->title_en),
        ]);

        if ($request->hasFile('image')) {
            if ($article->image) {
                $this->deleteFile($article->image);
            }
            $path = $this->uploadFile('articles', $request->image);
            $article->update(["image" => $path]);
        }
        return to_route('admin.articles.index')->with('success', trans('general.edit_success'));
    }
}
