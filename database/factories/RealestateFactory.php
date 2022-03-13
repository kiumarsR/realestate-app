<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Province;
use App\Models\City;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realestate>
 */
class RealestateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'province_id' => $this->faker->numberBetween(1, 10),
            // 'city_id' => $this->faker->numberBetween(1, 100),
            // 'title' => $this->faker->realText(),
            // 'ad_type' => $this->faker->randomElement(['motage', 'rent', 'sale']),
            // 'sale_price' => $this->faker->numberBetween(300000000, 999999999),
            // 'security_deposit' => $this->faker->numberBetween(100000000, 600000000),
            // 'mortage_deposit' => $this->faker->numberBetween(100000000, 600000000),
            // 'rent_price' => $this->faker->numberBetween(1000000, 10000000),
            // 'area' => $this->faker->numberBetween(40, 2000),
            // 'full_address' => $this->faker->address(),
            // 'description' => $this->faker->realText(),
            // 'total_floors' => $this->faker->numberBetween(1, 50),
            // 'apartment_floor' => $this->faker->numberBetween(1, 50),
            // 'noaf' => $this->faker->numberBetween(1, 4),
            // 'total_bedrooms' => $this->faker->numberBetween(1, 6),
            // 'total_bathrooms' => $this->faker->numberBetween(1, 3),
            // 'wc_type' => $this->faker->randomElement(['persian', 'foreign', 'both']),
            // 'total_wc' => $this->faker->numberBetween(1, 3),
            // 'building_age' => $this->faker->numberBetween(1, 20),
            // 'tobu' => $this->faker->randomElement(['home', 'office', 'land', 'business_office']),
            // 'building_direction' => $this->faker->randomElement(['north', 'south', 'east', 'west']),
            // 'frontage_type' => $this->faker->randomElement(['stone', 'cement', 'brick']),
            // 'fct' => $this->faker->randomElement(['Parquet', 'laminate', 'cement', 'ceramic', 'tile']),
            // 'kitchen_cabinets' => $this->faker->randomElement(['mdf', 'wooden', 'metal']),
            // 'facilities' => $this->faker->randomElement(['sona', 'parking', 'elevator']),
            // 'heating_system' => $this->faker->randomElement(['chiller', 'package']),
            // 'cooling_system' => 'air conditioner',
            // 'housing' => $this->faker->randomElement(['tenant', 'owner', 'evacuated']),
            // 'dst' => $this->faker->randomElement(['personal', 'orginization']),
        ];
    }
}
