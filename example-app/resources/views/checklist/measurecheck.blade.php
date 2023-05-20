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
               
               
                 <input type="text" id="comment1">
                 <input type="file">
    
                 <!-- <div>
                        <label for="The_Y_variable_baseline.">The Y variable baseline is collected and Graphed..</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                        <input type="text" id="comment2">
                         <input type="file">
                 </div><div>
                        <label for="Measurement_System_Analysis">Measurement System Analysis Completed on the Y variable(s). Good measurement system.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div><div>
                        <label for="improve_the_Measurement_System" >improve the Measurement System until < 30% Gage R and R for variable data or > 85% for attribute data.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div><div>
                        <label for="Capability_Analysis ">Capability Analysis completed on primary Y variable (s).</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 </div>
                 <div>
                        <label for="the_X_are_prioritized">the X’s are prioritized from the process map through the Cause and Effect Analysis or the Fishbone</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 </div>
                 <div>
                        <label for="FMEA_analysis_completed"> FMEA analysis with high priority RPN actions completed.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 </div>
                 <div>
                        <label for="Process_data_visually">Process data visually analyzed (potential causes graphically identified)</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 <div>
                        <label for=" X_and_y_explored"> X’s and Y’s explored and relationship between them are statistically verified.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No -->
                 </div>
                </div>
         </div>



</form>
</div>

@endsection