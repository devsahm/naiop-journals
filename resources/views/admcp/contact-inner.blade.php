<!doctype html>
<html lang="en">

<!-- Mirrored from jumbo-admin.g-axon.work/mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:06:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Jumbo - A fully responsive, HTML5 based admin theme">
    <meta name="keywords"
          content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass"> -->
    <title>NAIOP | Admin</title>
    <!-- Site favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='/adminassets//adminassets/images/favicon.ico'/>
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

    <!-- Form stylesheet -->
    <link href="/adminassets/css/jumbo-forms.css" rel="stylesheet">
    <!-- /form stylesheet -->

    <!-- Jumbo-core stylesheet -->
    <link href="/adminassets/css/jumbo-core.min.css" rel="stylesheet">
    <!-- /jumbo-core stylesheet -->

    <link rel="stylesheet" href="/adminassets/fonts/fontawesome/css/font-awesome.min.css">

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
  <!-- /sidebar header -->

            <!-- Main navigation -->
     @include('adminsidebar')
            <!-- /main navigation -->
 
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
                <div class="gx-module">
                    <div id="gxModuleSidebar" class="gx-module-sidenav">
                        <div class="module-side">
                            <div class="module-side-header">
                                <div class="module-logo">
                                    <i class="zmdi zmdi-email mr-3"></i>
                                    <span>Message Box</span>
                                </div>
                            </div>
                            <div class="module-side-content">
                                <div class="module-side-scroll custom-side-scrollbar" style="position: relative;">
                                
                                    <ul class="module-nav">
                                        <li>
                                            <a href="/admin/contact-mail">
                                                <i class="zmdi zmdi-inbox"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>
                                   
                                      <!--   <li>
                                            <a href="/admin/contact-read">
                                                <i class="zmdi zmdi-email-open"></i>
                                                <span>Read</span>
                                            </a>
                                        </li> -->
                                 
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-delete"></i>
                                                <span>Trash</span>
                                            </a>
                                        </li>
                                   
                                       
                                   
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-box">
                        <div class="module-box-header">
                            <a id="gxModuleSideNav" href="javascript:void(0)" class="drawer-btn d-block d-lg-none">
                                <i class="zmdi zmdi-menu"></i>
                            </a>
                            <div class="module-box-header-inner">
                                <div class="search-bar right-side-icon bg-transparent d-none d-sm-block">
                                    <div class="form-group">
                                        <input class="form-control border-0" placeholder="Search mails" value=""
                                               type="search">
                                        <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i></button>
                                    </div>
                                </div>

                                <div class="nav-searchbox dropdown d-inline-block d-sm-none">
                                    <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true"
                                       class="d-inline-block action-btn size-30" aria-expanded="false">
                                        <i class="zmdi zmdi-search zmdi-hc-fw"></i>
                                    </a>
                                    <div aria-hidden="true"
                                         class="p-0 dropdown-menu search-bar search-dropdown">
                                        <div class="form-group">
                                            <input class="form-control border-0" placeholder="" value="" type="search">
                                            <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                        <div class="module-box-content">
                           
                            <div class="module-list mail-list">
                                <div class="custom-scrollbar module-list-scroll" style="position: relative;">
                                  
                               
                                    <div class="module-list-item mail-cell">
                                      <!--   <div class="form-checkbox">
                                            <input value="value2" name="name2" type="checkbox">
                                            <span class="check">
                                                <i class="zmdi zmdi-check zmdi-hc-lg"></i>
                                            </span>
                                        </div> -->

                                        <div class="card-body">
                                             <div class="bg-blue size-40 user-avatar">
                                            <h5 class="m-0 text-white">
                                                <?php $string= $contact->name;
                                                $firstCharacter = $string[0];
                                                echo $firstCharacter;
                                                    ?>
                                            </h5>
                                          

                                        </div>

                                        <span class="sender-name">{{ $contact->name }}</span>  <br>
                                          <span class="subject">Subjects:
                                                       {{ $contact->subject }}
                                            </span><br>

                                            <span class="subject">Email:
                                                       {{ $contact->email}}
                                            </span><br>

                                              <span class="subject"><i>Phone Number:
                                                       {{ $contact->number }}
                                            </i></span><br>

                                                    <p>
                                                           {{ $contact->message }}
                                                    </p>

                                                    <a href="/admin/contact-mail" class=" btn btn-primary">Back</a>

                                                    <form method="post" action="/contacts/{{ $contact->id }}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button class=" btn btn-warning" type="submit" style="color: white; margin-left: 80px; position: relative; top:-37px"><i class="fa fa-trash"></i>Delete</button>
                                                    </form>

                                        </div>

                                   

                                       

                                     <!--    <div class="module-list-info">
                                            <div class="module-list-content">
                                                <div class="mail-user-info">
                                                    <span class="sender-name">{{ $contact->name }}</span>
                                                    <span class="toolbar-separator">&nbsp;</span>
                                                    <span class="subject">
                                                       {{ $contact->subject }}
                                                    </span>
                                                    <span class="time">
                                                    {{ date('d M Y', strtotime($contact->created_at)) }}
                                                    </span>
                                                </div>

                                                <div class="message">
                                                    <p>
                                                           {{ $contact->message }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div> -->
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
                    <p> NAIOP © 2019</p>
                    
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->

</div>
<!-- /page container -->


<div class="modal fade" id="composeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-box" role="document">
        <div class="modal-content">
            <div class="modal-box-header bg-primary modal-header">
                <h4 class="modal-title">
                    New Message
                    <a href="javascript:void(0)" class="action-btn text-white" data-dismiss="modal" aria-label="Close">
                        <i class="zmdi zmdi-close"></i>
                    </a>
                </h4>
            </div>
            <div class="modal-box-content d-flex flex-column">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputTo" placeholder="To*">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputSubject" placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-box-footer">
                <p class="mb-0">
                    <a class="gx-btn gx-flat-btn" href="javascript:void(0)">
                        <i class="zmdi zmdi-attachment"></i>
                        <span>Attach File</span>
                    </a>
                </p>
                <a class="gx-btn gx-btn-primary" href="javascript:void(0)">
                    <i class="zmdi zmdi-mail-send"></i>
                    <span>Send Mail</span>
                </a>
            </div>
        </div>
    </div>
</div>

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
<!--wizard JQuery-->
<script src="/adminassets/node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="/adminassets/js/jquery.validate.min.js"></script>
<!--Custom JQuery-->
<script src="/adminassets/js/functions.js"></script>
<script src="/adminassets/js/custom/mail.js"></script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:06:46 GMT -->
</html>

