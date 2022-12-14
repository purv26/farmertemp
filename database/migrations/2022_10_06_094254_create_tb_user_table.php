<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('phonenumber');
            $table->string('emailid');
            $table->string('address');
            $table->string('village');
            $table->string('district');
            $table->string('pincode');
            $table->string('state');
            $table->string('sfgname');
            $table->string('adharnumber');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('password_confirm');
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
        Schema::dropIfExists('register_user');
    }
};
