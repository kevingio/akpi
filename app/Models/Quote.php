<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Quote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author',
        'image'
    ];

    /**
     * Get the image.
     *
     * @param  string  $value
     * @return string
     */
    public function getImageAttribute($value)
    {
        if ($value) {
            return Storage::url($value);
        }
    }
}
