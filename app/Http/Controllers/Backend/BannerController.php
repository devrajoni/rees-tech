<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\BannerGallery;
use Image;
use File;

class BannerController extends Controller
{
    public function index()
    {
        // $banner = Banner::get();
        // return view('backend.banner.index',compact('banner'));
    }

    public function create()
    {
        $banner = Banner::first();

        return view('backend.banner.form', compact('banner'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => ['nullable'],
            'video' => ['nullable'],
            'status' => ['required'],
        ]);

        if ($request->image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('image');
                $name_gen_one = "banner". time() . '.' . $image->extension();
                $location = public_path('uploads/banner/'.$name_gen_one);
                Image::make($image)->resize(1256,500)->save($location);
                $save_image_one = 'uploads/banner/'.$name_gen_one;
                $data['image'] = $save_image_one;

        }

        if ($request->video) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image = $request->file('video');
                $name_gen_two = "banner".  "video". time() . '.' . $image->extension();

                $location = public_path('uploads/banner/'.$name_gen_two);
                $save_image_two = 'uploads/banner/'.$name_gen_two;
                $data['video'] = $save_image_two;

        }

        $hero = Banner::create($data);

       //  if($request->gallery != null){
       //      $galleries = $request->file('gallery');
       //      foreach($galleries as $image){
       //          $gallery_one = null;
       //          $name_gen = "gallery". time() . '.' . $image->extension();
       //          $location               = public_path('uploads/banner/'.$name_gen);
       //          Image::make($image)->resize(113,103)->save($location);
       //          $gallery_one = 'uploads/banner/'.$name_gen;

       //          $data_one = BannerGallery::create([
       //              'banner_id' => $hero->id,
       //              'gallery' => $gallery_one,

       //          ]);
       //      }
       // }

    return redirect()->route('backend.banners.create')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, Banner $banner)
    {
        $save_video = null;
        $data = $request->validate([
            'image' => ['nullable'],
            'video' => ['nullable'],
            'status' => ['required'],
        ]);

        if ($request->image) {

            if ($banner->image) {
                 unlink(public_path($banner->image));
            }
                $image = $request->file('image');
                $name_gen_one = "banner". time() . '.' . $image->extension();
                $location = public_path('uploads/banner/'.$name_gen_one);
                Image::make($image)->resize(1256,500)->save($location);
                $save_image_one = 'uploads/banner/'.$name_gen_one;
                $data['image'] = $save_image_one;

        }

        if ($request->file('video')) {
           $file  = $request->file('video');
            $fileName = time().'.'.$file->extension();
            $file->move(public_path('uploads/banner/'). $fileName);
            $save_video = 'uploads/banner/'.$fileName;
            $data['video'] = $save_video;

        }

        $banner->update($data);

        return redirect()
            ->route('backend.banners.create')
            ->flashify('updated');

    }

    public function destroy(Banner $banner)
    {
        // $banner->delete();

        // return redirect()->route('backend.banners.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
