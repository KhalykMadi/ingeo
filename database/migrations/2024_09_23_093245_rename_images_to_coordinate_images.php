<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameImagesToCoordinateImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinate_images', function (Blueprint $table) {
            Schema::rename('images', 'coordinate_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coordinate_images', function (Blueprint $table) {
            Schema::rename('coordinate_images', 'images');
        });
    }
}
