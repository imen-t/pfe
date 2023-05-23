@extends('layouts.app')

@section('content')
<!-- Step 3 -->
<div style="margin-top: 60px ;margin-left:200px;">
<form method="post" action="{{route('storedefinecheck',$dmaicProject->id)}}">
    @csrf

    <div class="col-12 col-md-6 mb-4">
    <div class="card p-4">
                <div class="card-header bg-primary "> Define phase checklist</div>
                <div class="card-body">
                <div class="row">
        <div class="col-md-2">
        <label for="">project_Charter_Completed</label>

        <select class="form-control" name="project_Charter_Completed" id="project_Charter_Completed">
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="comment1"></label>
        <input type="text" name="comment1" id="comment1" class="form-control">
    </div>
    <div class="col-md-4">
        <label for=""></label>
        <input type="file" name="comment1" id="comment1" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="VOC_is_completed">VOC_is_completed</label>
        <select class="form-control" name="VOC_is_completed" id="VOC_is_completed">
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="comment1"></label>
        <input type="text" name="comment2" id="comment2" class="form-control" placeholder="comment">
    </div>
    <div class="col-md-4">
        <label for="comment1"> </label>
        <input type="file"  class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="Stakeholder_Analysis_and">Stakeholder_Analysis_and</label>
        <select class="form-control" name="Stakeholder_Analysis_and" id="Stakeholder_Analysis_and">
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="comment3"></label>
        <input type="text" name="comment3" id="comment3" class="form-control" placeholder="comment">
    </div>
    <div class="col-md-4">
        <label for="comment1"> </label>
        <input type="file"  class="form-control">
    </div>
</div>

<button type="submit" class="btn btn-primary " style="margin-left: 600px;margin-top:20px">Next</button>
         </div>



</form>
</div>

@endsection