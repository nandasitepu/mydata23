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
        Schema::create('dt_kesehatan_faskes', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis')->nullable();
            $table->string('detail')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('foto')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kontak')->nullable();
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
        Schema::dropIfExists('dt_kesehatan_faskes');
    }
};