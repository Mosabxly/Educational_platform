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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->text('content')->nullabel();
            $table->integer('order')->nullable();
            $table->foreignId('course_id')->nullabel()->constrained('courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->dropForeign(['course_id']);

        });

        Schema::dropIfExists('lessons');
    }
};
