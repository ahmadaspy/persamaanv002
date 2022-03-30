<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluasiNilai extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'nilai',
        'keterangan',
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
