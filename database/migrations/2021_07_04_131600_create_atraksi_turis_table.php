<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtraksiTurisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atraksi_turis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->string('nama');
            $table->string('foto');
            $table->foreign('wisata_id')->references('id')->on('wisatas')->onDelete('cascade');
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
        Schema::dropIfExists('atraksi_turis');
    }
}
