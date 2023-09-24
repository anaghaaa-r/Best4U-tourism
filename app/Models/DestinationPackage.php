<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationPackage extends Model
{
    use HasFactory;

    protected $table = 'destination_packages';

    protected $fillable = [
        'title',
        'duration',
        'thumbnail',
        'image',
        'tour_description',
        'price',
        'places_covered',
        'tour_highlights',
        'package_includes',
        'package_excludes',
        'cancellation_policy'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
