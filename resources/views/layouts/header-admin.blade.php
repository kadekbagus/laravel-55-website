  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href={{{ asset('css/materialize.min.css')}}}  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Admin</title>
    </head>

    <body>

      <nav>
        <div class="nav-wrapper green darken-3">
          <a href="#" class="brand-logo"><i class="large material-icons hide-on-large-only">adb</i><span class="flow-text hide-on-med-and-down" style="padding-left:25px;">Admin</span></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li><a href="{{ route('admin-home') }}">Home</a></li>
                <li><a href="{{ route('admin-page-index') }}">Page</a></li>
                <li><a href="{{ route('admin-sysinfo') }}">System Info</a></li>
            @endguest
          </ul>
          <ul class="side-nav green darken-3" id="mobile-demo">
            @guest
                <li><a href="{{ route('login') }}" class="white-text">Login</a></li>
                <li><a href="{{ route('register') }}" class="white-text">Register</a></li>
            @else
                <li><a href="{{ route('admin-home') }}" class="white-text">Home</a></li>
                <li><a href="{{ route('admin-page-index') }}" class="white-text">Page</a></li>
                <li><a href="{{ route('admin-sysinfo') }}" class="white-text">System Info</a></li>
            @endguest
          </ul>
        </div>
      </nav>

      <div style="height:50px"></div>

      @yield('content')

      <div style="height:500px"></div>

        <footer class="page-footer green darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>

              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                  <li><a class="white-text" href="#!">Link 1</a></li>
                  <li><a class="white-text" href="#!">Link 2</a></li>
                  <li><a class="white-text" href="#!">Link 3</a></li>
                  <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                  <li><a class="white-text" href="#!">Link 1</a></li>
                  <li><a class="white-text" href="#!">Link 2</a></li>
                  <li><a class="white-text" href="#!">Link 3</a></li>
                  <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
          </div>
        </footer>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src={{{ asset('js/jquery-3.2.1.min.js') }}}></script>
      <script type="text/javascript" src={{{ asset('js/materialize.min.js') }}}></script>

      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>
