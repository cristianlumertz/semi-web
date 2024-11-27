<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pokemon extends Model
{
    protected $fillable = [ 
        'name',
        'type',
        'power',
        'image',
        'coach_id'
    ];

    public function coacho():BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }
}