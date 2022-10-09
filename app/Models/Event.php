<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name'
    ];

    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
