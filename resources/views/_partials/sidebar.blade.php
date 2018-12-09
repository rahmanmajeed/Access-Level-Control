<aside class="left-sidebar">
  @stack('sidebar_start')
    <div class="nav-text-box align-items-center d-sm-none">
        <span><img src="{{asset('icons/logo-icon.png')}}" alt="elegant admin template"></span>
        <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">@lang('title.menu') <span class="badge badge-pill badge-cyan">4</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">@lang('title.settings')</a></li>
                        <li><a href="#">@lang('title.purchase')</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('title.apps')</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">Chat app</a></li>
                        <li><a href="#">Support Ticket</a></li>
                        <li><a href="#">Contact / Employee</a></li>
                        <li><a href="#">Contact Grid</a></li>
                        <li><a href="#">Contact Detail</a></li>
                        <li><a href="javascript:void(0)" class="has-arrow">Inbox</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Mailbox</a></li>
                                <li><a href="#">Mailbox Detail</a></li>
                                <li><a href="#">Compose Mail</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark two-column" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Cards</a></li>
                        <li><a href="#">User Cards</a></li>
                        <li><a href="#">Buttons</a></li>
                        <li><a href="#">Modals</a></li>
                        <li><a href="#">Tab</a></li>
                        <li><a href="#">Tooltip &amp; Popover</a></li>
                        <li><a href="#">Tooltip stylish</a></li>
                        <li><a href="#">Sweet Alert</a></li>
                        <li><a href="#">Notification</a></li>
                        <li><a href="#">Progressbar</a></li>
                        <li><a href="#"</a></li>
                        <li><a href="#">Range slider</a></li>
                        <li><a href="#"</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Horizontal Timeline</a></li>
                        <li><a href="#">Session Timeout</a></li>
                        <li><a href="#">Session Ideal Timeout</a></li>
                        <li><a href="#">Bootstrap Ui</a></li>
                        <li><a href="#">Breadcrumb</a></li>
                        <li><a href="#">Bootstrap Switch</a></li>
                        <li><a href="#">List Media</a></li>
                        <li><a href="">Ribbons</a></li>
                        <li><a href="#">Grid</a></li>
                        <li><a href="#">Carousel</a></li>
                        <li><a href="#">Date-paginator</a></li>
                        <li><a href="#">Dragable Portlet</a></li>
                    </ul>
                </li>

                <li class="nav-small-cap">

                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    @stack('sidebar_end')

</aside>
