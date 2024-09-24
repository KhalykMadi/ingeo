<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('author');
            $table->unsignedInteger('rating')->check('rating >= 1 AND rating <= 5');

            $table->foreignId('coordinate_id')->nullable()->index()->constrained('coordinates');
            $table->foreignId('user_id')->nullable()->index()->constrained('users');

            $table->boolean('is_publish')->default(false);

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
        Schema::dropIfExists('reviews');
    }
}
