<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'coordinate_reviews';
    protected $fillable = ['author', 'comment', 'rate', 'is_publish'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function coordinate()
    {
        return $this->belongsTo(Coordinate::class, 'coordinate_id', 'id');
    }
}
