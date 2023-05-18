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
  <!-- Action plan -->
  <div class="row project-actions mb-4" style="margin-top:30px">
    <h3 >TO DO lists </h3>
    
    <div class="col-md-12">
        <table class="table  table-striped">
                
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
            <td>{{$action->due_date}}</td>

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
            background:#FEC107;
            color:#333;
        }
        .table .table-header .cell{
            padding:20px;
        }
</style>