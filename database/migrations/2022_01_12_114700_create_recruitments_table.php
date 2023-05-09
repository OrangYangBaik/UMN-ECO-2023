<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('Team');
            $table->string('Subdivisi')->nullable();
            $table->string('Name');
            $table->string('NIM');
            $table->string('Email');
            $table->year('Angkatan');
            $table->string('Jurusan');
            $table->string('Instagram_account');
            $table->string('Line_id');
            $table->string('Phone_number');
            $table->text('Pengetahuan');
            $table->text('Kesibukan');
            $table->text('Experience');
            $table->text('Alasan1');
            $table->text('Alternative');
            $table->text('Alasan2');
            $table->text('Pengalaman_dokum')->nullable();
            $table->text('LinkDrive');
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
        Schema::dropIfExists('recruitments');
    }
}
