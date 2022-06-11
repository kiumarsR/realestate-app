<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $fillable = [
        'facility_value', 'facility_name'
      ];

    /**
     * The realestates that belong to the Facilities.
     */
    public function realestates()
    {
        return $this->belongsToMany(Realestate::class)->using(FacilityRealestate::class);
    }
}
