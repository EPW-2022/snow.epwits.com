<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('asalsekolah');
            $table->string('kota');
            $table->string('namaketua');
            $table->text('alamat');
            $table->string('nomorhp');
            $table->string('nisn');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('foto')->nullable();
            $table->string('kartupel')->nullable();
            $table->string('twibbon')->nullable();
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
        Schema::dropIfExists('leaders');
    }
}
