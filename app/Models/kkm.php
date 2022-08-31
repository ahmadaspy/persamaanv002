<?php

namespace App\Models;

use App\Models\kkm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kkm extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kelas_id',
        'kuis_mengenal_kkm',
        'kuis_1_kkm',
        'kuis_2_kkm',
        'evaluasi_kkm',
    ];
    public function kode_kelas(){
        return $this->hasOne(KodeKelas::class, 'id', 'kode_kelas_id');
    }
}
