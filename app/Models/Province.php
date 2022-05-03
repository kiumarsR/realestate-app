<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Province extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * Get the realestate ad for the province.
     */
    public function realestates()
    {
        return $this->hasMany(Realestate::class);
    }

    /**
     * Get the cities ad for the province.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Get the cities ad for the province.
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
