@extends('layouts.app')

@section('content')

<div class="col py-3">



    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Location</th>
                <th scope="col">project leader</th>
                <th scope="col">project type</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($projects as $project)
            <tr>
                <td> {{ $project->title }}</td>
                <td> {{ $project->location }}</td>
                <td> {{ $project->project_leader }}</td>
                <td> {{ $project->project_type }}</td>
                <td> {{ $project->date }}</td>
                <td> <a type="submit" href="{{route('projects.edit',$project->id)}}" class="btn btn-warning">
                        Edit
                    </a>
                    <form method="POST" action="{{ route('projects.destroy',$project->id ) }}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-icon">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            @empty
            <p>No History</p>
            @endforelse



        </tbody>
    </table>
</div>
@endsection