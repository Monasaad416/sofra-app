<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration {

	public function up()
	{
		Schema::create('banks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('account_no');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('banks');
	}
}
