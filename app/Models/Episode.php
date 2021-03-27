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

    
    public function title() {
        return $this->belongsTo(Title::class);
    }
}
