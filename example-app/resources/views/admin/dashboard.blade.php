@extends('admin.defaultadmin')
@section('content')
@php
    use App\Models\User;
    use App\Models\Project;
    use App\Models\dmaicProject;
    use App\Models\Action;

    // Get the count of users
    $userCount = User::count();

    // Get the count of a3 projects
    $a3ProjectCount = Project::count();

    // Get the count of dmaic projects
    $dmaicProjectCount = dmaicProject::count();

   // Get the count of a3 Tasks
    $a3taskscount = Action::count();

    // Get the count of projects for each user
    $userProjectCounts = User::withCount(['projects', 'dmaicProjects'])->get();

@endphp
<div class="container-fluid" style="overflow-x: hidden; margin-top: 10px;">

   <div class="row g-6 mb-6">
    <div class="col-xl-3 col-sm-6 col-12" style="width: 300px;">
        <div class="card shadow border-0 ">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h3 font-semibold text-muted text-sm d-block mb-2">Users</span>
                        <span class="h3 font-bold mb-0">{{ $userCount }}</span>
                    </div>
                </div>

                <hr>

                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12" style="width: 300px;">
        <div class="card shadow border-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h3 font-semibold text-muted text-sm d-block mb-2">A3 projects</span>
                        <span class="h3 font-bold mb-0">{{ $a3ProjectCount }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12" style="width: 300px;">
        <div class="card shadow border-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h3 font-semibold text-muted text-sm d-block mb-2">Dmaic Projects</span>
                        <span class="h3 font-bold mb-0">{{ $dmaicProjectCount }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                            <i class="bi bi-clock-history"></i>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12" style="width: 300px;">
        <div class="card shadow border-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h3 font-semibold text-muted text-sm d-block mb-2 ">Tasks</span>
                        <span class="h3 font-bold mb-0">{{ $a3taskscount }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                            <i class="bi bi-clock-history"></i>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
    <!-- User Projects Table -->
    <div class="row" style="margin-top: 30px; margin-left:30px">
    <div class="col-md-12">
        <div class="card"style="width:920px">
            <div class="card-header" style="background-color: #FBA51A;">
                <h4>User Projects</h4>
            </div>
            <div class="card-body" >
            <table id="projectsTable" class="table  table-hover">
      
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>email</th>
                            <th>ranking</th>
                            <th>A3 Projects</th>
                            <th>Dmaic Projects</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userProjectCounts as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->ranking }}</td>
                                <td>{{ $user->projects_count }}</td>
                                <td>{{ $user->dmaic_projects_count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

   

@endsection








