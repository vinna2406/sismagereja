@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Pernikahan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tambah Pernikahan</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{Help::url('pernikahan/'.$pernikahans->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">         
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Pria</label>
                                        <input type="text" class="form-control" placeholder="Nama Pria " name="nama_pria" value="{{$pernikahans->nama_pria}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Wanita</label>
                                        <input type="text" class="form-control" placeholder="Nama Wanita" name="nama_wanita" value="{{$pernikahans->nama_wanita}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir Pria</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir Pria" name="tempat_lahir_pria" value="{{$pernikahans->tempat_lahir_pria}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir Wanita</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir Wanita" name="tempat_lahir_wanita" value="{{$pernikahans->tempat_lahir_wanita}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir Pria</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir Pria" name="tgllahir_pria" value="{{$pernikahans->tgllahir_pria}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir Wanita</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir Wanita" name="tgllahir_wanita" value="{{$pernikahans->tgllahir_pria}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah Pria</label>
                                        <input type="text" class="form-control" placeholder="Nama Ayah Pria" name="nama_ayah_pria" value="{{$pernikahans->nama_ayah_pria}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ayah Wanita</label>
                                        <input type="text" class="form-control" placeholder="Nama Ayah Wanita" name="nama_ayah_wanita" value="{{$pernikahans->nama_ayah_wanita}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu Pria</label>
                                        <input type="text" class="form-control" placeholder="Nama Ibu Pria" name="nama_ibu_pria" value="{{$pernikahans->nama_ibu_pria}}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Ibu Wanita</label>
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="aktif">Aktif</option>
                                            <option value="nonaktif">Non Aktif</option>
                                        </select>
                                    </div>
                                </div>                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i>
                                    Submit
                                </button>
                                <a href="{{Help::url('pernikahan')}}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection