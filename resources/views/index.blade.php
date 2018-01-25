  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href={{{ asset('css/materialize.min.css')}}}  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home</title>
    </head>

    <body>

      <nav>
        <div class="nav-wrapper green darken-3">
          <a href="#" class="brand-logo"><i class="large material-icons hide-on-large-only">adb</i><span class="flow-text hide-on-med-and-down">Web</span></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="side-nav green darken-3" id="mobile-demo">
            <li><a href="#" class="white-text">Home</a></li>
            <li><a href="#" class="white-text">About</a></li>
            <li><a href="#" class="white-text">Contact</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h1>Welcome</h1>
        <div class="row">
        <div class="col s12">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself </div>
        </div>

        <div class="row">
          <div class="col s8">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself </div>
          <div class="col s4">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself </div>
        </div>
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src={{{ asset('js/jquery-3.2.1.min.js') }}}></script>
      <script type="text/javascript" src={{{ asset('js/materialize.min.js') }}}></script>

      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>
