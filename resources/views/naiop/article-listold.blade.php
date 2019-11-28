<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Search Lists</title>
    
    <!-- SEO Meta-->
    <!-- <meta name="description" content="Education theme by EchoTheme">
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
         <h2>Volume {{ $issues->volume_id }} Issue {{ $issues->issue }}</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="/">Home</a>
          </li> 
      
          <li class="breadcrumb-item">
            Article List
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>

  
   
<section class="pt-5 paddingBottom-100 bg-light-v2">
<div class="container">
    <div class="row">
      <div class="col-lg-9">
       
       
       @foreach($issues->articles as $article)
        <div class="list-card marginTop-40">
         
        <!--   <div class="col-md-4 px-md-0">
            <a href="">
              <img class="w-100" src="/assets/img/blog/list/2.jpg" alt="">
            </a>
          </div> -->
          
          <div class="col-md-12 px-md-0" style="width: 100%">
            <div class="card height-100p shadow-v1">
              <div class="card-body">
                <a href="/publication/article-detials/{{ $article->id }}" class="h4 mb-3">
                  {{ $article->title }}
                </a>
                <p class="mb-0">
                   {!! \Illuminate\Support\Str::words($article->abstract, 20,'....')  !!} 
                </p>
              </div>
              <div class="card-footer">
                 <div class="media">
                  <!--  <img class="iconbox" src="/assets/img/avatar/5.jpg" alt=""> -->
                   <div class="media-body ml-4">
                     <a class="text-primary"><p style="color: black">Author:</p> {{ $article->author }}</a> 
                   </div>
                 </div>
               </div>
            </div>
          </div> <!-- END col-md-8-->
        </div> <!-- END list-card-->
        @endforeach

      

      
       
    
       
      

<!--       
 
        
       <div class="col-12 marginTop-70">
           <ul class="pagination pagination-primary align-items-center justify-content-center">
            <li class="page-item mx-2">
              <a href="#">
                <i class="ti-arrow-left small mr-2"></i>
                Previous
              </a>
            </li>
            <li class="page-item mx-2 font-weight-bold">2/45</li>
            <li class="page-item mx-2">
              <a href="#">
                Next
                <i class="ti-arrow-right small ml-2"></i>
              </a>
            </li>
          </ul>
         </div> -->
       
      </div> <!-- END col-lg-9 -->
      
      <aside class="col-lg-3 mt-4"> 
  
       <div class="widget widget_search">
        <form action="/search" method="get"> 
          <div class="input-group">
            <input type="text" class="form-control border-0 pr-0 pl-3 u-py-15" name="search" placeholder="Search" required="">
            <button type="submit" class="input-group-btn btn bg-white">
              <span class="ti-search"></span>
            </button>
          </div>
        </form>
       </div> <!-- END widget--> 
      
       <div class="widget">
         <h2 class="widget-title">
          Volume List
         </h2>
         <ul>
          @foreach($volumes as $volume)
           <li><a>Volume {{ $volume->volume }}</a></li>
           
           @endforeach
         </ul>
       </div> <!-- END widget--> 
      
      
    
      
      
       
      <div class="widget">
         <h2 class="widget-title">
         Journal History
         </h2>
         <ul>
          <li><a>Volume ({{$volumes->count() }})</a></li>
          <li><a>Published Article ({{$ArticleCount }})</a></li>
        
         </ul>
       </div> <!-- END widget--> 
       
      </aside> <!-- END col-lg-3 -->
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