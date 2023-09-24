<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function package()
    {
        return $this->hasMany(TourismPackage::class, 'tourism_id');
    }
}
