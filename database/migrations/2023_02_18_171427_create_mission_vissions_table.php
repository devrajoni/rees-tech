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
        Schema::create('mission_vissions', function (Blueprint $table) {
            $table->id();
            $table->string('mission_title')->nullable();
            $table->longText('mission_description')->nullable();
            $table->string('mission_image')->nullable();
            $table->string('vision_title')->nullable();
            $table->longText('vision_description')->nullable();
            $table->string('vision_image')->nullable();
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
        Schema::dropIfExists('mission_vissions');
    }
};
