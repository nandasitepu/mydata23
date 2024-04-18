<?php

namespace App\Models\Hukum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstansiHukum extends Model
{
    use HasFactory;

    protected  $fillable =  [
        'uuid',
        'nama',
        'jenis',
        'detail',
        'koordinat',
        'foto',
        'alamat',
        'kontak'
    ];
    protected $table = 'dt_hukum_instansi';
}
