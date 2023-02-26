<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Models\ProjectCategory;
use App\Http\Requests\Backend\ProjectGalleryFormRequest;
use App\Http\Requests\Backend\ProjectFormRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Image;
use File;
use Str;

class ProjectsController extends Controller
{
    public function index()
    {
        $data['projects'] = Project::with('projectCategory', 'projectGallery')->get();

        return view('backend.project.index', $data);
    }

    public function create()
    {
        $data['categories'] = ProjectCategory::where('status', 'Active')->get();
        return view('backend.project.form', $data);
    }

    public function store(ProjectFormRequest $request)
    {

        $project = $request->persist();
           $save_image_one = null;
           $save_image_two = null;
           $save_image_three = null;



        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen_one = "Project".  "one". time() . '.' . $image->extension();
                $location = public_path('uploads/project/'.$name_gen_one);
                Image::make($image)->resize(770,570)->save($location);
                $save_image_one = 'uploads/project/'.$name_gen_one;
                $project['image_one'] = $save_image_one;

                $name_gen_two = "Project".  "two". time() . '.' . $image->extension();
                $location = public_path('uploads/project/'.$name_gen_two);
                Image::make($image)->resize(370,250)->save($location);
                $save_image_two = 'uploads/project/'.$name_gen_two;
                $project['image_two'] = $save_image_two;

                $name_gen_three = "Project".  "three". time() . '.' . $image->extension();
                $location = public_path('uploads/project/'.$name_gen_three);
                Image::make($image)->resize(585,370)->save($location);
                $save_image_three = 'uploads/project/'.$name_gen_three;
                $project['image_three'] = $save_image_three;

        }

        $data = Project::create($project);

        if($request->gallery != null){
            $galleries = $request->file('gallery');
            foreach($galleries as $gallery){
                $gallery_one = null;
                // $gallery_two = null;
                $name_gen = "gallery".  "one". hexdec(uniqid()) . '.' . $gallery->extension();
                $location               = public_path('uploads/project/'.$name_gen);
                Image::make($gallery)->resize(345,170)->save($location);
                $gallery_one = 'uploads/project/'.$name_gen;

                $name = "gallery".  "two". hexdec(uniqid()) . '.' . $gallery->extension();
                $location               = public_path('uploads/project/'.$name);
                Image::make($gallery)->resize(93,100)->save($location);
                $gallery_two = 'uploads/project/'.$name; 
                $data_one = ProjectGallery::create([
                    'project_id' => $data->id,
                    'gallery_one' => $gallery_one,
                    'gallery_two' => $gallery_two,

                ]);
            }
       }

        return redirect()->route('backend.projects.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit(Project $project)
    {
        $data['categories'] = ProjectCategory::where('status', 'Active')->get();
        $data['project'] = $project;
        return view('backend.project.form', $data);
    }

    public function update(ProjectFormRequest $request, Project $project)
    {
        $save_image_one = null;
        $save_image_two = null;
        $save_image_three = null;

        if ($request->image) {

            if ($request->image ) {
                 unlink(public_path($project->image_one));
                 unlink(public_path($project->image_two));
                 unlink(public_path($project->image_three));
            }

            $image = $request->file('image');
            $name_gen_one = "Project".  "one". time() . '.' . $image->extension();
            $location = public_path('uploads/project/'.$name_gen_one);
            Image::make($image)->resize(770,570)->save($location);
            $save_image_one = 'uploads/project/'.$name_gen_one;
            $project['image_one'] = $save_image_one;

            $name_gen_two = "Project".  "two". time() . '.' . $image->extension();
            $location = public_path('uploads/project/'.$name_gen_two);
            Image::make($image)->resize(370,250)->save($location);
            $save_image_two = 'uploads/project/'.$name_gen_two;
            $project['image_two'] = $save_image_two;

            $name_gen_three = "Project".  "three". time() . '.' . $image->extension();
            $location = public_path('uploads/project/'.$name_gen_three);
            Image::make($image)->resize(585,370)->save($location);
            $save_image_three = 'uploads/project/'.$name_gen_three;
            $project['image_three'] = $save_image_three;
        }

        $project->update($request->persist());

        if($request->gallery != null){
            $galleries = $request->file('gallery');
            foreach($galleries as $gallery){
                $gallery_one = null;
                $gallery_two = null;
                $name_gen = "gallery".  "one". hexdec(uniqid()) . '.' . $gallery->extension();
                $location               = public_path('uploads/project/'.$name_gen);
                Image::make($gallery)->resize(345,170)->save($location);
                $gallery_one = 'uploads/project/'.$name_gen;

                $name = "gallery".  "two". hexdec(uniqid()) . '.' . $gallery->extension();
                $location               = public_path('uploads/project/'.$name);
                Image::make($gallery)->resize(93,100)->save($location);
                $gallery_two = 'uploads/project/'.$name; 
                $data_one = ProjectGallery::create([
                    'project_id' => $project->id,
                    'gallery_one' => $gallery_one,
                    'gallery_two' => $gallery_two,

                ]);
            }
       }
        
        return redirect()->route('backend.projects.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(Project $project)
    {
        

        // if ($project->image_one && $project->image_two && $project->image_three ) {
        //          unlink($project->image_one);
        //          unlink($project->image_two);
        //          unlink($project->image_three);
        //     }

            $project->delete();

        return redirect()->route('backend.projects.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }

    public function status($id)
    {
        $data = Project::select('status')->where('id', $id)->first();
        if ($data->status == 'Active') {
            $status = 'Inactive';
        }else{
            $status = 'Active';
        }
        Project::where('id', $id)->update(['status' => $status]);

        return redirect()->route('backend.projects.index');

    }

    public function remove( $id)
    {
        $data = ProjectGallery::find($id);

        $data->delete();

        return response()->json([
            'success' => 'Delete Successfully !!'
        ]);

    }
}
