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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('title')->nullable();
            $table->string('Short_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('image')->nullable();
            $table->longText('short_description2')->nullable();
            $table->string('advise')->nullable();
            $table->string('advisor_name')->nullable();
            $table->string('heading')->nullable();
            $table->string('point')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('services');
    }
};
