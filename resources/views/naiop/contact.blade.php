<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from echotheme.com/educati/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Aug 2019 11:48:36 GMT -->
<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>NAIOP | Contacts</title>
    
    <!-- SEO Meta-->
 <!--    <meta name="description" content="Education theme by EchoTheme">
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
   <!--  <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css"> -->
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/topicon.css">
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



<div class="py-5 bg-cover" data-dark-overlay="6" style="background:url(/assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Contact
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="/">Home</a></li>
     
      <li class="breadcrumb-item">Contact</li>
    </ol>
  </div>
</div>
    
   
   
   <div class="py-5 shadow-v2 position-relative">
     <div class="container">
       <div class="row">
        
         <div class="col-lg-4 col-md-6 mt-4">
           <div class="media">
             <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-mobile"></i></span>
             <div class="media-body ml-3">
              <h5 class="mb-0">+2348037867406</h5> 
              <p>Phone Number</p>
             </div>
           </div>
         </div>
        
         <div class="col-lg-4 col-md-6 mt-4">
           <div class="media">
             <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-email"></i></span>
             <div class="media-body ml-3">
              <a href="mailto:jiobajournal@gmail.com" class="h5">jiobajournal@gmail.com</a>
              <p>Email Address</p>
             </div>
           </div>
         </div>
        
         <div class="col-lg-4 col-md-6 mt-4">
           <div class="media">
             <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-location-pin"></i></span>
             <div class="media-body ml-3">
              <h5 class="mb-0">University of Ibadan, Nigeria</h5> 
              <p>Department of Psychology</p>
             </div>
           </div>
         </div>
         
       </div>
     </div>
   </div>
   
   
   
   
  <section class="padding-y-100 bg-light-v2">
  <div class="container">
    <div class="row">

     <div class="col-12 text-center mb-5">
        <h2>
          Send Message
        </h2>
        <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
      </div>
      <div class="col-12 text-center">
     
        <form action="/contacts" method="POST" class="card p-4 p-md-5 shadow-v1">
        @csrf
        
          <p class="lead mt-2">
           Nigeria Association of Industrial and Organisational Psychologists. Contact us to for more enquiries
          </p>
          @include('errors')
         @include('success')
          <div class="row mt-5 mx-0">
            <div class="col-md-4 mb-4">
              <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="col-md-4 mb-4">
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="col-md-4 mb-4">
              <input type="text" class="form-control" placeholder="Phone number" name="number" value="{{ old('number') }}" required>
            </div>

              <div class="col-md-12 mb-4">
              <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{ old('subject') }}" required>
            </div><br><br>

            <div class="col-12">
              <textarea type="email" class="form-control" placeholder="Message"  name="message" rows="7" required>{{ old('message') }}</textarea>
              <button type="submit" class="btn btn-primary mt-4">Send Message</button>
            </div>
          </div>
        </form>  
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
  
  
  
    
   <!--  
   <div class="google-map" data-address="Harvard University" data-zoom="14" data-key="AIzaSyB0uuKeEkPfAo7EUINYPQs3bzXn7AabgJI" style="height:450px;"></div> -->

   
@include('footer')

<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="/assets/js/vendors.bundle.js"></script>
    <script src="/assets/js/scripts.js"></script>
  </body>

<!-- Mirrored from echotheme.com/educati/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Aug 2019 11:48:36 GMT -->
</html>