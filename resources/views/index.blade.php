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
                                        <h4 class="card-title">Semua Produk</h4>
                                    </div>
                                    <hr>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="produk mb-0">
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
                                                                @if ($item->old_price == $item->new_price)    
                                                                    <p>Rp. {{ number_format($item->new_price, 0, ',', '.') }}</p>
                                                                @else
                                                                    <p><del class="text-danger">Rp. {{ number_format($item->old_price, 0, ',', '.') }}</del> Rp. {{ number_format($item->new_price, 0, ',', '.') }}</p>
                                                                @endif
                                                                <div class="float-right input{{ $item->id }}">
                                                                    <button class="btn btn-success beli" data-value="{{ $item->id }}">Beli</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <hr>
                                                    </div>
                                                @endforeach
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
                {{-- <div class="float-left">
                    <p class="m-0">Total Belanja:</p>
                    <p class="m-0 font-weight-bold text-danger">Rp.100.000</p>
                </div> --}}
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Lanjut</button>
                </div>
            </div>
            {{-- <p>Footer</p> --}}
        </footer>
    </form>
@endsection

@section('js')
<script>
    $(document).ready( function () {
      $('.list').slice(3, 99).hide();
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
@endsection