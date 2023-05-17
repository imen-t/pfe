@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">
<form method="POST" action="{{ route('measure.step2.post', $dmaicProject->id) }}">

    @csrf
    <div class="col-12 col-md-6 mb-4">
    <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 2/3 - Define "Validate measurment systems of outputs"</div>
                <div class="card-body">
   
                    <div class="mb-3">
                        <label for="create_processflow_diagram" class="form-label">create_processflow_diagram</label>
                        <textarea name="create_processflow_diagram" value="{{ $dmaicProject->create_processflow_diagram }}" type="create_processflow_diagram" class="form-control" id="create_processflow_diagram"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="expose_simplification_opportunities" class="form-label">expose_simplification_opportunities</label>
                        <textarea name="expose_simplification_opportunities" value="{{ $dmaicProject->expose_simplification_opportunities }}" type="expose_simplification_opportunities" class="form-control" id="expose_simplification_opportunities"></textarea>
                    </div>
                
                    <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="option2">Quick hit!</label>
                        <div class="form-check">
                            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                yes
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                no
                            </label>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                <label for="option3">objevtives met!</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                    </div>
                </div>

            </div>
           </div>

        </div>

           <button type="submit" class="btn btn-primary" style="margin-left: 600px;">Next</button>

</form>
@endsection

