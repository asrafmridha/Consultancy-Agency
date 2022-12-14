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
        Schema::create('social_urls', function (Blueprint $table) {
            $table->id();
            $table->string('fb_url')->default('#');
            $table->string('twitter_url')->default('#');
            $table->string('pinterest_url')->default('#');
            $table->string('linkedin_url')->default('#');
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
        Schema::dropIfExists('social_urls');
    }
};
