<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = [
    	'user_id',
    	'nama',
    	'tempat_lahir',
    	'tanggal_lahir',
    	'jenis_kelamin',
    	'alamat',
    	'no_telepon',
    	'nama_ayah',
    	'nama_ibu',
        'nm_anggota_keluarga',
    	'notlp_keluarga',
    	'status_keluarga',
        // 'status_baptis',
    	'foto',
    	'status',
    ];

    public function User(){
    	return $this->belongsTo('App\User');
    }

    public function Baptis(){
        return $this->belongsTo('App\Baptis');
    }
}
