<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('addressline');
            $table->string('city');
            $table->string('zip');
            $table->string('country');
            $table->integer('client_id');
            $table->integer('products_id');
            $table->string('product_name');
            $table->string('total_price');
            $table->string('tax');
            $table->integer('qty');



            $table->rememberToken();
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
        Schema::dropIfExists('checkouts');
    }
}




