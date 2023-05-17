@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">
<form method="POST" action="{{ route('measure.step1.post', $dmaicProject->id) }}">
    @csrf
    <div class="col-12 col-md-6 mb-4">
    <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Define "AS IS" Process"</div>
                <div class="card-body">
                <label for="">Select option:</label>
                    <div class="mb-3" style="margin-left: 100px;">
                        
                       <div class="form-check">
                            <input class="form-check-input" type="radio" name="defect" id="defect">
                            <label class="form-check-label" for="defect">
                                Defect
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="time" id="time" checked>
                            <label class="form-check-label" for="time">
                                Time
                            </label>
                        </div>
                    </div>
      
                    <div class="mb-3">
                        <label for="crete_a_value_stream" class="form-label">create_a_value_stream</label>
                        <textarea name="crete_a_value_stream" value="{{ $dmaicProject->crete_a_value_stream }}" type="crete_a_value_stream" class="form-control" id="crete_a_value_stream"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-left: 600px;">Next</button>
                    </div>
                 </div>
                </form>
           

            </div>


   

@endsection
