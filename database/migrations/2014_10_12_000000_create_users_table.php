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
            $table->string('nama');
            $table->string('nim');
            $table->string('angkatan');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('email')->unique();
            $table->string('line');
            $table->string('instagram');
            $table->string('password');
            $table->boolean('wehea')->default(false);
            $table->boolean('meru_betiri')->default(false);
            $table->boolean('scanned')->default(false);
            $table->tinyInteger('credit')->default('5');
            $table->tinyInteger('point')->default('0');
            $table->timestamp('email_verified_at')->nullable();
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
