<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Journal</title>
    
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
       <h2>Journal</h2>
     </div>
     <div class="col-md-6">
      <ol class="breadcrumb justify-content-md-end bg-transparent">  
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li> 
        <li class="breadcrumb-item">
          Journals
        </li>
      </ol>
     </div>
   </div>
  </div> 
</div>
   
   
   
   
   
   


         
<section class="padding-y-80">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Journal of Industrial and Organisational<br> Behaviour in Africa(JIOBA)</h2>
				<div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40 mx-auto"></div>
			</div>
      <div class="col-md-12">
      <p>Journal of Industrial and Organisational Behaviour in Africa is an annual publication of the
    Nigerian Association of Industrial and Organizational Psychologists (NAIOP) which owns the
   copy right. NAIO is a division of the Nigerian Psychological Association (NPA). The journal is
    open to well researched scholarly articles aimed at enhancing employee wellbeing and
    performance in Nigeria and the African continent</p>
      </div>

      @if($issues->count())
      @foreach($issues as $issue)
			<div class="col-md-6">
        <div class="row">
          <div class="col-md-3">
            <img src="/coverimage/{{$issue->cover }}" alt="cover" style="height: 150px;">
          </div>
          <div class="col-md-9">
            <span> Volume {{ $issue->volume_id }} No. {{ $issue->issue}}</span>
            <h5>{{ $issue->journal }}</h5>
       <!--     <p><a href="/journal/issue/article-list/{{$issue->id }}" style="color: green;">View Issue Table of Contents</a></p> -->

       <p><a href="/journal/volume-{{$issue->volume_id}}-issue-{{$issue->issue}}" style="color: green;">View Issue Table of Contents</a></p>
          </div>
        </div>

			</div> <!-- END col-md-6 -->
      @endforeach
      @else
      <div>
        <p class="alert alert-info"> No Publication yet</p>
      </div>

      @endif

		</div> <!-- END row-->
	</div> <!-- END container-->
</section> <!-- END -->




 

    
<!-- <section class="padding-y-100 bg-light-v2">  
</section> --> <!-- END section-->




   
   
   
@include('footer')

<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="/assets/js/vendors.bundle.js"></script>
    <script src="/assets/js/scripts.js"></script>
  </body>
</html>