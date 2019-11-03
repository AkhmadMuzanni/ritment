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

    <title>Sources Datatable - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="assets/app-assets/images/ico/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/ui/prism.min.css">
    <!-- END VENDOR CSS-->

    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/plugins/extensions/toastr.css">
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/assets/css/style.css">    
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/plugins/forms/validation/form-validation.css">
     <!-- END Custom CSS-->  

     {{-- <link rel="stylesheet" type="text/css" href="assets/assets/scss/style.css"> --}}

    <!-- BEGIN VENDOR JS-->
    <script src="assets/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
   
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/app-assets/js/scripts/forms/validation/form-validation.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script type="text/javascript" src="assets/app-assets/validator/validator.min.js"></script>



  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar bg-gradient-x-b-g" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light"> 
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>              
              {{-- <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
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
                        <div class="carousel-item active"><img class="d-block w-100" src="assets/app-assets/images/carousel/08.jpg" alt="First slide"></div>
                        <div class="carousel-item"><img class="d-block w-100" src="assets/app-assets/images/carousel/03.jpg" alt="Second slide"></div>
                        <div class="carousel-item"><img class="d-block w-100" src="assets/app-assets/images/carousel/01.jpg" alt="Third slide"></div>
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
              </li> --}}
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
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-default badge-up badge-glow">5</span></a>
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
                    <span class="avatar avatar-online"><img src="assets/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="assets/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                        <div class="dropdown-divider">
                          </div>
                            <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                            {{-- <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                            <a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a>
                            <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a> --}}
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


    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row" style="margin-left: 30px;">       
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('dashboard')}}"><img class="brand-logo" alt="Chameleon admin logo" src="assets/app-assets/images/logo/logo.png"/>
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
                <li><a class="menu-item" href="dashboard-analytics.html">Analytics</a>
                </li>
              </ul>
            </li>
            <li class="nav-item active"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Data Penduduk</span></a>              
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
                  </ul>
                </li>
                <li class="navigation-divider"></li>
                <li><a class="menu-item" href="navbar-hide-on-scroll-top.html">Hide on Scroll Top</a>
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
                  </ul>
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
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Data Penduduk</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Data Penduduk</a>
                  </li>                  
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
<section id="server-processing">
	<div class="row">
	    <div class="col-12">
	        <div class="card">
	            <div class="card-header">	                
	                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        			    <div class="heading-elements">
	                    <ul class="list-inline mb-0">	                        
	                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
	                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>	                        
	                    </ul>
	                </div>
	            </div>
	            <div class="card-content collpase show">  
                <div class="card-header">                                                      
                    <div class="col-md-12">                      
                        <button type="button" onclick="addDataPengguna()" class="btn btn-success btn-min-width box-shadow-1 pull-right"><i class="ft-plus"></i> Tambah Data</button>
                    </div>                  
                </div>
                <br>
	                <div class="card-body">		                
		                <table id="data" class="table table-striped table-bordered server-side nowrap" style="width:100%">
		                	<thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>No KK</th>
                            <th>RT/RW</th>
                            <th>Nama Ayah</th>
                            <th width=135>Opsi</th>					                					                
                        </tr>
                      </thead>
                      <tbody></tbody>					        
                    </table>
                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
        </div>
      </div>
    </div>
  {{-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">   
        </ul>
      </div>
    </footer> --}}

    <!-- Modal -->
    <div class="modal fade text-left" id="lookup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title text-text-bold-600"></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" class="form-horizontal" data-toggle="validator">
            {{ csrf_field() }} {{ method_field('POST') }}
            <div class="modal-body">
              <input type="hidden" id="id" name="id">
              <label>Nama</label>
              <div class="form-group">
                <input type="text" name="name"  id="name" placeholder="Nama" class="form-control" required>
              </div>
              <label>Username</label>
              <div class="form-group">
                <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
              </div>
              <label>Status</label>
              <div class="form-group">
                <select name="status" id="status" class="form-control chosen-select">
                  <option value="1">Aktif</option>
                  <option value="0">Non Aktif</option>
                </select>                                
              </div>              
            </div>
            <div class="modal-footer" id="lookupdetailfooter">
              <input type="submit" class="btn btn-primary " value="Simpan">
              <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Batal">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">      

      function addDataPengguna() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#lookupdetail').modal('show');
        $('#lookupdetail form')[0].reset();
        $('.modal-title').text('Tambah Data Pengguna');
        $('#name').attr('readonly',false);							
        $('#username').attr('readonly',false);							
        $('#status').attr('disabled',false);		
        $('#lookupdetailfooter').attr('hidden', false);			
      }

      function showDetailDataPengguna(id) {														
        $('#lookupdetail form')[0].reset();
        $.ajax({
          url: "{{url('detailPengguna')}}" + '/' + id,				
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#lookupdetail').modal('show');
            $('.modal-title').text('Detail Data Pengguna');	
            $('#name').val(data['0'].name).attr('readonly',true);							
            $('#username').val(data['0'].username).attr('readonly',true);							
            $('#status').val(data['0'].status).attr('disabled',true);		
            $('#lookupdetailfooter').attr('hidden', true);					                
          },
          error : function(data) {
            alert("Nothing Data");
          }
        });
      }

      function editDataPengguna(id) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#lookupdetail form')[0].reset();
        $.ajax({
        url: "{{url('detailPengguna')}}" + '/' + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#lookupdetail').modal('show');
          $('.modal-title').text('Edit Detail Data Pengguna');	
          $('#id').val(data['0'].id).attr('readonly',false);							
          $('#name').val(data['0'].name).attr('readonly',false);							
          $('#username').val(data['0'].username).attr('readonly',false);							
          $('#status').val(data['0'].status).attr('disabled',false);		
          $('#lookupdetailfooter').attr('hidden', false);	
        },
        error : function() {
          alert("Nothing Data");
        }
        });
		  }

      function deleteDataPengguna(id){                
        var popup = confirm("Data akan dihapus?");
        var csrf_token = $('meta[name="csrf-token"]').attr('content');						
          if(popup==true){							
            $.ajax({
              url : "{{ url('deleteDataPengguna') }}" + '/' + id,
              type : "POST",
              data : {'_method' : 'DELETE', '_token' : csrf_token},
              success : function(data) {
                // alert("Data berhasil dihapus");
                tabelPengguna.ajax.reload();
                toastr.success(
                  '', 'Data Berhasil Dihapus', 
                  {positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right'}
                );
              },
              error : function () {
                toastr.error(
                  '', 'Data Gagal Dihapus', 
                  {positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right'}
                );
                // alert("Data tidak berhasil terhapus");										
              }
            });
          }							
      }

      $(function(){
        $('#lookupdetail').validator().on('submit', function (e) {								
          if (!e.isDefaultPrevented()){
            var id = $('#id').val();
            var notif = null;
            if (save_method == 'add'){
              url = "{{ url('addDataPengguna') }}";  
              notif = 'Data Berhasil Disimpan';            
            } else{
              url = "{{ url('updateDataPengguna') . '/' }}" + id;		
              notif = 'Data Berhasil Diubah';  								
            } 
            $.ajax({
              url : url,
              type : "POST",
              data : $('#lookupdetail form').serialize(),				                       											
              success : function(data) {
                $('#lookupdetail').modal('hide');
                tabelPengguna.ajax.reload();
                toastr.success(
                  '', notif, 
                  {positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right'}
                );
                // alert('Data berhasil disimpan');											
              },
              error : function(data){
                alert('Data salah');							
              }
            });
            return false;
          }
        });			
		  });

    </script>

   
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="assets/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>    
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
     
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="assets/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>    
    <!-- END PAGE VENDOR JS-->
     <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <script src="assets/app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="assets/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->     

    <script type="text/javascript">
        var tabelPengguna = $('#data').DataTable({
						processing: true,
						serverSide: true,
                        responsive: true,
						ajax: "{{route('dataPenduduk')}}",                        
						columns: [
							{data: 'DT_RowIndex', name: 'DT_RowIndex'},
							{data: 'nik', name: 'nik'},	
							{data: 'nama', name: 'nama'},	
							{data: 'kk', name: 'kk'},							
							{data: 'rtrw', name: 'rtrw'},							
							{data: 'namaAyah', name: 'namaAyah'},							
							{data: 'action', name: 'action', orderable: false, searchable: false}
						]
            // createdRow: function ( row, data) {
            //   if(data['status'] == "1"){
            //       $('td', row).eq(3).html('<td class="badge border-success success badge-border">Aktif</td>');
            //   } else{
            //       $('td', row).eq(3).html('<td class="badge border-danger danger badge-border">Non Aktif</td>');
            //   }
            // }						
		    });	
    </script>

  </body>
</html>