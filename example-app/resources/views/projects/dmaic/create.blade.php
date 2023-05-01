@extends('layouts.app')

@section('content')
<div class="col py-3">

    <div class="row " style="overflow-x: hidden;">
        <h2 style=" color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin-left:300px;">Start A3 project</h2>
        <div class="col-6 card p-4 mx-auto">
            <form method="post" action="{{route('projects.store')}}">
                @csrf
                <!-- Title -->
                <div class="mb-3">
                    <label for="projecttitle" class="form-label">Title</label>
                    <input name="projecttitle" type="text" class="form-control" id="projecttitle">
                </div>
                <!-- location -->
                <div class="mb-3">
                    <label for="projectlocation" class="form-label">location</label>
                    <input name="projectlocation"  type="text" class="form-control" id="projectlocation">
                </div>
                <!-- Date -->
                <div class="mb-3">
                    <label for="project_date" class="form-label">date</label>
                    <input name="project_date" type="date" class="form-control" id="project_date">
                </div>
                <!-- project_leader -->
                <div class="mb-3">
                    <label for="dmaic_project_leaders" class="form-label">Project Leader</label>
                    <input name="dmaic_project_leaders" type="text" class="form-control" id="dmaic_project_leaders">
                </div>
                <div class="mb-3">
                    <label for="project_reviewer" class="form-label">project Reviewer</label>
                    <input name="project_reviewer" type="text" class="form-control" id="project_reviewer">
                </div>
                 
                <div class="mb-3">
                    <label for="Enterproj" class="form-label">Enterproj</label>
                    <input name="Enterproj" type="text" class="form-control" id="Enterproj">
                </div>
                <!-- project_leader -->
                
                <!-- Title -->
                <!-- <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title">
                </div> -->

                <a type="button" class="btn btn-danger" href="{{ route('home') }}"> Cancel
                </a>
                <button type="submit" class="btn btn-primary" style="margin-left: 430px;">Submit</button>
                


            </form>

        </div>
    </div>
</div>
@endsection