@extends('layouts.app')

@section('content')
<div class="col py-3">

    <div class="row " style="overflow-x: hidden;">
        <h2 style=" color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin-left:300px;">Edit Action</h2>
        <div class="col-6 card p-4 mx-auto">
            <form method="post" action="{{route('results.updateresult',$result->id)}}">
                @csrf
             
                <!-- Title -->
                <div class="mb-3">
                    <label for="result_title" class="form-label">result</label>
                    <input name="result_title" value="{{old('result_title', $result->result_title)}}" type="text" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="Month" class="form-label">Month</label>
                    <input name="Month" value="{{old('Month', $result->Month)}}" type="text" class="form-control" id="Month">
                </div>
                  <!-- Impact -->
                  <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                 <select name="type" id="type">
                            <option value="Fcst">Fcst</option>
                            <option value="Act">Act</option>
                            <option value="plan">plan</option>
                            </select>          
                </div>
                <div class="mb-3">
                    <label for="status_result" class="form-label">status</label>
                 <select name="status_result" id="status_result">
                            <option value="on_target">on_target</option>
                            <option value="off_target">off_target</option>
                </select>          
                </div>

           

                <a type="button" class="btn btn-danger" href="{{ route('home') }}"> Cancel
                </a>
                <button type="submit" class="btn btn-primary" style="margin-left: 430px;">Submit</button>
                


            </form>

        </div>
    </div>
</div>
@endsection