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
    protected $fillable = [
        'user_id',
        'province_id',
        'city_id',
        'district_id',
        'title',
        'ad_type',
        'sale_price',
        'area',
        'full_address',
        'description',
        'total_floors',
        'apartment_floor',
        'noaf',
        'total_bedrooms',
        'wc_type',
        'building_age',
        'tobu',
        'building_direction',
        'frontage_type',
        'fct',
        'kitchen_cabinets',
        'heating_system',
        'cooling_system',
        'housing',
        'dst',
    ];
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
     * The facilities that belong to the realestate.
     */
    public function facilities()
    {
        return $this->belongsToMany(Facility::class)->using(FacilityRealestate::class);
    }

    /**
     * Get all of the ad's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function getTheAdTypeAttribute()
    {
        $ad_types = [
            "sale" => "فروش",
            "mortage" => "رهن",
            "rent" => "اجاره",
        ];
        return $ad_types[$this->ad_type];
    }

    public function getTheWcTypeAttribute()
    {
        $wc_types = [
            "persian" => "ایرانی",
            "foreign" => "فرنگی",
            "both" => "ایرانی و فرنگی",
        ];
        return $wc_types[$this->wc_type];
    }

    public function getTheTobuAttribute()
    {
        $tobus = [
            "land" => "زمین",
            "business_office" => "تجاری/اداری",
            "home" => "مسکونی",
            "office" => 'دفتر کار',
            "villa" => 'ویلایی',
        ];
        return $tobus[$this->tobu];
    }

    public function getTheFrontAttribute()
    {
        $frontage_types = [
            "cement" => "سیمان",
            "stone" => "تجاری/اداری",
            "brick" => "آجری",
            "composite" => "سیمانی",
            "biramics" => "بایرامیکس",
            "glass" => "شیشه ای",
            "wooden" => "چوبی",
        ];
        return $frontage_types[$this->frontage_type];
    }

    public function getTheKitchenCabinetsAttribute()
    {
        $kitchen_cabinets = [
            "mdf" => "ام دی اف",
            "wooden" => "چوبی",
            "metal" => "آهنی",
            "metal_wooden" => "چوب و آهن",
            
        ];
        return $kitchen_cabinets[$this->kitchen_cabinets];
    }
    public function getTheFctAttribute()
    {
        $fcts = [
            "cement" => "سیمان",
            "ceramic" => "سرامیک",
            "laminate" => "لمینت",
            "Parquet" => "پارکت",
            "parquet" => "پارکت",
            "tile" => "کاشی",
            
        ];
        return $fcts[$this->fct];
    }
    public function getTheDirectionAttribute()
    {
        $building_directions = [
            "north" => "شمالی",
            "south" => "جنوبی",
            "east" => "شرقی",
            "west" => "غربی",
        ];
        return $building_directions[$this->building_direction];
    }
    public function getTheHeatingAttribute()
    {
        $heating_systems = [
            "heater" => "بخاری",
            "boiler-room" => "موتورخانه",
            "combi" => "پکیج",
            "package" => "پکیج",
            "fireplace" => "شومینه",
            "under-floor-heating" => "گرمایش از کف",
            "chiller" => "چیلر",
        ];
        return $heating_systems[$this->heating_system];
    }
    public function getTheCoolingAttribute()
    {
        $cooling_systems = [
            "evaporative-cooler" => "کولر آبی",
            "air-conditioner-room" => "کولر گازی",
            "duct-split" => "داکت اسپلیت",
            "chiller" => "چیلر",
            "air conditioner" => 'کولر',
        ];
        return $cooling_systems[$this->cooling_system];
    }

    public function getTheSalePriceAttribute()
    {
        return number_format($this->sale_price);
    }
}
