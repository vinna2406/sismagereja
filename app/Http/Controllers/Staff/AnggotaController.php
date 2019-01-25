<?php

namespace App\Http\Controllers\Staff;

use App\User;
use App\Anggota;
use App\Baptis;
use Image;
use Help;
use Validator;
use DB;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    public function tambahAnggota(){
    	return view('staff.anggota.create');
    }
    public function storeAnggota(Request $r){
    	 $validator = Validator::make($r->all(),[
    	 	'nama' => 'required',
    	 	'tempat_lahir' => 'required',
    	 	'tanggal_lahir' => 'required',
    	 	'jenis_kelamin' => 'required',
    	 	'alamat' => 'required',
    	 	'no_telepon' => 'required',
    	 	'nama_ayah' => 'required',
    	 	'nama_ibu' => 'required',
            'nm_anggota_keluarga' => 'required',
    	 	'notlp_keluarga' => 'required',
    	 	'status_keluarga' => 'required',
    	 	'foto' => 'required',
        ]);
    	if (!$validator->fails()) {
    		$gambar = $r->file('foto');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            if ($r->file('foto')->isValid()) {
                Image::make($gambar)->resize(300, 400)->save(public_path('/images/anggota/'.$filename));
                $file = Anggota::create([
                    'user_id' => Auth::id(),
                    'nama' => $r->nama,
                    'tempat_lahir' => $r->tempat_lahir,
                    'tanggal_lahir' => $r->tanggal_lahir,
                    'jenis_kelamin' => $r->jenis_kelamin,
                    'alamat' => $r->alamat,
                    'no_telepon' => $r->no_telepon,
                    'nama_ayah' => $r->nama_ayah,
                    'nama_ibu' => $r->nama_ibu,
                    'nm_anggota_keluarga' => $r->nm_anggota_keluarga,
                    'notlp_keluarga' => $r->notlp_keluarga,
                    'status_keluarga' => $r->status_keluarga,
                    'foto' => $filename,
                    'status' => 'aktif'
                ]);
                Session::flash('success', 'Anggota berhasil ditambahkan!');
                return redirect(Help::url('anggota/tambah-anggota'));
            }
    	}
    	else{
    		Session::flash('error',$validator->messages()->first());
            return redirect()->back()->withInput();
    	}
    }

    public function indexAnggota(){
    	$anggotas = Anggota::all();
        // $status_ada = 'Ada bro';
        // $status_tidak = 'Nggak ada bro';
        // foreach ($anggotas as $key) {
        //     if($key->status_baptis == 'ada'){
        //         dd($status_ada);
        //     }else{
        //         dd($status_tidak);
        //     }
        // }
    	return view('staff.anggota.index', compact('anggotas'));
    }

    public function showAnggota($id){
        $anggotas = Anggota::findOrFail($id);
        return view('staff.anggota.index', compact('anggotas'));
    }

    public function editAnggota($id){
        $anggotas = Anggota::findOrFail($id);
        return view('staff.anggota.edit-anggota', compact('anggotas'));
    }

    public function updateAnggota(Request $r, $id){
        $validator = Validator::make($r->all(),[
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nm_anggota_keluarga' => 'required',
            'notlp_keluarga' => 'required',
            'status_keluarga' => 'required',
            'foto' => 'required',
            'status' => 'required',
        ]);

        // dd($r->all());
        if($r->file('foto')){
            $gambar = $r->file('foto');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            if ($r->file('foto')->isValid()) {
            Image::make($gambar)->resize(300, 400)->save(public_path('/images/anggota/'.$filename));
             $anggota = Anggota::findOrFail($id)->update([
                'nama' => $r->nama,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'no_telepon' => $r->no_telepon,
                'nama_ayah' => $r->nama_ayah,
                'nama_ibu' => $r->nama_ibu,
                'nm_anggota_keluarga' => $r->nm_anggota_keluarga,
                'notlp_keluarga' => $r->notlp_keluarga,
                'status_keluarga' => $r->status_keluarga,
                'foto' => $filename,
                'status' => $r->status
             ]);
             Session::flash('success', 'Data Anggota baru berhasil ditambahkan!');
             return redirect(Help::url('anggota'));
            }
        }else{
             $anggota = Anggota::findOrFail($id)->update([
                'nama' => $r->nama,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'no_telepon' => $r->no_telepon,
                'nama_ayah' => $r->nama_ayah,
                'nama_ibu' => $r->nama_ibu,
                'nm_anggota_keluarga' => $r->nm_anggota_keluarga,
                'notlp_keluarga' => $r->notlp_keluarga,
                'status_keluarga' => $r->status_keluarga,
                'status' => $r->status
             ]);

             Session::flash('success', 'Anggota baru berhasil ditambahkan!');
             return redirect(Help::url('anggota'));
        }
    }
}
