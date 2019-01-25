<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baptis extends Model
{
    protected $table = 'baptis';
    protected $fillable = [
    	// 'anggota_id',
    	'pendeta_id',
    	'user_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        // 'jenis_kelamin',
        // 'alamat',
        // 'no_telepon',
    	'tgl_baptis',
    	'keterangan',
    	'status',
    ];

    public function User(){
        return $this->belongsTo('app\User');
    }

    public function Pendeta(){
        return $this->belongsTo('app\Pendeta');
    }
}
