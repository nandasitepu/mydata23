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
        Schema::create('dt_hukum_peraturan', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('jenis')->nullable();
            $table->string('nomor')->nullable();
            $table->text('tentang')->nullable();
            $table->year('tahun')->nullable();
            $table->string('status')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('link_bt')->nullable();
            $table->string('link_pjl')->nullable();
            $table->string('link_gdrive')->nullable();

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
        Schema::dropIfExists('dt_hukum_peraturan');
    }
};
