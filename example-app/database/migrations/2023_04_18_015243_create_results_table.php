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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('result_title')->nullable();; 
            $table->date('Month')->nullable(); 
            $table->enum('type', ['plan', 'Fcst', 'Act'])->nullable();;
            $table->enum('status_result', ['on targer', 'off target'])->nullable();;
                // Foreign keys
            $table->foreignId('project_id')
                ->constrained('projects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
