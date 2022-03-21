<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kuis_1_nilai extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'nilai',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
