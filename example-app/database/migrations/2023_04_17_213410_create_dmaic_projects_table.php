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
            $table->string('projecttitle');
            $table->string('projectlocation')->nullable();
            $table->string('dmaic_project_leaders')->nullable();
            $table->string('project_reviewer')->nullable();
            $table->string('Enterproj')->nullable();
            $table->date('project_date')->nullable();
            $table->string('identify_the_business_gap')->nullable();
            $table->string('Document_the_process')->nullable();
            $table->string('colllect_and_transltae')->nullable();
            $table->string('scope_the_project')->nullable();
            $table->string('Define_metrics_and_defects')->nullable();
            $table->string('Establish_preliminary')->nullable();
            $table->string('Dvelop_problem_objective')->nullable();
            $table->string('Estimate_financial')->nullable();
            $table->string('confirm_improvement_methodology')->nullable();
            $table->string('Define_project_roles')->nullable();
            $table->string('identify_project_risks')->nullable();
            $table->string('Establish_project_timeline')->nullable();
            $table->string('create_communication_plan')->nullable();
            $table->string('crete_a_value_stream')->nullable();
            $table->string('create_processflow_diagram')->nullable();
            $table->string('expose_simplification_opportunities')->nullable();
            $table->string('analyse_measurememnts_systems')->nullable();
            $table->string('collect_data')->nullable();
            $table->string('examine_process_stability')->nullable();
            $table->string('perform_capability_analysis')->nullable();
            $table->string('develop_list_of_potential_causes')->nullable();
            $table->string('narrow_down_list_of_potential_causes')->nullable();
            $table->string('collect_dataon_xs')->nullable();
            $table->string('perform_graphical_analysis')->nullable();
            $table->string('perform_statical_analysis')->nullable();
            $table->string('condact_waste_analysis')->nullable();
            $table->string('Evaluate_impact_of_the_x_and_y')->nullable();
            $table->string('state_prliminary')->nullable();
            $table->string('Generate_potential_solutions')->nullable();
            $table->string('Evaluate_potential_solution')->nullable();
            $table->string('state_y_f')->nullable();
            $table->string('Develop_implementation_plan')->nullable();
            $table->string('Mistake_proof_the_process')->nullable();
            $table->string('Determine_thexs_to_control_and_methods')->nullable();
            $table->string('complete_msa_on_critical_xs')->nullable();
            $table->string('Determine_ys_to_monitor_and_metrics_reporting')->nullable();
            $table->string('Revise_process_documentation')->nullable();
            $table->string('implement_solution')->nullable();
            $table->string('Evaluate_implementation')->nullable();
            $table->string('develop_transition_plan')->nullable();
            $table->string('Handoff_to_process_owner')->nullable();
            $table->string('write_final_report')->nullable();
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
