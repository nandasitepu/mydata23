<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt_hukum', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('nomor');
            $table->string('tentang');
            $table->string('oleh');
            $table->string('tanggal');
            $table->string('sumber');
            $table->string('links');
            $table->string('keterangan');
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
        Schema::dropIfExists('dt_hukum');
    }
};
