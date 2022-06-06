<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kkm extends Model
{
    use HasFactory;
    protected $fillable = [
        'kuis_1_kkm',
        'kuis_2_kkm',
        'evaluasi_kkm',
    ];
}
