@extends('layouts.app')

@section('content')



    <div class="card p-3 shadow" style="max-width: 1260px;">
    <div class="col">
       <h2>{{$dmaicProject->projecttitle}}</h2>
<form method="POST" action="{{route('updateInfo',$dmaicProject->id)}}">
    @csrf

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Location</th>
                <th scope="col">project leader</th>
                <th scope="col">Enterproj</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input name="projectlocation" value="{{old('projectlocation', $dmaicProject->projectlocation)}}" type="text" class="form-control" id="projectlocation" />
                </td>
                <td><input name="dmaic_project_leaders" value="{{old('dmaic_project_leaders', $dmaicProject->dmaic_project_leaders)}}" type="text" class="form-control" id="dmaic_project_leaders" />
                   
                    <td><input name="project_date" value="{{old('project_date', $dmaicProject->project_date)}}" type="date" class="form-control" id="project_date" />
                    <td><input name="Enterproj" value="{{old('Enterproj', $dmaicProject->Enterproj)}}" type="date" class="form-control" id="Enterproj" />

                <td> <button type="submit" class="btn btn-primary">Update</button>
                </td>
            </tr>

        </tbody>
    </table>
</form>
</div>

		<nav>
			<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Define</button>
				<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Measure</button>
				<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Analyses</button>
				<button class="nav-link" id="nav-improve-tab" data-bs-toggle="tab" data-bs-target="#nav-improve" type="button" role="tab" aria-controls="nav-improve" aria-selected="false">Improve</button>
				<button class="nav-link" id="nav-control-tab" data-bs-toggle="tab" data-bs-target="#nav-control" type="button" role="tab" aria-controls="nav-control" aria-selected="false">controle</button>

			</div>
		</nav>
 












    <div class="tab-content p-3 border bg-light" id="nav-tabContent">
    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="card-body">
             <div style="margin-left:1000px;">         
            <a href="{{ route('Define.step1',  $dmaicProject->id) }}" class="btn btn-primary ">start Define phase</a>
            </div>
                 <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 1: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                
                                <tr>
                                    <td>identify_the_business_gap:</td>
                                    <td><strong>{{$dmaicProject->crete_a_value_stream}}</strong></td>
                                </tr>
                                
                                <tr>
                                    <td>Document_the_process:</td>
                                    <td><strong>{{$dmaicProject->Document_the_process}}</strong></td>
                                </tr>
                                <tr>
                                    <td>colllect_and_transltae:</td>
                                    <td><strong>{{$dmaicProject->colllect_and_transltae}}</strong></td>
                                </tr>
                                <tr>
                                    <td>scope_the_project:</td>
                                    <td><strong>{{$dmaicProject->scope_the_project}}</strong></td>
                                </tr>
                                
                              
                            </table>
                    </div>
                    
                </div>
               
                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 2: Validate measurment systems of outputs</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Define_metrics_and_defects:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->Define_metrics_and_defects}}</td>
                                </tr>
                                <tr>
                                    <td>Establish_preliminary:</td>
                                    <td><strong></strong>{{$dmaicProject->Establish_preliminary}}</td>
                                </tr>
                                <tr>
                                    <td>Dvelop_problem_objective:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->Dvelop_problem_objective}}</td>
                                </tr>
                                <tr>
                                    <td>Estimate_financial:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->Estimate_financial}}</td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">STEP 3/3 - Validate measurment system for outputs</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>confirm_improvement_methodology :</td>
                                    <td><strong>{{$dmaicProject->confirm_improvement_methodology}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Define_project_roles:</td>
                                    <td><strong>{{$dmaicProject->Define_project_roles}}</strong></td>
                                </tr>
                                <tr>
                                    <td>identify_project_risks:</td>
                                    <td><strong>{{$dmaicProject->identify_project_risks}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Establish_project_timeline:</td>
                                    <td><strong>{{$dmaicProject->Establish_project_timeline}}</strong></td>
                                </tr>
                                <tr>
                                    <td>create_communication_plan:</td>
                                    <td><strong>{{$dmaicProject->create_communication_plan}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    
                </div>
                </div>

                <a href="" class="btn btn-danger " style="margin-left: 600px;margin-top:40px;">champion project checklist</a>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="card-body">
             <div style="margin-left:1000px;">         
            <a href="{{ route('measure.step1',  $dmaicProject->id) }}" class="btn btn-primary ">start measure phase</a>
            </div>
                 <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 1: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>option:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>create_a_value_stream:</td>
                                    <td><strong>{{$dmaicProject->crete_a_value_stream}}</strong></td>
                                </tr>
                        
                              
                            </table>
                    </div>
                    
                </div>
               
                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 2: Validate measurment systems of outputs</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>create_processflow_diagram:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->create_processflow_diagram}}</td>
                                </tr>
                                <tr>
                                    <td>expose_simplification_opportunities:</td>
                                    <td><strong></strong>{{$dmaicProject->expose_simplification_opportunities}}</td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">STEP 3/3 - Validate measurment system for outputs</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>analyse_measurememnts_systems :</td>
                                    <td><strong>{{$dmaicProject->analyse_measurememnts_systems}}</strong></td>
                                </tr>
                                <tr>
                                    <td>improve_Measurement_systems_if_needed:</td>
                                    <td><strong>{{$dmaicProject->improve_Measurement_systems_if_needed}}</strong></td>
                                </tr>
                                <tr>
                                    <td>collect_data:</td>
                                    <td><strong>{{$dmaicProject->collect_data}}</strong></td>
                                </tr>
                                <tr>
                                    <td>examine_process_stability:</td>
                                    <td><strong>{{$dmaicProject->examine_process_stability}}</strong></td>
                                </tr>
                                <tr>
                                    <td>perform_capability_analysis:</td>
                                    <td><strong>{{$dmaicProject->perform_capability_analysis}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    
                </div>
                </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="card-body">
             <div style="margin-left:1000px;">         
            <a href="{{ route('Analyse.step1',  $dmaicProject->id) }}" class="btn btn-primary ">start Analyse phase</a>
            </div>
                 <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 1: identify Potential causes</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                
                                <tr>
                                    <td>develop_list_of_potential_causes:</td>
                                    <td><strong>{{$dmaicProject->develop_list_of_potential_causes}}</strong></td>
                                </tr>
                                
                                <tr>
                                    <td>narrow_down_list_of_potential_causes:</td>
                                    <td><strong>{{$dmaicProject->narrow_down_list_of_potential_causes}}</strong></td>
                                </tr>
       
                                
                              
                            </table>
                    </div>
                    
                </div>
               
                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 2: Validate measurment systems of outputs</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>collect_dataon_xs:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->collect_dataon_xs}}</td>
                                </tr>
                                <tr>
                                    <td>perform_graphical_analysis:</td>
                                    <td><strong></strong>{{$dmaicProject->perform_graphical_analysis}}</td>
                                </tr>
                                <tr>
                                    <td>perform_statical_analysis:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->perform_statical_analysis}}</td>
                                </tr>
                                <tr>
                                    <td>condact_waste_analysis:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->condact_waste_analysis}}</td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">STEP 3/3 - Validate measurment system for outputs</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Evaluate_impact_of_the_x_and_y :</td>
                                    <td><strong>{{$dmaicProject->Evaluate_impact_of_the_x_and_y}}</strong></td>
                                </tr>
                                <tr>
                                    <td>state_prliminary:</td>
                                    <td><strong>{{$dmaicProject->state_prliminary}}</strong></td>
                                </tr>
                                
                            </table>
                    </div>
                    
                </div>
                </div>

                <a href="" class="btn btn-danger " style="margin-left: 600px;margin-top:40px;">champion project checklist</a>
    </div>
    <div class="tab-pane fade" id="nav-improve" role="tabpanel" aria-labelledby="nav-improve-tab">
    <div class="card-body">
             <div style="margin-left:1000px;">         
            <a href="{{ route('improve.step1',  $dmaicProject->id) }}" class="btn btn-primary ">start improve phase</a>
            </div>
                 <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 1: Generate potential solutions</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>option:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Generate_potential_solutions:</td>
                                    <td><strong>{{$dmaicProject->Generate_potential_solutions}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Evaluate_potential_solution:</td>
                                    <td><strong>{{$dmaicProject->create_futur_staste_VSM}}</strong></td>
                                </tr>
                        
                              
                            </table>
                    </div>
                    
                </div>
               
                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 2: select and Test Solutions</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Evaluate_potential_solution:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->Evaluate_potential_solution}}</td>
                                </tr>
                                <tr>
                                    <td>state_y_f:</td>
                                    <td><strong></strong>{{$dmaicProject->state_y_f}}</td>
                                </tr>
                              
                            </table>
                    </div>
                    </div>

                    

                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">STEP 3/3 - Develop implementation plan</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Develop_implementation_plan :</td>
                                    <td><strong>{{$dmaicProject->Develop_implementation_plan}}</strong></td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>

			</div>
    </div>
    <div class="tab-pane fade" id="nav-control" role="tabpanel" aria-labelledby="nav-control-tab">
    <div class="card-body">
             <div style="margin-left:1000px;">         
            <a href="{{ route('control.step1',  $dmaicProject->id) }}" class="btn btn-primary ">start control phase</a>
            </div>
                 <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 1: Create Control and monitoring plan</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                
                                <tr>
                                    <td>Mistake_proof_the_process:</td>
                                    <td><strong>{{$dmaicProject->Mistake_proof_the_process}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Determine_thexs_to_control_and_methods:</td>
                                    <td><strong>{{$dmaicProject->Determine_thexs_to_control_and_methods}}</strong></td>
                                </tr>
                         
                                <tr>
                                    <td>complete_msa_on_critical_xs:</td>
                                    <td><strong>{{$dmaicProject->complete_msa_on_critical_xs}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Determine_ys_to_monitor_and_metrics_reporting:</td>
                                    <td><strong>{{$dmaicProject->Determine_ys_to_monitor_and_metrics_reporting}}</strong></td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>
               
                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">Step 2: select and Test Solutions</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Revise_develop_process_documentation:</td>
                                    <td class="table-cell"><strong></strong>{{$dmaicProject->Revise_develop_process_documentation}}</td>
                                </tr>
                                <tr>
                                    <td>implement_solution:</td>
                                    <td><strong></strong>{{$dmaicProject->implement_solution}}</td>
                                </tr>
                                <tr>
                                    <td>Evaluate_implementation:</td>
                                    <td><strong></strong>{{$dmaicProject->Evaluate_implementation}}</td>
                                </tr>
    
                                
                            </table>
                    </div>
                    
                </div>

                <div class="card">
                    <div class="card-header" style="background-color:#8ecae6 ;">STEP 3/3 - Develop implementation plan</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>develop_transition_plan :</td>
                                    <td><strong>{{$dmaicProject->develop_transition_plan}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Handoff_to_process_owner :</td>
                                    <td><strong>{{$dmaicProject->Handoff_to_process_owner}}</strong></td>
                                </tr> <tr>
                                    <td>Develop_implementation_plan :</td>
                                    <td><strong>{{$dmaicProject->Develop_implementation_plan}}</strong></td>
                                </tr> <tr>
                                    <td>capture_lessons_learned :</td>
                                    <td><strong>{{$dmaicProject->capture_lessons_learned}}</strong></td>
                                </tr> <tr>
                                    <td>write_final_report :</td>
                                    <td><strong>{{$dmaicProject->write_final_report}}</strong></td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>
          
			</div>
    </div>
</div>
    
    @endsection
   <style>
    .table-cell {
    max-width: max-content; /* Adjust the width as needed */
    word-wrap: break-word;
    overflow-wrap: break-word;
}
   </style>

