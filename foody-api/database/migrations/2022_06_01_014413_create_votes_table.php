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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->integer("restaurant_id");
            $table->integer("feedback_id");
            $table->float("vote_point");
            $table->float("vote_location");
            $table->float("vote_price");
            $table->float("vote_quality");
            $table->float("vote_service");
            $table->float("vote_spatial");
            $table->integer("visit_times");
            $table->float("money_spend");
            $table->boolean("visit_again");
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
        Schema::dropIfExists('votes');
    }
};
