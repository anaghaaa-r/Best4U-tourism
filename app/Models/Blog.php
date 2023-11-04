<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'image',
        'preview_text',
        'content',
        'gallery_image',
        'gallery_image_subtitle',
        'video_url',
        'video_subtitle'
    ];
}
