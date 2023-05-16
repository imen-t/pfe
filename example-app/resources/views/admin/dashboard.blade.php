@extends('admin.defaultadmin')
@section('content')
<style>

</style>
<div class="container-fluid" style="overflow-x: hidden;margin-top:10px;">
                <!-- Card stats -->
                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Users</span>
                                        <span class="h3 font-bold mb-0">$750.90</span>
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
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">A3 projects</span>
                                        <span class="h3 font-bold mb-0">215</span>
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
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Dmaic Projects</span>
                                        <span class="h3 font-bold mb-0">1.400</span>
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

                    <div class="box box-info" style="border: solid 2px;border-color:#000;border-radius: 8px;width:max-content;margin-top:20px;">
  <div class="box-header">
    <h3 class="box-title" style="color: orange;">A3 projects</h3>
  </div>
  <div class="box-body table-responsive no-padding">
    <div class="scrollable-table">

      <table class="table table-hover table-bordered table-striped" style="font-family:'Lucida Grande', sans-serif ; color: #0c0c0c; width:1200px">
                    <tr>
                        <th>ID</th>
                        <th>Libelle</th>
                        <th>Chef</th>
                        <th>Status</th>
                        <th>Due</th>
                        <th></th>
                    </tr>
      </table>
    </div>
  </div>
</div>

<div class="box box-info" style="border: solid 2px;border-color:#000;border-radius: 8px;width:max-content;margin-top:20px;">
  <div class="box-header">
    <h3 class="box-title" style="color: orange;">Dmaic projects</h3>
  </div>
  <div class="box-body table-responsive no-padding">
    <div class="scrollable-table">
    <table class="table table-hover table-bordered table-striped" style="font-family:'Lucida Grande', sans-serif ; color: #0c0c0c; width:1200px">
                    <tr>
                        <th>ID</th>
                        <th>Libelle</th>
                        <th>Chef</th>
                        <th>Status</th>
                        <th>Due</th>
                        <th></th>
                    </tr>
      
      </table>
    </div>
  </div>
</div>

@endsection