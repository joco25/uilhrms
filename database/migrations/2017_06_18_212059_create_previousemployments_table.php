<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousemploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previousemployments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('name');
            $table->string('address');
            $table->string('date');
            $table->string('lastpostheld');
            $table->string('lastsalary');
            $table->text('reasonforleaving');
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
        Schema::drop('previousemployments');
    }
}
