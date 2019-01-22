<?php

namespace App\Http\Controllers\staff;

use App\Pendeta;
use App\User;
use App\Pernikahan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Help;
use Validator;
use Auth;
use Session;

class PernikahanController extends Controller
{
    public function tambahPernikahan(){
    	$users = User::where('status', '=', 'aktif')->get();
    	return view('staff.pernikahan.tambahPernikahan', compact('users'));
    }

    public function storePernikahan(Request $r){
    	 $validator = Validator::make($r->all(),[
    	 	'nama_pria' => 'required',
    	 	'nama_wanita' => 'required',
    	 	'tempat_lahir_pria' => 'required',
    	 	'tempat_lahir_wanita' => 'required',
    	 	'tgllahir_pria' => 'required',
    	 	'tgllahir_wanita' => 'required',
    	 	'nama_ayah_pria' => 'required',
    	 	'nama_ayah_wanita' => 'required',
    	 	'nama_ibu_pria' => 'required',
    	 	'nama_ibu_wanita' => 'required',
    	 	'tgl_pernikahan' => 'required',
    	 	'lokasi' => 'required',
    	 	'keterangan' => 'required',
        ]);

    	// dd($r->all());
        if (!$validator->fails()) {
        	 $pernikahan = Pernikahan::create([
        	 	'user_id' => auth()->user()->id,
        	 	'nama_pria' => $r->nama_pria,
        	 	'nama_wanita' => $r->nama_wanita,
        	 	'tempat_lahir_pria' => $r->tempat_lahir_pria,
        	 	'tempat_lahir_wanita' => $r->tempat_lahir_wanita,
        	 	'tgllahir_pria' => $r->tgllahir_pria,
        	 	'tgllahir_wanita' => $r->tgllahir_wanita,
        	 	'nama_ayah_pria' => $r->nama_ayah_pria,
        	 	'nama_ayah_wanita' => $r->nama_ayah_wanita,
        	 	'nama_ibu_pria' => $r->nama_ibu_pria,
        	 	'nama_ibu_wanita' => $r->nama_ibu_wanita,
        	 	'tgl_pernikahan' => $r->tgl_pernikahan,
        	 	'lokasi' => $r->lokasi,
        	 	'keterangan' => $r->keterangan,
        	 	'status' => 'aktif'
        	 ]);
        	 Session::flash('success', 'Pernikahan baru berhasil ditambahkan!');
             return redirect(Help::url('pernikahan'));
        }else{
            Session::flash('error',$validator->messages()->first());
            return redirect()->back()->withInput();
        }
    }

    public function indexPernikahan(){
    	$pernikahans = Pernikahan::all();
    	return view('staff.pernikahan.pernikahan', compact('pernikahans'));
    }   

    public function showPernikahan($id){
    	$pernikahans = Pernikahan::findOrFail($id);
    	return view('staff.pernikahan.pernikahan', compact('pernikahans'));
    }

    public function editPernikahan($id){
    	$pernikahans = Pernikahan::findOrFail($id);
    	return view('staff.pernikahan.edit-pernikahan', compact('pernikahans'));
    }

    public function updatePernikahan(Request $r, $id){
    	$validator = Validator::make($r->all(),[
    	 	'nama_pria' => 'required',
    	 	'nama_wanita' => 'required',
    	 	'tempat_lahir_pria' => 'required',
    	 	'tempat_lahir_wanita' => 'required',
    	 	'tgllahir_pria' => 'required',
    	 	'tgllahir_wanita' => 'required',
    	 	'nama_ayah_pria' => 'required',
    	 	'nama_ayah_wanita' => 'required',
    	 	'nama_ibu_pria' => 'required',
    	 	'nama_ibu_wanita' => 'required',
    	 	'tgll_pernikahan' => 'required',
    	 	'lokasi' => 'required',
    	 	'keterangan' => 'required',
        ]);

    	 $pernikahan = Pernikahan::findOrFail($id)->update([
    	 	'nama_pria' => $r->nama_pria,
    	 	'nama_wanita' => $r->nama_wanita,
    	 	'tempat_lahir_pria' => $r->tempat_lahir_pria,
    	 	'tempat_lahir_wanita' => $r->tempat_lahir_wanita,
    	 	'tgllahir_pria' => $r->tgllahir_pria,
    	 	'tgllahir_wanita' => $r->tgllahir_wanita,
    	 	'nama_ayah_pria' => $r->nama_ayah_pria,
    	 	'nama_ayah_wanita' => $r->nama_ayah_wanita,
    	 	'nama_ibu_pria' => $r->nama_ibu_pria,
    	 	'nama_ibu_wanita' => $r->nama_ibu_wanita,
    	 	'tgl_pernikahan' => $r->tgl_pernikahan,
    	 	'lokasi' => $r->lokasi,
    	 	'keterangan' => $r->keterangan,
    	 	'status' => $r->status
    	 ]);

    	 Session::flash('success', 'Pernikahan baru berhasil ditambahkan!');
         return redirect(Help::url('pernikahan'));
    }
}
