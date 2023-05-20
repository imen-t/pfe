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
               <select class="form-control" name="the_X_are_prioritized">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               
                <select class="form-control" name="FMEA_analysis_completed">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="Process_data_visually">
                     <option selected>YES</option>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>
               </select>
               <select class="form-control" name="X_and_y_explored">
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