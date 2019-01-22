<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baptis extends Model
{
    protected $table = 'baptis';
    protected $fillable = [
    	'anggota_id',
    	'pendeta_id',
    	'user_id',
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
