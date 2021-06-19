<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTkj10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkj10', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('nis');
            $table->string('agama');
            $table->string('tmptlahir');
            $table->string('tgllahir');
            $table->text('alamat')->nullable;
            $table->string('telp');
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
        Schema::dropIfExists('tkj10');
    }
}
