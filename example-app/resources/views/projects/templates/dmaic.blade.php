@extends('layouts.app')

@section('content')
<!-- Link to Section A -->
<a href="{{ url('#section-a') }}">Jump to Section A</a>

<!-- Form Section A -->
<div id="section-a">
<div class="col-12 col-md-6 mb-4">

<div class="card p-4">
    <h2>Section A</h2>
    <form action="{{ route('form.submit') }}" method="POST">
        <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <input type="description" class="form-control" id="description" aria-describedby="description">
                        <div id="description" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">File</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</div>

<!-- Link to Section B -->
<a href="{{ url('#section-b') }}">Jump to Section B</a>

<!-- Form Section B -->
<div id="section-b" >
    <div class="col-12 col-md-6 mb-4">

    <div class="card p-4">
        <h2>Section B</h2>
        <form action="{{ route('form.submit') }}" method="POST">
            <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <input type="description" class="form-control" id="description" aria-describedby="description">
                            <div id="description" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">File</label>
                            <input type="file" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

<!-- Link to Section C -->
<a href="{{ url('#section-c') }}">Jump to Section C</a>

<!-- Form Section C -->
<div id="section-c">
    <h2>Section C</h2>
    <form action="{{ route('form.submit') }}" method="POST">
        <!-- form fields for section C -->
    </form>
</div>

<!-- continue with sections D through Z -->

@endsection