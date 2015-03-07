<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTables extends Migration {


	public function up()
	{
		Schema::create('candidates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('symbol');
			$table->string('candidatename');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('candidates');
	}

}
