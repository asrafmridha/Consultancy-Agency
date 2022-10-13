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
        Schema::create('footerservices', function (Blueprint $table) {
            $table->id();
            $table->string('financial')->nullable();          
            $table->string('sale_service')->nullable();          
            $table->string('buisness')->nullable();          
            $table->string('market_research')->nullable();          
            $table->string('customer_support')->nullable();          
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
        Schema::dropIfExists('footerservices');
    }
};
