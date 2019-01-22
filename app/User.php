<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Anggota(){
        return $this->hasOne('app\Anggota');
    }

    public function Kegiatan(){
        return $this->hasOne('app\Kegiatan');
    }

    public function Baptis(){
        return $this->hasOne('app\Baptis');
    }

    public function Pernikahan(){
        return $this->hasOne('app\Pernikahan');
    }
}
