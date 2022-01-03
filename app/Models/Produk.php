<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['id_produk', 'nama_produk', 'jenis_produk', 'image_produk', 'slug'];
    public $incrementing = false;
    public $timestamps =false;
}
