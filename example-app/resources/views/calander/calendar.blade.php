@extends('layouts.app')

@section('content')

<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="calendar" style="width:1000px; height: 500px;">
</div>
</body>
</html>

@endsection
