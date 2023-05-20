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
        Schema::create('layanan_onlines', function (Blueprint $table) {
            $table->id();

            $table->string('judul')->nullable();
            $table->string('keterangan_singkat')->nullable();
            $table->string('keterangan_lengkap')->nullable();
            $table->string('gambar')->nullable();
            $table->string('url')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_onlines');
    }
};
