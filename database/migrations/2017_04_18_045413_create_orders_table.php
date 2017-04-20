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
            $table->string('router_quantity');
            $table->string('send_method');
            $table->string('send_courier');
            $table->string('send_address1');
            $table->string('send_address2');
            $table->string('send_postCode');
            $table->string('send_province');
            $table->string('get_method');
            $table->string('get_courier');
            $table->string('get_address1');
            $table->string('get_address2');
            $table->string('get_postCode');
            $table->string('get_province');
            $table->string('contactName');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('accountName');
            $table->string('passportNo');
            $table->string('bankName');
            $table->string('accNo');
            $table->string('paymentMethod');            
            $table->string('totalTransaction');
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
