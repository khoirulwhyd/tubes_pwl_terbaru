@extends('layouts.app2')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('daftar') }}" class="btn btn-primary"> Kembali </a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a href="{{ url('index') }}"> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><b>Check Out</b><h3>
                    <table class="table">
                    <body>
                    @foreach ($transaksi as $transaksi) 
                        <tr>
                            <td>Id Transaksi</td>
                            <td>:</td>
                            <td>{{ $transaksi -> id_transaksi }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Transaksi</td>
                            <td>:</td>
                            <td>{{ $transaksi -> tanggal_transaksi }}</td>
                        </tr>
                        <tr>
                            <td>Nama Pembeli</td>
                            <td>:</td>
                            <td>{{ $transaksi -> nama_pembeli }}</td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td>:</td>
                            <td>{{ $transaksi -> nama_barang }}</td>
                        </tr>
                        <tr>
                            <td>Harga Per-Satuan</td>
                            <td>:</td>
                            <td>Rp. {{ $transaksi -> harga_barang }}</td>
                        </tr>
                        <tr>
                            <td>Harga Total</td>
                            <td>:</td>
                            <td>Rp. {{ $transaksi -> harga_total }}</td>
                        </tr>

                        <tr>
                            <td> <a class="btn-danger mt-3" href=" {{ url('cetakpdf') }} ">Cetak PDF</td>
                        </tr>
                    @endforeach
                    </body>
                </div>
            </div>
        </div>    
    </div>   
</div>
@endsection