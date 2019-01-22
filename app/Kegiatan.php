<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $fillable = [
    	'user_id',
    	'pendeta_id',
    	'nama_kegiatan',
    	'lokasi',
    	'tanggal',
    	'jenis_kegiatan',
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
