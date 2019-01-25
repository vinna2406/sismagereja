@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper" style="background-color: #f2f4fb;">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pendeta</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pendeta</a></li>
                <li class="breadcrumb-item active">Edit Pendeta</li>
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
                                <h4 class="card-title">Edit Pendeta</h4>
                                <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon 1-I</h6>
                            </div>
                            <br>
                            <div class="card">
                            <form action="{{Help::url('pendeta/'.$pendetas->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <i><Label>Data Pribadi</Label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama </label>
                                            <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$pendetas->nama}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" value="{{$pendetas->jenis_kelamin}}">
                                                <option value="Laki-laki" {{$pendetas->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                                <option value="Perempuan" {{$pendetas->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                            </select>
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
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{$pendetas->alamat}}">
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
                                            <label>No Telepon</label>
                                            <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" value="{{$pendetas->no_telepon}}">
                                        </div>
                                    </div>
                                </div>
                                <i><label>Status di Gereja Bethel Indonesia Rayon 1-I</label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select class="form-control" name="status" value="{{$pendetas->status}}">
                                                    <option value="Aktif" {{$pendetas->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                                                    <option value="Nonaktif" {{$pendetas->status == 'Nonaktif' ? 'selected' : ''}}>Non Aktif</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <br>
                                            <input type="file" name="foto" value="{{$pendetas->foto}}">
                                        </div>
                                    </div>                                          
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <label>
                                    <a href="{{Help::url('pendeta')}}" class="btn btn-danger">Kembali</a>
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