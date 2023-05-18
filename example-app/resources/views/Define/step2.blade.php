@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">
<form method="post" action="{{route('updatedefine2',$dmaicProject->id)}}">
                    @csrf
                    <div class="col-12 col-md-6 mb-4">
                    <div class="card p-4">
                    <div class="card-header bg-primary text-white"> STEP 2/3 - Determine Projects objectives and Benefits"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="Define_metrics_and_defects" class="form-label">Define_metrics_and_defects</label>
                        <textarea name="Define_metrics_and_defects" value="{{old('Define_metrics_and_defects', $dmaicProject->Define_metrics_and_defects)}}"  type="Define_metrics_and_defects" class="form-control" id="Define_metrics_and_defects"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Establish_preliminary" class="form-label">Establish_preliminary</label>
                        <textarea name="Establish_preliminary" value="{{old('Establish_preliminary', $dmaicProject->Establish_preliminary)}}" type="Establish_preliminary" class="form-control" id="Establish_preliminary"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Dvelop_problem_objective" class="form-label">Dvelop_problem_objective</label>
                        <textarea name="Dvelop_problem_objective" value="" type="Dvelop_problem_objective" class="form-control" id="Dvelop_problem_objective"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Estimate_financial" class="form-label">Estimate_financial</label>
                        <textarea name="Estimate_financial" value="" type="Estimate_financial" class="form-control" id="Estimate_financial"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
               
                </form>
                </div>

@endsection