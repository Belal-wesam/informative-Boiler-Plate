<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('landing.pages.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $projects = Project::inRandomOrder()->get()->take(5);

        $partners = Partner::all();
        return view('landing.pages.projects.show', compact('project', 'projects', 'partners'));
    }
}
