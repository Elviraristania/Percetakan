<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'jasa';
    protected $fillable = ['id_jasa','jenis_jasa','ukuran(satuan)','harga','keterangan','img'];
}
