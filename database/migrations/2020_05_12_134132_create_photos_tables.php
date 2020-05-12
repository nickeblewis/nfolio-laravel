<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTables extends Migration
{
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('headline', 200)->nullable();
        });

        Schema::create('photo_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'photo');
        });
    }

    public function down()
    {

        Schema::dropIfExists('photo_slugs');
        Schema::dropIfExists('photos');
    }
}
