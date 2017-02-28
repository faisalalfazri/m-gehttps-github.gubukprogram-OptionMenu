
<!DOCTYPE html>
<html lang="en">
<?php
	if(!isset($_SESSION['login_'])){
		header("location:home");
	}else{
		header("location:home");
	}
?>
<head>
    <title>Able Pro Responsive Bootstrap 4 Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="assets/plugins/charts/chartlist/css/chartlist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="assets/css/svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color"/>

</head>
<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
<div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div> -->
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="index.html" class="logo"><img class="img-fluid able-logo" src="<?php echo $server; ?>/assets/images/logo.png" alt="Theme-logo"></a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->

                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                        <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                            <i class="icofont icofont-search-alt-1"></i>
                        </a>
                    </li>
                    <li class="dropdown notification-menu">
                        <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                            <i class="icon-bell"></i>
                            <span class="badge badge-danger header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                    <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div></a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media">
                    <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div></a>
                            </li>
                            <li class="bell-notification">
                                <a href="javascript:;" class="media"><span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                            </li>
                            <li class="not-footer">
                                <a href="#!">See all notifications.</a>
                            </li>
                        </ul>
                    </li>
                    <!-- chat dropdown -->
                    <li class="pc-rheader-submenu ">
                        <a href="#!" class="drop icon-circle displayChatbox">
                            <i class="icon-bubbles"></i>
                            <span class="badge badge-danger header-badge blink">5</span>
                        </a>

                    </li>
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>

                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                            <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                            <li><a href="#!"><i class="icon-user"></i> Profile</a></li>
                            <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
                            <li><a href="#!"><i class="icon-logout"></i> Logout</a></li>

                        </ul>
                    </li>
                </ul>

                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                    <form class="morphsearch-form">

                        <input class="morphsearch-input" type="search" placeholder="Search..."/>

                        <button class="morphsearch-submit" type="submit">Search</button>

                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                                <h3>Sara Soueidan</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                                <h3>Page Preloading Effect</h3>
                            </a>

                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                           <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div><!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p>John Doe</p>
                    <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                    <a class="waves-effect waves-dark" href="profile.html">
                        <i class="icon-user"></i>
                        <span class="menu-text">View Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-settings"></i>
                        <span class="menu-text">Settings</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">Navigation</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Dashboard</span><i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a class="waves-effect waves-dark" href="index.html"><i class="icon-arrow-right"></i><span>Dashboard 1 </span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard2.html"><i class="icon-arrow-right"></i><span>Dashboard 2 </span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard3.html"><i class="icon-arrow-right"></i><span>Dashboard 3 </span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard4.html"><i class="icon-arrow-right"></i><span>Dashboard 4 </span></a></li>
                    </ul>
                </li>
               <li><a href="widget.html"><i class="icon-grid"></i><span> Widget</span><span class="label label-warning menu-caption">100+</span></a> </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-film"></i>
                    <span> Page Layout</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="menu-static.html"><i class="icon-arrow-right"></i> Static Layout</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-fixed.html"><i class="icon-arrow-right"></i> Header and Sidebar Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-sidebar-sticky.html"><i class="icon-arrow-right"></i> Sidebar Sticky</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-header-fixed.html"><i class="icon-arrow-right"></i> Header Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="../horizontal/menu-horizontal.html" target="_blank"><i class="icon-arrow-right"></i> Menu Horizontal</a></li>
                        <li><a class="waves-effect waves-dark" href="../horizontal/menu-horizontal-icon.html" target="_blank"><i class="icon-arrow-right"></i> Menu Horizontal Icon</a></li>
                        <li><a class="waves-effect waves-dark" href="../horizontal/menu-horizontal-fixed.html" target="_blank"><i class="icon-arrow-right"></i> Header Horizontal Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="../horizontal/menu-horizontal-icon-fixed.html" target="_blank"><i class="icon-arrow-right"></i> Header Horizontal Icon Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="menu-footer-fixed.html"><i class="icon-arrow-right"></i> Footer Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="../horizontal/menu-bottom.html" target="_blank"><i class="icon-arrow-right"></i> Bottom Menu Fixed</a></li>
                        <li><a class="waves-effect waves-dark" href="../horizontal/mega-menu.html" target="_blank"><i class="icon-arrow-right"></i> Mega Menu</a></li>
                         <li><a class="waves-effect waves-dark" href="box-layout.html"><i class="icon-arrow-right"></i> Box-Layout</a></li>

                    </ul>
                </li>
                <li class="nav-level">Components</li>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Accordion</a></li>
                        <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Button</a></li>
                        <li><a class="waves-effect waves-dark" href="button-fab.html"><i class="icon-arrow-right"></i> Button FAB</a></li>
                        <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Label Badge</a></li>
                        <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Grid system</a></li>
                        <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> Box Shadow</a></li>
                        <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a></li>
                        <li><a class="waves-effect waves-dark" href="draggable.html"><i class="icon-arrow-right"></i> Draggable</a></li>
                        <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light Box</a></li>
                        <li><a class="waves-effect waves-dark" href="list.html"><i class="icon-arrow-right"></i> List</a></li>
                        <li><a class="waves-effect waves-dark" href="nestable.html"><i class="icon-arrow-right"></i> Nestable</a></li>
                        <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i> Notification</a></li>
                        <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i> Panels-Wells</a></li>
                        <li><a class="waves-effect waves-dark" href="preloader.html"><i class="icon-arrow-right"></i> Preloader</a></li>
                        <li><a class="waves-effect waves-dark" href="range-slider.html"><i class="icon-arrow-right"></i> Range-Slider</a></li>
                        <li><a class="waves-effect waves-dark" href="rating.html"><i class="icon-arrow-right"></i> Rating</a></li>
                        <li><a class="waves-effect waves-dark" href="slider.html"><i class="icon-arrow-right"></i> Slider</a></li>
                        <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a></li>
                        <li><a class="waves-effect waves-dark" href="treeview.html"><i class="icon-arrow-right"></i> Tree View</a></li>
                        <li><a class="waves-effect waves-dark" href="tour.html"><i class="icon-arrow-right"></i> Tour</a></li>
                        <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i> Tooltips</a></li>
                        <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i> Typography</a></li>
                        <li><a class="waves-effect waves-dark" href="card.html"><i class="icon-arrow-right"></i> Card</a></li>
                        <li><a class="waves-effect waves-dark" href="footer.html"><i class="icon-arrow-right"></i> Footer</a></li>
                        <li><a class="waves-effect waves-dark" href="footer-center.html"><i class="icon-arrow-right"></i> Footer Center</a></li>
                        <li><a class="waves-effect waves-dark" href="footer-right.html"><i class="icon-arrow-right"></i> Footer Right</a></li>
                        <li><a class="waves-effect waves-dark" href="other.html"><i class="icon-arrow-right"></i> Other</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-picture"></i><span> Theme UI</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="contact-card.html"><i class="icon-arrow-right"></i> Contact Card</a></li>
                        <li><a class="waves-effect waves-dark" href="contact-details.html"><i class="icon-arrow-right"></i> Contact Details</a></li>
                        <li><a class="waves-effect waves-dark" href="animation.html"><i class="icon-arrow-right"></i> Animation</a></li>
                        <li><a class="waves-effect waves-dark" href="dynamic-grid.html"><i class="icon-arrow-right"></i> Dynamic Grid</a></li>
                        <li><a class="waves-effect waves-dark" href="generic-class.html"><i class="icon-arrow-right"></i> Generic Class</a></li>
                        <li><a class="waves-effect waves-dark" href="gridstack.html"><i class="icon-arrow-right"></i> Grid Stack</a></li>
                        <li><a class="waves-effect waves-dark" href="modal.html"><i class="icon-arrow-right"></i> Modal</a></li>
                        <li><a class="waves-effect waves-dark" href="portlets.html"><i class="icon-arrow-right"></i> Portlets</a></li>
                        <li><a class="waves-effect waves-dark" href="sticky.html"><i class="icon-arrow-right"></i> Sticky</a></li>

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Icon</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="font-awesome.html"><i class="icon-arrow-right"></i> Font-Awesome Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="material-design-icons.html"><i class="icon-arrow-right"></i> Material Design Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="simple-line-icons.html"><i class="icon-arrow-right"></i> Simple Line Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="ion-icon.html"><i class="icon-arrow-right"></i> Ion Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="icofonts.html"><i class="icon-arrow-right"></i> Ico Fonts Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="weather-icons.html"><i class="icon-arrow-right"></i> Weather Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="typicons-icons.html"><i class="icon-arrow-right"></i> TypIcons</a></li>
                                <li><a class="waves-effect waves-dark" href="flags.html"><i class="icon-arrow-right"></i> Flags</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="echart.html"><i class="icon-arrow-right"></i> E-Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="chartjs.html"><i class="icon-arrow-right"></i> Chart Js</a></li>
                        <li><a class="waves-effect waves-dark" href="list-charts.html"><i class="icon-arrow-right"></i> List Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="knob-chart.html"><i class="icon-arrow-right"></i> Knob Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="nvd3-chart.html"><i class="icon-arrow-right"></i> nvd3 Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="peity-chart.html"><i class="icon-arrow-right"></i> Peity Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="radial-chart.html"><i class="icon-arrow-right"></i> Radial Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="rickshaw-chart.html"><i class="icon-arrow-right"></i> Rickshaw Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="sparkline-chart.html"><i class="icon-arrow-right"></i> Sparkline Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="c3chart-chart.html"><i class="icon-arrow-right"></i> c3Chart Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="map-google.html"><i class="icon-arrow-right"></i> Map Google</a></li>
                        <li><a class="waves-effect waves-dark" href="map-vector.html"><i class="icon-arrow-right"></i> Map Vector</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-materialize.html"><i class="icon-arrow-right"></i> Form Elements Material</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
                        <li><a class="waves-effect waves-dark" href="forms-wizard.html"><i class="icon-arrow-right"></i> Form Wizard</a></li>
                        <li><a class="waves-effect waves-dark" href="form-mask.html"><i class="icon-arrow-right"></i> Form Masking</a></li>
                        <li><a class="waves-effect waves-dark" href="forms-validation.html"><i class="icon-arrow-right"></i> Form Validation</a></li>
                        <li><a class="waves-effect waves-dark" href="x-editable.html"><i class="icon-arrow-right"></i> X-Editable</a></li>
                        <li><a class="waves-effect waves-dark" href="file-upload.html"><i class="icon-arrow-right"></i> File Upload</a></li>
                        <li><a class="waves-effect waves-dark" href="image-cropper.html"><i class="icon-arrow-right"></i> Image Cropper</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-list"></i><span> Tables</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="basic-table.html"><i class="icon-arrow-right"></i> Basic Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="data-table.html"><i class="icon-arrow-right"></i> Data Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="responsive-table.html"><i class="icon-arrow-right"></i> Responsive Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="editable-table.html"><i class="icon-arrow-right"></i> Editable Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="foo-tables.html"><i class="icon-arrow-right"></i> Foo Tables</a></li>
                    </ul>
                </li>

                <li class="nav-level">More</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                                <li><a class="waves-effect waves-dark" href="register2.html" target="_blank"><i class="icon-arrow-right"></i><span> Register 2</span></a></li>
                                <li><a class="waves-effect waves-dark" href="signin-up-modal.html"><i class="icon-arrow-right"></i><span> Sign In/Up with Modal </span></a></li>
                                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="login2.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 2</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="landing-page.html" target="_blank"><i class="icon-arrow-right"></i> Landing page</a></li>
                        <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
                        <li><a class="waves-effect waves-dark" href="400.html" target="_blank"><i class="icon-arrow-right"></i> Error 400</a></li>
                        <li><a class="waves-effect waves-dark" href="403.html" target="_blank"><i class="icon-arrow-right"></i> Error 403</a></li>
                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="500.html" target="_blank"><i class="icon-arrow-right"></i> Error 500</a></li>
                        <li><a class="waves-effect waves-dark" href="503.html" target="_blank"><i class="icon-arrow-right"></i> Error 503</a></li>
                        <li><a class="waves-effect waves-dark" href="gallery.html"><i class="icon-arrow-right"></i> Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                        <li><a class="waves-effect waves-dark" href="invoice.html"><i class="icon-arrow-right"></i> Invoice</a></li>
                        <li><a class="waves-effect waves-dark" href="blog.html"><i class="icon-arrow-right"></i> Blog</a></li>
                        <li><a class="waves-effect waves-dark" href="blog-detail.html"><i class="icon-arrow-right"></i> Blog Detail</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result 1</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result2.html"><i class="icon-arrow-right"></i> Search Result 2</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-social-dropbox"></i><span>Apps</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Task </span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="task-list.html"><i class="icon-arrow-right"></i> Task List</a></li>
                                <li><a class="waves-effect waves-dark" href="task-board.html"><i class="icon-arrow-right"></i> Task Board</a></li>
                                <li><a class="waves-effect waves-dark" href="task-detailed.html"><i class="icon-arrow-right"></i> Task Detailed</a></li>
                                <li><a class="waves-effect waves-dark" href="issue-list.html"><i class="icon-arrow-right"></i> Issue List</a></li>
                            </ul>
                        </li>

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Email </span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="inbox.html"><i class="icon-arrow-right"></i> Inbox</a></li>
                                <li><a class="waves-effect waves-dark" href="compose.html"><i class="icon-arrow-right"></i> Compose</a></li>
                                <li><a class="waves-effect waves-dark" href="read-mail.html"><i class="icon-arrow-right"></i> Read Mail</a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="todo.html"><i class="icon-arrow-right"></i> To Do</a></li>
                        <li><a class="waves-effect waves-dark" href="chat.html"><i class="icon-arrow-right"></i> Chat</a></li>
                        <li><a class="waves-effect waves-dark" href="ck-editor.html"><i class="icon-arrow-right"></i> CK Editor</a></li>
                        <li><a class="waves-effect waves-dark" href="wysiwyg-editor.html"><i class="icon-arrow-right"></i> wysiwyg Editor</a></li>
                        <li><a class="waves-effect waves-dark" href="ace-editor.html"><i class="icon-arrow-right"></i> Ace Editor</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-user-follow"></i><span>CRM</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="crm-dashboard.html"><i class="icon-arrow-right"></i> CRM-Dashbord</a></li>
                        <li><a class="waves-effect waves-dark" href="crm-contact.html"><i class="icon-arrow-right"></i> CRM-Contact</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-basket-loaded"></i><span>E-Commerce</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="product.html"><i class="icon-arrow-right"></i> Product</a></li>
                        <li><a class="waves-effect waves-dark" href="product-detail.html"><i class="icon-arrow-right"></i> Product Detail</a></li>
                        <li><a class="waves-effect waves-dark" href="product-list.html"><i class="icon-arrow-right"></i> Product List</a></li>
                        <li><a class="waves-effect waves-dark" href="product-edit.html"><i class="icon-arrow-right"></i> Product Edit</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-share"></i><span>Social</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="profile-social.html"><i class="icon-arrow-right"></i> Profile Social</a></li>
                        <li><a class="waves-effect waves-dark" href="timeline-social.html"><i class="icon-arrow-right"></i><span> Timeline Social</span></a></li>
                        <li><a class="waves-effect waves-dark" href="wall.html"><i class="icon-arrow-right"></i><span> Wall</span></a></li>
                        <li><a class="waves-effect waves-dark" href="message.html"><i class="icon-arrow-right"></i><span> Message</span></a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-present"></i><span>Extras</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Email Template</span><span class="label label-primary menu-arrow-caption">4</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="email-confirm.html" target="_blank"><i class="icon-arrow-right"></i> Email Confirm</a></li>
                                <li><a class="waves-effect waves-dark" href="email-order-track.html" target="_blank"><i class="icon-arrow-right"></i> Email Order Track</a></li>
                                <li><a class="waves-effect waves-dark" href="email-otp.html" target="_blank"><i class="icon-arrow-right"></i> Email OTP</a></li>
                                <li><a class="waves-effect waves-dark" href="email-signup.html" target="_blank"><i class="icon-arrow-right"></i> Email Signup</a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="timeline.html"><i class="icon-arrow-right"></i> Timeline</a></li>
                        <li><a class="waves-effect waves-dark" href="maintainance.html" target="_blank"><i class="icon-arrow-right"></i> Maintainace</a></li>
                        <li><a class="waves-effect waves-dark" href="coming-soon.html" target="_blank"><i class="icon-arrow-right"></i> Coming Soon</a></li>
                        <li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
                        <li><a class="waves-effect waves-dark" href="pricing.html"><i class="icon-arrow-right"></i> Pricing</a></li>
                        <li><a class="waves-effect waves-dark" href="full-calender.html"><i class="icon-arrow-right"></i>Full Calender<span class="label label-danger menu-caption">Hot</span></a></li>
                    </ul>
                </li>


                <li class="nav-level">Menu Level</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Two
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Two</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Three
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>Level Three</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <!-- Sidebar chat start -->
    <div id="sidebar" class="p-fixed header-users showChat">
        <div class="had-container">
            <div class="card card_main header-users-main">
                <div class="card-content user-box">

                    <div class="md-group-add-on p-20">
                                 <span class="md-add-on">
                                    <i class="icofont icofont-search-alt-2 chat-search"></i>
                                 </span>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control"  name="username" id="search-friends">
                            <label for="username">Search</label>
                        </div>

                    </div>
                    <div class="media friendlist-main">

                        <h6>Friend List</h6>

                    </div>
                    <div class="main-friend-list">
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Michael Scofield</div>
                                <span>3 hours ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Irina Shayk</div>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Sara Tancredi</div>
                                <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media-right photo-table">
                <a href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
            </div>
        </div>
        <div class="media chat-reply-box">
            <div class="md-input-wrapper">
                <input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
                <label>Share your thoughts</label>
                 <span class="highlight"></span>
                 <span class="bar"></span>  <button type="button" class="chat-send waves-effect waves-light">
                     <i class="icofont icofont-location-arrow f-20 "></i>
                 </button>

                <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>
            </div>

        </div>
    </div>
    <!-- Sidebar chat end-->
    <div class="content-wrapper">

        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row m-b-30 dashboard-header">
                <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <i class="icon-bubbles"></i>
                            <div class="f-right">
                                <h2 class="counter">4500</h2>
                                <span>Total Visitors</span>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <i class="icon-speedometer"></i>
                            <div class="f-right">
                                <h2 class="counter">3521</h2>
                                <span>Total Sales</span>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales ">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">1085</h2>
                                <span>New Orders</span>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">84</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-facebook dashboard-facebook">
                        <div class="sales-facebook">
                            <i class="icon-clock"></i>
                            <div class="f-right">
                                <h2 id="system-clock"></h2>

                            </div>
                        </div>
                        <div class="bg-dark-facebook">
                            <p class="week-sales">Visitors</p>
                            <p class="total-sales">432</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 4-blocks row end -->

            <!-- 1-3-block row start -->
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="col-sm-12 card">
                        <div class="card-block">
                            <h6 class="m-b-20">Website Stats</h6>
                            <div id="website-stats" style="height: 420px"></div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Total Products</span>
                        <h2 class="dashboard-total-products counter">4800</h2>
                        <span class="label label-warning">Sales</span>Arriving Today
                        <div class="side-box bg-warning">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Conversion Rate</span>
                        <h2 class="dashboard-total-products counter">37,500</h2>
                        <span class="label label-primary">Views</span>View Today
                        <div class="side-box bg-primary">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Total Profit</span>
                        <h2 class="dashboard-total-products">$<span class="counter">30,780</span></h2>
                        <span class="label label-success">Sales</span>Reviews
                        <div class="side-box bg-success">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1-3-block row end -->

            <!-- 3-1-block start -->
            <div class="row">
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-xl-12 col-sm-6">
                            <div class="card">
                                <div class="bg-danger dashboard-resource">
                                    <div class="card-block">
                                        <h5 class="counter">92.85</h5>%
                                        <h5 class="resource-used">Total monthly Sales</h5>
                                    </div>
                                    <div class="card-block">
                                        <span class="resource-barchart"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6">
                            <div class="card">
                                <div class="bg-warning dashboard-resource m-t-5">
                                    <div class="card-block">
                                        <h5 class="counter">20.85</h5>%
                                        <h5 class="resource-used">Resource Used</h5>
                                    </div>
                                    <div class="card-block">
                                        <span class="resource-barchart"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 grid-item">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-7 p-r-0 txt-white climacon-left">
                                <div class="card-block bg-primary">
                                    <div class="m-b-5">
                                        <h4 class="dashboard-city">California, USA</h4>
                                        <h5 class="city-cloud">Hot &amp; Sunny</h5>
                                    </div>
                                    <div>
                                        <h6 class="cloud-date">Yesterday, 12th October 2015</h6>
                                        <div class="cloud-speed">
                                            <i class="icofont icofont-social-cloudapp"></i>
                                            <span>57<sup>MPH</sup></span>
                                        </div>
                                    </div>
                                    <div class="svg-cloud">
                                        <svg version="1.1" id="sun" class="climacon climacon_sun" viewBox="15 15 70 70">
                                            <clipPath id="sunFillClip">
                                                <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z" />
                                            </clipPath>
                                            <g class="climacon_iconWrap climacon_iconWrap-sun">
                                                <g class="climacon_componentWrap climacon_componentWrap-sun">
                                                    <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z" />
                                                    </g>
                                                    <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                                        <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="cloud-temp">
                                            <h5 class="">Currently</h5>
                                            <h2>24°</h2>
                                        </div>

                                    </div>
                                    <ul class="weather-temp">
                                        <li>
                                            <h6 class="txt-white">14:00</h6>
                                            <svg
                                                    version="1.1"
                                                    id="cloudLightning"
                                                    class="climacon climacon_cloudLightning"
                                                    viewBox="15 15 70 70">
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                        <polygon
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_lightning"
                                                                points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "/>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>24°</h4>
                                        </li>
                                        <li>
                                            <h6 class="txt-white">22:00</h6>
                                            <svg
                                                    version="1.1"
                                                    id="cloudDrizzleAlt"
                                                    class="climacon climacon_cloudDrizzleAlt"
                                                    viewBox="15 15 70 70">
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                id="Drizzle-Left_1_"
                                                                d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"/>
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"/>
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"/>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>20°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">17:00</h6>
                                            <svg
                                                    version="1.1"
                                                    id="cloudRainAlt"
                                                    class="climacon climacon_cloudRainAlt"
                                                    viewBox="15 15 70 70">
                                                <clipPath id="cloudFillClip">
                                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                </clipPath>
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudRainAlt">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                                d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"/>
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                                d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"/>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>22°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">16:00</h6>
                                            <svg version="1.1" id="cloudDrizzle" class="climacon climacon_cloudDrizzle" viewBox="15 15 70 70">
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z" />
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z" />
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>23°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">18:00</h6>
                                            <svg
                                                    version="1.1"
                                                    id="cloudSnowSunAlt"
                                                    class="climacon climacon_cloudSnowSunAlt"
                                                    viewBox="15 15 70 70">
                                                <clipPath id="cloudFillClip">
                                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                </clipPath>
                                                <clipPath id="sunCloudFillClip">
                                                    <path
                                                            d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                                </clipPath>
                                                <clipPath id="cloudSunFillClip">
                                                    <path
                                                            d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"/>
                                                </clipPath>
                                                <clipPath id="snowFillClip">
                                                    <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"/>
                                                </clipPath>
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunAlt">
                                                    <g clip-path="url(#cloudSunFillClip)">
                                                        <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                            <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                        d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                            </g>
                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                <circle
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                        cx="58.033"
                                                                        cy="41.612"
                                                                        r="11.999"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                                                        <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt"
                                                                    d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"/>
                                                        </g>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>25°</h4>

                                        </li>
                                        <li>
                                            <h6 class="txt-white">21:00</h6>
                                            <svg
                                                    version="1.1"
                                                    id="cloudDrizzleMoonAlt"
                                                    class="climacon climacon_cloudDrizzleMoonAlt"
                                                    viewBox="15 15 70 70">
                                                <clipPath id="cloudFillClip">
                                                    <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                </clipPath>
                                                <clipPath id="moonCloudFillClip">
                                                    <path
                                                            d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"/>
                                                </clipPath>
                                                <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                                                    <g clip-path="url(#cloudFillClip)">
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                    d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"/>
                                                        </g>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                id="Drizzle-Left_1_"
                                                                d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"/>
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"/>
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"/>
                                                    </g>
                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                        <path
                                                                class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <h4>23°</h4>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 p-l-0 climacon-right">
                                <div class="p-10">

                                    <div class="table-responsive">

                                        <table class="table weather-table m-t-15">
                                            <tbody>
                                            <tr class="svg-icon">
                                                <td>Sunday</td>
                                                <td><svg
                                                        version="1.1"
                                                        id="cloudDrizzleSun"
                                                        class="climacon climacon_cloudDrizzleSun"
                                                        viewBox="15 15 70 70">
                                                    <clipPath id="cloudFillClip">
                                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                    </clipPath>
                                                    <clipPath id="sunCloudFillClip">
                                                        <path
                                                                d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                                    </clipPath>
                                                    <clipPath id="cloudSunFillClip">
                                                        <path
                                                                d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"/>
                                                    </clipPath>
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSun">
                                                        <g clip-path="url(#cloudSunFillClip)">
                                                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                    <circle
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                            cx="58.033"
                                                                            cy="41.612"
                                                                            r="11.999"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                    d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                    d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                    d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"/>
                                                        </g>

                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>

                                            </tr>
                                            <tr class="svg-icon">
                                                <td>Monday</td>
                                                <td><svg
                                                        version="1.1"
                                                        id="cloudDrizzleAlt"
                                                        class="climacon climacon_cloudDrizzleAlt"
                                                        viewBox="15 15 70 70">
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleAlt">
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                    id="Drizzle-Left_1_"
                                                                    d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                    d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                    d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"/>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>

                                            </tr>
                                            <tr class="svg-icon">
                                                <td>Tuesday</td>
                                                <td><svg
                                                        version="1.1"
                                                        id="cloudRainAlt"
                                                        class="climacon climacon_cloudRainAlt"
                                                        viewBox="15 15 70 70">
                                                    <clipPath id="cloudFillClip">
                                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                    </clipPath>
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudRainAlt">
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-rain climacon_wrapperComponent-rain_alt">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                                    d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- alt"
                                                                    d="M50.001,58.568l3.535,3.535c1.95,1.953,1.95,5.119,0,7.07c-1.953,1.953-5.119,1.953-7.07,0c-1.953-1.951-1.953-5.117,0-7.07L50.001,58.568z"/>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M59.999,65.641c-0.267,0-0.614,0-1,0c0-1.373-0.319-2.742-0.942-4c0.776,0,1.45,0,1.942,0c4.418,0,7.999-3.58,7.999-7.998c0-4.418-3.581-8-7.999-8c-1.601,0-3.083,0.481-4.334,1.29c-1.231-5.316-5.973-9.289-11.664-9.289c-6.627,0-11.998,5.372-11.998,11.998c0,5.953,4.339,10.879,10.023,11.822c-0.637,1.218-0.969,2.55-1.012,3.888c-7.406-1.399-13.012-7.896-13.012-15.709c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.337-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.996,60.27,66.626,65.641,59.999,65.641z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>

                                            </tr>
                                            <tr class="svg-icon">
                                                <td>Wednesday</td>
                                                <td><svg
                                                        version="1.1"
                                                        id="cloudDrizzleSun"
                                                        class="climacon climacon_cloudDrizzleSun"
                                                        viewBox="15 15 70 70">
                                                    <clipPath id="cloudFillClip">
                                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                    </clipPath>
                                                    <clipPath id="sunCloudFillClip">
                                                        <path
                                                                d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                                    </clipPath>
                                                    <clipPath id="cloudSunFillClip">
                                                        <path
                                                                d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"/>
                                                    </clipPath>
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSun">
                                                        <g clip-path="url(#cloudSunFillClip)">
                                                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                    <circle
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                            cx="58.033"
                                                                            cy="41.612"
                                                                            r="11.999"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                    d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                    d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                    d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"/>
                                                        </g>

                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>

                                            </tr>
                                            <tr class="svg-icon">
                                                <td>Thursday</td>
                                                <td>  <svg
                                                        version="1.1"
                                                        id="cloudDrizzleMoonAlt"
                                                        class="climacon climacon_cloudDrizzleMoonAlt"
                                                        viewBox="15 15 70 70">
                                                    <clipPath id="cloudFillClip">
                                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                    </clipPath>
                                                    <clipPath id="moonCloudFillClip">
                                                        <path
                                                                d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"/>
                                                    </clipPath>
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                                                        <g clip-path="url(#cloudFillClip)">
                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                        d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"/>
                                                            </g>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                                    id="Drizzle-Left_1_"
                                                                    d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                                    d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"/>
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                                    d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"/>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>

                                            </tr>
                                            <tr class="svg-icon">
                                                <td>Friday</td>
                                                <td><svg
                                                        version="1.1"
                                                        id="cloudSnowSunAlt"
                                                        class="climacon climacon_cloudSnowSunAlt"
                                                        viewBox="15 15 70 70">
                                                    <clipPath id="cloudFillClip">
                                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                    </clipPath>
                                                    <clipPath id="sunCloudFillClip">
                                                        <path
                                                                d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                                    </clipPath>
                                                    <clipPath id="cloudSunFillClip">
                                                        <path
                                                                d="M15,15v70h20.947V63.481c-4.778-2.767-8-7.922-8-13.84c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,5.262-3.394,9.723-8.107,11.341V85H85V15H15z"/>
                                                    </clipPath>
                                                    <clipPath id="snowFillClip">
                                                        <path d="M15,15v70h70V15H15z M50,65.641c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2S51.104,65.641,50,65.641z"/>
                                                    </clipPath>
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudSnowSunAlt">
                                                        <g clip-path="url(#cloudSunFillClip)">
                                                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                                    <path
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north"
                                                                            d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                                </g>
                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                    <circle
                                                                            class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody"
                                                                            cx="58.033"
                                                                            cy="41.612"
                                                                            r="11.999"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-snowAlt">
                                                            <g class="climacon_component climacon_component climacon_component-snowAlt" clip-path="url(#snowFillClip)">
                                                                <path
                                                                        class="climacon_component climacon_component-stroke climacon_component-stroke_snowAlt"
                                                                        d="M43.072,59.641c0.553-0.957,1.775-1.283,2.732-0.731L48,60.176v-2.535c0-1.104,0.896-2,2-2c1.104,0,2,0.896,2,2v2.535l2.195-1.268c0.957-0.551,2.18-0.225,2.73,0.732c0.553,0.957,0.225,2.18-0.73,2.731l-2.196,1.269l2.196,1.268c0.955,0.553,1.283,1.775,0.73,2.732c-0.552,0.954-1.773,1.282-2.73,0.729L52,67.104v2.535c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2v-2.535l-2.195,1.269c-0.957,0.553-2.18,0.226-2.732-0.729c-0.552-0.957-0.225-2.181,0.732-2.732L46,63.641l-2.195-1.268C42.848,61.82,42.521,60.598,43.072,59.641z"/>
                                                            </g>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M61.998,65.461v-4.082c3.447-0.891,6-4.012,6-7.738c0-4.417-3.582-7.999-7.999-7.999c-1.601,0-3.084,0.48-4.334,1.291c-1.231-5.317-5.973-9.291-11.664-9.291c-6.627,0-11.999,5.373-11.999,12c0,4.438,2.417,8.305,5.999,10.379v4.444c-5.86-2.375-9.998-8.112-9.998-14.825c0-8.835,7.162-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.373,11.998,11.998C71.997,59.586,67.671,64.506,61.998,65.461z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>

                                            </tr>
                                            <tr class="svg-icon">
                                                <td>Saturday</td>
                                                <td><svg
                                                        version="1.1"
                                                        id="cloudLightning"
                                                        class="climacon climacon_cloudLightning"
                                                        viewBox="15 15 70 70">
                                                    <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                            <polygon
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_lightning"
                                                                    points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "/>
                                                        </g>
                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                            <path
                                                                    class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                                    d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                                </td>
                                                <td>27°-30°</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 3-1-block end -->

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th>Photo</th>
                                        <th>Project</th>
                                        <th>Completed</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                        </th>
                                        <td>Appestia Project
                                            <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">226,134</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15" fill="#2196F3"></path><path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>50%</td>
                                        <td>October 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-4.png" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-1.png" alt="User">
                                        </th>
                                        <td>Web Consultancy project
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">1,4</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15" fill="#2196F3"></path><path d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>40%</td>
                                        <td>September 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-3.png" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-1.png" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                        </th>
                                        <td>Contract with belife Company
                                            <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                        </td>
                                        <td>
                                            <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                        </td>
                                        <td>70%</td>
                                        <td>November 21, 2015</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="user-block-2">
                            <img class="img-fluid" src="assets/images/widget/user-1.png" alt="user-header">
                            <h5>Josephin Villa</h5>
                            <h6>Software Engineer</h6>
                        </div>
                        <div class="card-block">
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-clock-time"></i> Recent Activities
                                    <label class="label label-primary">480</label>
                                </div>
                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-users"></i> Current Employees
                                    <label class="label label-primary">390</label>
                                </div>
                            </div>

                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-ui-user"></i> Following
                                    <label class="label label-primary">485</label>
                                </div>

                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-picture"></i> Pictures
                                    <label class="label label-primary">506</label>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                    Follows
                                </button>
                                <button type="button" class="btn btn-primary waves-effect waves-light text-uppercase">
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2-1 block end -->
        </div>
        <!-- Main content ends -->



        <!-- Container-fluid ends -->
    </div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
<!-- Warning Section Ends -->

<!-- Required Jqurey -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets/plugins/waves/js/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="assets/plugins/slimscroll/js/jquery.slimscroll.js"></script>
<script src="assets/plugins/slimscroll/js/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="assets/plugins/search/js/classie.js"></script>

<!-- notification -->
<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="assets/plugins/charts/sparkline/js/jquery.sparkline.js"></script>

<!-- Counter js  -->
<script src="assets/plugins/countdown/js/waypoints.min.js"></script>
<script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/pages/dashboard.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.js"></script>


</body>

</html>