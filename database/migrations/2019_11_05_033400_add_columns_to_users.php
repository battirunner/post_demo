<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('home_image')->default('homebanner.png');
            $table->string('price_image')->default('pricelist.png');
            $table->string('price_image_mobile')->default('pricelist_mobile.png');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropcolumn('home_image');
            $table->dropcolumn('price_image');
            $table->dropcolumn('price_image_mobile');
            
        });
    }
}
