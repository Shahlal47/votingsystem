<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTables extends Migration {


	public function up()
	{
		Schema::create('votes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('votes');
	}

}
