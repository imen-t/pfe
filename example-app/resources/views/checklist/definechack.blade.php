@extends('layouts.app')

@section('content')
<!-- Step 3 -->
<div style="margin-top: 60px ;margin-left:200px;">
<form >
    @csrf

    <div class="col-12 col-md-6 mb-4">
    <div class="card p-4">
                <div class="card-header bg-primary text-white"> Measure phase checklist</div>
                <div class="card-body">
                <select class="form-control" name="Process_Map_completed_with_the">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
              
                <select class="form-control" name="The_Y_variable_baseline">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>

               <select class="form-control" name="Measurement_System_Analysis">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>

               <select class="form-control" name="improve_the_Measurement_System">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="Capability_Analysis">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               
               <select class="form-control" name="project_Charter_Completed">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               
                <select class="form-control" name="VOC_is_completed">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name=" Stakeholder_Analysis_and">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
            
                 </div>
                </div>
         </div>



</form>
</div>

@endsection