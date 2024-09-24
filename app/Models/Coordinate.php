<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'coordinates';
    protected $fillable = ['title', 'text', 'latitude', 'longitude', 'region_id'];


    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'coordinate_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'coordinate_id', 'id');
    }
}
