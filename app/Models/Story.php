<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title',
        'description',
        'cover_image',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}