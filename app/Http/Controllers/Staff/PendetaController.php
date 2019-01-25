<?php

namespace App\Http\Controllers\Staff;

use App\Pendeta;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Help;
use Validator;
use Auth;
use Session;

class PendetaController extends Controller
{
    public function tambahPendeta(){
    	return view('staff.pendeta.tambahpendeta');
    }

    public function storePendeta(Request $r){
    	 $validator = Validator::make($r->all(),[
    	 	'nama' => 'required',
    	 	'tempat_lahir' => 'required',
    	 	'tanggal_lahir' => 'required',
    	 	'jenis_kelamin' => 'required',
    	 	'alamat' => 'required',
    	 	'no_telepon' => 'required',
            'foto' => 'required',
        ]);

    	if (!$validator->fails()) {
    		 $pendeta = Pendeta::create([
	    	 	'nama' => $r->nama,
	    	 	'tempat_lahir' => $r->tempat_lahir,
	    	 	'tanggal_lahir' => $r->tanggal_lahir,
	    	 	'jenis_kelamin' => $r->jenis_kelamin,
	    	 	'alamat' => $r->alamat,
	    	 	'no_telepon' => $r->no_telepon,
	    	 	'status' => 'aktif'
	    	 ]);
	    	 Session::flash('success', 'Pendeta baru berhasil ditambahkan!');
	         return redirect(Help::url('pendeta'));
    	}else{
    		Session::flash('error',$validator->messages()->first());
            return redirect()->back()->withInput();
    	}
    }


    public function indexPendeta(){
    	$pendetas = Pendeta::all();
    	return view('staff.pendeta.pendeta', compact('pendetas'));
    }

    public function showPendeta($id){
    	$pendetas = Pendeta::findOrFail($id);
    	return view('staff.pendeta.pendeta', compact('pendetas'));
    }

    public function editPendeta($id){
    	$pendetas = Pendeta::findOrFail($id);
    	return view('staff.pendeta.edit-pendeta', compact('pendetas'));
    }

    public function updatePendeta(Request $r, $id){
    	$validator = Validator::make($r->all(),[
    	 	'nama' => 'required',
    	 	'tempat_lahir' => 'required',
    	 	'tanggal_lahir' => 'required',
    	 	'jenis_kelamin' => 'required',
    	 	'alamat' => 'required',
    	 	'no_telepon' => 'required',
        ]);

        // dd($r->all());

    	 $pendeta = Pendeta::findOrFail($id)->update([
    	 	'nama' => $r->nama,
    	 	'tempat_lahir' => $r->tempat_lahir,
    	 	'tanggal_lahir' => $r->tanggal_lahir,
    	 	'jenis_kelamin' => $r->jenis_kelamin,
    	 	'alamat' => $r->alamat,
    	 	'no_telepon' => $r->no_telepon,
    	 	'status' => $r->status
    	 ]);

    	 Session::flash('success', 'Pendeta baru berhasil ditambahkan!');
         return redirect(Help::url('pendeta'));
    }
}
