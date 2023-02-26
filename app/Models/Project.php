<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectCategory;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'category_id',
            'title',
            'slug',
            'name',
            'image_one',
            'image_two',
            'image_three',
            'country_name',
            'client',
            'key_achievment',
            'started_at',
            'end_at',
            'address',
            'short_description',
            'long_description',
            'project_status',
            'status',
    ];

    protected $casts = [
        'started_at' => 'datetime:Y-m-d',
        'end_at' => 'datetime:Y-m-d',
    ];


    public function projectCategory() {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }

    public function projectGallery() {
        return $this->hasMany(ProjectGallery::class, 'project_id');
    }
}
