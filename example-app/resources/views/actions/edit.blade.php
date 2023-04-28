@extends('layouts.app')

@section('content')
<div class="col py-3">

    <div class="row " style="overflow-x: hidden;">
        <h2 style=" color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin-left:300px;">Edit Action</h2>
        <div class="col-6 card p-4 mx-auto">
            <form method="post" action="{{route('actions.updateAction',$action->id)}}">
                @csrf
             
                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Action</label>
                    <input name="title" value="{{old('title', $action->title)}}" type="text" class="form-control" id="title">
                </div>
                  <!-- Impact -->
                  <div class="mb-3">
                    <label for="impact" class="form-label">Impact</label>
                    <input name="impact" value="{{old('impact', $action->impact)}}" type="text" class="form-control" id="impact">
                </div>
            <!-- Start Date -->
            <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input name="start_date" value="{{old('start_date', $action->start_date)}}" type="date" class="form-control" id="start_date">
                </div>
                    <!-- Due Date -->
            <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input name="due_date" value="{{old('due_date', $action->due_date)}}" type="date" class="form-control" id="due_date">
                </div>
      
                <!-- Owner -->
                <div class="mb-3">
                    <select name="user_id" class="form-select" aria-label="Default select example">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
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