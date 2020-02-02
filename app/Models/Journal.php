<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Journal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'journal_no',
        'abstract',
        'thumbnail',
        'path',
    ];

    /**
     * Get the path.
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

    /**
     * Get the thumbnail.
     *
     * @param  string  $value
     * @return string
     */
    public function getThumbnailAttribute($value)
    {
        if ($value) {
            return Storage::url($value);
        }
    }
}
