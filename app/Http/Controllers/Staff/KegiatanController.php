<?php

namespace App\Http\Controllers\Staff;

use App\Pendeta;
use App\User;
use App\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Help;
use Validator;
use Auth;
use Session;


class KegiatanController extends Controller
{
 	public function tambahKegiatan(){
        return view('staff.kegiatan.tambahkegiatan');
 		// $pendetas = Pendeta::where('status', '=', 'aktif')->get();
   //  	return view('staff.kegiatan.tambahkegiatan', compact('pendetas'));
    }

    public function storeKegiatan(Request $r){
    	 $validator = Validator::make($r->all(),[
    	 	'nama_kegiatan' => 'required',
	    	'lokasi' => 'required',
	    	'tanggal' => 'required',
	    	'jenis_kegiatan' => 'required',
            'nama_pendeta' => 'required',
	    	'keterangan' => 'required'
        ]);

    	 // dd(auth()->user()->id);

    	 if (!$validator->fails()) {
    	 	$kegiatan = Kegiatan::create([
    	 	'user_id' => auth()->user()->id,
    	 	// 'pendeta_id' => $r->pendeta_id,
    	 	'nama_kegiatan' => $r->nama_kegiatan,
    	 	'lokasi' => $r->lokasi,
    	 	'tanggal' => $r->tanggal,
    	 	'jenis_kegiatan' => $r->jenis_kegiatan,
    	 	'keterangan' => $r->keterangan,
            'nama_pendeta' => $r->nama_pendeta,
    	 	'status' => 'aktif'
    	 ]);
    	 	Session::flash('success', 'Kegiatan baru berhasil ditambahkan!');
         	return redirect(Help::url('kegiatan'));
    	 }else{
    	 	Session::flash('error',$validator->messages()->first());
            return redirect()->back()->withInput();
    	 }

    	 
    }

    public function indexKegiatan(){
    	$kegiatans = Kegiatan::all();
    	return view('staff.kegiatan.kegiatan', compact('kegiatans'));
    }   

    public function showKegiatan($id){
    	$pendetas = Kegiatan::findOrFail($id);
    	return view('staff.kegiatan.kegiatan', compact('kegiatans'));
    }

    public function editKegiatan($id){
    	$kegiatans = Kegiatan::findOrFail($id);
    	return view('staff.kegiatan.edit-kegiatan', compact('kegiatans'));
    }

    public function updateKegiatan(Request $r, $id){
    	$validator = Validator::make($r->all(),[
    	 	'nama_kegiatan' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'jenis_kegiatan' => 'required',
            'nama_pendeta' => 'required',
            'keterangan' => 'required'
        ]);

        // dd($r->all());

    	$kegiatan = kegiatan::findOrFail($id)->update([
    	 	'nama_kegiatan' => $r->nama_kegiatan,
    	 	'lokasi' => $r->lokasi,
    	 	'tanggal' => $r->tanggal,
    	 	'jenis_kegiatan' => $r->jenis_kegiatan,
    	 	'keterangan' => $r->keterangan,
            'nama_pendeta' => $r->nama_pendeta,
    	 	'status' => $r->status,
    	]);

    	 Session::flash('success', 'Kegiatan baru berhasil ditambahkan!');
         return redirect(Help::url('kegiatan'));

    }
}