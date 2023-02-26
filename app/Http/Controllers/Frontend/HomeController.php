<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ProjectCategory;
use App\Models\Project;
use App\Models\ProductCategory;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {

        $data['categories'] = ProjectCategory::where('status', 'Active')->latest()->LIMIT('8')->get();

        $data['projects'] = Project::where('status', 'Active')->paginate(10);

        $data['banners'] = Banner::get();

        $data['cats'] = ProductCategory::where('status', 'Active')->latest()->LIMIT('6')->get();

        $data['products'] = Product::where('status', 'Active')->paginate(10);



      return view('frontend.home.home')->with($data);
    }

    public function create()
    {

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
