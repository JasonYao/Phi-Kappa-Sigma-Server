<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
		{
            $table->increments('id');

			// Basic account information
            $table->string('firstName', 30);
			$table->string('middleInitial')->nullable();
			$table->string('lastName', 30);
            $table->string('email', 50)->unique();
            $table->string('password');

			// Fraternity-specific information
			$table->text('description')->nullable();
			$table->string('picture')->nullable();
			$table->string('initiationClass')->nullable();
			$table->string('degree')->nullable();
			$table->string('school')->nullable();
			$table->string('honours')->nullable();

			// Technical information
			$table->string('confirmationCode')->nullable(); // If code is null, account is confirmed
			$table->string('obfuscationCode'); // Don't null this shit, since image folders depend on this
            $table->rememberToken();
            $table->timestamps();
        });
    } // End of the users table

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
