<?php

namespace App\Models;

use App\Models\KodeKelas;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'nip_nis',
        'password',
        'kode_kelas_id',
        'photo_profile',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function kode_kelas(){
        return $this->hasOne(KodeKelas::class, 'id', 'kode_kelas_id');
    }
    public function nilaikuismengenal()
    {
        return $this->hasOne(KuisMengenalNilai::class, 'user_id', 'id');
    }
    public function nilaikuismengenal_trash()
    {
        return $this->hasMany(KuisMengenalNilai::class, 'user_id', 'id')->onlyTrashed();
    }
    public function nilaikuismengenal_all()
    {
        return $this->hasMany(KuisMengenalNilai::class, 'user_id', 'id')->withTrashed();
    }
    public function nilaikuis1()
    {
        return $this->hasOne(kuis_1_nilai::class, 'user_id', 'id');
    }
    public function nilaikuis1_trash()
    {
        return $this->hasMany(kuis_1_nilai::class, 'user_id', 'id')->onlyTrashed();
    }
    public function nilaikuis1_all()
    {
        return $this->hasMany(kuis_1_nilai::class, 'user_id', 'id')->withTrashed();
    }
    public function nilaikuis2()
    {
        return $this->hasOne(kuis_2_nilai::class, 'user_id', 'id');
    }
    public function nilaikuis2_trash()
    {
        return $this->hasMany(kuis_2_nilai::class, 'user_id', 'id')->onlyTrashed();
    }
    public function nilaikuis2_all()
    {
        return $this->hasMany(kuis_2_nilai::class, 'user_id', 'id')->withTrashed();
    }
    public function nilaievaluasi()
    {
        return $this->hasOne(EvaluasiNilai::class, 'user_id', 'id');
    }
    public function nilaievaluasi_trash()
    {
        return $this->hasMany(EvaluasiNilai::class, 'user_id', 'id')->onlyTrashed();
    }
    public function nilaievaluasi_all()
    {
        return $this->hasMany(EvaluasiNilai::class, 'user_id', 'id')->withTrashed();
    }
}
