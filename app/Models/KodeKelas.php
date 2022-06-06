<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeKelas extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'kode_kelas_id');
    }
    public function kkm(){
        return $this->belongsTo(kkm::class, 'id', 'kode_kelas_id');
    }
}
