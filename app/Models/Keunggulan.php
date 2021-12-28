<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
    use HasFactory;
    protected $table = 'keunggulans';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function detilProduk(){
        return $this->belongsTo(Detil::class, 'keunggulan_id');
    }
}
