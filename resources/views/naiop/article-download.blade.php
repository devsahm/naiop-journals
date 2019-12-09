<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Article Download</title>
    
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

   
   
   
  <div class="py-5 bg-cover text-white" data-dark-overlay="5" style="background:url(/assets/img/1920/658_2.jpg) no-repeat">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6">
         <h2>Article Downloads</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="/">Home</a>
          </li> 
           <li class="breadcrumb-item">
            <a href="/journal">Journal</a>
          </li> 
          <li class="breadcrumb-item">
            Article Download
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>


   
    
<section class="padding-y-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-4">
      
      <div class="card">
        <!-- <img class="card-img-top" src="/assets/img/850x500/1.jpg" alt=""> -->
        
        <div class="card-body" >

           <div class="media-body">
               <p>Author(s):<a class="text-primary"> {{ $article->author }}</a>
             
            </div>

         <h4 class="my-4">
           {{ $article->title }}
         </h4>
         
         <div class="media align-items-center justify-content-between mb-5">
          <div class="media align-items-center">
           <!--  <i class="fa fa-user"></i> -->
           
          </div>
       <!--     <div class="text-gray">
             <span class="d-inline-flex align-items-center"> 
              <i class="ti-eye mr-1"></i> 2788
             </span>
             <span class="d-inline-flex align-items-center ml-2"> 
              <i class="ti-heart mr-1"></i> 88 
             </span>
           </div> -->
         </div>
<div style="position: relative; bottom: 30px; ">
      <h5>Abstract</h5>
         
         <p style="text-align:justify;">
           {!! $article->abstract !!}
         </p>

            <h6 class="my-4">
           Keywords: {{ $article->keywords }}
         </h6>
  
         <a href="/uploads/{{ $article->uploadone}}" class="btn btn-primary" download>Download Article</a>
         </div>

          
       </div> <!-- END card-body-->
      </div> <!-- END card-->
      
      
     
      
      

        
       
        
      </div> <!-- END col-lg-9 -->
      
      <!--  -->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>  <!-- END section -->

   
      
<!-- <section class="padding-y-100 bg-light-v2">  
</section>  --><!-- END section-->


@include('footer')

<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="/assets/js/vendors.bundle.js"></script>
    <script src="/assets/js/scripts.js"></script>
  </body>
</html>
