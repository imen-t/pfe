<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!----===== Boxicons CSS ===== -->
     <!-- <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
         .icon {
            min-width: 60px;
            border-radius: 6px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            }-->
 <!--.container {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-gap: 20px;
}

.header-box {
  grid-column: 1/6;
  background-color: #dfdbdb;
  color: #111111;
  padding: 20px;
  position: relative;
}


.left-box {
  grid-column: 1/3;
  background-color: #f2f2f2;
  padding: 20px;
  position: relative;
}

.left-box-1 {
  grid-row: 2/3;
  height: 600px;
  width: 100vh ;
  

}

.left-box-2 {
  grid-row: 3/4;
  height: 600px;
  width: 100vh ;
 
}

.right-box {
  grid-column: 4/6;
  background-color: #f2f2f2;
  padding: 20px;
  position: relative;
}
.right-box1{
    height: 600px;
    width: 105vh ;
}
.right-box2{
    height: 300px;
    width: 105vh ;
}
.right-box3{
    height: 280px;
    width: 105vh ;
    margin-top: -300px;

}



.footer-box {
  grid-column: 1/6;
  background-color: #f2f2f2;
  padding: 20px;
  position: relative;
}

.btn {
  position: absolute;
  top: 10px;
  right: 10px;
  padding: 10px;
  border: none;
  background-color: #fff;
  color: #007bff;
  cursor: pointer;
}

.popup-form {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  height: 300px;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  box-sizing: border-box;
  display: none;
  z-index: 9999;
}

.popup-form h2 {
  margin-top: 0;
}

.popup-form input[type="text"],
.popup-form input[type="email"],
.popup-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
}

.popup-form input[type="submit"] {
  border: none;
  background-color: #007bff;
  color: #fff;
}--> 
<style>
    .nav-link:active,
    .nav-link:focus,
    .nav-link:hover {
  background-color: #ffffff26;
}
</style>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('Visteon_wordmark_orange (2).png') }}" width="100" height="40" alt=""> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

        <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
               
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item nav-link" >
                        <a href="{{route('home')}}" class="nav-link align-middle px-0">
                        <i class='bx bxs-home'></i><span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class='bx bxs-dashboard' ></i><span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('projects.index')}}" class="nav-link px-0 align-middle">
                        <i class='bx bx-list-check' ></i> <span class="ms-1 d-none d-sm-inline">A3 Projects</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('dmaicProjects.index')}}" class="nav-link px-0 align-middle">
                        <i class='bx bx-list-check' ></i> <span class="ms-1 d-none d-sm-inline">Dmaic Projects</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="bx bx-user-check"></i> <span class="ms-1 d-none d-sm-inline">myworkspace</span> </a>
                           
                    </li>
                    <li class="nav-link">
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class='bx bxs-calendar'></i> <span class="ms-1 d-none d-sm-inline">calender</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">mee</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>

        </main>
    </div>
   </body>

</html>

