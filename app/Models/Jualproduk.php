<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jualproduk extends Model
{
    use HasFactory;
    // protected $PrimaryKey ="id_produk";
    protected $primaryKey = 'id_produk';
    protected $table ='jualproduk';
    // protected $fillable = ['nama_produk','stock','harga','foto_produk'];
    protected $guarded = [];
    // protected $fillable = ['id_kategori','nama_produk','stock','harga','foto_produk'];

     public function Kategori()
   {
         return $this->belongsTo(kategori::class,  'id_kategori','id');
    }
    public function KategoriAdmin()
   {
         return $this->belongsTo(KategoriAdmin::class,  'kategori_produk','id');
    }
}
