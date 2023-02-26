<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryRequestForm;
use App\Models\ProductCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = ProductCategory::where('parent_id', null)->get();
        return view('backend.category.index', $data);
    }

    public function create()
    {
        return view('backend.category.form');
    }

    public function store(CategoryRequestForm $request)
    {
        ProductCategory::create($request->persist());
        return redirect()->route('backend.categories.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit(ProductCategory $category)
    {
        return view('backend.category.form', compact('category'));
    }

    public function update(CategoryRequestForm $request, ProductCategory $category)
    {
        $category->update($request->persist());
        return redirect()->route('backend.categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(ProductCategory $category)
    {
        $category->delete();
        return redirect()->route('backend.categories.index')->flashify('Deleted', 'Data has been deleted successfully.');
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

        return redirect()->route('backend.categories.index');

    }
}
