<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detil extends Model
{
    use HasFactory;
    protected $table = 'detils';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['id_produk' ,'slug', 'nama_produk','singkatan_produk', 'deskripsi_produk', 'image_produk', 'keunggulan', 'tujuan' ];
    public $incrementing = false;
    public $timestamps = false;
    const EXCERPT_LENGTH = 50;
    public function keunggulan(){
        return $this->hasMany(Keunggulan::class, 'keunggulan_id');
    }

    public function excerpt()
    {
        return Str::limit($this->deskripsi_produk, Detil::EXCERPT_LENGTH);
    }
}
