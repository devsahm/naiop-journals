  <header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-email mr-2"></i>
            <a href="mailto:npaiopsy@gmail.com">npaiopsy@gmail.com</a>
           </div>
          </li>
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
       <!--      <i class="ti-headphone mr-2"></i> -->
           <!--  <a href="tel:+8801740411513">+23480 456 45678</a> -->
           </div>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
            <a href="https://facebook.com/Nigeria Industrial/Organisational Psychologists"><i class="ti-facebook"></i></a>
  <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="https://twitter.com/iopsyng"><i class="ti-twitter"></i></a>
          </li>
         
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="https://instagram.com/iopsynigeria"><i class="ti-instagram"></i></a>
          </li>
        </ul>
       

                </li>
            @if(Auth::guard('writer')->check())
        <ul class="list-inline mb-0">
          <li  class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1"> <a href="{{ route('logout') }}"                              
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} 
                                       </a>
          </li>
        <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a href="/writer/profile">Profile</a>
          </li>
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a>Hi, {{ Auth::guard('writer')->user()->name }}</a>
          </li>
        </ul>
         @elseif(auth()->user())
          <ul class="list-inline mb-0">
          <li  class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1"> <a href="{{ route('logout') }}"                              
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} 
                                       </a>
          </li>
           <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a>Hi, {{auth()->user()->name }}</a>
          </li>

        
        </ul>
        @else

        @endif
<!-- 
         <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
            <a href="/login/writer">Login</a>
          </li>
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a href="/register/writer">Register</a>
          </li>
        </ul> -->


        


      </div> <!-- END END row-->
    </div> <!-- END container-->
  </header><!-- END site header-->
    <nav class="ec-nav sticky-top bg-white">
  <div class="container">
    <div class="navbar p-0 navbar-expand-lg">
      <div class="navbar-brand">
        <a class="logo-default" href="index.html"><img alt="" src="/assets/img/logo-black.png"></a>
      </div>
      <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
        <div class="hamburger hamburger--spin js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </span>
      <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
        <ul class="nav navbar-nav ec-nav__navbar ml-auto">

            <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/">Home</a></li>
     <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About Us</a>
                <ul class="dropdown-menu">
                  <li><a href="/about" class="nav-link__list">History</a></li>
                 <li><a href="/about/objectives" class="nav-link__list">Aims & Objectives</a></li>
                </ul>
            </li>
        <!--     <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/about">About Us</a></li> -->
           <!--  <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/archives">Archives</a></li> -->
           <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/membership">Membership</a></li>
             <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/executives">Executives</a></li>

              <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/journal">Journal</a></li>

         
           <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/writer/submit-article">Submit Articles</a></li>
            <li class="nav-item nav-item__has-megamenu megamenu-col-2"><a class="nav-link" href="/contact">Contact</a></li>
   
        </ul>

      </div>
      <div class="nav-toolbar">
        <ul class="navbar-nav ec-nav__navbar">
         
          <li class="nav-item">
            <a class="nav-link site-search-toggler" href="#">
              <i class="ti-search"></i>
            </a>
          </li>
        </ul>
      </div>    
    </div>
  </div>    
  </nav> 
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
  </form>