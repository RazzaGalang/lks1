<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProdukModel;


class ProdukController extends Controller
{
    public function tampildata()
    {
        $produk = DB::table('produk')->get();

        return view ('produk', ['produk' => $produk]);
    }

    public function detail($produk_id, Request $request){
        $detail = $request->produk_id;

        return view ('detail');
    }


    public function editdata($produk_id, Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'kategori_id' => 'required',
            'harga' => 'required'
        ]);

        $edit = ProdukModel::find($produk_id);
        $edit->nama_produk      = $request->input('nama_produk');
        $edit->kategori_id      = $request->input('kategori_id');
        $edit->deskripsi        = $request->input('deskripsi');
        $edit->harga            = $request->input('harga');
        $edit->gambar           = $request->input('gambar');

        $edit->save();

        //return redirect('/jurursan');
        return redirect()->back()->with('messageedit', 'Data Disunting');
    }

    public function destroy($produk_id)
    {
        $produkhapus=ProdukModel::find($produk_id);
        $produkhapus->delete();

        return redirect()->back()->with('messagehapus', 'Data Dihapus');
    }



    public function produktambah(Request $request){
        $request->validate ([
            'nama_produk' => 'required',
            'harga' => 'required',
        ]);

        ProdukModel::create([
            'nama_produk' => $request->nama_produk,
            'kategori_id' => $request ->kategori_id,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $request->gambar
        ]);

        return redirect()->back()->with('messagetambah', 'Data Tersimpan');
    }
}
