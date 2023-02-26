<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVission extends Model
{
    use HasFactory;
    protected $fillable = [
        'mission_title',
        'mission_description',
        'mission_image',
        'vision_title',
        'vision_description',
        'vision_image',
    ];
}
