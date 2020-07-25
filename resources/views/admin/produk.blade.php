@extends('admin.layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('produkactive')
    active
@endsection
@section('title')
    Penjualan
@endsection
@section('judul')
    Penjualan
@endsection
@section('content')
    {{-- Tabel Penjualan --}}
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Penjualan Hari Ini</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>ID Kategori</th>
                                            <th>Flag ID</th>
                                            <th>Harga Lama</th>
                                            <th>Harga Baru</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kopi Panas</td>
                                            <td>1</td>
                                            <td>Featured</td>
                                            <td>Rp. 10.000</td>
                                            <td>Rp. 10.000</td>
                                            <td><button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-primary" title="Lihat Penjualan"><i class="feather icon-eye"></i></span></td>
                                        </tr>
                                        {{-- @foreach ($penjualan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item['penjualan']['id'] }}</td>
                                                <td>{{ number_format($item['penjualan']['total_harga'], 0, ',', '.') }}</td>
                                                <td><button type="button" style="padding: 0; border: none; background: none;" class="action-edit text-primary" title="Lihat Penjualan"><i class="feather icon-eye"></i></span></td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- / Tabel Penjualan --}}
@endsection
@section('js')
    <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('js/scripts/datatables/datatable.js') }}"></script>
@endsection