<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateMember2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('namaanggota2')->nullable();
            $table->string('nisn2')->nullable();
            $table->string('tempatlahir2')->nullable();
            $table->date('tanggallahir2')->nullable();
            $table->string('foto2')->nullable();
            $table->string('kartupel2')->nullable();
            $table->string('twibbon2')->nullable();
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
        Schema::dropIfExists('member2s');
    }
}
