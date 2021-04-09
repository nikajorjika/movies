<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'name' => 'array'
    ];


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
