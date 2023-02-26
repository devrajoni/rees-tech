<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\User;
use App\Http\Requests\Backend\ProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::with('productCategory')->with('productGallery')->with('productSubCategory')->get();

        return view('backend.product.index', $data);
    }

    public function create()
    {
        return view('backend.product.form');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('backend.product.form', compact('product'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('backend.products.index')->flashify('Deleted', 'Data has been deleted successfully.');

    }

    public function status($id)
    {
        $data = Product::select('status')->where('id', $id)->first();
        if ($data->status == 'Active') {
            $status = 'Inactive';
        }else{
            $status = 'Active';
        }
        Product::where('id', $id)->update(['status' => $status]);

        return redirect()->route('backend.products.index');

    }
}
