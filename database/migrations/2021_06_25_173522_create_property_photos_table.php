<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id')->index();
            $table->enum('category', ['main', 'other']);
            $table->string('path');
            $table->timestamps();

            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_photos');
    }
}
