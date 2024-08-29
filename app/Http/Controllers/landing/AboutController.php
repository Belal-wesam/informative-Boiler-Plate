<?php

namespace App\Http\Controllers\Landing;

use App\Models\Faq;
use App\Models\About;
use App\Models\Number;
use App\Models\Review;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $about = About::first();
        $faqs = Faq::all();


        $reviews = Review::all();
        $numbers = Number::first();

        $partners = Partner::all();

        return view('landing.pages.about.index', compact('about', 'faqs', 'reviews', 'numbers', 'partners'));
    }
}
