<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextofkinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nextofkins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('name');
            $table->string('relationship');
            $table->string('Address');
            $table->string('Telephone');
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
        Schema::drop('nextofkins');
    }
}
