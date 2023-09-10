<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nawasena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('nawasenas',function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('Name');
            $table->string('NIM');
            $table->string('Email');
            $table->year('Angkatan');
            $table->string('Jurusan');
            $table->string('Instagram_account');
            $table->string('Line_id');
            $table->string('image');
            $table->string('karya')->nullable();
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
        Schema::dropIfExists('nawasenas');
    }
}
