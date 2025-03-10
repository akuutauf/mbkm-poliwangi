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
        Schema::create('kurikulums', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255)->nullable(false);
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->nullable(false);
            $table->string('id_kurikulum_feeder')->nullable(true);
            $table->unsignedBigInteger('id_prodi')->nullable(false);
            $table->foreign('id_prodi')->references('id')->on('prodis')->onDelete('cascade');
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
        Schema::dropIfExists('kurikulums');
    }
};
