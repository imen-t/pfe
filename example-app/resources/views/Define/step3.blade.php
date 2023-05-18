@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">
<form method="post" action="{{route('updatedefine3',$dmaicProject->id)}}">
@csrf
    <div class="col-12 col-md-6 mb-4">
    <div class="card p-4">
    <div class="card-header bg-primary text-white"> STEP 3/3 - Create Project charter"</div>
    <div class="card-body">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
  
    </div>
    </div>
    </div>
    </form>
     
    </div>
@endsection
