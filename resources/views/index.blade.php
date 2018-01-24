  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href={{{ asset('css/materialize.min.css')}}}  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Test page</title>
    </head>

    <body>

     <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
      </nav>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src={{{ asset('js/jquery-3.2.1.min.js') }}}></script>
      <script type="text/javascript" src={{{ asset('js/materialize.min.js') }}}></script>

      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>
