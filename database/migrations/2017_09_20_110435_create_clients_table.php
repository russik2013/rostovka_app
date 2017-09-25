<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('first_name', 228);
            $table -> string('last_name', 228);
            $table -> string('email', 228);
            $table -> string('address', 228);
            $table -> string('city', 228);
            $table -> string('state', 228);
            $table -> integer('zip');
            $table -> string('phone', 228);
            $table -> string('password', 228);
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
        Schema::dropIfExists('clients');
    }
}
