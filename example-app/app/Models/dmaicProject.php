<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dmaicProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'projecttitle',
        'projectlocation',
        'dmaic_project_leaders',
        'project_reviewer',
        'Enterproj',
        'project_date',
        'identify_the_business_gap',
        'Document_the_process',
        'colllect_and_transltae',
        'scope_the_project',
        'Define_metrics_and_defects',
        'Establish_preliminary',
        'Dvelop_problem_objective',
        'Estimate_financial',
        'confirm_improvement_methodology',
        'Define_project_roles',
        'identify_project_risks',
        'Establish_project_timeline',
        'create_communication_plan',
        'VOC_is_completed',
        'option',
        'crete_a_value_stream',
        'create_processflow_diagram',
        'expose_simplification_opportunities',
        'analyse_measurememnts_systems',
        'improve_Measurement_systems_if_needed',
        'collect_data',
        'examine_process_stability',
        'perform_capability_analysis',
        'develop_list_of_potential_causes',
        'narrow_down_list_of_potential_causes',
        'collect_dataon_xs',
        'perform_graphical_analysis',
        'perform_statical_analysis',
        'condact_waste_analysis',
        'Evaluate_impact_of_the_x_and_y',
        'state_prliminary',
        'Generate_potential_solutions',
        'create_futur_staste_VSM',
        'Evaluate_potential_solution',
        'state_y_f',
        'Develop_implementation_plan',
        'Mistake_proof_the_process',
        'Determine_thexs_to_control_and_methods',
        'complete_msa_on_critical_xs',
        'Determine_ys_to_monitor_and_metrics_reporting',
        'Revise_develop_process_documentation',
        'implement_solution',
        'Evaluate_implementation',
        'develop_transition_plan',
        'Handoff_to_process_owner',
        'capture_lessons_learned',
        'write_final_report',
        'action_id',
        'upload1',
        'upload2',
        'upload3',
        'upload4',
        'upload5',
         'Process__Map_completed_with_the',
        'The_Y_variable_baseline',
        'Measurement_System_Analysis',
        'improve_the_Measurement_System',
        'Capability_Analysis',
        'the_X_are_prioritized',
        'FMEA_analysis_completed',
        'Process_data_visually',
        'X_and_y_explored',
        'project_Charter_Completed',
        'Stakeholder_Analysis_and',
        'Solution_alternatives_generated',
        'Implementation_plan_completed',
        'improvement_in_the_overall_Y',
        'Control_plan',
        'Control_plan_is_signed_off_by_process_owner',
        'The_improvement_has_sustained_the_gains_made_in_the_project',
        'comment1',
        'comment2',
        'comment3',
        'comment4',
        'comment5',
        'comment6',
        'comment7',
        'comment8',
        'comment9',
        'comment10',
        'comment11',
        'comment12',
        'comment13',
        'comment14',
        'comment15',
        'comment16',
        'comment17',
        'comment18',
        'comment19',
        'comment20',

    ];
     /**
     * The users that belong to the role.
     */

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    /**
     * Get the files for the blog post.
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }
    /**
     * Get the action that owns the dmaicProject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action(): BelongsTo
    {
        return $this->belongsTo(Action::class);
    }
    
}
