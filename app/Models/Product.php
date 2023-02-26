<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\ProductCategory;
use App\Models\ProductGallery;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
            'category_id',
            'sub_category_id',
            'name',
            'product_code',
            'price',
            'discount',
            'image_one',
            'image_two',
            'image_three',
            'short_description',
            'long_description',
            'status',
    ];





    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function productSubCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'sub_category_id');
    }

    public function productGallery() {
        return $this->hasMany(ProductGallery::class, 'product_id');
    }
}
