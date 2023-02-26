<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;
use App\Models\ProductCategory;
use App\Models\ProductGallery;

class ProductDetailsController extends Controller
{

    public function index($id)
    {
        $data['pro'] = Product::where('id', $id)->where('status', 'Active')->with('productCategory', 'productGallery')->get();

        $data['banners'] = Banner::get();

        $data['categories'] = ProductCategory::where('parent_id', '=', null)->where('status', 'Active')->get();

        $data['latests'] = Product::where('status', 'Active')->latest()->LIMIT('6')->get();

        return view('frontend.product.details', $data);
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
        $data['banners'] = Banner::get();

        $data['products'] = Product::where('category_id', $id)->where('status', 'Active')->with('productCategory')->get();

        $data['categories'] = ProductCategory::where('parent_id', '=', null)->where('status', 'Active')->get();

        $data['latests'] = Product::where('status', 'Active')->latest()->LIMIT('6')->get();
        

        return view('frontend.product.category-wise', $data);
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
