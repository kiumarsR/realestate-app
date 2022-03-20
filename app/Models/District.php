<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    /**
     * Get the province that owns the city area.
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get the city that owns the city area.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
