<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\WorkProcess;
use App\Models\MissionVission;

class AboutController extends Controller
{
    public function index()
    {
        $data['banners'] = Banner::get();

        $data['workProcess'] = WorkProcess::get();

        $data['missionVision'] = MissionVission::first();
        
        return view('frontend.about.about-us', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
