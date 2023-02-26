<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Banner;
use App\Models\ProjectCategory;

class ProjectDetailsController extends Controller
{
    public function index($id, $slug)
    {
        $data['projects'] = Project::where('id', $id)->where('slug', $slug)->where('status', 'Active')->with('projectCategory')->get();

        $data['banners'] = Banner::get();

        return view('frontend.project.project-details', $data);
    }

    public function show($id, $slug)
    {
        $data['banners'] = Banner::get();

        $data['categories'] =ProjectCategory::where('status', 'Active')->get();

        $data['projects'] = Project::where('category_id', $id)->where('status', 'Active')->with('projectCategory')->paginate(10);

        $data['latests'] = Project::where('status', 'Active')->latest()->LIMIT('6')->get();

        return view('frontend.project.category-wise', $data);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
