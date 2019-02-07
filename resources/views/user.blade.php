<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:33:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://neox-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>NeoX Admin - Dashboard</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/master_style.css')}}">

    <!-- NeoX Admin skins -->
    <link rel="stylesheet" href="{{asset('assets/css/skins/_all-skins.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Logo -->
        {{--<a href="index.html" class="logo">--}}
            {{--<!-- mini logo -->--}}
            {{--<b class="logo-mini">--}}
                {{--<span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>--}}
                {{--<span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>--}}
            {{--</b>--}}
            {{--<!-- logo-->--}}
            {{--<span class="logo-lg">--}}
			  {{--<img src="../images/logo-light-text.png" alt="logo" class="light-logo">--}}
			  {{--<img src="../images/logo-dark-text.png" alt="logo" class="dark-logo">--}}
		  {{--</span>--}}
        {{--</a>--}}
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="search-box">
                        <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="iconsmind-Magnifi-Glass2"></i></a>
                        <form class="app-search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="iconsmind-Bell"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="iconsmind-User"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">
                                <p>
                                    {{Auth::user()->name}}
                                    <small class="mb-5"> {{Auth::user()->email}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row no-gutters">
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ti-settings"></i> Account Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">

                                        <a class="dropdown-item fa fa-power-off" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="iconsmind-Gears-2"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="treeview active">
                    <a href="#">
                        <i class="iconsmind-Dashboard"></i>
                        <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="index.html"><i class="iconsmind-Arrow-Through"></i>Dashboard 1</a></li>
                        <li><a href="index2.html"><i class="iconsmind-Arrow-Through"></i>Dashboard 2</a></li>
                        <li><a href="index3.html"><i class="iconsmind-Arrow-Through"></i>Dashboard 3</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Air-Balloon"></i>
                        <span>Applications</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/app/app-chat.html"><i class="iconsmind-Arrow-Through"></i>Chat app</a></li>
                        <li><a href="pages/app/app-contact.html"><i class="iconsmind-Arrow-Through"></i>Contact / Employee</a></li>
                        <li><a href="pages/app/app-ticket.html"><i class="iconsmind-Arrow-Through"></i>Support Ticket</a></li>
                        <li><a href="pages/app/calendar.html"><i class="iconsmind-Arrow-Through"></i>Calendar</a></li>
                        <li><a href="pages/app/profile.html"><i class="iconsmind-Arrow-Through"></i>Profile</a></li>
                        <li><a href="pages/app/userlist-grid.html"><i class="iconsmind-Arrow-Through"></i>Userlist Grid</a></li>
                        <li><a href="pages/app/userlist.html"><i class="iconsmind-Arrow-Through"></i>Userlist</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="iconsmind-Cloud-Email"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Pantone"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/badges.html"><i class="iconsmind-Arrow-Through"></i>Badges</a></li>
                        <li><a href="pages/UI/border-utilities.html"><i class="iconsmind-Arrow-Through"></i>Border</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="iconsmind-Arrow-Through"></i>Buttons</a></li>
                        <li><a href="pages/UI/bootstrap-switch.html"><i class="iconsmind-Arrow-Through"></i>Bootstrap Switch</a></li>
                        <li><a href="pages/UI/cards.html"><i class="iconsmind-Arrow-Through"></i>User Card</a></li>
                        <li><a href="pages/UI/color-utilities.html"><i class="iconsmind-Arrow-Through"></i>Color</a></li>
                        <li><a href="pages/UI/date-paginator.html"><i class="iconsmind-Arrow-Through"></i>Date Paginator</a></li>
                        <li><a href="pages/UI/dropdown.html"><i class="iconsmind-Arrow-Through"></i>Dropdown</a></li>
                        <li><a href="pages/UI/dropdown-grid.html"><i class="iconsmind-Arrow-Through"></i>Dropdown Grid</a></li>
                        <li><a href="pages/UI/general.html"><i class="iconsmind-Arrow-Through"></i>General</a></li>
                        <li><a href="pages/UI/icons.html"><i class="iconsmind-Arrow-Through"></i>Icons</a></li>
                        <li><a href="pages/UI/media-advanced.html"><i class="iconsmind-Arrow-Through"></i>Advanced Medias</a></li>
                        <li><a href="pages/UI/modals.html"><i class="iconsmind-Arrow-Through"></i>Modals</a></li>
                        <li><a href="pages/UI/nestable.html"><i class="iconsmind-Arrow-Through"></i>Nestable</a></li>
                        <li><a href="pages/UI/notification.html"><i class="iconsmind-Arrow-Through"></i>Notification</a></li>
                        <li><a href="pages/UI/portlet-draggable.html"><i class="iconsmind-Arrow-Through"></i>Draggable Portlets</a></li>
                        <li><a href="pages/UI/ribbons.html"><i class="iconsmind-Arrow-Through"></i>Ribbons</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="iconsmind-Arrow-Through"></i>Sliders</a></li>
                        <li><a href="pages/UI/sweatalert.html"><i class="iconsmind-Arrow-Through"></i>Sweet Alert</a></li>
                        <li><a href="pages/UI/tab.html"><i class="iconsmind-Arrow-Through"></i>Tabs</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="iconsmind-Arrow-Through"></i>Timeline</a></li>
                        <li><a href="pages/UI/timeline-horizontal.html"><i class="iconsmind-Arrow-Through"></i>Horizontal Timeline</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="header nav-small-cap">USER INTERFACE</li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Edit"></i>
                        <span>Widgets</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/widgets/blog.html"><i class="iconsmind-Arrow-Through"></i>Blog</a></li>
                        <li><a href="pages/widgets/chart.html"><i class="iconsmind-Arrow-Through"></i>Chart</a></li>
                        <li><a href="pages/widgets/list.html"><i class="iconsmind-Arrow-Through"></i>List</a></li>
                        <li><a href="pages/widgets/social.html"><i class="iconsmind-Arrow-Through"></i>Social</a></li>
                        <li><a href="pages/widgets/statistic.html"><i class="iconsmind-Arrow-Through"></i>Statistic</a></li>
                        <li><a href="pages/widgets/weather.html"><i class="iconsmind-Arrow-Through"></i>Weather</a></li>
                        <li><a href="pages/widgets/widgets.html"><i class="iconsmind-Arrow-Through"></i>Widgets</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Duplicate-Window"></i>
                        <span>Layout Options</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="iconsmind-Arrow-Through"></i>Boxed</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="iconsmind-Arrow-Through"></i>Fixed</a></li>
                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="iconsmind-Arrow-Through"></i>Collapsed Sidebar</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Gift-Box"></i>
                        <span>Box</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/box/advanced.html"><i class="iconsmind-Arrow-Through"></i>Advanced</a></li>
                        <li><a href="pages/box/basic.html"><i class="iconsmind-Arrow-Through"></i>Basic</a></li>
                        <li><a href="pages/box/color.html"><i class="iconsmind-Arrow-Through"></i>Color</a></li>
                        <li><a href="pages/box/group.html"><i class="iconsmind-Arrow-Through"></i>Group</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Bar-Chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="iconsmind-Arrow-Through"></i>ChartJS</a></li>
                        <li><a href="pages/charts/flot.html"><i class="iconsmind-Arrow-Through"></i>Flot</a></li>
                        <li><a href="pages/charts/inline.html"><i class="iconsmind-Arrow-Through"></i>Inline charts</a></li>
                        <li><a href="pages/charts/morris.html"><i class="iconsmind-Arrow-Through"></i>Morris</a></li>
                        <li><a href="pages/charts/peity.html"><i class="iconsmind-Arrow-Through"></i>Peity</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Folder-WithDocument"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/advanced.html"><i class="iconsmind-Arrow-Through"></i>Advanced Elements</a></li>
                        <li><a href="pages/forms/code-editor.html"><i class="iconsmind-Arrow-Through"></i>Code Editor</a></li>
                        <li><a href="pages/forms/editor-markdown.html"><i class="iconsmind-Arrow-Through"></i>Markdown</a></li>
                        <li><a href="pages/forms/editors.html"><i class="iconsmind-Arrow-Through"></i>Editors</a></li>
                        <li><a href="pages/forms/form-validation.html"><i class="iconsmind-Arrow-Through"></i>Form Validation</a></li>
                        <li><a href="pages/forms/form-wizard.html"><i class="iconsmind-Arrow-Through"></i>Form Wizard</a></li>
                        <li><a href="pages/forms/general.html"><i class="iconsmind-Arrow-Through"></i>General Elements</a></li>
                        <li><a href="pages/forms/mask.html"><i class="iconsmind-Arrow-Through"></i>Formatter</a></li>
                        <li><a href="pages/forms/xeditable.html"><i class="iconsmind-Arrow-Through"></i>Xeditable Editor</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Building"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="iconsmind-Arrow-Through"></i>Simple tables</a></li>
                        <li><a href="pages/tables/data.html"><i class="iconsmind-Arrow-Through"></i>Data tables</a></li>
                        <li><a href="pages/tables/editable-tables.html"><i class="iconsmind-Arrow-Through"></i>Editable Tables</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Envelope-2"></i> <span>Emails</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/email/welcome.html"><i class="iconsmind-Arrow-Through"></i>Welcome Email</a></li>
                        <li><a href="pages/email/verify-email.html"><i class="iconsmind-Arrow-Through"></i>Verify Emial</a></li>
                        <li><a href="pages/email/change-pass.html"><i class="iconsmind-Arrow-Through"></i>Change Password</a></li>
                        <li><a href="pages/email/update.html"><i class="iconsmind-Arrow-Through"></i>User Updates</a></li>
                        <li><a href="pages/email/expired-card.html"><i class="iconsmind-Arrow-Through"></i>Expired Card</a></li>
                        <li><a href="pages/email/closed-account.html"><i class="iconsmind-Arrow-Through"></i>Closed Account</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li class="header nav-small-cap">EXTRA COMPONENTS</li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Map2"></i> <span>Map</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/map/map-google.html"><i class="iconsmind-Arrow-Through"></i>Google Map</a></li>
                        <li><a href="pages/map/map-vector.html"><i class="iconsmind-Arrow-Through"></i>Vector Map</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Plug-In2"></i> <span>Extension</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/extension/fullscreen.html"><i class="iconsmind-Arrow-Through"></i>Fullscreen</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Equalizer"></i> <span>Sample Pages</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/samplepage/blank.html"><i class="iconsmind-Arrow-Through"></i>Blank</a></li>
                        <li><a href="pages/samplepage/custom-scroll.html"><i class="iconsmind-Arrow-Through"></i>Custom Scrolls</a></li>
                        <li><a href="pages/samplepage/faq.html"><i class="iconsmind-Arrow-Through"></i>FAQ</a></li>
                        <li><a href="pages/samplepage/gallery.html"><i class="iconsmind-Arrow-Through"></i>Gallery</a></li>
                        <li><a href="pages/samplepage/invoice.html"><i class="iconsmind-Arrow-Through"></i>Invoice</a></li>
                        <li><a href="pages/samplepage/lightbox.html"><i class="iconsmind-Arrow-Through"></i>Lightbox Popup</a></li>
                        <li><a href="pages/samplepage/pace.html"><i class="iconsmind-Arrow-Through"></i>Pace</a></li>
                        <li><a href="pages/samplepage/pricing.html"><i class="iconsmind-Arrow-Through"></i>Pricing</a></li>
                        <li class="treeview">
                            <a href="#"><i class="iconsmind-Arrow-Through"></i>Coming Soon
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/samplepage/coming-soon-1.html"><i class="fa fa-circle"></i>Coming Soon 1</a></li>
                                <li><a href="pages/samplepage/coming-soon-2.html"><i class="fa fa-circle"></i>Coming Soon 2</a></li>
                                <li><a href="pages/samplepage/coming-soon-3.html"><i class="fa fa-circle"></i>Coming Soon 3</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="iconsmind-Arrow-Through"></i>Authentication
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('login')}}"><i class="fa fa-circle"></i>Login</a></li>
                                <li><a href="pages/samplepage/register.html"><i class="fa fa-circle"></i>Register</a></li>
                                <li><a href="pages/samplepage/lockscreen.html"><i class="fa fa-circle"></i>Lockscreen</a></li>
                                <li><a href="pages/samplepage/user-pass.html"><i class="fa fa-circle"></i>Recover password</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="iconsmind-Arrow-Through"></i>Error Pages
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/samplepage/404.html"><i class="fa fa-circle"></i>404</a></li>
                                <li><a href="pages/samplepage/500.html"><i class="fa fa-circle"></i>500</a></li>
                                <li><a href="pages/samplepage/maintenance.html"><i class="fa fa-circle"></i>Maintenance</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="iconsmind-Arrow-Into"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Level One</a></li>
                        <li class="treeview">
                            <a href="#">Level One
                                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Level Two</a></li>
                                <li class="treeview">
                                    <a href="#">Level Two
                                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#">Level Three</a></li>
                                        <li><a href="#">Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Level One</a></li>
                    </ul>
                </li>

            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12 ">
                    <div class="box box-body bg-primary">
                        <div class="flexbox">
                            <div id="spark1"></div>
                            <span class="font-size-40 font-weight-200">12,568</span>
                        </div>
                        <div class="text-right">Users</div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12 ">
                    <div class="box box-body bg-danger">
                        <div class="flexbox">
                            <div id="spark2"></div>
                            <span class="font-size-40 font-weight-200">8,568</span>
                        </div>
                        <div class="text-right">Invoices</div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box box-body bg-warning">
                        <div class="flexbox">
                            <div id="spark3"></div>
                            <span class="font-size-40 font-weight-200">+100</span>
                        </div>
                        <div class="text-right">Article</div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box box-body bg-info">
                        <div class="flexbox">
                            <div id="spark4"></div>
                            <span class="font-size-40 font-weight-200">16,568</span>
                        </div>
                        <div class="text-right">Income</div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-xl-7 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Statistics</h4>
                            <ul class="box-controls pull-right">
                                <li><a class="box-btn-close" href="#"></a></li>
                                <li><a class="box-btn-slide" href="#"></a></li>
                                <li><a class="box-btn-fullscreen" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="box-body">
                            <div id="bar"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Visitor</h4>
                            <ul class="box-controls pull-right">
                                <li><a class="box-btn-close" href="#"></a></li>
                                <li><a class="box-btn-slide" href="#"></a></li>
                                <li><a class="box-btn-fullscreen" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="box-body">
                            <div id="area-adwords"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Products</h4>
                            <ul class="box-controls pull-right">
                                <li><a class="box-btn-close" href="#"></a></li>
                                <li><a class="box-btn-slide" href="#"></a></li>
                                <li><a class="box-btn-fullscreen" href="#"></a></li>
                            </ul>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../images/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Apple Tv
                                            <span class="label label-info pull-right mt-5">$400</span></a>
                                        <span class="product-description">
							  Library | For You | Browse | Radio
							</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../images/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">MacBook Air<span class="label label-danger pull-right mt-5">$450</span></a>
                                        <span class="product-description">
							  Make big things happen. All day long.
							</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item pb-5">
                                    <div class="product-img">
                                        <img src="../images/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">iPad Pro
                                            <span class="label label-success pull-right mt-5">$289</span></a>
                                        <span class="product-description">
							  Anything you can do, you can do better.
							</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="box pull-up box-body bg-success">
                        <h6 class="text-uppercase">Global</h6>
                        <div class="flexbox mt-10">
                            <div>
                                <h2 class="mb-0">8,748</h2>
                                <h4>World Rank</h4>
                            </div>
                            <div>
                                <h2 class="mb-0">748</h2>
                                <h4>US Rank</h4>
                            </div>
                        </div>
                    </div>
                    <div class="box pull-up box-body bg-info">
                        <h6 class="text-uppercase">Traffic</h6>
                        <div class="flexbox mt-10">
                            <div>
                                <h2 class="mb-0">17.5%</h2>
                                <h5>Search Visits</h5>
                            </div>
                            <div>
                                <h2 class="mb-0">21.6%</h2>
                                <h5>Site Visits</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Site Traffic</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Unique visitors</h6></td>
                                        <td>
                                            <span class="text-muted">4,562</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="visitor1">0,5,0,5,7,6,5.5,10,8</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Pageviews</h6></td>
                                        <td>
                                            <span class="text-muted">679</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="visitor2">0,5,0,5,7,6,5.5,10,8</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Page/visit</h6></td>
                                        <td>
                                            <span class="text-muted">2,516</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="visitor3">0,5,0,5,7,6,5.5,10,8</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Bounce rate</h6></td>
                                        <td>
                                            <span class="text-muted">67%</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="visitor4">0,5,0,5,7,6,5.5,10,8</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0">Visit</h6></td>
                                        <td>
                                            <span class="text-muted">845</span>
                                        </td>
                                        <td class="text-right">
                                            <span class="visitor5">0,5,0,5,7,6,5.5,10,8</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-light">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">

                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="report_panel" class="chk-col-grey" >
                        <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

                        <p>
                            general settings information
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                        <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="expose_author" class="chk-col-grey" >
                        <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                        <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                        <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                            Delete chat history
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery/dist/jquery.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/vendor_components/jquery-ui/jquery-ui.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll -->
<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
<script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

<!-- peity -->
<script src="{{asset('assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>

<!-- NeoX Admin App -->
<script src="{{asset('assets/js/template.js')}}"></script>

<!-- NeoX Admin dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

<!-- NeoX Admin for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>

</body>

<!-- Mirrored from neox-admin-templates.multipurposethemes.com/src/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 11:33:25 GMT -->
</html>
