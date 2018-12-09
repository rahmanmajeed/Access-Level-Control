<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('icons/pay.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{asset('icons/pay.png')}}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                 <!-- dark Logo text -->
                 <img src="{{asset('icons/payroll.png')}}" alt="homepage" class="dark-logo" />
                 <!-- Light Logo text -->
                 <img src="{{asset('icons/payroll.png')}}" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item d-sm-none"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu mailbox animated bounceInDown">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <ul>
                            <li>
                                <div class="drop-title bg-primary text-white">
                                    <h4 class="m-b-0 m-t-5">4 New</h4>
                                    <span class="font-light">Notifications</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>

                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center m-b-5" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                        <span class="with-arrow"><span class="bg-danger"></span></span>
                        <ul>
                            <li>
                                <div class="drop-title text-white bg-danger">
                                    <h4 class="m-b-0 m-t-5">5 New</h4>
                                    <span class="font-light">Messages</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>

                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center link m-b-5" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- mega menu -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                    <div class="dropdown-menu animated bounceInDown">
                        <ul class="mega-dropdown-menu row">
                            <li class="col-lg-3 col-xlg-2 m-b-30">
                                <h4 class="m-b-20">CAROUSEL</h4>
                                <!-- CAROUSEL -->
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                                <!-- End CAROUSEL -->
                            </li>
                            <li class="col-lg-3 m-b-30">
                                <h4 class="m-b-20">ACCORDION</h4>
                                <!-- Accordian -->
                                <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                    <!-- <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                        </a>
                                      </h5> </div>
                                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                        </div>
                                    </div> -->

                                </div>
                            </li>
                            <li class="col-lg-3  m-b-30">
                                <h4 class="m-b-20">CONTACT US</h4>
                                <!-- Contact -->
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email"> </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </li>
                            <li class="col-lg-3 col-xlg-4 m-b-30">
                                <h4 class="m-b-20">Language</h4>
                                <!-- List style -->
                                <form class="form">
                              <div class="switch-field">
                                <input type="radio" id="switch_left" name="langs" value="en" {{Session::get('locale')=='en' || '' ? 'checked' : ''}} />
                                <label for="switch_left">EN</label>
                                <input type="radio" id="switch_right" name="langs" value="bn" {{Session::get('locale')=='bn' ? 'checked' : ''}}/>
                                <label for="switch_right">BN</label>
                              </div>

                          </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End mega menu -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle" width="30"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class=""><img src="{{asset('images/users/1.jpg')}}" alt="user" class="img-circle" width="60"></div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">Steave Jobs</h4>
                                <p class=" m-b-0">varun@gmail.com</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"></a></li>
            </ul>
        </div>
    </nav>
</header>
