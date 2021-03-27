<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Title extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia;

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
    /**
     * Laravel Spatie register media collections
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('poster');
    }

    /**
     * Laravel Spatie register media conversions
     * @return void
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(368)
              ->height(232)
              ->sharpen(10);
    }
}
