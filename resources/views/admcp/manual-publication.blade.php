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
    <link href="/adminassets/node_modules/summernote/dist/summernote-bs4.css" rel="stylesheet">

    <!-- Color-Theme stylesheet -->
    <link id="override-css-id" href="/adminassets/css/theme-dark-indigo.css" rel="stylesheet">
    <!-- Color-Theme stylesheet -->

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
                    <h2 class="title mb-3 mb-sm-0">JOURNAL PUBLICATION</h2>
                    <nav class="mb-0 breadcrumb">
                        <a href="/admin" class="breadcrumb-item">Dashboard</a>
                       
                        <span class="active breadcrumb-item">Journal Publication</span>
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

                               <form class="form" method="post" action="/issue" id="form" enctype="multipart/form-data" >
                                @csrf
                                 <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Journal Title<span style="color: red">*</span></label>
                                        <div class="col-md-10 col-sm-9">
                                            <input type="text" name="journal" value="{{ old('journal') }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="line-dashed"></div>
                                        <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Volume<span style="color: red">*</span></label>
                                        <div class="col-md-10 col-sm-9">
                                             <select class="custom-select" name="volume_volume" required>
                                                <option value="">Select created volume number</option>
                                                @foreach($volumes as $volume)
                                                <option value="{{ $volume->volume }}">Volume {{ $volume->volume }}</option>
                                                @endforeach  
                                                    
                                             </select>
                                        </div>
                                       

                                    </div>
                                     <div class="line-dashed"></div>
                                     <div class="form-group row">
                                        <div class="col-md-6">
                                        <div class="row">
                                        <label class="col-md-4 col-sm-5 control-label">No.<span style="color: red">*</span></label>
                                        <div class="col-md-8 col-sm-7">
                                            <select class="custom-select" name="issue" required>
                                                <option value="">Select issue number<span style="color: red">*</span></option>
                                                <option value="1">1</option>
                                                <option value="2"> 2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>    
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>         
                                            </select>
                                        </div>
                                        </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                            <label class="col-md-2 col-sm-3 control-label">Month<span style="color: red">*</span></label>
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

                                        </div>

                                    </div>

                                      <div class="line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Upload Journal Cover<span style="color: red">*</span></label>
                                        
                                        <div class="col-md-10 col-sm-9">
                                          <input type="file" name="cover" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label"></label>
                                        
                                        <div class="col-md-10 col-sm-9">
                                          <h3 class="form-text text-muted">Table of Content</h3>
                                           @include('successfast')
                                           <div>
                                           @if($articles->count()) 
                                            @foreach($articles as $article)
                                             <input type="hidden" name="accepted_id[]" value="{{ $article->id }}">
                                            <p style="position: relative; top:9px; "><a href="/article/{{$article->id }}" style="color: green; text-decoration: underline; ">{{ $article->title }}</a> pg {{ $article->pagenumber }}</p>
                                             <p><i>{{ $article->author }}</i></p>
                                            @endforeach
                                            @else
                                             <div class="alert alert-info">
                                            <p>Articles must be uploaded before any publication can be done. Click the ADD ARTICLE button to add article.</p>
                                            </div>
                                            @endif


                                            <p class="form-text text-muted">(Click the ADD ARTICLE button to add an article)</p>
                                          <a class="btn btn-info" onclick="document.getElementById('article').style.display='block'">ADD ARTICLE</a> 
                                          </div>

                                        </div>
                                    </div>
                                    <input type="submit" id="submit-button" style="display: none;">
                                </form>

                                    <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label"></label>
                                        
                                        <div class="col-md-10 col-sm-9">        
                                          <div style="display:none;" id="article"> 

                                        <form  enctype="multipart/form-data" method="post" action="/manual">
                                        @csrf
                                        <div class="alert alert-success" style="display:none"></div>
                                        <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Article Title</label>
                                         <div class="col-md-10 col-sm-9">
                                         <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" required>
                                        </div>
                                        </div>

                                         <div class="form-group row">
                                         <label class="col-md-2 col-sm-3 control-label">Authors</label>
                                         <div class="col-md-10 col-sm-9">
                                         <input type="text" name="author" class="form-control" value="{{ old('author') }}" required>
                                         <p class="form-text text-muted">Author names should be separated with comma</p>
                                         </div>
                                         </div>

                                        <div class="form-group row">
                                        <label class="col-md-2 col-sm-3 control-label">Abstract</label>
                                         <div class="col-md-10 col-sm-9">
                                         <textarea  name="abstract" class="form-control" style="height: 200px"  required>{{ old('abstract') }}</textarea>
                                        </div>
                                        </div>

                                          <div class="form-group row">
                                         <label class="col-md-2 col-sm-3 control-label">Keywords</label>
                                         <div class="col-md-10 col-sm-9">
                                         <input type="text" name="keywords" value="{{ old('keywords') }}" class="form-control"  required>
                                         <p class="form-text text-muted">Each keywords should be separated with comma</p>
                                         </div>
                                         </div>

                                        <div class="form-group row">
                                        <div class="col-md-7">
                                            <div class="row">
                                             <label class="col-md-4 col-sm-5 control-label">Upload Article</label>
                                             <div class="col-md-8 col-sm-7">
                                             <input type="file" name="uploadone" class="form-control" required>
                                             <p class="form-text text-muted">only pdf, doc, docx)(Max size: 1mb)</p>
                                             </div>
                                            </div>
                                         </div>
                                           <div class="col-md-5">
                                            <div class="row">
                                             <label class="col-md-5 col-sm-6 control-label">Page Number</label>
                                             <div class="col-md-7 col-sm-6">
                                             <input type="text" name="pagenumber" value="{{ old('pagenumber') }}" class="form-control" placeholder=" e.g 120-125" required>
                                            
                                             </div>
                                            </div>
                                             
                                         </div>
                                         </div>

                                           <!--  <div class="form-group row">
                                            <div class="col-md-7">
                                            <div class="row">
                                            <label class="col-md-5 col-sm-6 control-label">Trigger for payment</label>
                                            <div class="col-md-4 col-sm-8">
                                            <div class="material-switch">
                                            <input id="switch-dark-theme" name="markpay" type="checkbox" data-theme="dark" onclick="showfunction()" />
                                            <label for="switch-dark-theme" class="label-primary"></label>
                                            </div>
                                         <p class="form-text text-muted">Use this check box if the article has price</p>
                                         </div>
                                         </div>
                                         </div>
                                         <div class="col-md-5">
                                        <div class="row" style="display: none;" id="showup">
                                        <label class="col-md-4 control-label">Set Price <span>(&#8358)</span></label>
                                         <div class="col-md-8">
                                         <input type="text" name="price" class="form-control" placeholder=" e.g &#8358 1000">
                                         </div>
                                         </div>
                                         </div>
                                         </div> -->

                                         <div class="form-group row">
                                        <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3">
                                          <button class="btn btn-primary" type="submit">Add</button>
                                         
                                        </div>
                                        </div>

                                           </form>

                                         </div> 

                                        </div>

                                      
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-md-2 offset-sm-3 col-md-10 col-sm-9">
                                    
                                            
                                    </div>
                                </div>
                                   
                                    <div class="line-dashed"></div>
                            
                                    <div class="form-group row">
                                        <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3">
                                          
                                            <button type="submit" class="btn btn-primary" id="send-button">Create Publication</button>
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
<!-- <script src="/adminassets/jquery.min.js"></script> -->
<script type="text/javascript">
var form = document.getElementById('form');
var submitButton = document.getElementById('submit-button');
var sendButton = document.getElementById('send-button');

sendButton.addEventListener('click', send);
function send(e) {
    submitButton.click();
}
</script>
<script type="text/javascript">
    function showfunction() {
  var checkBox = document.getElementById("switch-dark-theme");
  var text = document.getElementById("showup");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

</body>

<!-- Mirrored from jumbo-admin.g-axon.work/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 10:05:54 GMT -->
</html>

