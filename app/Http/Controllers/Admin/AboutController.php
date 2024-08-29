<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Traits\CustomeFileHandler;

class AboutController extends Controller
{
    use CustomeFileHandler;
    public function index()
    {
        $about = About::first();
        return view('admin.pages.about.index', compact('about'));
    }

    public function update(AboutRequest $request)
    {
        $about = About::first();

        $about->update([
            "heading_en" => $request->heading_en,
            "heading_ar" => $request->heading_ar,
            "sub_heading_ar" => $request->sub_heading_ar,
            "sub_heading_en" => $request->sub_heading_en,
            "vision_en" => $request->vision_en,
            "vision_ar" => $request->vision_ar,
            "mission_ar" => $request->mission_ar,
            "mission_en" => $request->mission_en,
            "approach_en" => $request->approach_en,
            "approach_ar" => $request->approach_ar,
        ]);

        if ($request->hasFile('vision_image')) {
            if ($about->vision_image) {
                $this->deleteFile($about->vision_image);
            }
            $path = $this->uploadFile('about', $request->vision_image);
            $about->update(["vision_image" => $path]);
        }
        if ($request->hasFile('mission_image')) {
            if ($about->mission_image) {
                $this->deleteFile($about->mission_image);
            }
            $path = $this->uploadFile('about', $request->mission_image);
            $about->update(["mission_image" => $path]);
        }
        if ($request->hasFile('approach_image')) {
            if ($about->approach_image) {
                $this->deleteFile($about->approach_image);
            }
            $path = $this->uploadFile('about', $request->approach_image);
            $about->update(["approach_image" => $path]);
        }

        return back()->with('success', trans('general.edit_success'));
    }
}
