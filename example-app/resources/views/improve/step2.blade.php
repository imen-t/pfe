@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updateimprove2',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 2/3 - select and test solutions"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="Evaluate_potential_solution" class="form-label">Evaluate_potential_solution</label>
                        <textarea name="Evaluate_potential_solution" value="{{old('Evaluate_potential_solution', $dmaicProject->Evaluate_potential_solution)}}" type="text" class="form-control" id="Evaluate_potential_solution"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="state_y_f" class="form-label">state_y_f</label>
                        <textarea name="state_y_f" value="{{old('state_y_f', $dmaicProject->state_y_f)}}" type="text" class="form-control" id="state_y_f"></textarea>
                   
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection