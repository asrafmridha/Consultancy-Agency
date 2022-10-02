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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('side_image1')->nullable();
            $table->string('side_image2')->nullable();
            $table->string('side_image3')->nullable();
            $table->string('side_image4')->nullable();
            $table->integer('years')->nullable();
            $table->string('heading')->nullable();
            $table->string('heading2')->nullable();
            $table->string('compelte_project')->nullable();
            $table->string('satisfied_project')->nullable();
            $table->string('ongoing_project')->nullable();
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('about_first_image')->nullable();
            $table->string('about_second_image')->nullable();
            
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
        Schema::dropIfExists('experiences');
    }
};
