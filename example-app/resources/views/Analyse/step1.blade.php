@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updateimprove1',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Identify Potential Causes"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="Mistake_proof_the_process" class="form-label">develop_list_of_potential_causes</label>
                        <textarea name="Mistake_proof_the_process" value="{{old('Mistake_proof_the_process', $dmaicProject->Mistake_proof_the_process)}}" type="Mistake_proof_the_process" class="form-control" id="Mistake_proof_the_process"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Determine_thexs_to_control_and_methods" class="form-label">Determine_thexs_to_control_and_methods</label>
                        <textarea name="Determine_thexs_to_control_and_methods" value="{{old('Determine_thexs_to_control_and_methods', $dmaicProject->Determine_thexs_to_control_and_methods)}}" type="Determine_thexs_to_control_and_methods" class="form-control" id="Determine_thexs_to_control_and_methods"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="complete_msa_on_critical_xs" class="form-label">complete_msa_on_critical_xs</label>
                        <textarea name="complete_msa_on_critical_xs" value="{{old('complete_msa_on_critical_xs', $dmaicProject->complete_msa_on_critical_xs)}}" type="complete_msa_on_critical_xs" class="form-control" id="complete_msa_on_critical_xs"></textarea>
                    </div><div class="mb-3">
                        <label for="Determine_ys_to_monitor_and_metrics_reporting" class="form-label">Determine_ys_to_monitor_and_metrics_reporting</label>
                        <textarea name="Determine_ys_to_monitor_and_metrics_reporting" value="{{old('Determine_ys_to_monitor_and_metrics_reporting', $dmaicProject->Determine_ys_to_monitor_and_metrics_reporting)}}" type="Determine_ys_to_monitor_and_metrics_reporting" class="form-control" id="Determine_ys_to_monitor_and_metrics_reporting"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection