<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kupons', function (Blueprint $table) {
            $table->id();
            $table->uuid('pemilik')->nullable();
            $table->tinyInteger('atasan');
            $table->tinyInteger('bawahan');
            $table->tinyInteger('aksesoris');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('pemilik')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kupons');
    }
}
