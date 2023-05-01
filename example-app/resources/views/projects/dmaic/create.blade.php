@extends('layouts.app')

@section('content')
<div class="col py-3">
    <div class="row " style="overflow-x: hidden;">
        <h2 style=" color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin-left:300px;">Create Dmaic project for : {{$action->title}}</h2>
        <div class="col-6 card p-4 mx-auto">
            <form method="post" action="{{route('dmaicProjects.store')}}">
                @csrf
                <!-- Title -->
                <div class="mb-3">
                <input name="action_id" type="hidden" value="{{$action->id}}">

                    <label for="projecttitle" class="form-label">Project title</label>
                    <input name="projecttitle" type="text" class="form-control" id="projecttitle">
                </div>
  

                <a type="button" class="btn btn-danger" href="{{ route('dmaicProjects.index') }}"> Cancel
                </a>
                <button type="submit" class="btn btn-primary" style="margin-left: 430px;">Submit</button>
                


            </form>

        </div>
    </div>
</div>
@endsection