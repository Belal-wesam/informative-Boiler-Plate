<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Traits\CustomeFileHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{
    use CustomeFileHandler;
    public function index()
    {
        return view('admin.pages.reviews.index');
    }


    public function store(ReviewRequest $request)
    {
        $data = $request->validated();
        unset($data['image']);

        $review = Review::create($data);

        if ($request->hasFile('image')) {
            $path = $this->uploadFile('reviews', $request->image);
            $review->update(["image" => $path]);
        }

        return http_response_code(200);
    }

    public function getReviewsList()
    {
        $data = Review::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d-m-Y');
            })
            ->editColumn('image', function ($row) {
                $path = Storage::url($row->image);
                return <<<HTML
                        <img src="{$path}" width="50" height="50" alt="Avatar" class="rounded-circle">
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
                             data-name-en = "{$row->name_en}"
                             data-name-ar = "{$row->name_ar}"
                             data-review-en = "{$row->review_en}"
                             data-review-ar = "{$row->review_ar}"
                             data-position-en = "{$row->position_en}"
                             data-position-ar = "{$row->position_ar}"
                              data-bs-toggle="modal"
                              data-bs-target = "#editReviewModal"
                              href="javascript:void(0);"><i class="bx bx-edit me-0 me-2 text-primary"></i>{$edit_text}</a></li>
                             <li>
                              <a class="dropdown-item delete-btn"
                                data-id = "{$row->id}"
                              href="javascript:void(0);"><i class="bx bx-trash me-0 me-2 text-danger"></i>{$delete_text}</a></li>
                          </ul>
                        </div>
                HTML;

                if (auth('admin')->user()->hasAbilityTo('edit reviews')) {
                    return $btns;
                }
                return;
            })
            ->rawColumns(['actions', 'image'])
            ->make(true);
    }

    public function destroy(Request $request)
    {
        $review = Review::findOrFail($request->id);
        if ($review->image) {
            $this->deleteFile($review->image);
        }
        $review->delete();
        return http_response_code(200);
    }

    public function update(UpdateReviewRequest $request)
    {
        $review = Review::findOrFail($request->id);
        $review->update([
            "name_en" => $request->name_en,
            "name_ar" => $request->name_ar,
            "position_en" => $request->position_en,
            "position_ar" => $request->position_ar,
            "review_en" => $request->review_en,
            "review_ar" => $request->review_ar,
        ]);
        if ($request->hasFile('image')) {
            if ($review->image) {
                $this->deleteFile($review->image);
            }
            $path = $this->uploadFile('reviews', $request->image);
            $review->update(["image" => $path]);
        }
        return http_response_code(200);
    }
}
