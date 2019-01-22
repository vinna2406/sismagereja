@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Pendeta</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tambah Pendeta</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{Help::url('pendeta/'.$pendetas->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama </label>
                                        <input type="text" class="form-control" placeholder="Nama " name="nama" value="{{$pendetas->nama}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{$pendetas->tempat_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{$pendetas->tanggal_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{$pendetas->alamat}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" value="{{$pendetas->no_telepon}}">
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
                                <a href="{{Help::url('pendeta')}}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection