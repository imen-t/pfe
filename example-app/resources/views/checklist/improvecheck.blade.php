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
               <select class="form-control" name="Solution_alternatives_generated">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               
                <select class="form-control" name="Solution_identified ">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="Implementation_plan_completed">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="improvement_in_the_overall_Y">
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