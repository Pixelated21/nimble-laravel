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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('assignment_name');
            $table->string('assignment_code');
            $table->string('assignment_description');
            $table->date('assignment_due_date');
            $table->string('max_points');
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('assignment_type_id')->constrained('assignment_types');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
