<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Livewire\WithFileUploads;
use App\Http\Requests\Backend\ProductFormRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use File;
use Image;

class ProductForm extends Component
{
    use WithFileUploads;

    public $product_id;

    public $category_id;

    public $sub_category_id;

    public $image;

    public $file;

    public $gallery;

    public $name;

    public $mediaComponentNames = ['image', 'gallery'];

    public $product_code;

    public $price;

    public $discount;

    public $short_description;

    public $long_description;

    public $status = 'Active';
    public function mount()
    {
        if($this->product_id){
            $product = Product::find($this->product_id);

            $this->category_id = $product->category_id;
            $this->sub_category_id = $product->sub_category_id;
            $this->name = $product->name;
            $this->product_code = $product->product_code;
            $this->price = $product->price;
            $this->discount = $product->discount;
            $this->image =  $product->image;
            $this->short_description = $product->short_description;
            $this->long_description = $product->long_description;
            $this->status = $product->status;

        }

    }


    public function submit()
    {
        $data = $this->validate([
            'category_id' => [
                'required',
            ],

            'sub_category_id' => [
                'required',
            ],

            'name' => [
                $this->product_id ? 'nullable' : 'required',
                'max:255',
                Rule::unique(Product::class)->ignore($this->product_id ?? null),

            ],

            'product_code' => [
                'required',
            ],


            'price' => [
                'required',
            ],

            'discount' => [
                'nullable',
            ],

           'image' => [
                $this->product_id ? 'nullable' : 'required',
            ],

            'gallery.*' => [
                'nullable',
            ],

            'short_description' => [
                'nullable',
            ],

            'long_description' => [
                'nullable',
            ],

            'status' => [
                'required',
            ],
        ]);
        // $data = [
        //     'category_id' => $this->category_id,
        //     'sub_category_id' => $this->sub_category_id,
        //     'name' => $this->name,
        //     'product_code' => $this->product_code,
        //     'price' => $this->price,
        //     'image' => $this->image,
        //     'gallery' => $this->gallery,
        //     'discount' => $this->discount,
        //     'short_description' => $this->short_description,
        //     'long_description' => $this->long_description,
        //     'status' => $this->status,

        // ];
        $save_image_one = null;
           $save_image_two = null;
           $save_image_three = null;

        if($this->product_id) {

           $po = Product::find($this->product_id);

            if($this->image){

                if ($this->image ) {
                    unlink(public_path($po->image_one));
                    unlink(public_path($po->image_two));
                    unlink(public_path($po->image_three));
                }

                $images = $this->image;
                $name_gen_one = "product".  "one". hexdec(uniqid()) . '.' . $images->extension();
                $location = public_path('uploads/product/'.$name_gen_one);
                Image::make($images)->resize(250,250)->save($location);
                $save_image_one = 'uploads/product/'.$name_gen_one;
                $data['image_one'] = $save_image_one;

                $name_gen_two = "product".  "two". hexdec(uniqid()) . '.' . $images->extension();
                $location = public_path('uploads/product/'.$name_gen_two);
                Image::make($images)->resize(400,400)->save($location);
                $save_image_two = 'uploads/product/'.$name_gen_two;
                $data['image_two'] = $save_image_two;

                $name_gen_three = "product".  "three". hexdec(uniqid()) . '.' . $images->extension();
                $location = public_path('uploads/product/'.$name_gen_three);
                Image::make($images)->resize(810,540)->save($location);
                $save_image_three = 'uploads/product/'.$name_gen_three;
                $data['image_three'] = $save_image_three;

            }

            $po->update($data);
            
            if($this->gallery != null){
                $galleries = $this->gallery;
                foreach($galleries as $gallery){
                    $gallery_one = null;
                    $name_gen = "gallery".  "one". hexdec(uniqid()) . '.' . $gallery->extension();
                    $location               = public_path('uploads/product/'.$name_gen);
                    Image::make($gallery)->resize(400,400)->save($location);
                    $gallery_one = 'uploads/product/'.$name_gen;
     
                    $data_one = ProductGallery::create([
                        'product_id' => $po->id,
                        'gallery_one' => $gallery_one,

                    ]);
                }
            }

        }else{

            if($this->image){
                $image = $this->image;
                $name_gen_one = "product".  "one". hexdec(uniqid()) . '.' . $image->extension();
                $location = public_path('uploads/product/'.$name_gen_one);
                Image::make($image)->resize(250,250)->save($location);
                $save_image_one = 'uploads/product/'.$name_gen_one;
                $data['image_one'] = $save_image_one;

                $name_gen_two = "product".  "two". hexdec(uniqid()) . '.' . $image->extension();
                $location = public_path('uploads/product/'.$name_gen_two);
                Image::make($image)->resize(400,400)->save($location);
                $save_image_two = 'uploads/product/'.$name_gen_two;
                $data['image_two'] = $save_image_two;

                $name_gen_three = "product".  "three". hexdec(uniqid()) . '.' . $image->extension();
                $location = public_path('uploads/product/'.$name_gen_three);
                Image::make($image)->resize(810,540)->save($location);
                $save_image_three = 'uploads/product/'.$name_gen_three;
                $data['image_three'] = $save_image_three;


            }

            $product = Product::create($data);

            if($this->gallery){
                $galleries = $this->gallery;
                foreach($galleries as $gallery){
                $gallery_one = null;
                $name_gen = "gallery".  "one". hexdec(uniqid()) . '.' . $gallery->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($gallery)->resize(400,400)->save($location);
                $gallery_one = 'uploads/product/'.$name_gen;
 
                $data_one = ProductGallery::create([
                    'product_id' => $product->id,
                    'gallery_one' => $gallery_one,

                ]);
                }
            }

        }

        return redirect()->route('backend.products.index')->flashify($this->product_id ? 'updated' : 'created');
    }

    public function remove(ProductGallery $productGallery)
    {
        $productGallery->delete();
        


       
    }

    public function render()
    {
        
        $data['product'] = Product::find($this->product_id);

        $data['categories'] = ProductCategory::where('parent_id', null)->get();

        $data['subCategories'] = $this->category_id
            ? ProductCategory::where('parent_id', $this->category_id)->get()
            : collect();

        return view('livewire.product-form', $data);
    }
}