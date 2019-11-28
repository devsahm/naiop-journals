<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:50 GMT -->
<head>
    <title>NAIOP | Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--  <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
 <link rel='shortcut icon' type='image/x-icon'/ href='adminassets/images/favicon.ico' />
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

    <!-- c3 Chart's css file -->
    <link href="/adminassets/node_modules/c3/c3.min.css" rel="stylesheet">
    <!-- /c3 chart stylesheet -->

    <!-- Chartists Chart's css file -->
    <link href="/adminassets/node_modules/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- /chartists chart stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->
     <link rel="stylesheet" href="/adminassets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="/adminassets/css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->
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
                <div class="animated slideInUpTiny animation-duration-3">
                    <div class="page-heading d-sm-flex justify-content-sm-between align-items-sm-center">
                        <h2 class="title mb-3 mb-sm-0">View Publication</h2>
                        <nav class="mb-0 breadcrumb">
                            <a href="/admin" class="breadcrumb-item">Dashboard</a>
                            
                            <span class="active breadcrumb-item">View Publication</span>
                        </nav>
                    </div>
             
                    <div class="row">
                        <div class="col-lg-12">
                          
                            <div class="gx-card mb-0 p-0">
                                <div class="gx-card-body">
                                    <div class="table-responsive">
                                        <table class="table table-users default-table table-hover">
                                           
                                            <tbody>
                                            <tr>
                                             <th>S/N</th>
                                              <th>Volume</th>
                                              <th>View Details</th>
                                              <th>Date</th>
                                              </tr>
                                             <?php $counter=1; ?>
                                             @if($volumes->count())
                                            @foreach($volumes as $volume)
                                            <tr>  
                                             <td><?php echo $counter; ?></td>           
                                                <td>Volume {{ $volume->volume }}</td>
                                                <td>
                                                    <a href="/volume/{{ $volume->id }}" style="padding: 10px 8px;" class="btn btn-primary"><i class="fa fa-eye"></i> View Volume Details</button>
                                                </td> 
                                                <td>{{ date('d M Y', strtotime($volume->created_at)) }}</td>
                                                <?php $counter++; ?>          
                                            </tr>
                                             
                                            @endforeach
                                             @else

                                                <div class="alert alert-warning">

                                                
                                                <p style="margin:auto;">no publication has been made</p>

                                                </div>


                                            @endif
                                          
                                            
                                            </tbody>
                                        </table>
                                 <ul class="pagination"  style="margin: 10px">
                                 {{ $volumes->links() }}
                                 </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> Copyright Company Name © 2018</p>
                    <a href="https://themeforest.net/item/jumbo-admin-responsive-admin-dashboard-template/21368029" target="_blank" class="btn-link text-uppercase">Buy Now</a>
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

<!-- Mirrored from jumbo-admin.g-axon.work/basic-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:51 GMT -->
</html>

