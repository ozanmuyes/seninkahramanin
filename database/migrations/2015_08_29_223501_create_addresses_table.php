<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned();
            $table->string("title", 64);
            $table->string("phone_number", 32)->nullable();
            $table->string("line_1", 128);
            $table->string("line_2", 128)->nullable();
            $table->string("line_3", 128)->nullable();
            $table->string("neighborhood", 64);
            $table->string("city", 16);
            $table->string("country", 32)->default("Türkiye");
            $table->string("company", 16)->nullable();
            $table->string("description")->nullable();
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
        Schema::drop('addresses');
    }
}
