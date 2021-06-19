<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('nis');
            $table->string('agama');
            $table->string('tmptlahir');
            $table->string('tgllahir');
            $table->text('alamat')->nullable();
            $table->string('telp');
            $table->enum('kelas', ['X', 'XI', 'XII']);
            $table->foreignId('id_jurusan');
            $table->timestamps();
            $table->foreign('id_jurusan')->references('id')->on('jurusan')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
