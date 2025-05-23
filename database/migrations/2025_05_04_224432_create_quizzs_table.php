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
        Schema::create('quizzs', function (Blueprint $table) {
            $table->id();
             $table->string('title');
            $table->foreignId(column: 'course_id')->nullable()->constrained('courses')->onDelete('cascade');
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::table('quizzs', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
        });


        Schema::dropIfExists('quizzs');
    }
};
