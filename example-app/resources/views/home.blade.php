@extends('layouts.app')

@section('content')

<div class="col py-3">

  <a type="button" class="button-30" href="{{ route('new-project') }}" style=" display: inline-block;
                outline: 0;
                border: 0;
                cursor: pointer;
                will-change: box-shadow,transform;
                background: radial-gradient( 100% 100% at 100% 0%, #89E5FF 0%, #5468FF 100% );
                box-shadow: 0px 2px 4px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px rgb(58 65 111 / 50%);
                padding: 0 32px;
                border-radius: 6px;
                color: #fff;
                height: 48px;
                font-size: 18px;
                text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
                transition: box-shadow 0.15s ease,transform 0.15s ease;
                text-decoration:none"> +New workspace
  </a>
  @php
    use App\Models\User;
    use App\Models\Project;
    use App\Models\dmaicProject;
    use App\Models\Action;

    $user = auth()->user(); // Get the authenticated user
    $actionCount = $user->actions()->count();
    $a3ProjectCount = $user->projects()->count(); // Get the count of projects associated with the user
    $dmaicProjectCount = $user->dmaicProjects()->count(); // Get the count of dmaicProjects associated with the user
@endphp
<div class="container-fluid" style="overflow-x: hidden;margin-top:10px;">

    <!-- Card stats -->
    <div class="row g-6 mb-6">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h3 font-semibold text-muted text-sm d-block mb-2">Actions</span>
                            <span class="h3 font-bold mb-0">{{ $actionCount }}</span>
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
        </div
  <!-- Action plan -->
  <div class="row project-actions mb-4" style="margin-top:30px">
    <h3 >TO DO lists </h3>
    
    <div class="col-md-12">
        <table class="table">
                
          <tr class="table-header">
            <th scope="col">Action</th>
            <th scope="col">Impact</th>
            <th scope="col">Owner</th>
            <th scope="col">Due date</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach (Auth::user()->actions as $action)
          <tr>

            <td>{{$action->title}}</td>

            <td>{{$action->impact}}</td>
            <td>{{$action->user->name}}</td>
            <td>
  @if (strtotime($action->due_date) > strtotime(date('Y-m-d')))
    <span class="badge bg-success">En cours</span>
  @else
    <span class="badge bg-danger">Done</span>
  @endif
</td>

            <td>

              <form method="POST" action="{{ route('actions.destroy', $action->id ) }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-icon">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table>
    </div>
  </div>


</div>


@endsection

<style>
  .table .table-header{
            background:#E1F5FE;
            color:#333;
        }
        .table .table-header .cell{
            padding:20px;
        }
</style>