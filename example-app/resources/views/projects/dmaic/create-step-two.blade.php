@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('projects.dmaic.create.step.two.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">step1:Define And scope Problem</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            <div class="form-group">
                                <label for="Define_metrics_and_defects">identify the business gap::</label>
                                <input type="text" value="{{ $projects->Establish_preliminary ?? '' }}" class="form-control" id="Establish_preliminary"  name="identify_the_business_gap">
                            </div>
                            <div class="form-group">
                                <label for="Establish_preliminary">Establish_preliminary:</label>
                                <input type="text"  value="{{{ $projects->Establish_preliminary ?? '' }}}" class="form-control" id="Establish_preliminary" name="Document_the_process"/>
                            </div>
   
                            <div class="form-group">
                                <label for="Dvelop_problem_objective">Dvelop_problem_objective:</label>
                                <textarea type="text"  class="form-control" id="Dvelop_problem_objective" name="Dvelop_problem_objective">{{{ $projects->Dvelop_problem_objective ?? '' }}}</textarea>
                            </div>
                          
                            <div class="form-group">
                                <label for="Estimate_financial">Estimate_financial:</label>
                                <textarea type="text"  class="form-control" id="Estimate_financial" name="Estimate_financial">{{{ $projects->Estimate_financial ?? '' }}}</textarea>
                            </div>
                            
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
