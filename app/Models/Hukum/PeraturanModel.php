<?php

namespace App\Models\Hukum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeraturanModel extends Model
{
    use HasFactory;
    protected  $fillable =  ['nomor', 'uraian', 'link1', 'link2'];
    protected $table = 'dt_peraturan';
}
