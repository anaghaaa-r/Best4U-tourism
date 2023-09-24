<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismPackage extends Model
{
    use HasFactory;

    protected $table = 'tourism_packages';

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

    public function tourism()
    {
        return $this->belongsTo(Tourism::class, 'tourism_id');
    }
}
