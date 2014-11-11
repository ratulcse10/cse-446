<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('email');
			$table->string('password');
			$table->string('reg_no')->nullable();
			$table->string('designation')->nullable();
			$table->integer('role_id')->unsigned();
			$table->string('remember_token', 100)->nullable();
			
			$table->timestamps();
			

			$table->foreign('role_id')
				->references('id')->on('roles')
				->onUpdate('cascade')
				->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
