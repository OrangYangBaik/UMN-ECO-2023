<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Milestone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->string("nama_organisasi");
            $table->string("gen");
            $table->string("tahun");
            $table->longText("overview");
            $table->string("program_1");
            $table->string("program_2");
            $table->string("program_3");
            $table->string("program_4");
            $table->string("program_5");
            $table->longText("keterangan_program_1");
            $table->longText("keterangan_program_2");
            $table->longText("keterangan_program_3");
            $table->longText("keterangan_program_4");
            $table->longText("keterangan_program_5");
            $table->longText("achievement");
            $table->longText("environmental_outcomes");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('milestones');
    }
}
