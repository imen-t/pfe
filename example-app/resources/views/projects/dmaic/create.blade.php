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
                    <label for="title" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>
                <!-- location -->
                <div class="mb-3">
                    <label for="location" class="form-label">location</label>
                    <input name="location"  type="text" class="form-control" id="location">
                </div>
                <!-- Date -->
                <div class="mb-3">
                    <label for="date" class="form-label">date</label>
                    <input name="date" type="date" class="form-control" id="date">
                </div>
                <!-- project_leader -->
                <div class="mb-3">
                    <label for="project_leader" class="form-label">Project Leader</label>
                    <input name="project_leader" type="text" class="form-control" id="project_leader">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">User Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>  
                <!-- project_leader -->
                <div class="mb-3">
                    <select name="project_type" class="form-select" aria-label="Default select example">
                        <option value="Strategic Project" selected> Strategic Project</option>
                        <option value="Critical Project"> Critical Project</option>
                        <option value="Issue Resolution"> Issue Resolution</option>
                    </select>
                </div>
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