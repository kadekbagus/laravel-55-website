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

      <div class="container">
        <h1>Colors</h1>
        <div class="red white-text">div color red</div>
        <div class="blue white-text">div color red</div>
        <div class="deep-purple black-text lighten-3">div color red</div>


        <h1>Buttons</h1>
        <button class="btn">Read More</button>
        <button class="btn waves-effect">Read More</button>
        <button class="btn waves-effect waves-light">Read More</button>
        <button class="btn btn-large red darken-3 white-text">Read More</button>
        <button class="btn btn-large purple">Read More</button>
        <button class="btn btn-large yellow black-text">Read More</button>
        <button class="btn btn-large"><i class="material-icons left">cloud</i>Read More</button>

        <h1>Floating</h1>
        <a href="#" class="btn-floating red btn-large"><i class="material-icons">add</i></a>

        <!-- fixed action button -->
        <div class="fixed-action-btn">
          <a href="#" class="btn-floating red btn-large"><i class="large material-icons">mode_edit</i></a>
          <ul>
            <li><a href="#" class="btn-floating green btn-large"><i class="large material-icons">cloud</i></a></li>
            <li><a href="#" class="btn-floating yellow btn-large"><i class="material-icons black">airplanemode_active</i></a></li>
            <li><a href="#" class="btn-floating blue btn-large"><i class="material-icons">alarm</i></a></li>
          </ul>
        </div>

        <!-- flat button -->
        <a href="" class="waves-effect waves-teal btn-flat">Button</a>

        <h1>Helpers</h1>
        <div><h5 class="left-align">This align to the left</h5></div>
        <div><h5 class="right-align">This align to the right</h5></div>
        <div><h5 class="center-align">This align to the center</h5></div>

        <!-- quick float -->
        <div class="left">left float</div>
        <div class="right">right float</div>

        <!-- clear -->
        <div class="clearfix"></div>
        <br/>

        <!-- hide content -->
        <div class="hide">Hidden for all devices</div>
        <div class="hide-on-small-only">Hidden for all mobile device</div>
        <div class="hide-on-med-only">Hidden for tablet only</div>
        <div class="hide-on-med-and-down">Hidden for tablet and smaller</div>
        <div class="hide-on-med-and-up">Hidden for tablet and higher</div>
        <div class="hide-on-large-only">Hidden for desktops</div>
        <br/>

        <!-- truncate -->
        <h5 class="truncate">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</h5>

        <!-- effect -->
        <div class="red white-text hoverable">div color red</div>
        <div class="blue white-text pulse">div color red</div>
        <div class="blue white-text z-depth-1">div color red</div>
        <div class="blue white-text z-depth-2">div color red</div>
        <div class="blue white-text z-depth-3">div color red</div>
        <div class="blue white-text z-depth-4">div color red</div>
        <div class="blue white-text z-depth-5">div color red</div>

        <!-- flow text -->
        <p class="flow-text">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</p>

        <!-- images -->
        <img src="https://s3-ap-southeast-1.amazonaws.com/asset1.gotomalls.com/uploads/news/translation/2018/01/La24h7t5ILStgOhE-petite-market-museum-at-grand-indonesia-1516325524_1.jpg" alt="" class="reponsive-img circle">

        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
        </nav>

        <div class="container">
          <h1>Collection</h1>
          <ul class="collection">
            <li class="collection-item">item 1</li>
            <li class="collection-item">item 2</li>
            <li class="collection-item">item 3</li>
            <li class="collection-item">item 4</li>
          </ul>

          <div class="collection">
            <a href="#" class="collection-item">Link 1</a>
            <a href="#" class="collection-item">Link 2</a>
            <a href="#" class="collection-item">Link 3</a>
            <a href="#" class="collection-item">Link 4</a>
          </div>

          <ul class="collection with-header">
            <li class="collection-item"><h4>Header</h4></li>
            <li class="collection-item">Item 1</li>
            <li class="collection-item">Item 2</li>
            <li class="collection-item">Item 3</li>
          </ul>

        </div>

        <h1>Pagination</h1>
        <ul class="pagination">
          <li class="disabled"><a href=""><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#">1</a></li>
          <li class="waves-effect"><a href="#">2</a></li>
          <li class="waves-effect"><a href="#">3</a></li>
          <li class="waves-effect"><a href="#">4</a></li>
          <li class="waves-effect"><a href="#">5</a></li>
          <li class="waves-effect"><a href="#">6</a></li>
          <li class="waves-effect"><a href="#"><i class="material-icons">chevron_right</i></a></li>
        </ul>


        <h1>Breadcrumbs</h1>
        <nav>
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="" class="breadcrumb">First</a>
              <a href="" class="breadcrumb">Second</a>
              <a href="" class="breadcrumb">Third</a>
            </div>
          </div>
        </nav>

        <h1>Cards</h1>
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span><a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            <p>In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.</p>
          </div>
          <div class="card-action">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
          </div>
        </div>

        <h1>Chips</h1>
        <div class="chip">
          Tag 1<i class="close material-icons">close</i>
        </div>
        <div class="chip">
          Tag 2<i class="close material-icons">close</i>
        </div>


        <h1>Forms</h1>
        <forms>
          <div class="input-field">
            <input type="text" id="name">
            <label class="active" for="name">Name</label>
          </div>
          <div class="input-field">
            <input type="text" id="email" class="validate">
            <label class="active" for="email">Email</label>
          </div>
          <div class="input-field">
            <textarea type="email" id="textarea" class="materialize-textarea"></textarea>
            <label class="active" for="email">Textarea</label>
          </div>
        </forms>

        <h1>Preloaders</h1>
        <div class="progress">
          <div class="determinate" style="width:40%"></div>
        </div>
        <div class="progress">
          <div class="indeterminate"></div>
        </div>


        <h1>Grid System</h1>
        <div class="row">
          <div class="col s1"><div class="card-panel grey">1</div></div>
          <div class="col s1"><div class="card-panel grey">2</div></div>
          <div class="col s1"><div class="card-panel grey">3</div></div>
          <div class="col s1"><div class="card-panel grey">4</div></div>
          <div class="col s1"><div class="card-panel grey">5</div></div>
          <div class="col s1"><div class="card-panel grey">6</div></div>
          <div class="col s1"><div class="card-panel grey">7</div></div>
          <div class="col s1"><div class="card-panel grey">8</div></div>
          <div class="col s1"><div class="card-panel grey">9</div></div>
          <div class="col s1"><div class="card-panel grey">10</div></div>
          <div class="col s1"><div class="card-panel grey">11</div></div>
          <div class="col s1"><div class="card-panel grey">12</div></div>
        </div>

        <div class="row">
          <div class="col s8"><div class="card-panel grey">8</div></div>
          <div class="col s4"><div class="card-panel grey">4</div></div>
        </div>

        <div class="row">
          <div class="col s4"><div class="card-panel grey">4</div></div>
          <div class="col s4"><div class="card-panel grey">4</div></div>
          <div class="col s4"><div class="card-panel grey">4</div></div>
        </div>

        <!-- offsetting -->
        <div class="row">
          <div class="col s12"><div class="card-panel grey">12</div></div>
          <div class="col s6 offset-s6"><div class="card-panel grey">6</div></div>
        </div>

        <!-- push and pull -->
        <div class="row">
          <div class="col s7 push-s5"><div class="card-panel grey">This div is 7 cols width</div></div>
          <div class="col s5 pull-s7"><div class="card-panel grey">This div is 5 cols width</div></div>
        </div>

        <div style="height:500px"></div>

      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src={{{ asset('js/jquery-3.2.1.min.js') }}}></script>
      <script type="text/javascript" src={{{ asset('js/materialize.min.js') }}}></script>

      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>
