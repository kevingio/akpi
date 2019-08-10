<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_id',
        'member_id',
        'periode_id',
    ];

    /**
     * Relation to Position
     *
     */
    public function position()
    {
        return $this->belongsTo(Position::class)->orderBy('weight');
    }

    /**
     * Relation to Member
     *
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * Relation to Periode
     *
     */
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}
