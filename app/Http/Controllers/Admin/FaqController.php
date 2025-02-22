<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    public function index()
    {
        return view('admin.pages.faq.index');
    }
    public function store(FaqRequest $request)
    {
        Faq::create($request->validated());
        return http_response_code(200);
    }

    public function update(FaqRequest $request)
    {
        $faq = Faq::findOrFail($request->id);
        $faq->update($request->validated());
        return http_response_code(200);
    }

    public function destroy(Request $request)
    {
        $faq = Faq::findOrFail($request->id);
        $faq->delete();
        return http_response_code(200);
    }
    public function getFaqList()
    {
        $data = Faq::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d-m-Y');
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
                             data-question-en="{$row->question_en}"
                             data-question-ar="{$row->question_ar}"
                             data-answer-ar="{$row->answer_ar}"
                             data-answer-en="{$row->answer_en}"
                              data-bs-toggle="modal"
                              data-bs-target = "#editFaqModal"
                              href="javascript:void(0);"><i class="bx bx-edit me-0 me-2 text-primary"></i>{$edit_text}</a></li>
                             <li>
                              <a class="dropdown-item delete-btn"
                                data-id = "{$row->id}"
                              href="javascript:void(0);"><i class="bx bx-trash me-0 me-2 text-danger"></i>{$delete_text}</a></li>
                          </ul>
                        </div>
                HTML;

                if (auth('admin')->user()->hasAbilityTo('edit categories')) {
                    return $btns;
                }
                return;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
