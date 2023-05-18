@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updatedefine1',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 1/3 - Define and Scope Problem"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="identify_the_business_gap" class="form-label">identify_the_business_gap</label>
                        <textarea name="identify_the_business_gap" value="{{old('identify_the_business_gap', $dmaicProject->problem_analysis)}}" type="identify_the_business_gap" class="form-control" id="identify_the_business_gap"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Document_the_process" class="form-label">Document_the_process</label>
                        <textarea name="Document_the_process" value="{{old('Document_the_process', $dmaicProject->Document_the_process)}}" type="Document_the_process" class="form-control" id="Document_the_process"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="colllect_and_transltae" class="form-label">colllect_and_transltae</label>
                        <textarea name="colllect_and_transltae" value="{{old('colllect_and_transltae', $dmaicProject->colllect_and_transltae)}}"  type="colllect_and_transltae" class="form-control" id="colllect_and_transltae"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="scope_the_project" class="form-label">scope_the_project</label>
                        <textarea name="scope_the_project" value="{{old('scope_the_project', $dmaicProject->scope_the_project)}}" type="scope_the_project" class="form-control" id="scope_the_project"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection