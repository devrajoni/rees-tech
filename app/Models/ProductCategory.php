<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'status',
    ];
    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }
}
