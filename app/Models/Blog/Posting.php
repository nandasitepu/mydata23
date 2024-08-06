<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected  $fillable =  [
        'judul',
        'isi',
        'gambar',
        'kategori',
        'penulis'
    ];
    protected $table = 't_blog';
}
