@extends('layouts.app')

@section('content')
<div class="col py-3">
    <div class="row" style="overflow-x: hidden;">
        <h2 style="color: #333; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin-left: 300px;">Choose and start a new project</h2>
        <div class="col-6 card p-4 mx-auto">
            <div class="card-body" style="display: grid; gap: 10px; margin-top: 20px;">
                <a type="button" class="btn btn-primary btn-lg" href="#">QRQC</a>
                <a type="button" class="btn btn-primary btn-lg" href="{{ route('projects.create') }}">A3</a>
                <a type="button" class="btn btn-primary btn-lg" href="dmaic.blade.php">DMAIC</a>
                <a type="button" class="btn btn-primary btn-lg" href="#">OIL</a>
            </div>
        </div>
    </div>
</div>



@endsection


               
                