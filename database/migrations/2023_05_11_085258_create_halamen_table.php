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
        Schema::create('halamen', function (Blueprint $table) {

            $table->id();

            $table->string('judul')->nullable();
            $table->string('sub_judul')->nullable();
            $table->string('slug')->nullable();
            $table->longText('isi')->nullable();
            $table->string('cover')->nullable();

            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();
            
            $table->softDeletes();

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
        Schema::dropIfExists('halamen');
    }
};
