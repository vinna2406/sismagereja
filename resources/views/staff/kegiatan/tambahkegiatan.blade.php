@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper" style="background-color: #f2f4fb;" >
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Kegiatan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kegiatan</a></li>
                <li class="breadcrumb-item active">Tambah Kegiatan</li>
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
                                <h4 class="card-title" style="color: black;">Tambah Kegiatan</h4>
                                <h6 class="card-subtitle" >Gereja Bethel Indonesia Rayon 1-I</h6>
                            </div>
                            <br>
                            <form action="{{Help::url('kegiatan')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Kegiatan</label>
                                            <input type="text" class="form-control" placeholder="Nama Kegiatan" name="nama_kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Kegiatan</label>
                                            <select class="form-control" name="jenis_kegiatan">
                                                <option value="Ibadah Raya">Ibadah Raya</option>
                                                <option value="Ibadah Youth">Ibadah Youth</option>
                                                <option value="Ibadah Anak">Ibadah Anak</option>
                                                <option value="COOL Youth">COOL Youth</option>
                                                <option value="COOL Umum">COOL Umum</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" class="form-control" placeholder="Tanggal" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pemimpin Kegiatan</label>
                                            <input type="text" class="form-control" placeholder="Pemimpin Kegiatan" name="nama_pendeta">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" class="form-control" placeholder="Lokasi" name="lokasi">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
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
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <!-- <i class="fa fa-check"</i> -->
                                    Simpan
                                </button>
                                <label>
                                    <a href="{{Help::url('kegiatan')}}" class="btn btn-danger">Kembali</a>
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