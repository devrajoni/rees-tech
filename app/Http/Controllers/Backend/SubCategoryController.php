<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SubCategoryFormRequest;
use App\Models\ProductCategory;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data['subCategories'] = ProductCategory::where('status', 'Active')->with('productCategory')->where('parent_id', '!=' , null)->get();
        return view('backend.sub-category.index', $data);
    }

    public function create()
    {
        $data['categories'] = ProductCategory::where('parent_id', null)->where('status', 'Active')->get();
        return view('backend.sub-category.form', $data);
    }

    public function store(SubCategoryFormRequest $request)
    {
        ProductCategory::create($request->persist());
        return redirect()->route('backend.subCategories.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(ProductCategory $subCategory)
    {
        $data['categories'] = ProductCategory::where('parent_id', null)->where('status', 'Active')->get();
        $data['subCategory'] = $subCategory;
        return view('backend.sub-category.form', $data);
    }

    public function update(SubCategoryFormRequest $request, ProductCategory $subCategory)
    {
        $subCategory->update($request->persist());
        return redirect()->route('backend.subCategories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(ProductCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('backend.subCategories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }

    public function status($id)
    {
        $data = ProductCategory::select('status')->where('id', $id)->first();
        if ($data->status == 'Active') {
            $status = 'Inactive';
        }else{
            $status = 'Active';
        }
        ProductCategory::where('id', $id)->update(['status' => $status]);

        return redirect()->route('backend.subCategories.index');

    }
}
