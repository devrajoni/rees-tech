<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ProjectCategory;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index($id=null)
    {
        $data['banners'] = Banner::get();

        $data['categories'] = ProjectCategory::where('status', 'Active')->latest()->LIMIT('10')->get();

        $data['latests'] = Project::where('status', 'Active')->latest()->LIMIT('6')->get();

        $data['projects'] = Project::where('status', 'Active')->paginate(10);

        return view('frontend.project.project', $data);
    }

    public function search(Request $request)
    {

    }

    // public function show($id)
    // {
    //     $data['categories'] =ProjectCategory::where('id', $id)->where('status', 'Active')->get();

    //     return view('frontend.project.project-details', $data);
    // }

}
