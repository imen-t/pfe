@extends('layouts.app')

@section('content')
<!-- Step 3 -->
<div style="margin-top: 60px ;margin-left:200px;">
<form method="POST" action="{{ route('measure.step3.post',  $dmaicProject->id) }}">
    @csrf

    <div class="col-12 col-md-6 mb-4">
    <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 3/3 - Quantify Process performance"</div>
                <div class="card-body">
   
                    <div class="mb-3">
                        <label for="analyse_measurememnts_systems" class="form-label">analyse_measurememnts_systems</label>
                        <textarea name="analyse_measurememnts_systems" value="{{ $dmaicProject->analyse_measurememnts_systems }}" type="analyse_measurememnts_systems" class="form-control" id="analyse_measurememnts_systems"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="improve_Measurement_systems_if_needed" class="form-label">improve_Measurement_systems_if_needed</label>
                        <textarea name="improve_Measurement_systems_if_needed" value="{{ $dmaicProject->improve_Measurement_systems_if_needed }}" type="improve_Measurement_systems_if_needed" class="form-control" id="improve_Measurement_systems_if_needed"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="collect_data" class="form-label">collect_data</label>
                        <textarea name="collect_data" value="{{ $dmaicProject->create_processflow_diagram }}"  type="collect_data" class="form-control" id="collect_data"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="examine_process_stability" class="form-label">examine_process_stability</label>
                        <textarea name="examine_process_stability" value="{{ $dmaicProject->examine_process_stability }}"  type="examine_process_stability" class="form-control" id="examine_process_stability"></textarea>
                    </div>
 
                    <div class="mb-3">
                        <label for="perform_capability_analysis" class="form-label">perform_capability_analysis</label>
                        <textarea name="perform_capability_analysis" value="{{ $dmaicProject->perform_capability_analysis }}" type="perform_capability_analysis" class="form-control" id="perform_capability_analysis"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 600px;">Next</button>
            
                    
                </div>  
            </div>
         </div>



</form>
</div>

@endsection
<!-- <form method="post" action="{{route('updatedefine2',$dmaicProject->id)}}">
     -->