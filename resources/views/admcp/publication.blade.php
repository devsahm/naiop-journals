<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>NAIOP | Admin</title>
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

    <!-- Color-Theme stylesheet -->
    <link id="/adminassets/override-css-id" href="css/theme-dark-indigo.css" rel="stylesheet">
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
                    <h2 class="title mb-3 mb-sm-0">CREATE PUBLICATION</h2>
                    <nav class="mb-0 breadcrumb">
                        <a href="/admin" class="breadcrumb-item">Dashboard</a>
                       
                        <span class="active breadcrumb-item">Create Publication</span>
                    </nav>
                </div>
              
                <div class="row">
                  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gx-card">
                            <div class="gx-card-header">
                                <h3 class="card-title">Publication of Articles</h3>
                            </div>

                            <div class="gx-card-body">

                                @include('errors')
                                @include('success')
                                @include('customerror')
                               <form class="form" method="post" action="/issue">
                                @csrf
                                        <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Volume</label>
                                        <div class="col-md-10 col-sm-9">
                                            <select class="custom-select" name="volume_id" required>
                                                <option value="">Select created volume number</option>
                                                @foreach($volumes as $volume)
                                                <option value="{{ $volume->volume }}">Volume {{ $volume->volume }}</option>
                                                  @endforeach
                                            </select>
                                        </div>
                                    </div>

                                     <div class="line-dashed"></div>
                                     <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Issue</label>
                                        <div class="col-md-10 col-sm-9">
                                            <select class="custom-select" name="issue" required>
                                                <option value="">Select issue number</option>
                                                <option value="1">Issue 1</option>
                                                <option value="2">Issue 2</option>
                                                <option value="3">Issue 3</option>
                                                <option value="4">Issue 4</option>
                                                <option value="5">Issue 5</option>
                                                <option value="6">Issue 6</option>
                                                <option value="7">Issue 7</option>
                                                <option value="8">Issue 8</option>    
                                                <option value="9">Issue 9</option>
                                                <option value="3">Issue 10</option>         
                                            </select>
                                        </div>
                                    </div>

                                    <div class="line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Issue Month</label>
                                        <div class="col-md-10 col-sm-9">
                                            <select class="custom-select" name="month" required>
                                                <option value="0">Select Issue Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label"></label>
                                        
                                        <div class="col-md-10 col-sm-9">
                                           <p class="form-text text-muted">Select confirmed articles with their reference number</p>
                                        </div>

                                      
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-md-2 offset-sm-3 col-md-10 col-sm-9">
                                        @if($acceptedarticles->count())
                                         @foreach($acceptedarticles as $acceptedarticle)
                                     
                                            <div class="">
                                                <input type="checkbox" id="" name="accepted_id[]" class="" value="{{ $acceptedarticle->id }}">
                                                <label class="" for="">NAIOP{{ now()->year }}0{{ $acceptedarticle->id }}</label>
                                            </div>
                                            @endforeach
                                            @else

                                         <div class="alert alert-warning">
                                            <p>Currently, no confirmed article is available. Publication cannot be done without an article. Click <a href="/admin/submitted-article">HERE</a>  to confirm articles</p>
                                            </div>
                                        @endif
                                            
                                    </div>
                                </div>
                                   
                                    <div class="line-dashed"></div>
                            
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
                    <p> NAIOP © 2019</p>
                   
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

<!--Load JQuery-->
<script src="/adminassets/node_modules/jquery/dist/jquery.min.js"></script>
<!--Bootstrap JQuery-->
<script src="/adminassets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--Perfect Scrollbar JQuery-->
<script src="/adminassets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!--Big Slide JQuery-->
<script src="/adminassets/node_modules/bigslide/dist/bigSlide.min.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
</html>

