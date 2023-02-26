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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('country_name')->nullable();
            $table->string('client')->nullable();
            $table->string('key_achievment')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('address')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->enum('project_status', ['Delivery', 'Progress', 'Awarded']);
            $table->enum('status', ['Active', 'Inactive']);
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
        Schema::dropIfExists('projects');
    }
};
