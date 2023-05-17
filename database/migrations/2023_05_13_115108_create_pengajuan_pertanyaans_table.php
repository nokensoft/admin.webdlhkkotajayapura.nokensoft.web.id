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
        Schema::create('pengajuan_pertanyaans', function (Blueprint $table) {
            
            $table->id();

            // Contact
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telf')->nullable();

            // Messages
            $table->string('judul_topik')->nullable();
            $table->string('slug')->nullable();
            $table->longText('keterangan')->nullable();

            // Dates
            $table->softDeletes();
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
        Schema::dropIfExists('pengajuan_pertanyaans');
    }
};
