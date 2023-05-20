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
               <select class="form-control" name="Control_plan">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               
                <select class="form-control" name="Control_plan_is_signed_off_by_process_owner ">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="New_process_standardized">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="The_improvement_has_sustained_the_gains_made_in_the_project">
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