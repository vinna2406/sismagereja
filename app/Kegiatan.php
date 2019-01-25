<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $fillable = [
    	'user_id',
    	// 'pendeta_id',
    	'nama_kegiatan',
        'jenis_kegiatan',
        'tanggal',
        'nama_pendeta',
    	'lokasi',
    	'keterangan',
    	'status'
    ];

    public function User(){
        return $this->belongsTo('app\User');
    }

    public function Pendeta(){
        return $this->belongsTo('app\Pendeta');
    }
}
