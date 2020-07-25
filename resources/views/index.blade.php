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
                                        <div class="row data">
                                            @foreach ($menu as $item)
                                                <div class="col-6 list">
                                                    <div class="card mx-1">
                                                        <div class="card-header p-0">
                                                            <p class="font-weight-bold">{{ $item->name }}</p>
                                                            <h5 class="font-weight-bold" hidden>{{ strtolower($item->name) }}</h5>
                                                            <h6 hidden>{{ $item->category_id }}</h6>
                                                        </div>
                                                        <div class="card-content">
                                                            <div >
                                                                @isset($item->img)
                                                                    <img src="{{ asset($item->img) }}" alt="{{ $item->name }}" class="img-fluid rounded mx-auto d-block">
                                                                @else
                                                                    <img src="{{ asset('images/logo/logo.jpg') }}" alt="Logo" class="img-fluid rounded mx-auto d-block">
                                                                @endisset

                                                                @isset ($item->flag_id)
                                                                    <div class="float-left">
                                                                        <span class="badge badge-primary position-absolute">{{ $item->flag_id }}</span>
                                                                    </div>
                                                                @endisset
                                                            </div>
                                                            <div class="card-body p-0 mt-1">
                                                                @if ($item->old_price == $item->new_price)    
                                                                    <p class="card-text">Rp. {{ number_format($item->new_price, 0, ',', '.') }}</p>
                                                                @else
                                                                    <p class="card-text"><del class="text-danger">Rp. {{ number_format($item->old_price, 0, ',', '.') }}</del> Rp. {{ number_format($item->new_price, 0, ',', '.') }}</p>
                                                                @endif
                                                                <div class="float-right input{{ $item->id }}">
                                                                    @auth
                                                                        <button class="btn btn-success beli" data-value="{{ $item->id }}">Beli</button>
                                                                    @else
                                                                        <button type="button" class="btn btn-success beli" data-toggle="modal" data-target="#modal">Beli</button>
                                                                    @endauth
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

      $(".beli").on( "click", function() {
          var id = $(this).attr('data-value');
          $(".input"+ id).html(`<div class="col">
          <input type="number" class="form-control text-center" name="menu[`+ id +`]" value="1" minlength="1" min="1" max="99" placeholder="0">
          </div>`);
      });

      $(".kategori").on("click", function() {
            $('.col-6').removeClass('d-none');
            var id = $(this).attr('data-value');
            console.log(id);
            $('.data').find('.col-6 .card .card-header h6:not(:contains("'+id+'"))').parent().parent().parent().addClass('d-none');
      });

      $("#pencarian").keyup(function() {
            $('.list').show();
            $(".card-footer").remove();
            $('.col-6').removeClass('d-none');
            var filter = $(this).val().toLowerCase();
            console.log(filter);
            $('.data').find('.col-6 .card .card-header h5:not(:contains("'+filter+'"))').parent().parent().parent().addClass('d-none');
      });      
    });
  </script>
@endsection