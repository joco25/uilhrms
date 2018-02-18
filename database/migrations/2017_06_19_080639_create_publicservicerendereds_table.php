<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicservicerenderedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicservicerendereds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('typeofservice');
            $table->text('details');
            $table->string('placeofservice');
            $table->string('periodofservice');
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
        Schema::drop('publicservicerendereds');
    }
}
