<?php

namespace App\Http\Controllers\Staff;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Help;
use Validator;
use Auth;
use Session;


class AdminController extends Controller
{
    public function tambahAdmin(){
    	return view('staff.admin.tambahadmin');
    }

    public function storeAdmin(Request $r){
    	 $validator = Validator::make($r->all(),[
    	 	'nama' => 'required',
    	 	'email' => 'required',
    	 	'tempat_lahir' => 'required',
    	 	'tanggal_lahir' => 'required',
    	 	'jenis_kelamin' => 'required',
    	 	'alamat' => 'required',
    	 	'no_telepon' => 'required',
            'password' => 'required'
        ]);

   		if (!$validator->fails()){
            $admin = User::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                'role'=> 'staff',
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'no_telepon' => $r->no_telepon,
                'password' => bcrypt($r->password),
                'status' => 'aktif'
             ]);
             Session::flash('success', 'Admin baru berhasil ditambahkan!');
             return redirect(Help::url('admin'));
        }else{
            Session::flash('error',$validator->messages()->first());
                return redirect()->back()->withInput();
        }
    }

    public function indexAdmin(){
        $users = User::all();
        return view('staff.admin.admin', compact('users'));
    }

    public function showAdmin($id){
        $users = User::findOrFail($id);
        return view('staff.admin.admin', compact('users'));
    }

    public function editAdmin($id){
        $users = User::findOrFail($id);
        return view('staff.admin.edit-admin', compact('users'));
    }

    public function updateAdmin(Request $r, $id){
        $validator = Validator::make($r->all(),[
            'nama' => 'required',
            'email' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);

        // dd($r->all());

         if ($r->password != null) {
             $user = User::findOrFail($id)->update([
                'nama' => $r->nama,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'no_telepon' => $r->no_telepon,
                'password' => bcrypt($r->password),
                'status' => $r->status
             ]);
         }else{
            $user = User::findOrFail($id)->update([
                'nama' => $r->nama,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'no_telepon' => $r->no_telepon,
                'status' => $r->status
             ]);
         }

         Session::flash('success', 'Staff baru berhasil ditambahkan!');
         return redirect(Help::url('admin'));

    }
}



    
