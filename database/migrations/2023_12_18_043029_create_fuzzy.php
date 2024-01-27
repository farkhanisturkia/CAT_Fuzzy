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
        Schema::create('fuzzies', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('mapel_id');
            $table->integer('JSSedikit');
            $table->integer('JSSedang');
            $table->integer('JSBanyak');
            $table->integer('NHRendah');
            $table->integer('NHSedang');
            $table->integer('NHTinggi');
            $table->integer('KMPKurang');
            $table->integer('KMPSedang');
            $table->integer('KMPTinggi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuzzy');
    }
};
