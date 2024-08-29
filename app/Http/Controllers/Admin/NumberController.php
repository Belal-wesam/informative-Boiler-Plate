<?php

namespace App\Http\Controllers\Admin;

use App\Models\Number;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NumberUpdateRequest;
use App\Traits\CustomeFileHandler;

class NumberController extends Controller
{
    use CustomeFileHandler;
    public function index()
    {
        $numbers = Number::first();
        $number_details = json_decode($numbers->numbers, true);

        return view('admin.pages.numbers.index', compact('numbers', 'number_details'));
    }

    public function update(NumberUpdateRequest $request)
    {
        $numbers_record = Number::first();
        $numbers = json_encode($request->numbers);
        if ($request->hasFile('image')) {
            if ($numbers_record->image) {
                $this->deleteFile($numbers_record->image);
            }

            $path = $this->uploadFile('numbers', $request->image);

            $numbers_record->update([
                "image" => $path
            ]);
        }
        $numbers_record->update([
            "numbers" => $numbers
        ]);

        return back()->with('success', trans('general.edit_success'));
    }
}
