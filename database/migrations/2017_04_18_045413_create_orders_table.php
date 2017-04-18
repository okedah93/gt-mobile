<?php

use Illuminate\Support\Facades\Schema;
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
        //

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destination');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('sendingMethod');
            $table->string('courier');
            $table->string('takingMethod');
            $table->string('address1');
            $table->string('address2');
            $table->string('postCode');
            $table->string('province');
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
        //
    }
}
