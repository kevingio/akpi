<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_no',
        'name',
        'location',
        'phone_number',
        'type',
        'status',
        'avatar',
    ];

    /**
     * Relation to Committee
     *
     * @var array
     */
    public function committee()
    {
        return $this->hasMany(Committee::class);
    }

    /**
     * Get the image.
     *
     * @param  string  $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        if ($value) {
            return Storage::url($value);
        }
    }
}
