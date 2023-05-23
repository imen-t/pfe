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
        Schema::create('dmaic_projects', function (Blueprint $table) {
            $table->id();
            $table->string('projecttitle') ->nullable();
            $table->string('projectlocation')->nullable();
            $table->string('dmaic_project_leaders')->nullable();
            $table->string('project_reviewer')->nullable();
            $table->string('Enterproj')->nullable();
            $table->date('project_date')->nullable();
            $table->string('identify_the_business_gap')->nullable();
            $table->string('Document_the_process')->nullable();
            $table->text('colllect_and_transltae')->nullable();
            $table->text('scope_the_project')->nullable();
            $table->text('Define_metrics_and_defects')->nullable();
            $table->text('Establish_preliminary')->nullable();
            $table->text('Dvelop_problem_objective')->nullable();
            $table->text('Estimate_financial')->nullable();
            $table->text('confirm_improvement_methodology')->nullable();
            $table->text('Define_project_roles')->nullable();
            $table->text('identify_project_risks')->nullable();
            $table->text('Establish_project_timeline')->nullable();
            $table->text('create_communication_plan')->nullable();
            $table->text('option')->nullable();
            $table->text('crete_a_value_stream')->nullable();
            $table->text('create_processflow_diagram')->nullable();
            $table->text('expose_simplification_opportunities')->nullable();
            $table->text('analyse_measurememnts_systems')->nullable();
            $table->text('collect_data')->nullable();
            $table->text('examine_process_stability')->nullable();
            $table->text('perform_capability_analysis')->nullable();
            $table->text('develop_list_of_potential_causes')->nullable();
            $table->text('narrow_down_list_of_potential_causes')->nullable();
            $table->text('collect_dataon_xs')->nullable();
            $table->text('perform_graphical_analysis')->nullable();
            $table->text('perform_statical_analysis')->nullable();
            $table->text('condact_waste_analysis')->nullable();
            $table->text('Evaluate_impact_of_the_x_and_y')->nullable();
            $table->text('state_prliminary')->nullable();
            $table->text('Generate_potential_solutions')->nullable();
            $table->text('Evaluate_potential_solution')->nullable();
            $table->text('state_y_f')->nullable();
            $table->text('Develop_implementation_plan')->nullable();
            $table->text('Mistake_proof_the_process')->nullable();
            $table->text('Determine_thexs_to_control_and_methods')->nullable();
            $table->text('complete_msa_on_critical_xs')->nullable();
            $table->text('Determine_ys_to_monitor_and_metrics_reporting')->nullable();
            $table->text('Revise_process_documentation')->nullable();
            $table->text('implement_solution')->nullable();
            $table->text('Evaluate_implementation')->nullable();
            $table->string('develop_transition_plan')->nullable();
            $table->string('Handoff_to_process_owner')->nullable();
            $table->string('capture_lessons_learned')->nullable();
            $table->string('write_final_report')->nullable();
            $table->string('Revise_develop_process_documentation')->nullable();
            $table->string('improve_Measurement_systems_if_needed')->nullable();
            $table->string('create_futur_staste_VSM')->nullable();
            $table->string('upload2')->nullable();
            $table->string('upload3')->nullable();
            $table->string('upload4')->nullable();
            $table->string('upload5')->nullable();
            $table->string('upload1')->nullable();
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

            

            
   // foreign
   $table->foreignId('action_id')
   ->constrained('actions')
   ->onUpdate('cascade')
   ->onDelete('cascade');
$table->timestamps();
});
Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmaic_projects');
    }
};
