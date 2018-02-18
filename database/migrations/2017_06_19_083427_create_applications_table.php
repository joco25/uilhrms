<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('period')->nullable();
            $table->string('startdate')->nullable();
            $table->string('enddate')->nullable();
            $table->text('details');
            $table->string('hodstatus')->default('pending')->nullable();
            $table->string('deanstatus')->default('pending')->nullable();
            $table->string('status');
            $table->string('qoteaching')->nullable();
            $table->string('qoresearch')->nullable();
            $table->string('qopublication')->nullable();
            $table->string('generalrecommendation')->nullable();
            $table->string('percentagescore')->nullable();
            $table->string('commentbypanel')->nullable();
            $table->string('review')->nullable();
            $table->string('document')->nullable();
            $table->integer('college_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('faculty_id')->nullable();
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
        Schema::drop('applications');
    }
}
