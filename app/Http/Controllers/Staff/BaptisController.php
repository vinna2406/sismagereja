<?php

namespace App\Http\Controllers\Staff;
use App\Pendeta;
use App\User;
use App\Baptis;
use App\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Help;
use Validator;
use Auth;
use Session;

class BaptisController extends Controller
{
    public function tambahBaptis(){
    	$pendetas = Pendeta::where('status', '=', 'aktif')->get();
    	// $anggotas = Anggota::where('status', '=', 'aktif')->get();
    	// return view('staff.baptis.tambahBaptis', compact('pendetas','anggotas'));
        return view('staff.baptis.tambahBaptis', compact('pendetas'));
    }

    public function createBaptis($id){
        // $anggotas = Anggota::where('id','=', $id)->first();
        $pendetas = Pendeta::where('status', '=', 'aktif')->get();
        // return view('staff.baptis.tambah-baptis-anggota', compact('anggotas', 'pendetas'));
        return view('staff.baptis.tambahBaptis', compact('pendetas'));
    }

    public function storeBaptis(Request $r){
    	 $validator = Validator::make($r->all(),[
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'alamat' => 'required',
            // 'no_telepon' => 'required',
    	 	'tgl_baptis' => 'required',
	    	'keterangan' => 'required'
        ]);

         // dd($r->all());

        
         if (!$validator->fails()) {
             // $anggotas = Anggota::where('nama', '=', $r->anggota_id)->first();
             
        	 $baptis = Baptis::create([
        	 	'user_id' => auth()->user()->id,
        	 	'pendeta_id' => $r->pendeta_id,
        	 	// 'anggota_id' => $anggotas->id,
                'nama' => $r->nama,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                // 'jenis_kelamin' => $r->jenis_kelamin,
                // 'alamat' => $r->alamat,
                // 'no_telepon' => $r->no_telepon,
        	 	'tgl_baptis' => $r->tgl_baptis,
        	 	'keterangan' => $r->keterangan,
        	 	'status' => 'aktif'
        	 ]);

             // $anggota = $anggotas->id;
             // $members = Anggota::findOrFail($anggota)->update([
             //    'status_baptis' => 'ada'
             // ]);

        	 Session::flash('success', 'Baptis baru berhasil ditambahkan!');
             return redirect(Help::url('baptis'));
        }else{
            Session::flash('error',$validator->messages()->first());
                return redirect()->back()->withInput();
        }
    }

    public function indexBaptis(){
    	$baptis = baptis::all();
    	return view('staff.baptis.baptis', compact('baptis'));
    }   

    public function showBaptis($id){
    	$baptiss = Baptis::findOrFail($id);
    	return view('staff.baptis.baptis', compact('baptis'));
    }

    public function editBaptis($id){
    	$baptis = Baptis::findOrFail($id);
    	return view('staff.baptis.edit-baptis', compact('baptis'));
    }

    public function updateBaptis(Request $r, $id){
    	$validator = Validator::make($r->all(),[
    	 	'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'alamat' => 'required',
            // 'no_telepon' => 'required',
            'tgl_baptis' => 'required',
	    	'keterangan' => 'required'
        ]);

        // dd($r->all());

    	$baptis = baptis::findOrFail($id)->update([
            'nama' => $r->nama,
            'tempat_lahir' => $r->tempat_lahir,
            'tanggal_lahir' => $r->tanggal_lahir,
            // 'jenis_kelamin' => $r->jenis_kelamin,
            // 'alamat' => $r->alamat,
            // 'no_telepon' => $r->no_telepon,
    	 	'tgl_baptis' => $r->tgl_baptis,
	    	'keterangan' => $r->keterangan,
    	 	'status' => 'aktif'
    	]);

    	 Session::flash('success', 'Baptis baru berhasil ditambahkan!');
         return redirect(Help::url('baptis'));
    }
}
