<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detil extends Model
{
    use HasFactory;
    protected $table = 'detils';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['id_produk' ,'slug', 'nama_produk', 'deskripsi_produk', 'image_produk', 'keunggulan', 'tujuan' ];
    public $incrementing = false;
    public $timestamps = false;

    public function keunggulan(){
        return $this->hasMany(Keunggulan::class, 'keunggulan_id');
    }
}
