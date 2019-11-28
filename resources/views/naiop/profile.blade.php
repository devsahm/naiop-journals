<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title> NAIOP | Profile </title>
    
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
    <style type="text/css">
      img.coo{
  max-width:180px;
}

    </style>
    
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




<div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background:url(/assets/img/breadcrumb-bg.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Profile
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item">Profile</li>
    </ol>
  </div>
</div>



  
  <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center border-bottom pt-5 mb-4">
              @if(Auth::guard('writer')->user()->image == 'demo')
             <img class="rounded-circle mb-4" src="/assets/img/262x230/demo.jpg" width="200" height="200" alt="">
             @else
<img class="rounded-circle mb-4" src="/profileimage/{{Auth::guard('writer')->user()->image }}" width="200" height="200" alt="">
             @endif
             <h4>
               {{ Auth::guard('writer')->user()->name }}
             </h4>
              <p>
               Writer/Author
              </p>
              <ul class="list-inline mb-0">
                  <li class="list-inline-item m-2">
                  <i class="ti-book text-primary"></i>
                  <span class="d-block">Submitted Article</span>
                  <span class="h6">{{ $articles->count() }}</span>
                </li>

              <!--   <li class="list-inline-item m-2">
                  <i class="ti-dashboard text-primary"></i>
                  <span class="d-block">Published Article </span>
                  <span class="h6">{{ $articlePublished->count() }}</span>
                </li>
               -->
               <!--  <li class="list-inline-item m-2">
                  <i class="ti-star text-primary"></i>
                  <span class="d-block">Reviews</span>
                  <span class="h6">10467</span>
                </li> -->
              </ul>
            </div>
            <div class="card-body border-bottom">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <span class="d-block">Email address:</span>
                  <a class="h6" href="{{ Auth::guard('writer')->user()->email}}">{{ Auth::guard('writer')->user()->email}}</a>
                </li>
                <li class="mb-3">
                  <span class="d-block">Phone:</span>
                  @if(Auth::guard('writer')->user()->phone == 0)
                  <a class="h6" href="">Not yet uploaded</a>
                  @else
                      <a class="h6" href="{{ Auth::guard('writer')->user()->photo }}">{{ Auth::guard('writer')->user()->phone }}</a>
                      @endif
                </li>
               <!--  <li class="mb-3">
                  <span class="d-block">Location:</span>
                  <a class="h6" href="mailto:saifullah@gmail.com">South Street, London, UK</a>
                </li> -->
              </ul>
            </div>
        <!--     <div class="card-footer">
             <p>
               Social Profile:
             </p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-facebook iconbox iconbox-sm">
                    <i class="ti-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-twitter iconbox iconbox-sm">
                    <i class="ti-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-google-plus iconbox iconbox-sm">
                    <i class="ti-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn btn-outline-linkedin iconbox iconbox-sm">
                    <i class="ti-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div> -->
          </div>
        </div> <!-- END col-md-4 -->
        <div class="col-lg-8 mt-4">
          <div class="card shadow-v1 padding-30">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
          
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
               All Articles
              </a>
             </li>
         
      
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-5" role="tab" aria-selected="true">
                Settings
              </a>
             </li>

               <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-6" role="tab" aria-selected="true">
                Security
              </a>
             </li>

           </ul>
            @include('customerror')
            @include('successnew')
            @include('success')
            @include('errors')
           
            <div class="tab-content">
             <!--  <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <h4>
                 Biography
               </h4>
               <p>
                  Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was
                  claritas kesty conctetur kedadip sicing. Dummy text of the printing and typesetting 
                  industry. It was popularised in the 1960s with the release of Letraset sheets contain luing lorem Ipsum passages, and more recently with desktop publishing.
               </p>
                <p>
                  Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing was and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s.
                </p>
                
                <hr class="my-4">
                <div class="border-bottom mb-4 pb-4">
                 <h4 class="mb-4">
                   Experience
                 </h4>
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <small>2000-2004</small>
                      <h6 class="mb-0">Full Stack Developer</h6>
                      <p class="mb-2">Apple Inc.</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                    <li class="ec-timeline-portlet__item">
                      <small>2004-2018</small>
                      <h6 class="mb-0">Project Manager</h6>
                      <p class="mb-2">Google</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="mb-4">
                 <h4 class="mb-4">
                   Education
                 </h4>
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <small>2000-2004</small>
                      <h6 class="mb-0">Full Stack Developer</h6>
                      <p class="mb-2">Apple Inc.</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                    <li class="ec-timeline-portlet__item">
                      <small>2004-2018</small>
                      <h6 class="mb-0">Project Manager</h6>
                      <p class="mb-2">Google</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                  </ul>
                </div>
              </div> -->
              <div class="tab-pane fade show active" id="Tabs_1-2" role="tabpanel">
              <div class="table-responsive my-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Article ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">Date Uploaded</th>
                     <!--  <th scope="col">Download</th> -->
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($articles->count())
                    @foreach($articles as $article)
                    <tr>
                      <th scope="row" class="text-dark font-weight-semiBold">NAOIP{{ now()->year }}0{{ $article->id }}</th>
                      <td>{{ $article->title }}</td>
                      <td>{{ date('d M Y', strtotime($article->created_at)) }}</td>
                      <!-- <td>
                        <a class="btn btn-link" href="/uploads/{{ $article->uploadone }}">Download Article</a>
                      </td> -->
                      <td>
                        <a class="btn btn-link">{{ $article->published? 'Published' : 'Pending....' }}</a>
                      </td>
                    </tr>
                    @endforeach
                     @else

                    <div class="alert alert-warning alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <p style="margin:auto;">no article record was found</p>

                    </div>


                @endif

                
                  </tbody>
                </table>
                 <ul class="pagination"  style="margin: 10px">
                                 {{ $articles->links() }}
                                 </ul>
              </div>
              </div> <!-- END tab-pane -->
          
        
              
              <div class="tab-pane fade" id="Tabs_1-5" role="tabpanel">
                 <div class="border-bottom mb-4 pb-4">
                   <h4>
                     Upload Avatar
                   </h4>
                   <div class="media align-items-end mt-4">
                    <!-- <div class="position-relative">
                      <input type="file" class="opacity-0 position-absolute">
                      <img src="" alt="">
                     
                    </div> -->
                  <form method="post" action="/writer/profileupdate/{{ Auth::guard('writer')->id() }}" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')
                     <div class="media-body ml-4 mb-4 mb-md-0">
                       <p>
                         JPG or PNG (Max:1mb)
                       </p>
                       <a href=""></a>
                       <button class="btn btn-default" >
                         <input type='file' name='photo' onchange="readURL(this);" style="background-color: none;"/>
                      <img class="coo" id="blah" src="/assets/img/placeholder-1.jpg" alt="your image" required>
                        <!--  <input type="file" class="opacity-0 position-absolute">
                         Upload -->
                       </button>

                     </div>
                   </div>
                 </div>
                 
                 <div class="border-bottom mb-4 pb-4">
                   <h4 class="mb-4">
                     Manage your Account
                   </h4>
                   
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-dark">Full Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="name" value="{{ Auth::guard('writer')->user()->name }}">
                    </div>
                  </div>
                   
                   
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-dark">Email</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control" name="email" value="{{ Auth::guard('writer')->user()->email}}" disabled>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-dark">Phone</label>
                    <div class="col-md-9">
                      <input type="text" name="phone" class="form-control" value="{{ Auth::guard('writer')->user()->phone}}" placeholder="Phone Number" required> 
                    </div>
                  </div> 
                  
                 
                  
                 </div>  

                 <div class="my-5">
                   <button class="btn btn-success m-2" type="submit">Update Profile</button>
                   
                 </div>
                 </form>             
              </div> <!-- END tab-pane -->

               <div class="tab-pane fade" id="Tabs_1-6" role="tabpanel">  
                 
                 <div class="border-bottom mb-4 pb-4">
                   <h4 class="mb-4">
                     Security Settings
                   </h4>
                  
                   <form method="POST" action="/writer/passwordupdate/{{ Auth::guard('writer')->id() }}">
                     
                        @csrf
                        @method('PATCH')
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-dark">Current Password</label>
                    <div class="col-md-9">
                      <input type="password" name="oldpassword" class="form-control" placeholder="Password" value="{{ old('oldpassword') }}" required>
                          </div>
                    </div>
                
                   
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-dark">New Password</label>
                    <div class="col-md-9">
                      <input type="password" name="password" class="form-control" placeholder="New Password"  value="{{ old('password') }}" required>
                    </div>
                  </div> 
                   
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-dark">Confirm Password</label>
                    <div class="col-md-9">
                     <input type="password" name="passwordconfirm" class="form-control" placeholder="Confirm New Password" required>
                    </div>
                  </div>
                      
                 </div>  
                 
              
                 
           
                 
              
                 <div class="my-5">
                   <button class="btn btn-success m-2" type="submit">Update Password</button>
                   
                 </div>  
               </form>           
              </div> <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      </div> <!--END row-->
    </div> <!--END container-->
  </section>
   
   
   
   
@include('footer')

<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     <script type="text/javascript">
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
     </script>
    <script src="/assets/js/vendors.bundle.js"></script>
    <script src="/assets/js/scripts.js"></script>
  </body>
</html>