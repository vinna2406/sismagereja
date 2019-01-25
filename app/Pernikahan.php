<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pernikahan extends Model
{
    protected $table = 'pernikahans';
    protected $fillable = [
    	'user_id',
    	'nama_pria',
    	'tempat_lahir_pria',
    	'tgllahir_pria',
    	'nama_ayah_pria',
    	'nama_ibu_pria',
    	'nama_wanita',
    	'tempat_lahir_wanita',
    	'tgllahir_wanita',
    	'nama_ayah_wanita',
    	'nama_ibu_wanita',
    	'tgl_pernikahan',
    	'lokasi',
    	'keterangan',
        'foto',
    	'status',
    ];

    public function User(){
        return $this->belongsTo('app\User');
    }
}
