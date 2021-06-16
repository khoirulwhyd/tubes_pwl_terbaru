@extends('layouts.app2')

@section('konten') 
    <div class="row"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-left mt-2">  
            </div> 
            <div class="float-right my-2"> 
                <a class="btn btn-success" href="{{ route('tokoo.create') }}"> Input Barang</a> 
            </div> 
            
            <form action="{{route('tokoo.index')}}" class="row g-3" method="GET">
                <div class="col-auto">
                    <input name="cari" type="cari" class="form-control" id="inputcari" placeholder="cari">
                </div>
                <div class="col-auto"?
                    <button type="submit" class="btn btn-primary mb-3">Cari Data</button>
                </div>
            </form>
        </div> 
     </div> 
                
     @if ($message = Session::get('success')) 
         <div class="alert alert-success"> 
            <p>{{ $message }}</p> 
        </div> 
    @endif

    
<table class="table"> 
    <thead class="thead-dark">
    <tr> 
            <th>Nama</th>
            <th>Foto</th>
            <th>Satuan</th> 
            <th>Harga</th>
            <th>Stok</th> 

            <th width="280px">Action</th> 
    </tr>
    <thead>
    @foreach ($tokoo as $Toko) 
    <tr> 
            <td>{{ $Toko->nama }}</td>
            <td><img width="100px" height="100px" src="{{asset('storage/'.$Toko->foto)}}">
            <td>{{ $Toko->satuan }}</td> 
            <td>{{ $Toko->harga }}</td> 
            <td>{{ $Toko->stok }}</td> 
            <td> <form action="{{ route('tokoo.destroy',$Toko->id) }}" method="POST"> 
            <a class="btn btn-info" href="{{ route('tokoo.show',$Toko->id) }}">Show</a> 
            <a class="btn btn-primary" href="{{ route('tokoo.edit',$Toko->id) }}">Edit</a> 
            
            @csrf 
            @method('DELETE') 
            <button type="submit" class="btn btn-danger">Delete</button> 
            </form>
            </td> 
    </tr> 
    @endforeach 
    </table> 
@endsection