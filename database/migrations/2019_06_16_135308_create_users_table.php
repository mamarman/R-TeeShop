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
            $table->increments('id');
            $table->string('username', 50)->charset('utf8');
            $table->string('email', 50)->charset('utf8');
            $table->string('password', 1000);
            $table->string('personal_id')->nullable();
            $table->string('title_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address_no')->nullable();
            $table->string('moo')->nullable();
            $table->string('village')->nullable();
            $table->string('soi')->nullable();
            $table->string('road')->nullable();
            $table->string('tumbon')->nullable();
            $table->string('amphur')->nullable();
            $table->string('province')->nullable();
            $table->string('postcode')->nullable();
            $table->string('telephone')->nullable();
            $table->string('channel_id')->nullable();
            $table->string('channel_url')->nullable();
            $table->string('other_contact')->nullable();
            $table->string('updated_user')->nullable();
            $table->string('remember_token', 1000)->nullable();
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
