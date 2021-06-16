@extends('tokoo.layout') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            Detail Barang
            </div>
            <div class="card-body"> 
            <ul class="list-group list-group-flush"> 
            <li class="list-group-item" align="middle">
            <img width="100px" height="100px" src="{{asset('storage/'.$Toko->foto)}}" align="middle"></li>
            <li class="list-group-item"><b>nama: </b>{{$Toko->nama}}</li>
            <li class="list-group-item"><b>satuan: </b>{{$Toko->satuan}}</li> 
            <li class="list-group-item"><b>harga: </b>{{$Toko->harga}}</li> 
            <li class="list-group-item"><b>stok: </b>{{$Toko->stok}}</li> 
            </ul> 
        </div> 
        <a class="btn btn-success mt-3" href="{{ route('tokoo.index') }}">Kembali</a> 
        </div> 
    </div> 
    </div> 
@endsection