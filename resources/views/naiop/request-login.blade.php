<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Article Request Login</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Education theme by EchoTheme">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico">
    <link rel="shortcut icon" href="/assets/img/favicon/114x114.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/img/favicon/96x96.png">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/fonts/themify-icons/css/themify-icons.css">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="/assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    
  </head>
  
  <body>
   
@include('header')

    

  <div class="site-search">
   <div class="site-search__close bg-black-0_8"></div>
   <form class="form-site-search" action="#" method="POST">
    <div class="input-group">
      <input type="text" placeholder="Search" class="form-control py-3 border-white" required="">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
      </div>
    </div>
   </form> 
  </div> <!-- END site-search-->



    
<div class="py-5 bg-light-v2">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-md-6">
       <h2>User Login</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li> 
        <li class="breadcrumb-item">
         User Login
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>
 
  
  <section class="padding-y-100">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center">
        <h2>
          Get started 
        </h2>
        <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
      </div>
      <div class="col-lg-6 mx-auto mt-5">
        <div class="card text-center shadow-v3 p-5">
          <h4 class="text-primary">
            Login to Access Articles
          </h4>
          <p>
            Nigerian Association of Industrial and Organisational Psychologists
          </p>
          <!-- <form action="" method="POST" > -->
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="mt-4">
              @csrf
            <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white ti-email"></span>
              </div>

              <input id="email" type="email" class="form-control border-left-0 pl-0{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>

            <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white ti-lock"></span>
              </div>
              <input id="password" type="password" placeholder="Password" class="form-control border-left-0 pl-0{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="input-group my-4">
            <label class="ec-checkbox">
              <!--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
            </label>
            </div>
            <button class="btn btn-primary btn-block">Login Now</button>

            <p class="marginTop-40">
              Don't have an account? <a href="/register" class="text-primary">Register</a>
            </p>
            
          </form>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
@include('footer')


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="/assets/js/vendors.bundle.js"></script>
    <script src="/assets/js/scripts.js"></script>
  </body>
</html>