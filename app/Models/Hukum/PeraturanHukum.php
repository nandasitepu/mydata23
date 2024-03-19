<?php

namespace App\Models\Hukum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeraturanHukum extends Model
{
    use HasFactory;
    protected  $fillable =  [
        'uuid',
        'jenis',
        'nomor',
        'tentang',
        'tahun',
        'status',
        'tanggal',
        'link_bt',
        'link_pjl',
        'link_gdrives'
    ];
    protected $table = 'dt_hukum_peraturan';
}
