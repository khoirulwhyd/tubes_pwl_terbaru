<?php

namespace App\Http\Controllers;
use PDF;

use App\Models\Toko;
use Carbon\Carbon;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function index($id)
    {
        $barang = Toko::where('id', $id)->first();
        return view('Belii.index', compact('barang'));
    }

    public function transaksi(Request $request, $id)
    {
        $barang = Toko::where('id', $id)->first();
        $tanggal_transaksi = Carbon::now();

        //simpan ke database transaksi
        $transaksi = new Transaksi;
        $transaksi->id_transaksi;
        $transaksi->nama_pembeli = $request->nama_pembeli;
        $transaksi->id_barang = $barang->id;
        $transaksi->nama_barang = $barang->nama;
        $transaksi->harga_barang = $barang->harga;
        $transaksi->harga_total = $barang->harga*$request->jumlah_beli;
        $transaksi->tanggal_transaksi = $tanggal_transaksi;
        $transaksi->save();

        return redirect('checkout');
    }

    public function checkout(Request $request)
    {
        $barang = Toko::all();
        $transaksi = Transaksi::all();
        return view('transaksi.checkout', compact('transaksi'));
    }

    public function cetakpdf()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.cetakpdf', compact('transaksi'));
        $pdf = PDF::loadview('transaksi.cetakpdf',['transaksi'->$transaksi]);
        return $pdf -> stream();
    }
} 