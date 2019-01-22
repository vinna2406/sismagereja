<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendeta extends Model
{
	protected $table = 'pendetas';
    protected $fillable = [
	    'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'status'
    ];

    public function Kegiatan(){
        return $this->hasOne('app\Kegiatan');
    }

    public function Baptis(){
        return $this->hasOne('app\Baptis');
    }
}
