<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'coordinate_images';

    protected $fillable = ['coordinate_id', 'image'];

    public function coordinate()
    {
        return $this->belongsTo(Coordinate::class, 'coordinate_id', 'id');
    }
}
