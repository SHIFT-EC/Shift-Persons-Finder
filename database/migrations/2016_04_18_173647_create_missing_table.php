<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',60);
            $table->string('second_first_name',60);
            $table->string('last_name',60);
            $table->string('second_last_name',60);
            $table->integer('age');
            $table->string('gender');
            $table->string('photo',800);
            $table->mediumText('description');
            $table->mediumText('message_user');
            $table->string('status');
            $table->string('address');
            $table->string('last_location');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('missing');
    }
}
