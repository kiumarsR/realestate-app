<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->integer('area_id');
            $table->string('title');
            $table->string('ad_type')->comment('sale|rent|mortage');
            $table->integer('sale_price');
            $table->integer('security_deposit')->comment('security deposit required for rent a realestate');
            $table->integer('mortage_deposit')->comment('security deposit required for mortage a realestate');
            $table->integer('rent_price');
            $table->integer('area');
            $table->string('full_address');
            $table->text('description');
            $table->integer('total_floors')->comment('The whole floors of the building');
            $table->string('apartment_floor');
            $table->integer('noaf')->comment('Number of apartments on each floor')->nullable();
            $table->integer('total_bedrooms')->default(1);
            $table->integer('total_bathrooms')->default(1);
            $table->string('wc_type')->comment('persian|foreign|both');
            $table->integer('total_wc')->default(1);
            $table->integer('building_age')->nullable();
            $table->string('tobu')->nullable()->comment('Type of building use|office|home|business');
            $table->string('building_direction')->nullable()->comment('The direction of the building|north|south|east|west');
            $table->string('frontage_type')->comment('building front ppearance');
            $table->string('fct')->comment('floor covering type');
            $table->string('kitchen_cabinets')->comment('kitchen cabinets type|mdf|wooden');
            $table->string('facilities')->comment('apartment facilities like having parking,elevator and etc.');
            $table->string('heating_system');
            $table->string('cooling_system');
            $table->string('housing')->comment('evacuated|in the hands of the owner|in the hands of the tenant');
            $table->string('dst')->comment('document status type like personal,foundation or etc.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestates');
    }
};
