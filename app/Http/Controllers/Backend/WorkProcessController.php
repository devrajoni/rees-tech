<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkProcess;
use App\Http\Requests\Backend\WorkProcessFormRequest;
use File;
use Image;

class WorkProcessController extends Controller
{
    public function index()
    {
        $data['workProcesses'] = WorkProcess::get();

        return view('backend.work-process.index', $data);
    }

    public function create()
    {

        return view('backend.work-process.form');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'image' => ['nullable'],
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        $save_image_one = null;

        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $data = $request->file('image');
                $name_gen_one = "workProcess".  "one". time() . '.' . $data->extension();
                $location = public_path('uploads/work-process/'.$name_gen_one);
                Image::make($data)->resize(535,350)->save($location);
                $save_image_one = 'uploads/work-process/'.$name_gen_one;
                $validated['image'] = $save_image_one;
                

        }

        $data = WorkProcess::create($validated);

        return redirect()->route('backend.work-process.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit(WorkProcess $workProcess)
    {
        return view('backend.work-process.form', compact('workProcess'));
    }

    public function update(Request $request, WorkProcess $workProcess)
    {
        $validated = $request->validate([
            'image' => ['nullable'],
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        $save_image_one = null;



        if ($request->image) {

            if ($request->image) {
                 unlink(public_path($workProcess->image));
            }
            $image = $request->file('image');
            $name_gen_one = "WorkProcess".  "one". time() . '.' . $image->extension();
            $location = public_path('uploads/work-process/'.$name_gen_one);
            Image::make($image)->resize(535,350)->save($location);
            $save_image_one = 'uploads/work-process/'.$name_gen_one;
            $validated['image'] = $save_image_one;

        }

        $workProcess->update($validated);
        
        return redirect()->route('backend.work-process.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(WorkProcess $workProcess)
    {

        $workProcess->delete();

        return redirect()->route('backend.work-process.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }

    public function status($id)
    {
        $data = WorkProcess::select('status')->where('id', $id)->first();
        if ($data->status == 'Active') {
            $status = 'Inactive';
        }else{
            $status = 'Active';
        }
        WorkProcess::where('id', $id)->update(['status' => $status]);

        return redirect()->route('backend.work-process.index');

    }

}
