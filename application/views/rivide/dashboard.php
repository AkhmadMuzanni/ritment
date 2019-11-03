<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="BevyDigitalDev">
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/assets/app-assets/images/ico/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/assets/app-assets/images/ico/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/pages/chat-application.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/pages/dashboard-analytics.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light"> 
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>              
              <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-link"></i> Quick Links</h6>
                    <ul>
                      <li><a class="my-1" href="index.html"><i class="ft-home mr-1"></i> Dashboard</a></li>
                      <li><a class="my-1" href="email-application.html"><i class="ft-layers mr-1"></i> Email Application</a></li>
                      <li><a class="my-1" href="chat-application.html"><i class="ft-message-square mr-1"></i> Chat Application</a></li>
                      <li><a class="my-1" href="form-wizard.html"><i class="ft-edit mr-1"></i> Form Wizard</a></li>
                      <li><a class="my-1" href="table-bootstrap.html"><i class="ft-grid mr-1"></i> Tables</a></li>
                      <li><a class="my-1" href="chartist-charts.html"><i class="ft-bar-chart mr-1"></i> Chartist</a></li>
                      <li><a class="my-1" href="gallery-grid.html"><i class="ft-sidebar mr-1"></i> Gallery Page</a></li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-star"></i> My Bookmarks</h6>
                    <ul class="ml-2">
                      <li class="list-style-circle"><a class="my-1" href="card-advanced.html">
                                                Advanced Cards</a></li>
                      <li class="list-style-circle"><a class="my-1" href="layout-content-detached-left-sidebar.html">
                                                Left sidebar</a></li>
                      <li class="list-style-circle"><a class="my-1" href="layout-content-detached-left-sticky-sidebar.html">
                                                Sticky left sidebar</a></li>
                      <li class="list-style-circle"><a class="my-1" href="layout-content-detached-right-sidebar.html">
                                                Right sidebar</a></li>
                      <li class="list-style-circle"><a class="my-1" href="layout-content-detached-right-sticky-sidebar.html">
                                                Sticky right sidebar</a></li>
                      <li class="list-style-circle"><a class="my-1" href="layout-fixed-navbar-navigation.html">
                                                Fixed Navbar & Navigation</a></li>
                      <li class="list-style-circle"><a class="my-1" href="layout-fixed-navbar-footer.html">
                                                Fixed Navbar & Footer                  </a></li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="ft-layers"></i> Recent Products</h6>
                    <div class="carousel slide pt-1" id="carousel-example" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="d-block w-100" src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/08.jpg" alt="First slide"></div>
                        <div class="carousel-item"><img class="d-block w-100" src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/03.jpg" alt="Second slide"></div>
                        <div class="carousel-item"><img class="d-block w-100" src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/01.jpg" alt="Third slide"></div>
                      </div><a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev"><span class="la la-angle-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next"><span class="la la-angle-right icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                      <h5 class="pt-1">Special title treatment</h5>
                      <p>Jelly beans sugar plum.</p>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i> Get in touch</h6>
                    <form class="form form-horizontal pt-1">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputName1" type="text" placeholder="John Doe">
                              <div class="form-control-position pl-1"><i class="ft-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputContact1">Contact</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputContact1" type="text" placeholder="(123)-456-7890">
                              <div class="form-control-position pl-1"><i class="ft-smartphone"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputEmail1" type="email" placeholder="john@example.com">
                              <div class="form-control-position pl-1"><i class="ft-mail"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                              <div class="form-control-position pl-1"><i class="ft-message-circle"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-danger float-right" type="button"><i class="ft-arrow-right"></i> Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown">
                                 Apps</a>
                <div class="dropdown-menu">
                  <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i class="ft-user"></i> Email</a><a class="dropdown-item" href="chat-application.html"><i class="ft-mail"></i> Chat</a><a class="dropdown-item" href="project-summary.html"><i class="ft-briefcase"></i> Project Summary            </a><a class="dropdown-item" href="full-calender.html"><i class="ft-calendar"></i> Calendar            </a></div>
                </div>
              </li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">                       
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <div class="arrow_box_right">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                    </li>
                    <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-share info font-medium-4 mt-2"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading info">New Order Received</h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Lorem ipsum dolor sit amet!</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:30 PM</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-save font-medium-4 mt-2 warning"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading warning">New User Registered</h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Aliquam tincidunt mauris eu risus.</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10:05 AM</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-repeat font-medium-4 mt-2 danger"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading danger">New Purchase</h6>
                            <p class="notification-text font-small-3 text-muted text-bold-600">Lorem ipsum dolor sit ametest?</p><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Yesterday</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-shopping-cart font-medium-4 mt-2 primary"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading primary">New Item In Your Cart</h6><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                          </div>
                        </div></a><a href="javascript:void(0)">
                        <div class="media">
                          <div class="media-left align-self-center"><i class="ft-heart font-medium-4 mt-2 info"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading info">New Sale</h6><small>
                              <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                          </div>
                        </div></a></li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item info text-right pr-1" href="javascript:void(0)">Read all</a></li>
                  </div>
                </ul>
              </li>              
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             
                <span class="avatar avatar-online"><img src="<?php echo base_url(); ?>assets/assets/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?php echo base_url(); ?>assets/assets/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('logout')}}"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?php echo base_url(); ?>assets/assets/app-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('dashboard')}}"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo base_url(); ?>assets/assets/app-assets/images/logo/logo.png"/>
              <h3 class="brand-text">SIDESTAL</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="dashboard-ecommerce.html">eCommerce</a>
              </li>
              <li class="active"><a class="menu-item" href="dashboard-analytics.html">Analytics</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Data Penduduk</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="email-application.html">Email Application</a>
              </li>
              <li><a class="menu-item" href="chat-application.html">Chat Application</a>
              </li>
              <li><a class="menu-item" href="full-calender.html">Full Calendar</a>
              </li>
              <li><a class="menu-item" href="project-summary.html">Project Summary</a>
              </li>
              <li><a class="menu-item" href="invoice-template.html">Invoice</a>
              </li>
              <li><a class="menu-item" href="#">Timelines</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="timeline-center.html">Timelines Center</a>
                  </li>
                  <li><a class="menu-item" href="timeline-horizontal.html">Timelines Horizontal</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="user-profile.html">Users Profile</a>
              </li>
              <li><a class="menu-item" href="users-contacts.html">Contact List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Data KK</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Vertical</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../vertical-menu-template">Classic Menu</a>
                  </li>
                  <li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#">Horizontal</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="../horizontal-menu-template-nav">Full Width</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Data Surat</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="layout-content-detached-left-sidebar.html">Left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html">Sticky left sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-right-sidebar.html">Right sidebar</a>
                  </li>
                  <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html">Sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="navbar-hide-on-scroll-top.html">Hide on Scroll Top</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-compact-menu.html">Compact navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar.html">Fixed navbar</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navigation.html">Fixed navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar-navigation.html">Fixed navbar &amp; navigation</a>
              </li>
              <li><a class="menu-item" href="layout-fixed-navbar-footer.html">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-fixed.html">Fixed layout</a>
              </li>
              <li><a class="menu-item" href="layout-boxed.html">Boxed layout</a>
              </li>
              <li><a class="menu-item" href="layout-static.html">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a class="menu-item" href="layout-light.html">Navigation light</a>
              </li>
              <li><a class="menu-item" href="layout-dark.html">Navigation Dark</a>
              </li>
              <li><a class="menu-item" href="vertical-nav-flipped.html">Flipped Navigation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n=""></span></a></li>
          <li class=" nav-item"><a href="{{route('pengguna')}}"><i class="ft-zap"></i><span class="menu-title" data-i18n="">Data Pengguna</span></a>           
          </li>
          
          <li class=" nav-item"><a href="#"><i class="ft-aperture"></i><span class="menu-title" data-i18n="">Pengaturan</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="#">Content</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="content-grid.html">Grid</a>
                  </li>
                  <li><a class="menu-item" href="content-typography.html">Typography</a>
                  </li>
                  <li><a class="menu-item" href="content-text-utilities.html">Text utilities</a>
                  </li>
                  <li><a class="menu-item" href="content-syntax-highlighter.html">Syntax highlighter</a>
                  </li>
                  <li><a class="menu-item" href="content-helper-classes.html">Helper classes</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="#">Color Palette</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="color-palette-primary.html">Primary palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-danger.html">Danger palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-success.html">Success palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-warning.html">Warning palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-info.html">Info palette</a>
                  </li>
                  <li class="navigation-divider"></li>
                  <li><a class="menu-item" href="color-palette-red.html">Red palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-pink.html">Pink palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-purple.html">Purple palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-blue.html">Blue palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-cyan.html">Cyan palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-teal.html">Teal palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-yellow.html">Yellow palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-amber.html">Amber palette</a>
                  </li>
                  <li><a class="menu-item" href="color-palette-blue-grey.html">Blue Grey palette</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="card-bootstrap.html">Bootstrap Cards</a>
              </li>
              <li><a class="menu-item" href="card-advanced.html">Advanced Cards</a>
              </li>
              <li><a class="menu-item" href="#">Icons</a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="icons-feather.html">Feather</a>
                  </li>
                  <li><a class="menu-item" href="icons-line-awesome.html">Line Awesome</a>
                  </li>
                  <li><a class="menu-item" href="icons-simple-line-icons.html">Simple Line Icons</a>
                  </li>
                </ul>
              </li>
              <li><a class="menu-item" href="animation.html">Animation</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Revenue, Hit Rate & Deals -->
        <section id="header-footer">
	<div class="row match-height">
		<div class="col-xl-4 col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Basic Card</h4>
					<h6 class="card-subtitle text-muted">Basic Card With Header & Footer</h6>
				</div>
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/22.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
				<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
					<span class="float-left">3 hours ago</span>
					<span class="float-right">
						<a href="#" class="card-link">Read More
							<i class="la la-angle-right"></i>
						</a>
					</span>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Video Embed</h4>
					<h6 class="card-subtitle text-muted">Video Embed Card With Header & Footer</h6>
				</div>
				<div class="embed-responsive embed-responsive-item embed-responsive-4by3">
					<iframe class="img-thumbnail" src="https://www.youtube.com/embed/H6J5wdZUxck?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
				<div class="card-body">
					<p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
				<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
					<span class="float-left">1 day ago</span>
					<span class="tags float-right">
						<span class="badge badge-pill badge-success">Technology</span>
						<span class="badge badge-pill badge-warning">Gaming</span>
					</span>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Carousel</h4>
					<h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
				</div>
				<div id="carousel-area" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-area" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-area" data-slide-to="1"></li>
						<li data-target="#carousel-area" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/23.jpg" class="d-block w-100" alt="First slide">
						</div>
						<div class="carousel-item">
							<img src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/22.jpg" class="d-block w-100" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/24.jpg" class="d-block w-100" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
						<span class="la la-angle-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
						<span class="la la-angle-right icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
				<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
					<span class="float-left">2 days ago</span>
					<span class="tags float-right">
						<span class="badge badge-pill badge-primary">Branding</span>
						<span class="badge badge-pill badge-danger">Design</span>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="row">
<div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Doughnut Chart</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="height-400">
                        <canvas id="simple-doughnut-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Basic Card</h4>
					<h6 class="card-subtitle text-muted">Basic Card With Header & Footer</h6>
				</div>
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/assets/app-assets/images/carousel/22.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
				</div>
				<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
					<span class="float-left">3 hours ago</span>
					<span class="float-right">
						<a href="#" class="card-link">Read More
							<i class="la la-angle-right"></i>
						</a>
					</span>
				</div>
			</div>
		</div>
</div>


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          
          
          
        </ul>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>    
    <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="assets/app-assets/js/scripts/pages/dashboard-analytics.js" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL JS-->
    <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js" type="text/javascript"></script>
  </body>
</html>