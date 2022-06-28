<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table        = "produk";
    protected $primaryKey   = "produk_id";
    protected $fillable     = ['nama_produk', 'kategori_id', 'deskripsi', 'harga', 'gambar'];
}
