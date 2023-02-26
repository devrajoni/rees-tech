<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $data['banners'] = Banner::get();

        $data['categories'] = ProductCategory::where('parent_id', '=', null)->where('status', 'Active')->get();

        $data['products'] = Product::where('status', 'Active')->paginate(10);

        $data['latests'] = Product::where('status', 'Active')->latest()->LIMIT('6')->get();

        return view('frontend.product.product', $data);
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
        $data['details'] = Product::where('id', $id)->get();

        return view('frontend.product.product', $data);
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
