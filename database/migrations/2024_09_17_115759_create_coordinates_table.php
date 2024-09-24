<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->decimal('latitude', 10, 6);
            $table->decimal('longitude', 10, 6);

            $table->foreignId('type_id')->nullable()->index()->constrained('regions');
            $table->foreignId('region_id')->nullable()->index()->constrained('regions');

            $table->softDeletes();
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
        Schema::dropIfExists('coordinates');
    }
}
