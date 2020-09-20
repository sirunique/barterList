<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('gender')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('education')->nullable();
            $table->string('description')->nullable();
            $table->string('company')->nullable();
            $table->string('paypal')->nullable();
            $table->string('avatar')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('taxid')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('isadmin')->nullable();
            $table->tinyInteger('superadmin')->nullable();
            $table->tinyInteger('requestapproval')->nullable();
            $table->tinyInteger('audit')->nullable();
            $table->tinyInteger('approve')->nullable();
            $table->tinyInteger('disabled')->nullable();

            $table->tinyInteger('is_verify')->nullable();
            $table->string('verified_token')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('token_at')->nullable();

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
        Schema::dropIfExists('users');
    }
}
