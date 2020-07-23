<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>eco BIKe coffee</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/logo.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/css/animate/animate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/css/components.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Content-->
    <div class="app-content content" style="margin: 0%;">
        <div class="content-overlay"></div>
        <div class="content-wrapper" style="margin: 0%">
            <div class="content-header row justify-content-center">
              <div class="col-md-10 content-header-left">
                <h2 class="content-header-title">
                  <img src="{{ asset('images/logo/logo.jpg') }}" style="height: 60px" alt="eco BIKe coffee">
                  {{-- <div class="float-right">
                    <div class="breadcrumb-wrapper col-12 text-center d-none d-sm-block my-1">
                      <ol class="breadcrumb align-items-center">
                          <li class="breadcrumb-item"><a href="/">Beranda</a>
                          </li>
                          <li class="breadcrumb-item"><a href="/kegiatan">Kegiatan</a>
                          </li>
                      </ol>
                    </div> --}}
                  </div>
                </h2>
              </div>              
            </div>
            <div class="content-body">
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row justify-content-center mb-3">
                        <div class="col-xl-6 col-lg-8 col-12">
                            <div id="carousel-interval" class="carousel slide" data-ride="carousel" data-interval="5000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-interval" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-interval" data-slide-to="1"></li>
                                    <li data-target="#carousel-interval" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="/images/slider/01.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="/images/slider/03.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="/images/slider/02.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-interval" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-interval" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            {{-- <input type="text" class="form-control mt-2" id="produk" placeholder="Pencarian Produk"> --}}
                            
                            <div class="card mt-2">
                                <div class="card-header">
									<h4 class="card-title">Terlaris</h4>
								</div>
								<hr>
								<div class="card-content">
									<div class="card-body">
										<div class="produk mb-0">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="product-image">
                                                        <img src="/images/elements/macbook-pro.png" alt="element 04" class="img-fluid">
                                                        <div class="float-left">
                                                            <span class="badge badge-primary position-absolute">Promo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0 font-weight-bold">Burger Meet Moza</h4>
                                                    <p class="mb-0">Burger Special with</p>
                                                    <p><del class="text-danger">Rp. 50.000</del> Rp. 5.000</p>
                                                    <div class="float-right">
                                                        <button class="btn btn-success">Beli</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="product-image">
                                                        <img src="/images/elements/macbook-pro.png" alt="element 04" class="img-fluid">
                                                        <div class="float-left">
                                                            <span class="badge badge-primary position-absolute">Promo</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <h4 class="mb-0 font-weight-bold">Abc Super</h4>
                                                    <p class="mb-0">Burger Special with</p>
                                                    <p><del class="text-danger">Rp. 50.000</del> Rp. 5.000</p>
                                                    <div class="float-right">
                                                        <button class="btn btn-success">Beli</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href="#" id="loadMore">Load More</a>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <footer class="footer footer-static footer-light ml-0 py-1">
        <div class="container">
            <div class="float-left">
                <p class="m-0">Total Belanja:</p>
                <p class="m-0 font-weight-bold text-danger">Rp.100.000</p>
            </div>
            <div class="float-right">
                <button type="button" class="btn btn-success">Lanjut</button>
            </div>
        </div>
        {{-- <p>Footer</p> --}}
    </footer>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Vendor JS-->
    <script src="/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/js/core/app-menu.js"></script>
    <script src="/js/core/app.js"></script>
    <script src="/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->

    <script>
      $(document).ready( function () {
		$('.list').slice(3, 99).hide();
		$("#loadMore").on("click", function(e){
			e.preventDefault();
			$(".list:hidden").slideDown();
			$(".card-footer").remove();
		});

        $("#produk").keyup(function() {
            var value = $(this).val();
            console.log($(this).val());
            // $(".data").filter(function() {
            //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            // });
            // $('.produk').find('.list .row .col-9 h4:not(:contains("'+value+'"))');
        });
      });
    </script>

</body>
<!-- END: Body-->

</html>