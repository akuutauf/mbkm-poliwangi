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
        Schema::create('admin_jurusans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable(false);
            $table->unsignedBigInteger('id_jurusan')->nullable(false);
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->onDelete('cascade');
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
        Schema::dropIfExists('admin_prodis');
    }
};
