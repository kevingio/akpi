<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
