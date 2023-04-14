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
            $table->string('title');
            $table->string('location')->nullable();
            $table->string('project_leader')->nullable();
            // $table->string('project_type');
            $table->enum('project_type', ['Strategic Project', 'Critical Project', 'Issue Resolution']);
            $table->string('target_improve')->nullable();
            $table->string('problem_description')->nullable();
            $table->string('problem_analysis')->nullable();
            $table->string('conclusion')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('unresolved_issues')->nullable();
            $table->date('date')->nullable();
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
