<?php

namespace App\Models\Kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected  $fillable =  [
        'uuid',
        'nama',
        'provinsi',
        'kabupaten',
        'alamat',
        'kontak',
        'pemilik',
        'kelas',
        'detail',
        'kode',
    ];

    // protected $guarded = [];
    public $table = 'dt_kesehatan_rumahsakit';
}
