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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 12)->nullable(false)->unique();
            $table->string('nama', 255)->nullable(false);
            $table->year('angkatan')->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('no_telp', 15)->nullable(false);
            $table->string('id_registrasi_mahasiswa')->nullable(true);
            $table->unsignedBigInteger('id_prodi')->nullable(false);
            $table->unsignedBigInteger('id_user')->nullable(false);
            $table->foreign('id_prodi')->references('id')->on('prodis')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('mahasiswas');
    }
};
