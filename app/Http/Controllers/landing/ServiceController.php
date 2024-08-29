<?php

namespace App\Http\Controllers\Landing;

use App\Models\Faq;
use App\Models\Number;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $faqs = Faq::all();
        $reviews = Review::all();
        $numbers = Number::first();
        return view('landing.pages.services.index', get_defined_vars());
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstorFail();
        $services = Service::get();

        $faqs = Faq::all();
        return view('landing.pages.services.show',  compact('service', 'services', 'faqs'));
    }
}
