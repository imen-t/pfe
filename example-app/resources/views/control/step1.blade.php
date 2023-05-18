@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updatecontrol1',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Generate Potential Solutions"</div>
                   <div class="card-body">
                   <label for="">Select option:</label>
                    <div class="mb-3" style="margin-left: 100px;">
                        
                    <div class="card-body">
                    <div class="mb-3">
                        <label for="Mistake_proof_the_process" class="form-label">Mistake_proof_the_process</label>
                        <textarea name="Mistake_proof_the_process" value="{{old('Mistake_proof_the_process', $dmaicProject->Mistake_proof_the_process)}}" type="identify_the_business_gap" class="form-control" id="identify_the_business_gap"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Determine_thexs_to_control_and_methods" class="form-label">Determine_thexs_to_control_and_methods</label>
                        <textarea name="Determine_thexs_to_control_and_methods" value="{{old('Determine_thexs_to_control_and_methods', $dmaicProject->Determine_thexs_to_control_and_methods)}}" type="Determine_thexs_to_control_and_methods" class="form-control" id="Determine_thexs_to_control_and_methods"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="complete_msa_on_critical_xs" class="form-label">complete_msa_on_critical_xs</label>
                        <textarea name="complete_msa_on_critical_xs" value="{{old('complete_msa_on_critical_xs', $dmaicProject->complete_msa_on_critical_xs)}}"  type="complete_msa_on_critical_xs" class="form-control" id="complete_msa_on_critical_xs"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Determine_ys_to_monitor_and_metrics_reporting" class="form-label">Determine_ys_to_monitor_and_metrics_reporting</label>
                        <textarea name="Determine_ys_to_monitor_and_metrics_reporting" value="{{old('Determine_ys_to_monitor_and_metrics_reporting', $dmaicProject->Determine_ys_to_monitor_and_metrics_reporting)}}" type="scope_the_project" class="form-control" id="Determine_ys_to_monitor_and_metrics_reporting"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection