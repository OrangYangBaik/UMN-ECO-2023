<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownpourUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downpour_users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("student_id");
            $table->string("username_student_email")->unique();
            $table->string("password");
            $table->string("major");
            $table->integer("generation");
            $table->string("instagram_username");
            $table->string("line_id");
            $table->string("telephone");
            $table->integer("activity_booth_1")->nullable();
            $table->integer("activity_booth_2")->nullable();
            $table->integer("activity_booth_3")->nullable();
            $table->integer("activity_booth_4")->nullable();
            $table->string("activity_booth_additional")->nullable();
            $table->integer("seminar_ticket")->nullable();
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
        Schema::dropIfExists('downpour_users');
    }
}
