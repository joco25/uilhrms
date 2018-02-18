<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('photoname')->nullable();
            $table->string('sex')->nullable();
            $table->string('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('stateoforigin')->nullable();
            $table->string('lga')->nullable();
            $table->string('town')->nullable();
            $table->string('senatorialdistrict')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('nameofspouse')->nullable();
            $table->integer('religion')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('permanentaddress')->nullable();
            $table->string('contactaddress')->nullable();
            $table->string('phone')->nullable();


            $table->string('sscategory')->nullable();
            $table->string('jscategory')->nullable();
            $table->string('fappointment_date')->nullable();
            $table->string('fappointment_salarylevel')->nullable();
            $table->string('fappointment_jobtitle')->nullable();
            $table->string('cappointment_dateonlevel')->nullable();
            $table->string('cappointment_salarylevel')->nullable();
            $table->string('cappointment_jobtitle')->nullable();
            $table->string('employmentstatus')->nullable();
            $table->text('professionalbodies')->nullable();
            $table->String('healthstatus')->nullable();
            $table->string('accomodationstatus')->nullable();

            $table->integer('hodapproval')->nullable();
            $table->integer('registrarApproval')->nullable();
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
        Schema::drop('profiles');
    }
}
