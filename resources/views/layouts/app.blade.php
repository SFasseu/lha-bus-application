<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/admin')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('/admin')}}/assets/img/gta.png">
  <title>{{$title}}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('/admin')}}/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('/admin')}}/assets/demo/demo.css" rel="stylesheet" />
<style>
    .blink {
        animation: blinker 1.5s linear infinite;
        color:black;
        font-family: sans-serif;
        font-style: italic;
    }
</style>

</head>

<body >
 <div id="app">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          LH
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{env('APP_NAME') }}
        </a>
      </div>

      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>

          </span>
        </a>
        </div>

      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{$active == 'dashboard' ? 'active' : ''}}">
            <a href="./home">
              <i class="now-ui-icons design_app"></i>
              <p>dashboard</p>
            </a>
          </li>
          <li class="nav-item {{$active == 'users' ? 'active' : ''}}">
            <a href="./user">
              <i class="now-ui-icons users_single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <h6 class="title text-center">CLIENT</h6>
          <hr>
          <li class="nav-item {{$active == 'client' ? 'active' : ''}}">
            <a href="./client">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Client</p>
            </a>
          </li>
          <li class="nav-item {{$active == 'agence' ? 'active' : ''}}">
            <a href="./agence">
              <i class="now-ui-icons transportation_bus-front-12"></i>
              <p>Agence</p>
            </a>
          </li>
          <li class="nav-item {{$active == 'voyage' ? 'active' : ''}}">
            <a href="./voyage">
              <i class="now-ui-icons media-1_album"></i>
              <p>Voyage</p>
            </a>
          </li>
          <li class="nav-item {{$active == 'reservation' ? 'active' : ''}}">
            <a href="./reservation">
              <i class="now-ui-icons shopping_tag-content"></i>
              <p>Reservation</p>
            </a>
          </li>
          <li class="nav-item {{$active == 'payment' ? 'active' : ''}}">
            <a href="./payment">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>Payment</p>
            </a>
          </li>
          <li class="nav-item {{$active == 'notification' ? 'active' : ''}}">
            <a href="./Notification">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notification</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
     @yield('content')
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{asset('/admin')}}/assets/js/core/jquery.min.js"></script>
  <script src="{{asset('/admin')}}/assets/js/core/popper.min.js"></script>
  <script src="{{asset('/admin')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{asset('/admin')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('/admin')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('/admin')}}/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/admin')}}/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('/admin')}}/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script>
    function sendLogout(){
        let form = document.getElementById('form-logout');
        if(form){
            form.submit();
        }
    }

</script>
</body>

</html>
