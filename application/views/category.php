<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav_ritment.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Ritment</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="category">

    <?php
    include('navbar_riseek.php');
    ?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Daftar Projek</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html" style="color: ghostwhite">Peran<span
                                class="lnr lnr-arrow-right"></span></a>
                        <a href="#" style="color: ghostwhite">Riseek</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div style="background-color: rgb(247,117,20);border-top-left-radius: 5px;border-top-right-radius: 5px;" class="head">Kategori Projek</div>
                    <ul class="main-categories">
                        <!-- <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable"
								aria-expanded="false" aria-controls="fruitsVegetable"><span
									class="lnr lnr-arrow-right"></span>Fruits and Vegetables<span
									class="number">(53)</span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false"
								aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span
											class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span
											class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span
											class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span
											class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a>
								</li>
							</ul>
						</li> -->
                        <li class="nav-list"><a href="#">Instalasi dan Manajemen Jaringan
                                (JAR)<span class="number">(29)</span></a></li>
                        <li class="nav-list"><a href="#">Pembuatan Sistem / Sistem Informasi (SIS)<span
                                    class="number">(29)</span></a></li>
                        <li class="nav-list"><a href="#">Pembuatan IoT (IOT)<span class="number">(29)</span></a>
                        </li>
                        <li class="nav-list"><a href="#">Pembuatan Desain (DES)<span class="number">(29)</span></a>
                        </li>
                        <li class="nav-list"><a href="#">Riset Artificial Intelligence (AI)<span
                                    class="number">(29)</span></a></li>
                        <li class="nav-list"><a href="#">Pembuatan Gim (GIM)<span class="number">(29)</span></a>
                        </li>
                        <li class="nav-list"><a href="#">Media Pembelajaran (MPL)<span class="number">(29)</span></a>
                        </li>
                        <li class="nav-list"><a href="#">Augmented / Virtual Reality (AVR)<span
                                    class="number">(29)</span></a></li>
                        <li class="nav-list"><a href="#">Microcontroller (MIC)<span class="number">(29)</span></a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50" style="">
                    <div style="background-color: rgb(247,117,20);border-top-left-radius: 5px;border-top-right-radius: 5px;" class="top-filter-head">Jenis Projek
                    </div>
                    <br>
                    <div class="container-fluid">
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Non Profit</label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Profit</label></li>
                            </ul>
                        </form>
                    </div>
                    <div class="common-filter">
                    </div>
                </div>

                <div class="sidebar-filter mt-50">
                    <!-- <button></button> -->
                    <div class="top-filter-head btn" style="background-color: rgb(207,39,116); width: 100%">
                        <a href="http://localhost/ritment_prototipe/img/poster_ritment.jpg" target="_blank">Cetak Poster</a>
                    </div>
                    <br>
                    <!-- <div class="container-fluid">
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple"
										name="brand"><label for="apple">Non Profit</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus"
										name="brand"><label for="asus">Profit</label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
					</div> -->
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <!-- <div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
				</div> -->
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list" style="margin-top: -30px;">
                    <div class="row">
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product thumbnail">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                        <!-- single product -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product thumbnail">
                                <img class="img-fluid" src="img/product/org.jpg" alt="">
                                <div class="product-details">
                                    <p style="font-size: 11pt;">Dinas Kepanjen, Kab. Malang</p>
                                    <a href="detail_project.php">
                                        <h4 style="margin-top: -20px">Proyek Traktor IoT</h4>
                                    </a>
                                    <p style="margin-top: -10px; font-size: 11pt">
                                        <span class="badge badge-info">IOT</span>
                                        <span class="badge badge-info">AI</span>
                                    </p>
                                    <br>
                                    <p style="margin-top: -18px; color: red; font-family: 'Arial'">
                                        <span class="lnr lnr-map-marker"></span> Kepanjen, Malang
                                    </p>
                                    <p style="margin-top: -20px; color:limegreen">&emsp; 2/5 Kapasitas Terisi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="container-fluid">
                    <!-- <div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div> -->
                    <div class="pagination pull-right">
                        <a style="color: orange" href="#" class="prev-arrow"><i class="fa fa-long-arrow-left"
                                aria-hidden="true"></i></a>
                        <a style="color: wheat" href="#" class="active">1</a>
                        <a style="color: orange" href="#">2</a>
                        <a style="color: orange" href="#">3</a>
                        <a style="color: orange" href="#" class="dot-dot"><i class="fa fa-ellipsis-h"
                                aria-hidden="true"></i></a>
                        <a style="color: orange" href="#">6</a>
                        <a style="color: orange" href="#" class="next-arrow"><i class="fa fa-long-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>

    <!-- Start related-product Area -->
    <section class="related-product-area section_gap">
    </section>
    <!-- End related-product Area -->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Create with &nbsp;<i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp; by Bevy Digital Dev
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <!-- Modal Quick Product View -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="container relative">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-quick-view">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="quick-view-carousel">
                                <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                </div>
                                <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                </div>
                                <div class="item" style="background: url(img/organic-food/q1.jpg);">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="quick-view-content">
                                <div class="top">
                                    <h3 class="head">Mill Oil 1000W Heater, White</h3>
                                    <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
                                    <div class="category">Category: <span>Household</span></div>
                                    <div class="available">Availibility: <span>In Stock</span></div>
                                </div>
                                <div class="middle">
                                    <p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during
                                        the winter.</p>
                                    <a href="#" class="view-full">View full Details <span
                                            class="lnr lnr-arrow-right"></span></a>
                                </div>
                                <div class="bottom">
                                    <div class="color-picker d-flex align-items-center">Color:
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                        <span class="single-pick"></span>
                                    </div>
                                    <div class="quantity-container d-flex align-items-center mt-15">
                                        Quantity:
                                        <input type="text" class="quantity-amount ml-15" value="1" />
                                        <div class="arrow-btn d-inline-flex flex-column">
                                            <button class="increase arrow" type="button" title="Increase Quantity"><span
                                                    class="lnr lnr-chevron-up"></span></button>
                                            <button class="decrease arrow" type="button" title="Decrease Quantity"><span
                                                    class="lnr lnr-chevron-down"></span></button>
                                        </div>

                                    </div>
                                    <div class="d-flex mt-20">
                                        <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                        <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                        <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>