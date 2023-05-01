@extends('layouts.app')

@section('content')

<div class="col py-3">
<h2 style=" color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; "> A3 projects</h2>



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
                <td> {{ $project->projecttitle }}</td>
                <td> {{ $project->location }}</td>
                <td> {{ $project->project_leader }}</td>
                <td> {{ $project->project_type }}</td>
                <td> {{ $project->date }}</td>
                <td> <a type="submit" href="{{route('dmaicProjects.edit',$project->id)}}" class="btn btn-warning">
                        Edit
                    </a>
                    <form method="POST" action="{{ route('dmaicProjects.destroy',$project->id ) }}">
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