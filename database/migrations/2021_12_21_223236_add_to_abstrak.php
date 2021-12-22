<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToAbstrak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abstraks', function (Blueprint $table) {
            $table->string('filename1')->nullable();
            $table->string('filename2')->nullable();
            $table->string('filename3')->nullable();
            $table->string('filename4')->nullable();
            $table->string('filename5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abstraks', function (Blueprint $table) {
            //
        });
    }
}
