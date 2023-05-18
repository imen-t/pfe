@extends('layouts.app')

@section('content')
<div style="margin-top: 60px ;margin-left:200px;">

<form  method="post" action="{{route('updateAnalyse2',$dmaicProject->id)}}">
                @csrf
                <div class="col-12 col-md-6 mb-4">
                <div class="card p-4">
                <div class="card-header bg-primary text-white"> STEP 2/3 - investigate the significance of x's"</div>
                   <div class="card-body">
                    <div class="mb-3">
                        <label for="collect_dataon_xs" class="form-label">collect_dataon_xs</label>
                        <textarea name="collect_dataon_xs" value="{{old('collect_dataon_xs', $dmaicProject->collect_dataon_xs)}}" type="collect_dataon_xs" class="form-control" id="collect_dataon_xs"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="perform_graphical_analysis" class="form-label">perform_graphical_analysis</label>
                        <textarea name="perform_graphical_analysis" value="{{old('perform_graphical_analysis', $dmaicProject->perform_graphical_analysis)}}"  type="perform_graphical_analysis" class="form-control" id="perform_graphical_analysis"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="perform_statical_analysis" class="form-label">perform_statical_analysis</label>
                        <textarea name="perform_statical_analysis" value="{{old('perform_statical_analysis', $dmaicProject->perform_statical_analysis)}}"  type="perform_statical_analysis" class="form-control" id="perform_statical_analysis"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="condact_waste_analysis" class="form-label">condact_waste_analysis</label>
                        <textarea name="condact_waste_analysis" value="{{old('condact_waste_analysis', $dmaicProject->condact_waste_analysis)}}"  type="condact_waste_analysis" class="form-control" id="condact_waste_analysis"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>

                @endsection