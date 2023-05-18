@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updatecontrol3',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Identify Potential Causes"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="develop_transition_plan" class="form-label">develop_transition_plan</label>
                        <textarea name="develop_transition_plan" value="{{old('develop_transition_plan', $dmaicProject->develop_transition_plan)}}" type="text" class="form-control" id="develop_transition_plan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Handoff_to_process_owner" class="form-label">Handoff_to_process_owner</label>
                        <textarea name="Handoff_to_process_owner" value="{{old('Handoff_to_process_owner', $dmaicProject->Handoff_to_process_owner)}}" type="text" class="form-control" id="Handoff_to_process_owner"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="capture_lessons_learned" class="form-label">capture_lessons_learned</label>
                        <textarea name="capture_lessons_learned" value="{{old('capture_lessons_learned', $dmaicProject->capture_lessons_learned)}}" type="text" class="form-control" id="capture_lessons_learned"></textarea>
                    </div> 
                    <div class="mb-3">
                        <label for="write_final_report" class="form-label">write_final_report</label>
                        <textarea name="write_final_report" value="{{old('write_final_report', $dmaicProject->write_final_report)}}" type="text" class="form-control" id="write_final_report"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection