<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string("restaurant_name");
            $table->string("restaurant_title")->nullable();
            $table->string("restaurant_thumbnail")->nullable();
            $table->string("restaurant_phone")->nullable();
            $table->integer("restaurant_discount")->default(0);
            $table->text("restaurant_coordinate")->nullable();
            $table->string("location_province")->nullable();
            $table->string("location_district")->nullable();
            $table->string("location_address")->nullable();
            $table->text("open_time")->nullable();
            $table->integer("price_min")->default(0);
            $table->integer("price_max")->default(0);
            $table->boolean("is_branch")->default(true);
            $table->integer("main_branch_id")->nullable();
            $table->integer("total_gallery")->default(0);
            $table->integer("total_reviews")->default(0);
            $table->integer("total_save")->default(0);
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
        Schema::dropIfExists('restaurants');
    }
};
