@extends('layout')

@section('content')
    <!-- BEGIN: Content-->
    <form action="{{ route('order') }}" method="POST">
        @csrf
        <div class="app-content content" style="margin: 0%;">
            <div class="content-overlay"></div>
            <div class="content-wrapper" style="margin: 0%">
                <div class="content-header row justify-content-center">
                <div class="col-md-10 content-header-left">
                    <h2 class="content-header-title">
                    <img src="{{ asset('images/logo/logo.jpg') }}" style="height: 60px" alt="eco BIKe coffee">
                    <div class="float-right">
                        <div class="breadcrumb-wrapper col-12 text-center my-1">
                            <ol class="breadcrumb align-items-center">
                                @auth
                                    <li class="breadcrumb-item"><a href="{{ route('logout') }}"> Logout</a>
                                    </li>
                                @else
                                    <li class="breadcrumb-item">
                                        {{-- <button type="button"  --}}
                                            <a href="#" data-toggle="modal" data-target="#modal">Masuk</a>
                                        {{-- </button> --}}
                                    </li>
                                @endauth
                            </ol>
                        </div>
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
                                
                                <div class="row mt-1">
                                    @foreach ($kategori as $item)
                                        <div class="col-6 col-sm-4 mb-1">
                                            <div class="card m-0">
                                                <div class="card-content">
                                                    <img class="card-img img-responsive" src="/images/non-coffee/mango-smoothies.jpeg" style="width: 100%; height: 50px;" alt="Card image">
                                                    <div class="card-img-overlay overflow-hidden overlay-danger overlay-lighten-2">
                                                        {{-- <h4 class="card-title text-white">Card Image Overlay</h4> --}}
                                                        <div class="row justify-content-center">
                                                            <button type="button" style="padding: 0; border: none; background: none;"><p class="card-text text-white text-center kategori" data-value="{{ $item->id }}">{{ $item->name }}</p></button>
                                                        </div>
                                                        {{-- <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-group m-0">
												<input type="text" class="form-control" id="pencarian" placeholder="Pencarian Menu">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Semua Produk</h4>
                                    </div>
                                    <hr>
                                    <div class="card-content">
                                        <div class="data mx-1">
                                            @foreach ($menu as $item)
                                                <div class="list">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="product-image">
                                                                @isset($item->img)
                                                                    <img src="{{ asset($item->img) }}" alt="element 04" class="img-fluid">
                                                                @else
                                                                    <img src="{{ asset('images/logo/logo.jpg') }}" alt="element 04" class="img-fluid">
                                                                @endisset

                                                                @isset ($item->flag_id)
                                                                    <div class="float-left">
                                                                        <span class="badge badge-primary position-absolute">{{ $item->flag_id }}</span>
                                                                    </div>
                                                                @endisset
                                                            </div>
                                                        </div>
                                                        <div class="col-9">
                                                            <h4 class="mb-0 font-weight-bold">{{ $item->name }}</h4>
                                                            <h5 hidden>{{ strtolower($item->name) }}</h4>
                                                            <h6 hidden>{{ $item->category_id }}</h6>
                                                            @if ($item->old_price == $item->new_price)    
                                                                <p>Rp. {{ number_format($item->new_price, 0, ',', '.') }}</p>
                                                            @else
                                                                <p><del class="text-danger">Rp. {{ number_format($item->old_price, 0, ',', '.') }}</del> Rp. {{ number_format($item->new_price, 0, ',', '.') }}</p>
                                                            @endif
                                                            <div class="float-right input{{ $item->id }}">
                                                                <div class="row">
																	<button type="button" class="btn btn-danger px-1 qtyminus" data-value="menu{{ $item->id }}">-</button>
																	<div class="col-4 px-0">
																		<input type="number" class="form-control text-center" name="menu{{ $item->id }}" value="0" minlength="1" min="0" max="99" placeholder="0">
																	</div>
																	<button type="button" class="btn btn-success px-1 qtyplus" data-value="menu{{ $item->id }}">+</button>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <hr>
                                                </div>
                                            @endforeach
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

        @auth
            <footer class="footer footer-static footer-light ml-0 py-1">
                <div class="container">
                    {{-- <div class="float-left">
                        <p class="m-0">Total Belanja:</p>
                        <p class="m-0 font-weight-bold text-danger">Rp.100.000</p>
                    </div> --}}
                    <div class="float-right">
                        @auth
                            <button type="submit" class="btn btn-success">Lanjut</button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-success">Masuk</a>
                        @endauth
                    </div>
                </div>
                {{-- <p>Footer</p> --}}
            </footer>
        @endauth
    </form>

    <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
            <div class="modal-content modal-xs">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Masuk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row mb-0 mx-0">
                        <div class="col-md-12 mb-2">
                            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger btn-block"><i class="fab fa-google"></i> Google</a>
                        </div>
                        <div class="col-md-12 mb-2">
                            <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary btn-block"><i class="fab fa-facebook"></i> Facebook</a>
                        </div>
                        {{-- <div class="col-md-12">
                            <a href="{{ url('/auth/redirect/twitter') }}" class="btn btn-light btn-block"><i class="fab fa-twitter"></i> Twitter</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready( function () {
      $('.list').slice(4, 99).hide();
      $("#loadMore").on("click", function(e){
          e.preventDefault();
          $(".list:hidden").slideDown();
          $(".card-footer").remove();
      });

    //   $(".beli").on( "click", function() {
    //       var id = $(this).attr('data-value');
    //       $(".input"+ id).html(`<div class="row">
    //       <button type="button" class="btn btn-danger px-1 qtyminus" data-value="menu[`+ id +`]">-</button><div class="col-4 px-0"><input type="number" class="form-control text-center" name="menu[`+ id +`]" value="1" minlength="1" min="0" max="99" placeholder="0"></div><button type="button" class="btn btn-success px-1 qtyplus" data-value="menu[`+ id +`]">+</button>
    //       </div>`);
    //   });

      $(".kategori").on("click", function() {
            $('.list').show();
            $(".card-footer").remove();
            $('.col-6').removeClass('d-none');
            var id = $(this).attr('data-value');
            console.log(id);
            $('.data').find('.list .row .col-9 h6:not(:contains("'+id+'"))').parent().parent().parent().addClass('d-none');
      });

      $("#pencarian").keyup(function() {
            $('.list').show();
            $(".card-footer").remove();
            $('.list').removeClass('d-none');
            var filter = $(this).val().toLowerCase();
            console.log(filter);
            $('.data').find('.list .row .col-9 h5:not(:contains("'+filter+'"))').parent().parent().parent().addClass('d-none');
      });
      
      	$('.qtyplus').click(function(){
			console.log("currentVal");
			// Get the field name
			fieldName = $(this).attr('data-value');
			// Get its current value
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			// If is not undefined
			if (currentVal == 99) {
				$('input[name='+fieldName+']').val(currentVal);
			}
			else if (!isNaN(currentVal) ) {
				// Increment
				$('input[name='+fieldName+']').val(currentVal + 1);
			} 
			else {
				// Otherwise put a 0 there
				$('input[name='+fieldName+']').val(0);
			}
		});
		// This button will decrement the value till 0
		$(".qtyminus").click(function() {
			console.log("currentVal");
			// Get the field name
			fieldName = $(this).attr('data-value');
			// Get its current value
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			// If it isn't undefined or its greater than 0
			if (!isNaN(currentVal) && currentVal > 0) {
				// Decrement one
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				// Otherwise put a 0 there
				$('input[name='+fieldName+']').val(0);
			}
		});
    });
  </script>
@endsection