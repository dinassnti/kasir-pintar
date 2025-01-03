<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'toko';
    protected $primaryKey = 'id_toko';
    protected $fillable = [
        'id_user',
        'jenis_usaha',
        'nama_toko',
        'email',
        'no_telepon',
        'alamat',
        'foto_toko',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

