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
        Schema::create('recent_work_buttons', function (Blueprint $table) {
            $table->id();
            $table->string('buisness_finance')->nullable();
            $table->string('customer_support')->nullable();
            $table->string('financial_service')->nullable();
            $table->string('buisness_stargey')->nullable();
            $table->string('sale_service')->nullable();
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
        Schema::dropIfExists('recent_work_buttons');
    }
};
