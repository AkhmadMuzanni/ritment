<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title><?= $title; ?></title>
    <!-- <link rel="apple-touch-icon" href="<?= BASE_THEME; ?>assets/app-assets/images/ico/logo.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_THEME; ?>img/fav_ritment.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>assets/app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>assets/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>assets/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>assets/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME; ?>css/style.css">
    <!-- END Custom CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body class="vertical-layout vertical-menu 1-column bg-full-screen-image-register menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-orange-pink" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <!-- <div class="col-4"></div> -->
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-5 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h6 class="text-label-bold mb-1">Daftar sebagai</h6>
                                        <form class="form-horizontal" role="form" action="" method="POST">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <select class="custom-select custom-select-md chosen-select" id="ritmentType" name="ritmentType">
                                                        <option value="Riptor" selected>Riptor</option>
                                                        <option value="Riseek">Riseek</option>
                                                        <option value="Rivide">Rivide</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-7">
                                                    <fieldset class="form-group position-relative" id="field_name">
                                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_email">
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_alamatRumah">
                                                        <input type="text" class="form-control" id="alamatRumah" name="alamatRumah" placeholder="Alamat Rumah" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_alamatAsal">
                                                        <input type="text" class="form-control" id="alamatAsal" name="alamatAsal" placeholder="Alamat Asal" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_alamatDomisili">
                                                        <input type="text" class="form-control" id="alamatDomisili" name="alamatDomisili" placeholder="Alamat Domisili" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_kampus">
                                                        <input type="text" class="form-control" id="kampus" name="kampus" placeholder="Kampus" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_instansi">
                                                        <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative" id="field_alamatInstansi">
                                                        <input type="text" class="form-control" id="alamatInstansi" name="alamatInstansi" placeholder="Alamat Instansi" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                                                    </fieldset>
                                                    <fieldset class="form-group position-relative">
                                                        <input type="confirmPassword" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Konfirmasi Kata Sandi" required>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9"></div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-block btn-glow btn-bg-gradient-x-orange-pink col-12 mr-1 align-right">Daftar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <script>
        $(function() {
            var selectedType = $('#ritmentType').val();
            filterElement(selectedType);
        });

        $('#ritmentType').on('change', function() {
            var type = $('#ritmentType').val();
            filterElement(type);
        });

        function showHideElement(action, element) {
            if (action == 'show') {
                $(element).show();
            } else if (action == 'hide') {
                $(element).hide();
            }
        }

        function filterElement(type) {
            if (type == 'Riptor') {
                showHideElement('show', '#field_alamatRumah');
                showHideElement('hide', '#field_alamatAsal');
                showHideElement('hide', '#field_alamatDomisili');
                showHideElement('hide', '#field_kampus');
                showHideElement('hide', '#field_instansi');
                showHideElement('hide', '#field_alamatInstansi');
            } else if (type == 'Riseek') {
                showHideElement('hide', '#field_alamatRumah');
                showHideElement('show', '#field_alamatAsal');
                showHideElement('show', '#field_alamatDomisili');
                showHideElement('show', '#field_kampus');
                showHideElement('hide', '#field_instansi');
                showHideElement('hide', '#field_alamatInstansi');
            } else if (type == 'Rivide') {
                showHideElement('show', '#field_alamatRumah');
                showHideElement('hide', '#field_alamatAsal');
                showHideElement('hide', '#field_alamatDomisili');
                showHideElement('hide', '#field_kampus');
                showHideElement('show', '#field_instansi');
                showHideElement('show', '#field_alamatInstansi');
            }
        }
    </script>

    <!-- BEGIN VENDOR JS-->
    <script src="<?= BASE_THEME; ?>assets/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= BASE_THEME; ?>assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?= BASE_THEME; ?>assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME; ?>assets/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= BASE_THEME; ?>assets/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>