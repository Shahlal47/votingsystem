<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersTables extends Migration {


	public function up()
	{
		Schema::create('voters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('voterid');
			$table->string('votername');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('voters');
	}

}
