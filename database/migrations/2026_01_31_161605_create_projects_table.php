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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');        // Judul Project
        $table->string('image')->nullable(); // Foto Screenshot
        $table->text('description');    // Penjelasan singkat
        $table->string('tech_stack');   // Teknologi yg dipakai (Laravel, dll)
        $table->string('link')->nullable(); // Link ke GitHub atau Live Demo
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
