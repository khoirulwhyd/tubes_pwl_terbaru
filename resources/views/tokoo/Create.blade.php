@extends('tokoo.layout')
@section('content') 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
            Tambah Barang 
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
        <form method="post" action="{{ route('tokoo.store') }}" id="myForm" enctype="multipart/form-data"> 
        @csrf 

            <div class="form-group">
            <label for="nama">nama</label> 
            <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
            </div> 

            <div class="form-group">
            <label for="image">foto</label> 
            <input type="file" name="foto" class="form-control" id="foto" required="foto" aria-describedby="foto" > 
            </div> 


            <div class="form-group">
            <label for="satuan">satuan</label> 
            <input type="satuan" name="satuan" class="form-control" id="satuan" aria-describedby="satuan" > 
            </div> 
            
            <div class="form-group">
            <label for="">harga</label> 
            <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga" > 
            </div> 


            <div class="form-group"> 
            <label for="stok">stok</label> 
            <input type="stok" name="stok" class="form-control" id="stok" aria-describedby="stok" > 
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> 
    </div> 
    </div> 
@endsection