<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'name' => 'array',
        'other_names' => 'array',
        'plot' => 'array'
    ];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
