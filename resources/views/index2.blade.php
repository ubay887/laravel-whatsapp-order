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
    <title>HIMA-TI STIKI Indonesia</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/ico/favicon.ico">
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
                  <img src="{{ asset('images/logo/logo.jpg') }}" style="height: 60px" alt="HIMA-TI STIKI Indonesia">
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
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-12">                            
                            <div class="card mt-2">
                                <div class="card-header">
									<h4 class="card-title">Order Item(s)</h4>
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
                                                    <div class="float-right justfy-content-end">
                                                        <div class="row">
                                                            <div class="col-9"></div>
                                                            <div class="col-3">
                                                                <input type="text" value="1" class="form-control text-center">
                                                            </div>
                                                        </div>
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
                                                        <div class="row">
                                                            <div class="col-9"></div>
                                                            <div class="col-3">
                                                                <input type="text" value="3" class="form-control text-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
										</div>
									</div>
								</div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-header">
									<h4 class="card-title">Data Pemesan</h4>
								</div>
								<hr>
								<div class="card-content">
									<div class="card-body">
                                        <form action="#">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="" id="" value="Ida Bagus Kadek Darma Wiryatama" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Pesan Untuk Penjual</label>
                                                <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                            </div>
                                        </form>
									</div>
								</div>
                            </div>
                            <div class="card">
                                <div class="card-header">
									<h4 class="card-title">Order Detail</h4>
								</div>
								<hr>
								<div class="card-content mb-2">
									<div class="card-body">
                                        <div class="float-left">
                                            Total Harga
                                        </div>
                                        <div class="float-right">
                                            Rp. 100.000
                                        </div>
									</div>
								</div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success w-100 text-center">Pesan</button>
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