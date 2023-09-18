<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Atur nama tabel yang sesuai dengan tabel di database Anda
    protected $table = 'posts';

    // Daftar kolom yang dapat diisi (fillable) secara massal
    protected $fillable = [
        'title',
        'content',
        // Tambahkan kolom lain yang ingin Anda masukkan di sini
    ];

    // Daftar kolom yang harus disembunyikan (hidden) dari representasi array dan JSON
    protected $hidden = [
        // Tambahkan kolom yang ingin Anda sembunyikan di sini
    ];

    // Daftar relasi dengan model lain jika diperlukan
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
