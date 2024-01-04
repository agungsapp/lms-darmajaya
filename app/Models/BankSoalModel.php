<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSoalModel extends Model
{
    use HasFactory;
    protected $table = 'bank_soal';
    protected $guarded = ['id'];


    // public function satuKelas()
    // {
    //     return $this->belongsTo(MataKuliah::class, 'kode_mk', 'kode_mk');
    // }
}
