<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStatus\HasStatuses;

class Realestate extends Model implements
    HasMedia
// implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasStatuses;

    /**
     * Get the user that owns the realestate ad.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * Get the province that owns the realestate ad.
    */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
    * Get the city that owns the realestate ad.
    */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
    * Get the user that owns the realestate ad.
    */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Get all of the ad's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
