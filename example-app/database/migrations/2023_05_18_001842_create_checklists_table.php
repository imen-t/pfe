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
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Process__Map_completed_with_the')->nullable();
            $table->string('The_Y_variable_baseline')->nullable();
            $table->string('Measurement_System_Analysis')->nullable();
            $table->string('improve_the_Measurement_System')->nullable();
            $table->string('Capability_Analysis')->nullable();
            $table->string('the_X_are_prioritized')->nullable();
            $table->string('FMEA_analysis_completed')->nullable();
            $table->string('Process_data_visually')->nullable();
            $table->string('X_and_y_explored')->nullable();
            $table->string('project_Charter_Completed')->nullable();
            $table->string('VOC_is_completed')->nullable();
            $table->string('Stakeholder_Analysis_and')->nullable();
            $table->string('Solution_alternatives_generated')->nullable();
            $table->string('Implementation_plan_completed')->nullable();
            $table->string('improvement_in_the_overall_Y')->nullable();
            $table->string('Control_plan')->nullable();
            $table->string('Control_plan_is_signed_off_by_process_owner')->nullable();
            $table->string('New_process_standardized')->nullable();
            $table->string('The_improvement_has_sustained_the_gains_made_in_the_project')->nullable();
            $table->string('comment1')->nullable();
            $table->string('comment2')->nullable();
            $table->string('comment3')->nullable(); 
            $table->string('comment4')->nullable(); 
            $table->string('comment5')->nullable(); 
            $table->string('comment6')->nullable(); 
            $table->string('comment7')->nullable(); 
            $table->string('comment8')->nullable(); 
            $table->string('comment9')->nullable(); 
            $table->string('comment10')->nullable(); 
            $table->string('comment11')->nullable(); 
            $table->string('comment12')->nullable(); 
            $table->string('comment13')->nullable(); 
            $table->string('comment14')->nullable(); 
            $table->string('comment15')->nullable(); 
            $table->string('comment16')->nullable(); 
            $table->string('comment17')->nullable(); 
            $table->string('comment18')->nullable(); 
            $table->string('comment19')->nullable(); 
            $table->string('comment20')->nullable(); 


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklists');
    }
};
