@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper" style="background-color: #f2f4fb;">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pernikahan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pernikahan</a></li>
                <li class="breadcrumb-item active">Edit Pernikahan</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Information !</h4>
                      {{Session::get('success')}}
                  </div>
                @elseif (Session::has('error'))
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Information !</h4>
                      {{Session::get('error')}}
                  </div>
                @endif
                <div class="card" style="background-color: #ebf0f6;">
                    <div class="card-body">
                        <div class="basic-form">
                             <div class="card-body">
                                <h4 class="card-title">Edit Pernikahan</h4>
                                <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon 1-I</h6>
                            </div>
                            <br>
                            <div class="card">
                            <form action="{{Help::url('pernikahan/'.$pernikahans->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="row" style="color: black;"> 
                                    <div class="col-lg-6">
                                        <label><i>Mempelai Pria</i></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label><i>Mempelai Pria</i></label>
                                    </div>      
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama Pria " name="nama_pria" value="{{$pernikahans->nama_pria}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama Wanita" name="nama_wanita" value="{{$pernikahans->nama_wanita}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" placeholder="Tempat Lahir Pria" name="tempat_lahir_pria" value="{{$pernikahans->tempat_lahir_pria}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" placeholder="Tempat Lahir Wanita" name="tempat_lahir_wanita" value="{{$pernikahans->tempat_lahir_wanita}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Pria" name="tgllahir_pria" value="{{$pernikahans->tgllahir_pria}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Wanita" name="tgllahir_wanita" value="{{$pernikahans->tgllahir_pria}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah Pria" name="nama_ayah_pria" value="{{$pernikahans->nama_ayah_pria}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah Wanita" name="nama_ayah_wanita" value="{{$pernikahans->nama_ayah_wanita}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu Pria" name="nama_ibu_pria" value="{{$pernikahans->nama_ibu_pria}}">
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu Wanita" name="nama_ibu_wanita" value="{{$pernikahans->nama_ayah_wanita}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Pernikahan</label>
                                            <input type="date" class="form-control" name="tgl_pernikahan" value="{{$pernikahans->tgl_pernikahan}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" class="form-control" placeholder="lokasi" name="lokasi" value="{{$pernikahans->lokasi}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="{{$pernikahans->keterangan}}">
                                        </div>
                                    </div>
                                </div>
                                <i><label>Status di Gereja Bethel Indonesia Rayon 1-I</label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select class="form-control" name="status" value="{{$pernikahans->status}}">
                                                    <option value="Aktif" {{$pernikahans->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                                                    <option value="Nonaktif" {{$pernikahans->status == 'Nonaktif' ? 'selected' : ''}}>Non Aktif</option>
                                                </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <br>
                                            <input type="file" name="foto" value="{{$pernikahans->foto}}">
                                        </div>
                                    </div>    
                                </div>                                
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <label>
                                    <a href="{{Help::url('pernikahan')}}" class="btn btn-danger">Kembali</a>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection