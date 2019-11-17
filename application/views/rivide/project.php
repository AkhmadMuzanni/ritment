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

  <title>Rivide - Ritment</title>
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/assets/app-assets/images/ico/logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/icon-ritment.png">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/vendors/css/extensions/toastr.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/vendors/css/ui/prism.min.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/app.css">
  <!-- END CHAMELEON  CSS-->

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/plugins/extensions/toastr.css">
  <!-- END Page Level CSS-->

  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/app-assets/css/plugins/forms/validation/form-validation.css">
  <!-- END Custom CSS-->

  <!-- {{-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/assets/scss/style.css"> --}} -->

  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/scripts/forms/validation/form-validation.min.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/app-assets/validator/validator.min.js"></script>



</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar bg-gradient-x-b-g" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  <?php
  include('header.php');
  ?>

  <?php
  include('sidebar.php');
  ?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title"></h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <!-- <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Data Pengguna</a>
                  </li>                  
                </ol>
              </div>
            </div> -->
        </div>
      </div>
      <div class="content-body">
        <section id="server-processing">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- <div class="card-header">	                
	                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        			    <div class="heading-elements">
	                    <ul class="list-inline mb-0">
	                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
	                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
	                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>	                        
	                    </ul>
	                </div>
              </div> -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">

                      <div class="mx-auto circle">
                        <div class="frame">
                          <img src="<?php echo base_url(); ?>assets/assets/app-assets/images/icons/voice_record.svg">
                        </div>
                      </div>

                    </div>
                    <div class="col-md-7">
                      <h6 class="project_place">Dinas Pertanian Kota Malang</h6>
                      <p class="font-weight-bold project_title">Proyek Traktor IoT</p>
                      <p class="font-weight-bold project_detail">"Diperlukan tenaga modifikasi traktor berbasis teknologi IoT khjkdasjkdhsakjdhsajdhasjkdhaskjdhsajdcnoifhrbfksd"</p>

                    </div>
                    <div class="col-md-3 d-flex">
                      <div class="row w-100 h-50">
                        <div class="col pull-right">
                          <button class="btn btn-default btn-sm pull-right">Kapasitas 2/3 Terisi</button>
                        </div>
                        
                      </div>
                      <div class="row w-100 h-50">
                        <div class="col align-self-end">
                          <a href="" class="pull-right link_project">Lihat Project</a>
                        </div>
                      </div>



                    </div>
                  </div>


                </div>
                <!-- <div class="card-content collpase show">  
                <div class="card-header">

                    <div class="col-md-12">
                        <button type="button" onclick="addDataPengguna()" class="btn btn-primary btn-min-width box-shadow-1 pull-right"><i class="ft-plus"></i> Tambah Data</button>
                    </div>                  
                </div>
                <br>
	                <div class="card-body">		                
		                
                </div>
	            </div> -->
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="#">ThemeSelection</a></span>
      <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
      </ul>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade text-left" id="lookupdetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-text-bold-600" id="myModalLabel33"></h3>
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
              <input type="text" name="name" id="name" placeholder="Nama" class="form-control" required>
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
      $('#name').attr('readonly', false);
      $('#username').attr('readonly', false);
      $('#status').attr('disabled', false);
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
          $('#name').val(data['0'].name).attr('readonly', true);
          $('#username').val(data['0'].username).attr('readonly', true);
          $('#status').val(data['0'].status).attr('disabled', true);
          $('#lookupdetailfooter').attr('hidden', true);
        },
        error: function(data) {
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
          $('#id').val(data['0'].id).attr('readonly', false);
          $('#name').val(data['0'].name).attr('readonly', false);
          $('#username').val(data['0'].username).attr('readonly', false);
          $('#status').val(data['0'].status).attr('disabled', false);
          $('#lookupdetailfooter').attr('hidden', false);
        },
        error: function() {
          alert("Nothing Data");
        }
      });
    }

    function deleteDataPengguna(id) {
      var popup = confirm("Data akan dihapus?");
      var csrf_token = $('meta[name="csrf-token"]').attr('content');
      if (popup == true) {
        $.ajax({
          url: "{{ url('deleteDataPengguna') }}" + '/' + id,
          type: "POST",
          data: {
            '_method': 'DELETE',
            '_token': csrf_token
          },
          success: function(data) {
            // alert("Data berhasil dihapus");
            tabelPengguna.ajax.reload();
            toastr.success(
              '', 'Data Berhasil Dihapus', {
                positionClass: 'toast-bottom-right',
                containerId: 'toast-bottom-right'
              }
            );
          },
          error: function() {
            toastr.error(
              '', 'Data Gagal Dihapus', {
                positionClass: 'toast-bottom-right',
                containerId: 'toast-bottom-right'
              }
            );
            // alert("Data tidak berhasil terhapus");										
          }
        });
      }
    }

    $(function() {
      $('#lookupdetail').validator().on('submit', function(e) {
        if (!e.isDefaultPrevented()) {
          var id = $('#id').val();
          var notif = null;
          if (save_method == 'add') {
            url = "{{ url('addDataPengguna') }}";
            notif = 'Data Berhasil Disimpan';
          } else {
            url = "{{ url('updateDataPengguna') . '/' }}" + id;
            notif = 'Data Berhasil Diubah';
          }
          $.ajax({
            url: url,
            type: "POST",
            data: $('#lookupdetail form').serialize(),
            success: function(data) {
              $('#lookupdetail').modal('hide');
              tabelPengguna.ajax.reload();
              toastr.success(
                '', notif, {
                  positionClass: 'toast-bottom-right',
                  containerId: 'toast-bottom-right'
                }
              );
              // alert('Data berhasil disimpan');											
            },
            error: function(data) {
              alert('Data salah');
            }
          });
          return false;
        }
      });
    });
  </script>


  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CHAMELEON  JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END CHAMELEON  JS-->

  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo base_url(); ?>assets/assets/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <script type="text/javascript">
    var tabelPengguna = $('#data').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      ajax: "{{route('dataPengguna')}}",
      columns: [{
          data: 'DT_RowIndex',
          name: 'DT_RowIndex'
        },
        {
          data: 'name',
          name: 'name'
        },
        {
          data: 'username',
          name: 'username'
        },
        {
          data: 'status',
          name: 'status'
        },
        {
          data: 'action',
          name: 'action',
          orderable: false,
          searchable: false
        }
      ],
      createdRow: function(row, data) {
        if (data['status'] == "1") {
          $('td', row).eq(3).html('<td class="badge border-success success badge-border">Aktif</td>');
        } else {
          $('td', row).eq(3).html('<td class="badge border-danger danger badge-border">Non Aktif</td>');
        }
      }
    });
  </script>

</body>

</html>