<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hukum extends Model
{
    protected $table = 'dt_hukum';
    use HasFactory;

    protected $fillable = [
        'jenis', 'nomor', 'tentang', 'oleh', 'tanggal', 'sumber', 'links', 'keterangan',
    ];
}
