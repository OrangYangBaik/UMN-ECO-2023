<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroughtRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drought_registrations', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("nim");
            $table->string("email_student");
            $table->string("jurusan");
            $table->integer("angkatan");
            $table->string("username_instagram");
            $table->string("id_line");
            $table->string("telephone");
            $table->string("password");
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
        Schema::dropIfExists('drought_registrations');
    }
}
