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
        Schema::create('caption_banners', function (Blueprint $table) {
            $table->id();
            $table->string("caption_image");
            $table->string("caption_title");
            $table->string("caption_desc");
            $table->integer("status");
            $table->string("link_action");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caption_banners');
    }
};
