<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MariMencobaSpltvSubtitusi extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal_1',
        'soal_2',
        'soal_2',
        'ditanyakan',
        'jawaban_1',
        'jawaban_2',
        'jawaban_3',
        'penjelasan_1',
        'penjelasan_2',
        'penjelasan_3',
        'penjelasan_4',
        'penjelasan_4',
    ];
}
