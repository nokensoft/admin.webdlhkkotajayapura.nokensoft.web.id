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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            $table->string('judul');
            $table->string('slug')->nullable();

            $table->string('gambar_ilustrasi')->nullable();
            $table->string('gambar_latar_belakang')->nullable();

            $table->longText('konten_text_1')->nullable();
            $table->longText('konten_text_2')->nullable();

            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();

            $table->string('link')->nullable();
            
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
        Schema::dropIfExists('banners');
    }
};
