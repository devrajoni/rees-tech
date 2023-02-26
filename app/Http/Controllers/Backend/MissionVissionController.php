<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MissionVission;
use App\Http\Requests\MissionVisionFormRequest;
use Image;
use File;

class MissionVissionController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
       $data = MissionVission::first();

        return view('backend.mission-vision.form', compact('data'));
    }

    public function store(MissionVisionFormRequest $request)
    {
        $data = $request->validated();
            if ($request->mission_image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('mission_image');
                $name_gen_one = "mission". time() . '.' . $image->extension();
                $location = public_path('uploads/mission-vision/'.$name_gen_one);
                Image::make($image)->resize(930,619)->save($location);
                $save_image_one = 'uploads/mission-vision/'.$name_gen_one;
                $data['mission_image'] = $save_image_one;

            }

            if ($request->vision_image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('vision_image');
                $name_gen_two = "vision". time() . '.' . $image->extension();
                $location = public_path('uploads/mission-vision/'.$name_gen_two);
                Image::make($image)->resize(930,619)->save($location);
                $save_image_two = 'uploads/mission-vision/'.$name_gen_two;
                $data['vision_image'] = $save_image_two;

            }

            MissionVission::create($data);

        return back()->flashify('Created', 'Data has been created successfully.');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(MissionVisionFormRequest $request, MissionVission $missionVision)
    {
        $data = $request->validated();

        if ($request->mission_image) {

            if ($missionVision->mission_image) {
                 unlink(public_path($missionVision->mission_image));
            }
                $image = $request->file('mission_image');
                $name_gen_one = "mission". time() . '.' . $image->extension();
                $location = public_path('uploads/mission-vision/'.$name_gen_one);
                Image::make($image)->resize(930,619)->save($location);
                $save_image_one = 'uploads/mission-vision/'.$name_gen_one;
                $data['mission_image'] = $save_image_one;

        }

        if ($request->vision_image) {

            if ($missionVision->vision_image) {
                 unlink(public_path($missionVision->vision_image));
            }
                $image = $request->file('vision_image');
                $name_gen_two = "vision". time() . '.' . $image->extension();
                $location = public_path('uploads/mission-vision/'.$name_gen_two);
                Image::make($image)->resize(930,619)->save($location);
                $save_image_two = 'uploads/mission-vision/'.$name_gen_two;
                $data['vision_image'] = $save_image_two;

        }

        $missionVision->update($data);

    return back()->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
