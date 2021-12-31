<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $table = "clients";

    protected $guarded = [
        'id_klien',
        'created_at',
        'updated_at'
    ];
}
