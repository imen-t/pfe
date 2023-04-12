<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="css/style.css">

  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
  
</div>
  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="logo.png" alt="">
        </span>
       
       <i class='bx bx-chevron-right toggle'></i>
       </header>

    <div class="menu-bar">
      <div class="menu">

        <li class="search-box">
          <i class='bx bx-search icon'></i>
          <input type="text" placeholder="Search Ganes...">
        </li>

        <ul class="menu-links">
          <li class="nav-link">
            <a href="#" title="Dashboard" style="color:#000000;text-decoration:none">
              <i class='bx bx-home-alt icon'></i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-link" >
            <a href="#" title="my workspace" style="color:#000000;text-decoration:none">
              <i class='bx bx-user icon' ></i>
              <span class="text nav-text" s>my workspace</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#" title="Historic" style="color:#000000;text-decoration:none">
              <i class='bx bx-pie-chart-alt icon'></i>
              <span class="text nav-text">Historic</span>
            </a>
          </li>

          <li class="nav-link" >
            <a href="#" title="calender" style="color:#000000;text-decoration:none">
              <i class='bx bx-calendar icon ' ></i>
              <span class="text nav-text">calender</span>
            </a>
          </li>

        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="#">
            <i class='bx bx-log-out icon'></i>
            <span class="text nav-text">Logout</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class='bx bx-moon icon moon'></i>
            <i class='bx bx-sun icon sun'></i>
          </div>
          <span class="mode-text text">Dark mode</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>

      </div>
    </div>

  </nav>
  <section class="home">
    <div class="text">
      

      <a href="new project button.html">
        <button type="submit" class="btn" style="cursor: crosshair;">
          +New workspace
    
        </button> </a>
    </div>
  </section>
  <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    })
    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    })
    modeSwitch.addEventListener("click", () => {
      body.classList.toggle("dark");
      if (body.classList.contains("dark")) {
        modeText.innerText = "Light mode";
      } else {
        modeText.innerText = "Dark mode";
      }
    });
  </script>

</body>

</html>
