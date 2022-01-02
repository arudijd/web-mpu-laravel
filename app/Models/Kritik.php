<?php

namespace App\Models;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kritik extends Model
{
    use HasFactory;
    protected $table = 'kritiks';
    protected $primaryKey = 'id_kritik';
    protected $guarded = ['id_kritik'];
    const EXCERPT_LENGTH = 20;

    public function excerpt()
    {
        return Str::limit($this->body, Kritik::EXCERPT_LENGTH);
    }
}
