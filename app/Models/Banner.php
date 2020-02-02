<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'path',
    ];

    /**
     * Get the image.
     *
     * @param  string  $value
     * @return string
     */
    public function getPathAttribute($value)
    {
        if ($value) {
            return Storage::url($value);
        }
    }
}
