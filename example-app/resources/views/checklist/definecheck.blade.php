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
      <div>
                <div>
                        <label for="Process Map completed with the inputs identified.">Process Map completed with the inputs identified.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 <input type="text" id="comment1">
                 <input type="file">
     </div>
                 <div>
                        <label for="Process Map completed with the inputs identified.">The Y variable baseline is collected and Graphed..</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                        <input type="text" id="comment2">
                         <input type="file">
                 </div><div>
                        <label for="Process Map completed with the inputs identified.">Measurement System Analysis Completed on the Y variable(s). Good measurement system.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div><div>
                        <label for="improve the Measurement System until < 30% Gage R and R for variable data or > 85% for attribute data">improve the Measurement System until < 30% Gage R and R for variable data or > 85% for attribute data.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div><div>
                        <label for="Capability Analysis completed on primary Y variable (s).">Capability Analysis completed on primary Y variable (s).</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 </div>
                 <div>
                        <label for="the X’s are prioritized from the process map through the Cause and Effect Analysis or the Fishbone">the X’s are prioritized from the process map through the Cause and Effect Analysis or the Fishbone</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 </div>
                 <div>
                        <label for="FMEA analysis with high priority RPN actions completed."> FMEA analysis with high priority RPN actions completed.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 </div>
                 <div>
                        <label for="Process data visually analyzed (potential causes graphically identified)">Process data visually analyzed (potential causes graphically identified)</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                 <div>
                        <label for=" X’s and Y’s explored and relationship between them are statistically verified."> X’s and Y’s explored and relationship between them are statistically verified.</label>
                        <input type="radio" name="" value="yes"> Yes
                        <input type="radio" name="" value="no"> No
                 </div>
                </div>
         </div>



</form>
</div>

@endsection