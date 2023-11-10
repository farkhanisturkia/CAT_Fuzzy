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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nisn')->unique();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password')->nullable();
            $table->enum('kelas', ['7', '8', '9'])->nullable();
            $table->enum('gender', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
