<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string("directory")->nullable(); // relative to ./public - w/o trailing slash, if null use img
            $table->string("name");
            $table->string("slug");
            $table->string("extension", 4); // w/o dot at the beginning
            $table->string("title", 128)->nullable();
            $table->string("alt", 128)->nullable();
            $table->integer("width")->unsigned();
            $table->integer("height")->unsigned();
            $table->integer("size")->unsigned(); // in bytes
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
        Schema::drop('images');
    }
}
