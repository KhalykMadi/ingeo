<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'regions';
    protected $fillable = ['title'];

    public function  coordinates()
    {
        return $this->hasMany(Coordinate::class, 'region_id', 'id');
    }
}
