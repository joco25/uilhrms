<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionattendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutionattendeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile_id');
            $table->string('name');
            $table->string('date');
            $table->string('qualification');
            $table->string('qualificationdate');
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
        Schema::drop('institutionattendeds');
    }
}
