@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updateAnalyse3',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 3/3 -identify significant causes to focus on y=f(x's)"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="Evaluate_impact_of_the_x_and_y" class="form-label">Evaluate_impact_of_the_x_and_y</label>
                        <textarea name="Evaluate_impact_of_the_x_and_y" value="{{old('Evaluate_impact_of_the_x_and_y', $dmaicProject->Evaluate_impact_of_the_x_and_y)}}" type="Evaluate_impact_of_the_x_and_y" class="form-control" id="Evaluate_impact_of_the_x_and_y"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="state_prliminary" class="form-label">state_prliminary</label>
                        <textarea name="state_prliminary" value="{{old('state_prliminary', $dmaicProject->state_prliminary)}}"  type="state_prliminary" class="form-control" id="state_prliminary"></textarea>
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection