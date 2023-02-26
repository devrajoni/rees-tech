<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BannerGallery;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'video',
        'status',
    ];

    public function bannerGallery() {
        return $this->hasMany(BannerGallery::class, 'banner_id');
    }

}
