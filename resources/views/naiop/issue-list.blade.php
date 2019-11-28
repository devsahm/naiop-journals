<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Issue List</title>
    
    <!-- SEO Meta-->
<!--     <meta name="description" content="Education theme by EchoTheme">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education"> -->
    
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
   <form class="form-site-search" action="/search" method="get">
    <div class="input-group">
      <input type="text" placeholder="Search" name="search" class="form-control py-3 border-white" required="">
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
       <h2>Volume {{ $issues->volume_id }}</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li> 
      
        <li class="breadcrumb-item">
          Issue List
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>  



   

   
<section class="padding-y-100 border-bottom border-light wow fadeIn">
  <div class="container">
    <div class="row">
    <!--  <div class="col-12 mb-5 text-center">
       <h4>Lightbox - <span class="text-primary">02</span></h4>
     </div> -->
    </div> <!-- END row-->
    <div class="row">
     
     
      <div class="col-md-4 mt-4">
      <div class="card card-body shadow-v3 mb-2">
       <h6>Volume {{ $issues->volume_id }} Issue {{ $issues->issue }} </h6>
        <a data-fancybox="" class="btn btn-outline-primary align-self-start mt-2" href="/issue/article-list/{{ $issues->id }}">
         View Articles
        </a>
      </div>
      </div>
    </div>
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