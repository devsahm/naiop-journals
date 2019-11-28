<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>Nigerian Association of Clinical Psychologists | Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='/adminassets//adminassets/images/favicon.ico' />
    <!-- /site favicon -->

    <!-- Font Material stylesheet -->
    <link rel="stylesheet" href="/adminassets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- /font material stylesheet -->

    <!-- Bootstrap stylesheet -->
    <link href="/adminassets/css/jumbo-bootstrap.css" rel="stylesheet">
    <!-- /bootstrap stylesheet -->

    <!-- Perfect Scrollbar stylesheet -->
    <link href="/adminassets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->
    <link href="/adminassets/node_modules/summernote/dist/summernote-bs4.css" rel="stylesheet">

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="/adminassets/css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->


</head>

<body id="body" data-theme="dark-indigo">

<!-- Loader Backdrop -->
<div class="loader-backdrop">
    <!-- Loader -->
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
    <!-- /loader-->
</div>
<!-- loader backdrop -->

<!-- Page container -->
<div class="gx-container">

    <!-- Page Sidebar -->
@include('adminsidebar')
    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">

        <!-- Main Header -->
     @include('adminheader')
        <!-- /main header -->

        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                    <h2 class="title mb-3 mb-sm-0">Edit Article</h2>
                    <nav class="mb-0 breadcrumb">
                        <a href="/admin" class="breadcrumb-item">Dashboard</a>
                       
                        <span class="active breadcrumb-item">Edit Article</span>
                    </nav>
                </div>
              
                <div class="row">
                  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gx-card">
                            <div class="gx-card-header">
                               <!--  <h3 class="card-title"></h3> -->
                            </div>

                            <div class="gx-card-body">

                                @include('errors')
                                @include('success')
                                @include('customerror')
                               <form class="form" method="post" action="/article/{{$article->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                        <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Title</label>
                                        <div class="col-md-10 col-sm-9">
                                         <input type="text" name="title" class="form-control" value="{{$article->title}}" required>
                                        </div>
                                    </div>

                                    

                                     <div class="line-dashed"></div>
                                     <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Author</label>
                                        <div class="col-md-10 col-sm-9">
                                          <input type="text" name="author" class="form-control" value="{{$article->author}}" required>
                                        </div>
                                    </div>
                                    <div class="line-dashed"></div>
                                     <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Abstract</label>
                                        <div class="col-md-10 col-sm-9">
                                          <textarea id="summernote" name="abstract" required>{{$article->abstract}}</textarea>
                                        </div>
                                    </div>  

                                      <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Upload Article(pdf)</label>
                                        <div class="col-md-10 col-sm-9">
                                         <input type="file" name="uploadone" class="form-control">
                                        </div>
                                    </div>
                                      <div class="line-dashed"></div>

                                         <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Keywords</label>
                                        <div class="col-md-10 col-sm-9">
                                          <input type="text" name="keywords" class="form-control" value="{{$article->keywords}}" required>
                                        </div>
                                    </div>

                                          <div class="line-dashed"></div>
                                      <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Page Number</label>
                                        <div class="col-md-10 col-sm-9">
                                         <input type="text" name="pagenumber" class="form-control" value="{{$article->pagenumber}}" required>
                                        </div>
                                         </div>



                                        
       

                   
                              
                            
                                    <div class="form-group row">
                                        <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3">
                                          
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> NACP © 2019</p>
                   
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

    <!-- Theme Options Button -->
    
    <!-- /Theme Options Button -->

</div>
<!-- /page container -->

<!-- Right Sidebar-->

<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->



<script src="/adminassets/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="/adminassets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="/adminassets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="/adminassets/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--Summernote Editor JQuery-->
<script src="/adminassets/node_modules/summernote/dist/summernote-bs4.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>
<script src="/adminassets/js/custom/editor-summernote.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
</html>

