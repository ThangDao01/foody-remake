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
            $table->integer("restaurant_discount")->nullable();
            $table->text("restaurant_coordinate")->nullable();
            $table->string("location_province")->nullable();
            $table->string("location_district")->nullable();
            $table->string("location_address")->nullable();
            $table->text("open_time")->nullable();
            $table->integer("price_min")->nullable();
            $table->integer("price_max")->nullable();
            $table->boolean("is_branch");
            $table->integer("main_branch_id")->nullable();
            $table->integer("total_gallery")->nullable();
            $table->integer("total_reviews")->nullable();
            $table->integer("total_save")->nullable();
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
