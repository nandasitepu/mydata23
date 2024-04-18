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
        Schema::create('dt_hukum_jasa', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('penyedia_jasa')->nullable();
            $table->string('jenis_jasa')->nullable();
            $table->string('detail')->nullable();
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
        Schema::dropIfExists('dt_hukum_jasa');
    }
};
