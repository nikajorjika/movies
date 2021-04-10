<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasTags;

class Movie extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia,
        HasTags;

    protected $guarded = [];
    
    protected $statuses = ['planned', 'ongoing', 'finished'];

    protected $casts = [
        'name' => 'array',
        'other_names' => 'array',
        'sources' => 'array',
        'relations' => 'array'
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
        $this->addMediaCollection('cover');
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
