@extends('layouts.app')

@section('content')



    <div class="card p-3 shadow" style="max-width: 1260px;">
		<h2 class="text-center p-3">Card with Tabs</h2>
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
      <div class="row">
        <div class="col-12 col-md-4 mb-4">

            <div class="card p-4">
                <h3 class="card-title">Background</h3>


                <form  id="updateForm"method="post" action="{{route('updatedefine1',$dmaicProject->id)}}">
                @csrf
                    <div class="mb-3">
                        <label for="identify_the_business_gap" class="form-label">identify_the_business_gap</label>
                        <textarea name="identify_the_business_gap" value="{{old('identify_the_business_gap', $dmaicProject->problem_analysis)}}" type="identify_the_business_gap" class="form-control" id="identify_the_business_gap"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Document_the_process" class="form-label">Document_the_process</label>
                        <textarea name="Document_the_process" value="" type="Document_the_process" class="form-control" id="Document_the_process"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="colllect_and_transltae" class="form-label">colllect_and_transltae</label>
                        <textarea name="colllect_and_transltae" value="" type="colllect_and_transltae" class="form-control" id="colllect_and_transltae"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="scope_the_project" class="form-label">scope_the_project</label>
                        <textarea name="scope_the_project" value="" type="scope_the_project" class="form-control" id="scope_the_project"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
        <div class="col-12 col-md-4">
            <div class="card p-4">
                <h3 class="card-title">Analysis</h3>


                <form method="post" action="{{route('updatedefine2',$dmaicProject->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Define_metrics_and_defects" class="form-label">Define_metrics_and_defects</label>
                        <textarea name="Define_metrics_and_defects" value="{{old('Define_metrics_and_defects', $dmaicProject->Define_metrics_and_defects)}}"  type="Define_metrics_and_defects" class="form-control" id="Define_metrics_and_defects"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Establish_preliminary" class="form-label">Establish_preliminary</label>
                        <textarea name="Establish_preliminary" value="{{old('Establish_preliminary', $dmaicProject->Establish_preliminary)}}" type="Establish_preliminary" class="form-control" id="Establish_preliminary"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Dvelop_problem_objective" class="form-label">Conclusion</label>
                        <textarea name="Dvelop_problem_objective" value="" type="Dvelop_problem_objective" class="form-control" id="Dvelop_problem_objective"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="conclusion" class="form-label">Conclusion</label>
                        <textarea name="conclusion" value="" type="conclusion" class="form-control" id="conclusion"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card p-4">
                <h3 class="card-title">Create project charter</h3>


                <form >
                    @csrf
                    <div class="mb-3">
                        <label for="confirm_improvement_methodology" class="form-label"> confirm_improvement_methodology</label>
                        <textarea name="confirm_improvement_methodology" value="" type="confirm_improvement_methodology" class="form-control" id="confirm_improvement_methodology"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Define_project_roles" class="form-label">Define_project_roles</label>
                        <textarea name="Define_project_roles" value="" type="Define_project_roles" class="form-control" id="Define_project_roles"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="identify_project_risks" class="form-label">identify_project_risks</label>
                        <textarea name="identify_project_risks" value="" type="identify_project_risks" class="form-control" id="identify_project_risks"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Establish_project_timeline" class="form-label">Establish_project_timeline</label>
                        <textarea name="Establish_project_timeline" value="" type="Establish_project_timeline" class="form-control" id="Establish_project_timeline"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="create_communication_plan" class="form-label">create_communication_plan</label>
                        <textarea name="create_communication_plan" value="" type="create_communication_plan" class="form-control" id="create_communication_plan"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
     </div>
	</div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="card-body">
                      
                 <a href="{{ route('projects.dmaic.measure.CreateStepOne') }}" class="btn btn-primary pull-right">start measure phase</a>
                 <div class="card">
                    <div class="card-header">Step 3: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Product Name:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Amount:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product status:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Description:</td>
                                    <td><strong></strong></td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Product Name:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Amount:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product status:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Description:</td>
                                    <td><strong></strong></td>
                                </tr>
                               
                            </table>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Product Name:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Amount:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product status:</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Product Description:</td>
                                    <td><strong></strong></td>
                                </tr>
                              
                            </table>
                    </div>
                    
                </div>
                </div>

                <a href="" class="btn btn-danger " style="margin-left: 600px;margin-top:40px;">champion project checklist</a>
			</div>

			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
				
			</div>
            <div class="tab-pane fade" id="nav-improve" role="tabpanel" aria-labelledby="nav-improve-tab">
				<p><strong>This is some placeholder content the Contact tab's associated content.</strong>
					Clicking another tab will toggle the visibility of this one for the next.
					The tab JavaScript swaps classes to control the content visibility and styling. You can use it with
					tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
			</div>
            <div class="tab-pane fade" id="nav-control" role="tabpanel" aria-labelledby="nav-control-tab">
            <div class="row">
        <div class="col-12 col-md-4 mb-4">

            <div class="card p-4">
                <h3 class="card-title"> <strong>step1:</strong> Create Control and monitoring plan</h3>


                <form  id="updateForm"method="post" action="{{route('updatedefine1',$dmaicProject->id)}}">
                @csrf
                    <div class="mb-3">
                        <label for="Mistake_proof_the_process" class="form-label">Mistake_proof_the_process</label>
                        <textarea name="Mistake_proof_the_process" value="{{old('Mistake_proof_the_process', $dmaicProject->Mistake_proof_the_process)}}" type="identify_the_business_gap" class="form-control" id="Mistake_proof_the_process"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Determine_thexs_to_control_and_methods" class="form-label">Determine_thexs_to_control_and_methods</label>
                        <textarea name="Determine_thexs_to_control_and_methods" value="" type="Determine_thexs_to_control_and_methods" class="form-control" id="Determine_thexs_to_control_and_methods"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="complete_msa_on_critical_xs" class="form-label">complete_msa_on_critical_xs</label>
                        <textarea name="complete_msa_on_critical_xs" value="" type="complete_msa_on_critical_xs" class="form-control" id="complete_msa_on_critical_xs"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="scope_the_project" class="form-label">Determine_ys_to_monitor_and_metrics_reporting</label>
                        <textarea name="Determine_ys_to_monitor_and_metrics_reporting" value="" type="Determine_ys_to_monitor_and_metrics_reporting" class="form-control" id="Determine_ys_to_monitor_and_metrics_reporting"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
        <div class="col-12 col-md-4">
            <div class="card p-4">
                <h3 class="card-title"><strong>step2:</strong> implement full scale solution</h3>


                <form method="post" action="{{route('updatedefine2',$dmaicProject->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Revise_develop_process_documentation" class="form-label">Revise_develop_process_documentation</label>
                        <textarea name="Revise_develop_process_documentation" value="{{old('Revise_develop_process_documentation', $dmaicProject->Revise_develop_process_documentation)}}"  type="Revise_develop_process_documentation" class="form-control" id="Revise_develop_process_documentation"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="implement_solution" class="form-label">implement_solution</label>
                        <textarea name="implement_solution" value="{{old('implement_solution', $dmaicProject->implement_solution)}}" type="implement_solution" class="form-control" id="implement_solution"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Evaluate_implementation" class="form-label">Evaluate_implementation</label>
                        <textarea name="Evaluate_implementation" value="" type="Evaluate_implementation" class="form-control" id="Evaluate_implementation"></textarea>
                    </div>
                 

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card p-4">
                <h3 class="card-title"> <strong>step3:</strong> Finalize transition</h3>


                <form >
                    @csrf
                    <div class="mb-3">
                        <label for="develop_transition_plan" class="form-label"> develop_transition_plan</label>
                        <textarea name="develop_transition_plan" value="" type="develop_transition_plan" class="form-control" id="develop_transition_plan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Handoff_to_process_owner" class="form-label">Handoff_to_process_owner</label>
                        <textarea name="Handoff_to_process_owner" value="" type="Handoff_to_process_owner" class="form-control" id="Handoff_to_process_owner"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="capture_lessons_learned" class="form-label">capture_lessons_learned</label>
                        <textarea name="capture_lessons_learned" value="" type="capture_lessons_learned" class="form-control" id="capture_lessons_learned"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="write_final_report" class="form-label">write_final_report</label>
                        <textarea name="write_final_report" value="" type="write_final_report" class="form-control" id="write_final_report"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
     </div>²
			</div>
		</div>
	</div>
    
@endsection
   

