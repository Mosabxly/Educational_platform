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
        Schema::create('quiz_results', function (Blueprint $table) {
            $table->id();
            $table->float('score');
            $table->timestamps();
            $table->foreignId(column: 'quiz_id')->nullable()->constrained('quizzs')->onDelete('cascade');
            $table->foreignId(column: 'student_id')->nullable()->constrained('users')->onDelete('cascade');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

         Schema::table('quiz_results', function (Blueprint $table) {
            $table->dropForeign(['quiz_id']);
            $table->dropForeign(['student_id']);
        });


        Schema::dropIfExists('quiz_results');
    }
};
