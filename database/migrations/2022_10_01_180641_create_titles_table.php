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
        Schema::create('titles', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_heading')->nullable();
            $table->string('service2_title')->nullable();
            $table->string('service2_heading')->nullable();
            $table->string('case_studies_title')->nullable();
            $table->string('case_studies_heading')->nullable();
            $table->string('testimonials_title')->nullable();
            $table->string('testimonials_heading')->nullable();
            $table->string('team_title')->nullable();
            $table->string('team_heading')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_heading')->nullable();      
            $table->string('client_title')->nullable();
            $table->string('client_heading')->nullable();
            $table->string('success_area_title')->nullable();
            $table->string('success_area_heading')->nullable();
            $table->string('mail_title')->nullable();
            $table->string('mail_heading')->nullable();
            $table->string('phone_title')->nullable();
            $table->string('phone_heading')->nullable();
            $table->string('location_title')->nullable();
            $table->string('location_heading')->nullable();



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
        Schema::dropIfExists('titles');
    }
};
