<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameReviewsToCoordinateReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinate_reviews', function (Blueprint $table) {
            Schema::rename('reviews', 'coordinate_reviews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coordinate_reviews', function (Blueprint $table) {
            Schema::rename('coordinate_reviews', 'reviews');
        });
    }
}
