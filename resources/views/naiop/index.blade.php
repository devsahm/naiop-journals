<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Home</title>
    
    <!-- SEO Meta-->
  <!--   <meta name="description" content="Education theme by EchoTheme">
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

  
  
   
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  
  <div class="carousel-inner">
   
    <div class="carousel-item height-90vh padding-y-80 active">
     <div class="bg-absolute" data-dark-overlay="5" style="background:url(/assets/img/1920x800/4.jpg) no-repeat"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
              <h2 class="display-lg-4 font-weight-bold text-white animated slideInUp mb-0">
               NAIOP
              </h2>
             <!--  <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
               Industrial Psychologist
              </h1> -->
              <p class="font-size-md-18 animated slideInUp">
                Nigerian Association of Industrial and Organisational Psychologists
              </p>
              <a href="/about" class="btn btn-primary mt-3 mx-2 animated slideInUp">About Us</a>
              <a href="/contact" class="btn btn-outline-white mt-3 mx-2 animate">Contact </a>
            </div>
          </div>
        </div>
    </div>
   
    <div class="carousel-item height-90vh padding-y-80">
     <div class="bg-absolute" data-dark-overlay="5" style="background:url(/assets/img/1920x800/5.jpg) no-repeat"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
              <h2 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                 JIOBA
              </h2>
              <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                Journal/ Publication
              </h1>
             <!--  <p class="font-size-md-18 animated slideInUp">
                This modern and inviting academic template is perfectly suited for school, colleges, university, on-line course, and other educational institutions.  Investig ationes demons travge
              </p> -->
             <a href="/writer/submit-article" class="btn btn-primary mt-3 mx-2 animated slideInUp">Submit Article</a>
              <a href="/journal" class="btn btn-outline-white mt-3 mx-2 animate">Journal</a>
            </div>
          </div>
        </div>
    </div>

   
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
  </a>
</div>
    
    
    
    
    
<section class="py-5 shadow-v2">
  <div class="container">
   <form class="row align-items-center" action="/home-search" method="get">
     <div class="col-lg-4">
       <h4>
         Search by Volume and Issue
       </h4>
     </div>
     <div class="col-lg-3 mt-4 mt-lg-0">
       <select name="volume" class="form-control" required>
        <option disabled selected default>Select Volume No</option>
        @foreach($volumes as $volume)
         <option value="{{ $volume->volume }}">Volume {{ $volume->volume }}</option>
      
         
         @endforeach
       </select>
     </div>
     <div class="col-lg-3 mt-4 mt-lg-0">
       <select name="issue" class="form-control" required>
        <option disabled selected default>Select Issue</option>
         <option value="1">Issue 1</option>
        <option value="2">Issue 2</option>
         <option value="3">Issue 3</option>
         <option value="4">Issue 4</option>
         <option value="5">Issue 5</option>
         <option value="6">Issue 6</option>
         <option value="7">Issue 7</option>
         <option value="8">Issue 8</option>
       </select>
     </div>

     <div class="col-lg-2 mt-4 mt-lg-0">
       <button class="btn btn-primary btn-block" type="submit">Search</button>
     </div>
   </form> <!-- END row-->
  </div> <!-- END container-->
</section>
    
    
    
    
    
<section class="padding-y-100">
  <div class="container">
   <div class="row">
    <div class="col-12 text-center">
      <h2 class="mb-4">
        Nigerian Association of Industrial and <br> Organisational Psychologists
      </h2>
      <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
    </div>
   </div> 
   
   <div class="row">
    <div class="col-11 mx-auto">
     <div class="row align-items-center">
      <div class="col-lg-4 mr-auto mt-5 wow fadeIn">
        <img class="w-100" src="assets/img/college/1.jpg" alt="">
      </div>
      <div class="col-lg-7 mt-5 wow fadeIn">
        <h4 class="h3 mb-4">
          <span class="text-primary d-md-block">What We Offer</span>
          Aims and Objectives
        </h4>
        <p>
          The overall aim of the I/O Division of the NPA is to create a platform for enhancement of
professionalism among I/O psychologists and practitioners in Nigeria and across Africa.....
        </p>
        <a href="/about/objectives" class="btn btn-outline-primary mt-3">Read More</a>
      </div>   
     </div>
    </div> 
   </div> 
   
   <div class="row">
    <div class="col-lg-11 mx-auto">
     <div class="row align-items-center">
      <div class="col-lg-7 order-2 order-lg-1 mt-5 wow fadeIn">
        <h4 class="h3 mb-4">
          <span class="text-primary d-md-block">About Us</span>
          History
        </h4>
        <p>
          The Nigerian Association of Industrial and Organisational Psychologists (NAIOP) was formally
established during the Annual Scientific Conference and AGM of the Nigeria Psychological
Association held at Precious Palm Royal Hotels, Benin City, Nigeria on Wednesday, 25th
November, 2015. Since then the NAIOP has continued to build on its main purpose....</p>
        <a href="/about" class="btn btn-outline-primary mt-3">Read More</a>
      </div>   
      <div class="col-lg-4 ml-auto order-1 order-lg-2 mt-5 wow fadeIn">
        <img class="w-100" src="assets/img/college/2.jpg" alt="">
      </div>
     </div>
    </div> 
   </div> 
   
  </div> 
