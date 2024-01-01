<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';

    protected $guarded = ['id'];


    public static function generateKodeMk()
    {
        $latestKodeMk = DB::table('mata_kuliah')->max('kode_mk');

        if (!$latestKodeMk) {
            return 'TI-001';
        }

        $lastNumber = (int)substr($latestKodeMk, 3);
        $newNumber = $lastNumber + 1;
        $newKodeMk = 'TI-' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

        return $newKodeMk;
    }
}
