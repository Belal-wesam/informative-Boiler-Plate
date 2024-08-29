<?php

namespace App\Http\Controllers\landing;

use App\Models\About;
use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Number;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $banners = Banner::whereStatus('active')->latest()->get();

        $services = Service::latest()->get();

        $about = About::first();

        $projects = Project::latest()->get()->take(4);

        $faqs = Faq::all();


        $reviews = Review::all();

        $numbers = Number::first();

        $partners = Partner::all();

        $articles = Article::latest()->get()->take(3);
        return view('landing.pages.index', get_defined_vars());
    }
}
