@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper" style="background-color: #f2f4fb;" >
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Anggota</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Anggota</a></li>
                <li class="breadcrumb-item active">Tambah Anggota</li>
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
                             <div class="card-body" >
                                <h4 class="card-title" style="color: black;">Tambah Anggota</h4>
                                <h6 class="card-subtitle" >Gereja Bethel Indonesia Rayon 1-I</h6>
                            </div>
                            <br>
                            <form action="{{Help::url('anggota')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <i><Label>Data Pribadi</Label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama" name="nama" >
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
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type="text" class="form-control" placeholder="No Telepon" name="no_telepon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
                                        </div>    
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <i><label>Data Anggota Keluarga Yang Dapat DiHubungi</label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Anggota Keluarga</label>
                                            <input type="text" class="form-control" placeholder="Nama Anggota Keluarga" name="nm_anggota_keluarga">
                                        </div>
                                    </div>                                          
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No Telepon Anggota Keluarga</label>
                                            <input type="text" class="form-control" placeholder="No Telepon Anggota Keluarga" name="notlp_keluarga">
                                        </div>
                                    </div>                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status Anggota Keluarga</label>
                                            <select class="form-control" name="status_keluarga">
                                                <option value="Ayah">Ayah</option>
                                                <option value="Ibu">Ibu</option>
                                                <option value="Saudara">Saudara</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>                                      
                                </div>
                                <br>
                                <i><label>Status di Gereja Bethel Indonesia Rayon 1-I</label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Nonaktif">Non Aktif</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <br>
                                            <input type="file" name="foto">
                                        </div>
                                    </div>                                          
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <!-- <i class="fa fa-check"</i> -->
                                    Simpan
                                </button>
                                <label>
                                    <a href="{{Help::url('anggota')}}" class="btn btn-danger">Kembali</a>
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