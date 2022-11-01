<?php

namespace App\Models;

use App\Models\KategoriAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;

    protected $table = 'subkategoris';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(KategoriAdmin::class, 'kategori_id', 'id');
    }
}
