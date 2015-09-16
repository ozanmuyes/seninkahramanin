<header class="main-header">
    <a href="{{ route('Site.Index') }}" class="logo" title="Sitenin anasayfasına git">
        <span class="logo-mini">LOGO</span>
        <span class="logo-lg"><b>Senin</b> Kahramanın</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        {{-- <span class="label label-success">4</span> --}}
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">
                            You have 4 messages
                        </li>

                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="{{ '//placeholdit.imgix.net/~text?txtsize=33&txt=' . $admin->username . '&w=256&h=256' }}" class="img-circle" alt="User Image" />
                                        </div>

                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>

                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>

                        <li class="footer">
                            <a href="#">See All Messages</a>
                        </li>
                    </ul>
                </li>

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        {{-- <span class="label label-warning">10</span> --}}
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>

                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 15 new members joined today
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 25 new members joined today
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 35 new members joined today
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 45 new members joined today
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 55 new members joined today
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>

                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        {!! Html::image($picture->path, $picture->alt, ["class" => "user-image"]) !!}

                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ $admin->name }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            {!! Html::image($picture->path, $picture->alt, ["class" => "img-circle"]) !!}

                            <p>
                                {{ $admin->name }}
                                <small>Yönetici</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('Site.Index', $admin->username) }}" class="btn btn-default btn-flat">Profil</a>
                            </div>

                            <div class="pull-right">
                                <a href="{{ route('Logout') }}" class="btn btn-default btn-flat">Çıkış</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
