<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Submit Article</title>
    
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



<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(/assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="/">Home</a></li>
       
        <li class="breadcrumb-item">Submit Article</li>
      </ol>
      <h2 class="h1">
       Submit Articles
      </h2>
    <!--   <p>
        6,178 Articles found
      </p> -->
     </div>
 
   </div>
  </div>
</div>
    
    




<section class="py-3 position-relative shadow-v2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 my-2">
          Submit Article For Publication      
      </div>
      <div class="col-md-6 my-2 text-md-right">
       <div class="d-inline-flex justify-md-content-end">
        <div class="d-flex rounded border ml-3 px-2 my-2">
          <a href="#" class="btn px-1"><ti class="ti-layout-grid2"></ti></a>
          <a href="#" class="active btn px-1"><ti class="ti-view-list"></ti></a>
        </div>
       </div>
      </div>
    </div>
  </div> 
</section>




<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
   <div class="row align-items-start">
     <aside class="col-lg-3 order-2 order-lg-1">
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">Quick Links</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="/writer/profile">Profile</a></li>
          <li class="mb-2"><a href="/contact">Contact</a></li>
          <li class="mb-2"><a href="/submit-article">Submit Article</a></li>
     
         </ul>
       </div>
    <!--    <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">Filter By</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a></a></li>
   
       
         </ul>
       </div> -->
    
       <div class="card shadow-v2 marginTop-30 hover:parent">
        <img class="hover:zoomin" src="/assets/img/262x230/9.jpg" alt="">
        <div class="card-img-overlay text-white bg-black-0_6">
          <h4 class="card-title">
            ABOUT NAIOP
          </h4>
          <p class="my-3">
           The Nigerian Association of Industrial and Organisational Psychologists (NAIOP) was formally established
          </p>
          <a href="/about" class="btn btn-white">Read More</a>
        </div>
       </div>
     </aside> <!-- END col-lg-3 -->

     <div class="col-lg-9 order-1 order-lg-2">
       <div class="row">
      <div class="col-md-12 marginTop-30">
        <div href="page-course-details.html" class="card text-gray shadow-v1">
          <div class="card-body">
          <!--  <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
             Best selling
           </span> -->
            <a href="#" class="h5">
              Add A New Article
            </a>
         
            @include('success')
             @include('errors')

                  <form  method="post" action="/article" enctype="multipart/form-data">
                    @csrf
                     
                    
                      <fieldset>
                        

                        <div class="form-group">
                          <input type="text" name="title" class="form-control" placeholder="Title*" value="{{ old('title') }}"  required>
                        </div>

                        <div class="form-group">
                        <input type="text" name="author" class="form-control" placeholder="Author(s)*" value="{{ old('author') }}" id="author"  required>
                         </div>

                         <!-- <div class="form-group sj-authorhold">
                          <span>
                            <input type="text" name="volume" class="form-control" placeholder="Volume*"value="{{ old('volume') }}" required>
                          </span>
                        </div>
                        <div class="form-group sj-authorholdvtwo">
                          <span>
                            <input type="text" name="issue" class="form-control" placeholder="issue*" value="{{ old('issue') }}" required>
                          </span>
                        </div>
                        <div class="form-group sj-authorhold">
                          <span>
                            <input type="text" name="year" class="form-control" placeholder="Year*" value="{{ old('year') }}" required>
                          </span>
                        </div> -->
                        <div class="form-group">
                          <span>
                            <input type="text" name="university" class="form-control" placeholder="University Affiliation*" value="{{ old('university') }}" id="university"  required>
                          </span>
                        </div> 

                        <div class="form-group">
                          <textarea placeholder="Add Your Abstract" name="abstract" class="form-control" required rows="6">{{ old('abstract') }}</textarea>
                        </div>

                         <div class="form-group">
                          <span>
                            <input type="text" name="keywords" class="form-control" placeholder="keywords*" value="{{ old('keywords') }}" id="university"  required>
                          </span>
                        </div> 


                          <div class="small mr-2">
                            <p style="font-size: 15px">Upload Manuscript</p>
                          </div>
                          <label>
                            <input type="file" name="uploadone" id="uploadone" class="form-control" required >
                          </label>
                          <div class="small mr-2">
                            <i>File should be pdf, doc or docx, 1mb max </i>  
                          </div>
                      


                  



          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <button class="btn btn-block btn-outline-success mr-3 mb-3" type="submit">Submit</button>
          
          </div>
              </fieldset>
            </form>
        </div>
      </div>
      
     
   
      
  
      
  
    
      
      
       </div> <!-- END row-->
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