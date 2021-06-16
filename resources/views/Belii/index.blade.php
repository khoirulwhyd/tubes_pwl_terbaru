@extends('layouts.app2')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('daftar') }}" class="btn btn-primary"> Kembali </a>
        <div class="col-md-12 mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('storage') }}/{{ $barang -> foto }}" class="rounded mx-auto
                        d-block" width="100%" alt="">
                    </div>
                    <div class="col-md-6">
                        <h1>{{ $barang -> nama }}</h1>
                        <table class="table">
                            <body>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format ($barang -> harga) }} Per {{ $barang -> satuan}}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{ number_format ($barang -> stok) }} {{ $barang -> satuan}} </td>
                                </tr>
                                <form method="post" action="{{ url('transaksi') }}/{{ $barang->id }}">
                                @csrf   
                                    <tr>
                                        <td>Masukkan Nama Pembeli</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="nama_pembeli" class="form-control"
                                            required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Beli</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="jumlah_beli" class="form-control"
                                            required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">  ChekOut Harga</button>
                                        </td>
                                    </tr>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection