   <div id="menu" class="side-nav gx-sidebar">
        <div class="navbar-expand-lg">
            <!-- Sidebar header  -->
            <div class="sidebar-header">
                <div class="user-profile">
                    <img class="user-avatar" alt="Domnic" src="/adminassets/images/userAvatar/demo.jpg">

                    <div class="user-detail">
                        <h4 class="user-name">
                            <span class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userAccount"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    NAIOP ADMIN
                                </a>

                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="userAccount">
                                    <a href="{{ route('logout') }}" class="dropdown-item" href="javascript:void(0)"                              
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="zmdi zmdi-sign-in zmdi-hc-fw mr-2"></i>
                                        {{ __('Logout') }} 
                                       </a>
                                 
                             
                                </span>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- /sidebar header -->

            <!-- Main navigation -->
            <div id="main-menu" class="main-menu navbar-collapse collapse">
                <ul class="nav-menu">
                   
                    <li><a href="/admin"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Dashboard</a></li>

                  

                         <li><a href="/admin/security"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Account Settings</a></li>

                    <li><a href="/admin/article-downloads-registration"><i class="zmdi zmdi-view-web zmdi-hc-fw"></i>Downloads Registration</a></li>

                      <li><a href="/admin/registered-users"><i class="zmdi zmdi-account-box-o zmdi-hc-fw"></i>Registered Authors</a></li>

                    <li><a href="/admin/submitted-article"><i class="zmdi zmdi-widgets zmdi-hc-fw"></i>Author Submitted Articles</a></li>
              


                         <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>
                            <span class="nav-text">Journal Publication</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/admin/create-volume"><span class="nav-text">Create Volume</span></a></li>
                            <li><a href="/admin/manual-publication"><span class="nav-text">Create Publication </span></a></li>
                            <li><a href="/admin/publication-view"><span class="nav-text">View Publication </span></a></li>
                            <li><a href="/admin/article-published"><span class="nav-text">Published Articles </span></a></li>
                        </ul>
                    </li>

                        <li class="menu">
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-book-image zmdi-hc-fw"></i>
                            <span class="nav-text">Journal Information</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/admin/foreword"><span class="nav-text">Foreword</span></a></li>
                            <li><a href="/admin/editors-note"><span class="nav-text">Editors Note</span></a></li>
                            <li><a href="/admin/editorial-board"><span class="nav-text">Editorial Board</span></a></li>
                          
                        </ul>
                    </li>
                    <li><a href="/admin/contact-mail"><i class="zmdi zmdi-email zmdi-hc-fw"></i>Contacts</a></li>

 

               <li> <a href="{{ route('logout') }}"                              
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="zmdi zmdi-key zmdi-hc-fw"></i>
                                        {{ __('Logout') }} 
                                       </a>
               </li>

                </ul>
            </div>
            <!-- /main navigation -->
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>