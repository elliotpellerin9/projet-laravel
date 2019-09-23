

    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{action('MatiereController@index')}}" title="uiCookies:Laravel Pro">Laravel Pro</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{action('MatiereController@index')}}">Home</a></li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
              <ul class="dropdown-menu">
                <li><a href="{{action('UserController@index')}}">Notre équipe</a></li>
                 <li><a href="{{action('MatiereController@index')}}" >Matières</a></li>
                <li><a href="{{action('CourController@index')}}">Cours</a></li>
                <li><a href="services.html">Services</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li class="probootstra-cta-button"><a href="#" class="btn" data-toggle="modal" data-target="#loginModal">Log in</a></li>
            <li class="probootstra-cta-button last"><a href="#" class="btn btn-ghost" data-toggle="modal" data-target="#signupModal">Sign up</a></li>
          </ul>
        </div>
      </div>
    </nav>
