<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'weight',
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
