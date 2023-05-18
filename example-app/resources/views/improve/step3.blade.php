@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updateimprove3',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Develop implementation plan"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="Develop_implementation_plan" class="form-label">Develop_implementation_plan</label>
                        <textarea name="Develop_implementation_plan" value="{{old('Develop_implementation_plan', $dmaicProject->Develop_implementation_plan)}}" type="text" class="form-control" id="Develop_implementation_plan"></textarea>
                    </div>
                  
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection