<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("address_id")->unsigned();
            // Use created_at as ordered_at
            // $table->dateTime("ordered_at")->nullable();
            $table->dateTime("rejected_at")->nullable()->default(null);
            $table->dateTime("printing_at")->nullable()->default(null);
            $table->dateTime("shipped_at")->nullable()->default(null);
            $table->dateTime("delivered_at")->nullable()->default(null);
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
        Schema::drop('orders');
    }
}
