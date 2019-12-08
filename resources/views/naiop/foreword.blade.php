<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Articles</title>
    
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




<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(/assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/journal">Journals</a></li>
        <li class="breadcrumb-item">Foreword</li>
      </ol>
      <h2 class="h1">
       Foreword
      </h2>
     
     </div>
  
   </div>
  </div>
</div>
    
    
<!-- <section class="paddingTop-50 paddingBottom-100 bg-light-v2"> -->


<section class="padding-y-80">
  <div class="container">
   <div class="row align-items-start">
     <aside class="col-lg-3 order-2 order-lg-1">
       <div class="card marginTop-30 shadow-v1">
       <img src="/coverimage/{{$issue->cover}}" alt="cover" style="height: auto; width: 100%">
       </div>
       <div class="card marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">Journal Quick Links</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="/journal/volume-{{$issue->volume_id}}-issue-{{$issue->issue}}">Table of Contents</a></li>
          <li class="mb-2"><a href="/foreword/{{$issue->id}}" style="color: green">Foreword</a></li>
           <li class="mb-2"><a href="/editors-note/{{$issue->id}}">Editors Note</a></li>
          <li class="mb-2"><a href="/editorial_board/{{$issue->id}}">Article Editors</a></li> 
         </ul>
       </div>

        <div class="card marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">Note to Contributors</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="/note-to-contributors">Read All</a></li>
         
         </ul>
       </div>
     
     </aside> <!-- END col-lg-3 -->
     
  <div class="col-lg-9 order-1 order-lg-2"> 
   
     <h3>Foreword</h3>
 <p class="mb-5" style="text-align: justify;">
{!! $issue->foreword !!}
        </p>

           
  
   
 </div> <!-- END col-lg-9 -->
  
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