@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updatecontrol2',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 2/3 - Identify Potential Causes"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="Revise_develop_process_documentation" class="form-label">Revise_develop_process_documentation</label>
                        <textarea name="Revise_develop_process_documentation" value="{{old('Revise_develop_process_documentation', $dmaicProject->Revise_develop_process_documentation)}}" type="text" class="form-control" id="Revise_develop_process_documentation"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="implement_solution" class="form-label">implement_solution</label>
                        <textarea name="implement_solution" value="{{old('implement_solution', $dmaicProject->implement_solution)}}" type="text" class="form-control" id="implement_solution"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Evaluate_implementation" class="form-label">Evaluate_implementation</label>
                        <textarea name="Evaluate_implementation" value="{{old('Evaluate_implementation', $dmaicProject->Evaluate_implementation)}}" type="text" class="form-control" id="Evaluate_implementation"></textarea>
                   
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection