@extends('tokoo.layout') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            Edit Barang
            </div> 
            <div class="card-body">
            @if ($errors->any()) 
            <div class="alert alert-danger"> 
            <strong>Whoops!</strong> There were some problems with your input.<br><br> 
            <ul> 
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li> 
            @endforeach 
            </ul> 
        </div> 
    @endif 
    <form method="post" action="{{ route('tokoo.update', $Toko->nama) }}" id="myForm" enctype="multipart/form-data">
    @csrf 
    @method('PUT') 
        <div class="form-group"> 
            <label for="Nama_Barang">nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $Toko->nama }}" aria-describedby="nama" > 
            </div>
        <div class="form-group">
            <label for="image">foto</label>
            <input type="file" name="foto" class="form-control" id="foto" value="{{ $Toko->foto }}" 
             required="required" aria-describedby="foto" ></br>
            <img width="100px" height="100px" src="{{asset('storage/'.$Toko->foto)}}">
            </div>
        <div class="form-group"> 
            <label for="satuan">satuan</label> 
            <input type="text" name="satuan" class="form-control" id="satuan" value="{{ $Toko->satuan }}" aria-describedby="satuan" > 
            </div>
        <div class="form-group"> 
            <label for="harga">harga</label> 
            <input type="harga" name="harga" class="form-control" id="harga" value="{{ $Toko->harga }}" aria-describedby="harga" > 
            </div> 
        <div class="form-group"> 
            <label for="stok">stok</label> 
            <input type="stok" name="stok" class="form-control" id="stok" value="{{ $Toko->stok }}" aria-describedby="stok" > 
            </div> 
            
            <button type="submit" class="btn btn-primary">Submit</button> 
            </form> 
            </div> 
            </div>
        </div> 
    </div> 
@endsection