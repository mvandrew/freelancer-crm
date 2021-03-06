<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('name', 150)
                ->index()
                ->comment('Полное имя пользователя');

            $table->string('email', 255)
                ->unique()
                ->comment('E-Mail пользователя');

            $table->boolean('is_active')
                ->default(false)
                ->comment('Признак активности учетной записи');

            $table->string('password', 255)
                ->comment('Hash пароля пользователя');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
