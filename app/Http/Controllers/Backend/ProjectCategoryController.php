<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\ProjectCategoryFormRequest;
use App\Models\ProjectCategory;
use Image;
use File;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $categories = ProjectCategory::get();
        return view('backend.project-category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.project-category.form');
    }

    public function store(ProjectCategoryFormRequest $request)
    {
        $project = $request->persist();
        $save_image_one = null;

        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $images = $request->file('image');
                $name_gen_one = "category". time() . '.' . $images->extension();
                $location = public_path('uploads/project/'.$name_gen_one);
                Image::make($images)->resize(535,350)->save($location);
                $save_image_one = 'uploads/project/'.$name_gen_one;
                $project['image'] = $save_image_one;

        }

        ProjectCategory::create($project);

        return redirect()->route('backend.project-categories.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(ProjectCategory $projectCategory)
    {
        return view('backend.project-category.form', compact('projectCategory'));
    }

    public function update(ProjectCategoryFormRequest $request, ProjectCategory $projectCategory)
    {
        $data = $request->persist();
        $save_image_one = null;

        if ($request->image) {

            if ($request->image) {
                 unlink(public_path($projectCategory->image));
            }

            $images = $request->file('image');
            $name_gen_one = "category". time() . '.' . $images->extension();
            $location = public_path('uploads/project/'.$name_gen_one);
            Image::make($images)->resize(535,350)->save($location);
            $save_image_one = 'uploads/project/'.$name_gen_one;
            $data['image'] = $save_image_one;

        }

        $projectCategory->update($data);


        return redirect()->route('backend.project-categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        return redirect()->route('backend.project-categories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }

    public function status($id)
    {
        $data = ProjectCategory::select('status')->where('id', $id)->first();
        if ($data->status == 'Active') {
            $status = 'Inactive';
        }else{
            $status = 'Active';
        }
        ProjectCategory::where('id', $id)->update(['status' => $status]);

        return redirect()->route('backend.project-categories.index');

    }
}
