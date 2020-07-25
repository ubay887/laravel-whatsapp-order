@extends('layout')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content" style="margin: 0%;">
        <div class="content-overlay"></div>
        <div class="content-wrapper" style="margin: 0%">
            <div class="content-header row justify-content-center">
              <div class="col-md-10 content-header-left">
                <h2 class="content-header-title">
                  <img src="{{ asset('images/logo/logo.jpg') }}" style="height: 60px" alt="HIMA-TI STIKI Indonesia">
                    <div class="float-right">
                        <div class="breadcrumb-wrapper col-12 text-center my-1">
                            <ol class="breadcrumb align-items-center">
                                @auth
                                    <li class="breadcrumb-item"><a href="/logout">Logout</a>
                                    </li>
                                @else
                                    <li class="breadcrumb-item"><a href="/login">Login</a>
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
                    <form action="{{ route('payment') }}" method="post">
                        @csrf
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
                                                @foreach ($data['items'] as $item)
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="product-image">
                                                                @isset($item['img'])
                                                                    <img src="{{ asset($item['img']) }}" alt="element 04" class="img-fluid">
                                                                @else
                                                                    <img src="{{ asset('images/logo/logo.jpg') }}" alt="element 04" class="img-fluid">
                                                                @endisset

                                                                @isset ($item['flag_id'])
                                                                    <div class="float-left">
                                                                        <span class="badge badge-primary position-absolute">{{ $item['flag_id'] }}</span>
                                                                    </div>
                                                                @endisset
                                                            </div>
                                                        </div>
                                                        <div class="col-9">
                                                            <h4 class="mb-0 font-weight-bold">{{ $item['name'] }}</h4>
                                                            <p>Rp. {{ number_format($item['price'], 0, ',', '.') }}</p>
                                                            <div class="float-right justfy-content-end">
                                                                <div class="row">
                                                                    <div class="col-9"></div>
                                                                    <div class="col-3">
                                                                        <input type="text" name="menu[{{ $item['id'] }}]" value="{{ $item['qty'] }}" class="form-control text-center" hidden>
                                                                        <input type="text" name="menu[{{ $item['id'] }}]" value="{{ $item['qty'] }}" class="form-control text-center" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach
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
                                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>No. Telepon</label>
                                                    <input type="tel" name="phone" id="phone" value="{{ Auth::user()->phone }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat E-mail</label>
                                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control" hidden>
                                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pesan Untuk Penjual</label>
                                                    <textarea name="note" id="note" cols="30" rows="3" class="form-control"></textarea>
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
                                                Rp. {{ number_format($data['total'], 0, ',', '.') }}
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
                    </form>
                </section>
                <!-- Input Validation end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
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