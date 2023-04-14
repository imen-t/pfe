@extends('layouts.app')

@section('content')
<div class="col py-3">

    <div class="row ">
        <div class="col-6 card p-4">
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


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection