<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userid');
            $table->string('title');
            $table->string('itemnumber');
            $table->string('shortdescription');
            $table->string('longdescription');
            $table->string('serviceid');
            $table->string('itemconditionid');
            $table->string('returnpolicy');
            $table->string('tradevalue');
            $table->string('cashvalue');
            $table->string('package_handling_amount');
            $table->string('shippingtypeid');
            $table->string('shippingamount');
            $table->string('productimage');
            $table->string('websiteref');
            $table->tinyinteger('is_sold');
            $table->tinyinteger('is_delete');
            $table->tinyinteger('is_available');
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
        Schema::dropIfExists('trades');
    }
}
