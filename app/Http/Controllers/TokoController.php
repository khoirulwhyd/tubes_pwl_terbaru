<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $tokoo = Toko::all();
        $posts = Toko::orderBy('nama', 'desc')->paginate(5);
        return view('tokoo.index', compact('tokoo'));
        with('i', (request()->input('page', 1) - 1) * 5);
     }

    public function create()
    {
      return view('tokoo.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'foto' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            ]);

            if ($request->file('foto')) {
                $image_name = $request->file('foto')->store('image', 'public');
                // $Toko->Id = $request->get('Id');
                Toko::create([
                    'nama' => $request->nama,
                    'foto' => $image_name,
                    'satuan' => $request->satuan,
                    'harga' => $request->harga,
                    'stok' => $request->stok,
                ]);
                
            }
         
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('tokoo.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    public function show($nama)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nama Barang
        $Toko = Toko::find($nama);
        return view('tokoo.detail', compact('Toko'));
    }

    public function edit($nama)
    {
        //menampilkan detail data dengan menemukan berdasarkan Id Barang untuk diedit
        $Toko = Toko::find($nama);
        return view('tokoo.edit', compact('Toko'));
    }

    public function update(Request $request, $nama)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'foto' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        Toko::find($nama)->update($request->all());

        // jika file image tersebut telah tersedia, maka file yang lama akan dihapus
        if ( $tokoo->image && file_exists(storage_path('app/public/' . $tokoo->image))) 
        {
            \Storage::delete(['public/' .$tokoo->image]);
        }
        // namun, jika file image masih belum ada, maka file baru yang diupload akan disimpan
        $image_name = $request->file('image')->store('images', 'public');
        $tokoo->image = $image_name;

        $Toko = new Toko;
        $Toko->nama = $request->get('nama');
        $Toko->foto = $image_name;
        $Toko->satuan = $request->get('satuan');
        $Toko->harga = $request->get('harga');
        $Toko->stok = $request->get('stok');

        return redirect()->route('tokoo.index')
        ->with('success', 'Barang Berhasil Diupdate'); 
        }

    public function destroy($nama)
    {
        
        //fungsi eloquent untuk menghapus data
        Toko::find($nama)->delete(); 
        return redirect()->route('tokoo.index') 
        -> with('success', 'Barang Berhasil Dihapus');
    }
    
};
