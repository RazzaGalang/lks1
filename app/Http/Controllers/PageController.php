<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

class PageController extends Controller
{
    public function tampildata()
    {
        $produk = DB::table('produk')->get();

        return view ('home', ['produk' => $produk]);
    }

    public function tampiladmin()
    {
        $produk = DB::table('produk')->get();
        $admin = DB::table('admin')->get();


        return view ('admin', ['produk' => $produk], ['admin' => $admin]);
    }


    public function home(){
        return view ('home');
    }


    public function transaksi(){
        $transaksi = DB::table('transaksi')->get();

        return view ('transaksi', ['transaksi' => $transaksi]);
    }

    public function keranjang(){
        return view ('cart');
    }

    public function pembayaran(){
        return view ('pembayaran');
    }

    public function berhasil(){
        return view ('berhasil');
    }

    public function logout(){
        \Auth::logout();
        return redirect('/');
    }
}
