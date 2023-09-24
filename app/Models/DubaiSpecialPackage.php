<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DubaiSpecialPackage extends Model
{
    use HasFactory;

    protected $table = 'dubai_special_packages';

    protected $fillable = [
        'title',
        'duration',
        'thumbnail',
        'image',
        'tour_description',
        'price',
        // 'guest_count',
        // 'departure_from',
        // 'departure_time',
        // 'arrival_to',
        // 'arrival_time',
        'places_covered',
        'tour_highlights',
        'package_includes',
        'package_excludes',
        'cancellation_policy'
    ];
}
