<?php

namespace App\Models\Kesehatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
    use HasFactory;

    protected  $fillable =  [
        'uuid',
        'nama',
        'alamat',
        'detail',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kemampuan',
        'karakteristik',
    ];

    // protected $guarded = [];
    public $table = 'dt_kesehatan_puskesmas';
}
