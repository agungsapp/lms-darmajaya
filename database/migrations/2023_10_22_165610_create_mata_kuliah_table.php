<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk');
            $table->string('name');
            $table->unsignedBigInteger('id_users');
            $table->string('kelas')->nullable();
            $table->string('hari')->nullable();
            $table->string('path_file')->default('default.jpg');
            $table->time('jam')->nullable();
            $table->timestamps();

            // foreign
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
