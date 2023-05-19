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
        Schema::create('pengaturans', function (Blueprint $table) {

            $table->id();
            
            // Site Information
            $table->string('judul_situs')->nullable();
            $table->string('slug')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('copyright')->nullable();

            $table->string('logo')->nullable();
            $table->string('logo_loader')->nullable();
            $table->string('favicon')->nullable();

            // Contact
            $table->string('alamat_email')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->mediumText('alamat_google_map')->nullable();

            // Social Media
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();

            // Dates
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
        Schema::dropIfExists('pengaturans');
    }
};
