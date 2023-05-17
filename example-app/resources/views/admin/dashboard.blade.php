@extends('admin.defaultadmin')
@section('content')
@php
    use App\Models\User;
    use App\Models\Project;
    use App\Models\DMAICProject;

    $userCount = User::count();
    $a3ProjectCount = Project::count();
    $dmaicProjectCount = dmaicProject::count();
@endphp
<div class="container-fluid" style="overflow-x: hidden;margin-top:10px;">
    <!-- Card stats -->
    <div class="row g-6 mb-6">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow border-0">
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
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h3 font-semibold text-muted text-sm d-block mb-2">A3 projects</span>
                            <span class="h3 font-bold mb-0">{{ $a3ProjectCount}}</span>
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
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h3 font-semibold text-muted text-sm d-block mb-2">Dmaic Projects</span>
                            <span class="h3 font-bold mb-0">{{$dmaicProjectCount}}</span>
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

    <div class="row" style="width:1200px;margin-top:30px;">
  <div class="col-md-6">
    <div class="box box-info" style="border: solid 2px; border-color:#000; border-radius: 8px; max-width: 100%; overflow-x: auto;">
      <div class="box-header bg-gradient-orange">
        <h3 class="box-title text-white">A3 Projects</h3>
      </div>
      <div class="box-body table-responsive">
        <table class="table table-hover table-bordered table-striped" style="font-family: 'Lucida Grande', sans-serif; color: #0c0c0c;">
          <tr>
            <th>ID</th>
            <th>Libelle</th>
            <th>Chef</th>
            <th>Status</th>
            <th>Due</th>
            <th></th>
          </tr>
          <!-- Add your table rows and data here -->
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-info" style="border: solid 2px; border-color:#000; border-radius: 8px; max-width: 100%; overflow-x: auto;">
      <div class="box-header bg-gradient-orange">
        <h3 class="box-title text-white">Dmaic Projects</h3>
      </div>
      <div class="box-body table-responsive">
        <table class="table table-hover table-bordered table-striped" style="font-family: 'Lucida Grande', sans-serif; color: #0c0c0c;">
          <tr>
            <th>ID</th>
            <th>Libelle</th>
            <th>Chef</th>
            <th>Status</th>
            <th>Due</th>
            <th></th>
          </tr>
          <!-- Add your table rows and data here -->
        </table>
      </div>
    </div>
  </div>
</div>

@endsection









