<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Volume Lists</title>
    
    <!-- SEO Meta-->
   <!--  <meta name="description" content="Education theme by EchoTheme">
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




<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(/assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
  Volume List
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item">Volume Lists</li>
    </ol>
  </div>
</div>
    
   
   
   
<section class="paddingTop-80 paddingBottom-120 bg-light">
  <div class="container">
    <div class="row">
     
      <div class="col-md-4 order-2 order-md-1 mt-4">
        <div class="card shadow-v1">
          <h4 class="card-header border-bottom">
            Quick  Links
          </h4>
          <div class="card-body">
            <ul class="list-unstyled">
              <li class="mb-3"><a href="/volume-list" class="text-primary"><i class="ti-bookmark-alt mr-2"></i>Volumes</a></li>
              <li class="mb-3"><a href="/"><i class="ti-user mr-2"></i>Recent Publication</a></li>
              <li class="mb-3"><a href="/contact"><i class="ti-settings mr-2"></i>Contacts</a></li>
              <li class="mb-3"><a href="/writer/submit-article"><i class="ti-book mr-2"></i>Submit Article</a></li>
          
           </ul>
          </div>
        </div>
      </div>
      
      <div class="col-md-8 order-1 order-md-2 mt-4">
        <div class="card shadow-v1">
          <div class="card-header mt-4">
            <h3>
              Total Volume Lists - <span class="text-gray small">({{$volumes->count()}})</span>
            </h3>
          </div>
          <div class="card-body pt-2">
            <ul class="list-unstyled list-style-icon list-icon-bullet">
              @foreach($volumes as $volume)
            <li class="mb-2"><a href="/issue/issue-list/{{$volume->id}} "> Volume {{ $volume->volume }}</a></li>
              @endforeach
          </ul>
          </div>
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