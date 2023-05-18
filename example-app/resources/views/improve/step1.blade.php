@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updateimprove1',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Generate Potential Solutions"</div>
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
                        <label for="Generate_potential_solutions" class="form-label">Generate_potential_solutions</label>
                        <textarea name="Generate_potential_solutions" value="{{old('Generate_potential_solutions', $dmaicProject->Generate_potential_solutions)}}" type="text" class="form-control" id="Generate_potential_solutions"></textarea>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="create_futur_staste_VSM" class="form-label">create_futur_staste_VSM</label>
                        <textarea name="create_futur_staste_VSM" value="" type="text" class="form-control" id="create_futur_staste_VSM"></textarea>
                    </div> -->
                    
                   
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection