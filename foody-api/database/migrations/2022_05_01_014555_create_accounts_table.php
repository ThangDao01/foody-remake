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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("password_hash");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("avatar");
            $table->integer("style");
            $table->string("token");
            $table->string("phone_number");
            $table->string("location_province");
            $table->string("location_district");
            $table->string("location_address");
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
        Schema::dropIfExists('accounts');
    }
};
