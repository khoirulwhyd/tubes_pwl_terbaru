@extends('layouts.app')
@section('head')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Daftar Sembako</h2>
                        </div>
                        <div class="col-12">
                            <a href="index">Home</a>
                            <a href="daftar">Daftar Sembako</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Daftar Start -->
            @foreach($barangs as $barang)
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="card">
                <img src="{{ url('storage') }}/{{ $barang -> foto }}" class="card-img-top" "width:400" alt="..." > 
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $barang -> nama}} </strong></h5>
                    <p class="card-text">
                        <strong> Harga : </strong> Rp. {{ $barang -> harga}}                  
                    </p>
                    <p class="card-text">
                        <strong> Stok : </strong> {{ $barang -> stok}} {{ $barang -> satuan}}             
                    </p>
                    <a href="{{ url('Belii') }}/{{ $barang -> id }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
            </div>
            @endforeach
            <!-- Daftar End -->
@endsection
