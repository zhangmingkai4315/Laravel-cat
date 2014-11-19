<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


        Schema::create('userInformation', function(Blueprint $table)    //如果仅仅是table  则采用alter 操作数据库
        {
            //
            $table->increments('id');
            $table->string('username','12')->index();
            $table->integer('userage')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('city','16')->nullable();
            $table->string('region','40')->nullable();
            $table->string('community','12')->nullable();
            $table->string('pet','20')->nullable();
            $table->string('pettype','20')->nullable();
            $table->integer('petage')->nullable();
            $table->timestamps();

        });

        //
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('userInformation', function(Blueprint $table)
        {
            $table->drop();
            //
        });
	}

}