</section>
   
    
    
    
    
<!-- <section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
       <h2 class="mb-4">
        Popular Online Degrees
      </h2>
      <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
     </div>
      <div class="col-12">
       <div class="owl-carousel arrow-on-hover" data-state-outer-class="py-3" data-space="30" data-arrow="true" data-loop="true">
         <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="/assets/img/360x220/1.jpg" alt="">
          <div class="card-body">
            <h4>
              Accounting
            </h4>
            <p class="text-primary">
              Western Governors University
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
       
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="/assets/img/360x220/2.jpg" alt="">
          <div class="card-body">
            <h4>
              Human Resources
            </h4>
            <p class="text-primary">
              Cedarville University
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
       
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="/assets/img/360x220/3.jpg" alt="">
          <div class="card-body">
            <h4>
              Engineering
            </h4>
            <p class="text-primary">
              University of Connecticut
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
        
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="/assets/img/360x220/4.jpg" alt="">
          <div class="card-body">
            <h4>
              Engineering
            </h4>
            <p class="text-primary">
              University of Connecticut
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere kurus quodk
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
        
        <div class="card shadow-v3 hover:parent">
          <img class="card-img-top" src="/assets/img/360x220/5.jpg" alt="">
          <div class="card-body">
            <h4>
              Computer Engineering
            </h4>
            <p class="text-primary">
              University of Connecticut
            </p>
            <p class="mb-0">
              Investig atones demns traivg sed vunt lectoes legere kurus quodk
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center border-top position-relative p-4">
           <span class="d-inline-block bg-primary text-white px-4 py-1 rounded-pill">
             $576
           </span>
            <div class="group">
              <button class="btn btn-opacity-primary iconbox iconbox-sm mr-2">
                <i class="ti-heart"></i>
              </button>
              <button class="btn btn-opacity-primary iconbox iconbox-sm">
                <i class="ti-share"></i>
              </button>
            </div>
            <a href="#" class="position-absolute btn btn-primary btn-sm left-20 hover:show">
              View Details
            </a>
          </div>
        </div>
       </div>
      </div>
      <div class="col-12 mt-5 text-center">
        <a href="#" class="btn btn-primary">
          See All Degrees
        </a>
      </div>
    </div>
  </div> 
</section>
    -->
    
    
    
    
<section class="padding-y-100 bg-cover" data-dark-overlay="6" style="background:url(/assets/img/college/3.jpg) no-repeat">
  <div class="container">
    <div class="row text-center text-white">
     
      <div class="col-lg-4 col-md-6 mt-5 wow zoomIn" data-wow-delay=".1s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="520" data-speed="3000">
         {{ $PublishedArticles->count() }}
        </p>
        <p class="lead">
      Article Published
        </p>
      </div>
     
      <div class="col-lg-4 col-md-6 mt-5 wow zoomIn" data-wow-delay=".2s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="690" data-speed="3000">
         {{ $volumes->count() }}
        </p>
        <p class="lead">
          Total Volume
        </p>
      </div>
     
      
      <div class="col-lg-4 col-md-6 mt-5 wow zoomIn" data-wow-delay=".4s">
        <p class="ec-counter display-4 text-primary font-weight-semiBold mb-0" data-to="5409" data-speed="3000">
         {{  $AllArticles->count() }}
        </p>
        <p class="lead">
          All Articles
        </p>
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
    
    

   
    

  

  
    

  
<section class="padding-y-100 bg-light-v2">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-7 mx-auto text-center mb-5">
        <h2 class="mb-4">
          Journal of Industrial and Organisational<br> Behavior in Africa (JIOBA)
        </h2>
        <p class="font-size-18">
           Journal of Industrial and Organisational Behaviour in Africa is an annual publication of the Nigerian Association of Industrial and Organizational Psychologists (NAIOP) which owns the copy right.... <a href="/journal" style="color: green;">Read More</a>
        </p>
      </div> 
    
     
    </div> 
  </div> 
</section>

  
  
  
    
<!-- 
  
<section class="padding-y-100 bg-cover bg-center jarallax" data-primary-overlay="8" style="background:url(/assets/img/1920/530.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center text-white">
        <h2 class="text-white mb-4">
          Getting Started with Online Degrees
        </h2>
        <p class="font-size-18">
          In 2017, there were 5.5 million students in the United States enrolled in either partial or fully online programs. Nearly one out of every three college students in the 
          United States is enrolled in at least one online class.
        </p>
        <a href="#" class="btn btn-white mx-2 mt-3">Take The Tour</a>
        <a href="#" class="btn btn-outline-white mx-2 mt-3">Join Now</a>
      </div>
    </div> 
  </div> 
</section> -->

  
  
  
   
@include('footer')


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="/assets/js/vendors.bundle.js"></script>
    <script src="/assets/js/scripts.js"></script>
  </body>
</html>