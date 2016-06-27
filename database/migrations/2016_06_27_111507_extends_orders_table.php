<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendsOrdersTable extends Migration
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
            $table->string('title');
            $table->string('unit');
            $table->timestamps();
        });
        Schema::create('orders_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('items_id');
            $table->integer('orders_id');
            $table->string('value');
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
        Schema::drop('orders_values');
    }
}