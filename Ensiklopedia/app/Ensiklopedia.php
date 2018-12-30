<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ensiklopedia extends Model
{
    // Digunakan untuk menggunakan soft delete secara default saat menghapus data
    use SoftDeletes;
 
    protected $fillable = [
        'istilah', 'kategori','arti'
    ];
    protected $dates = ['deleted_at'];
}