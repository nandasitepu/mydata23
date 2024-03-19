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
        'image',
        'kategori',
    ];
    protected $table = 't_blog_posting';
}
