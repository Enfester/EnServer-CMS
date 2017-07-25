<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('users', function (Blueprint $table) {
			// Laravel          
			$table->increments('id');
            $table->string('login',15)->unique();
            $table->string('email',40)->unique();
            $table->string('password',60);
			$table->rememberToken();
            $table->timestamps();
			
			// Personal information
			$table->string('name',20);
			$table->string('surname',20);
			$table->integer('age');
			
			// Sotial information
			$table->string('skype',20);
			$table->string('vk',60);
			
			// Minecraft cabine
			$table->float('balance');
			$table->boolean('hd_skin');
			
			// Minecaft auth
			$table->string('uuid',60)->unique();
			$table->string('accessToken',60);
			$table->string('clientToken',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
