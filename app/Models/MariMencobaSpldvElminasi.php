<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MariMencobaSpldvElminasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal_1',
        'soal_2',
        'x',
        'y',
        'penjelasan_1',
        'penjelasan_2',
        'penjelasan_3',
        'penjelasan_4',
    ];
}
