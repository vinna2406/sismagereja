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
                <li class="breadcrumb-item active">Edit Kegiatan</li>
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
                                <h4 class="card-title" style="color: black;">Edit Kegiatan</h4>
                                <h6 class="card-subtitle" >Gereja Bethel Indonesia Rayon 1-I</h6>
                            </div>
                            <br>
                            <form action="{{Help::url('kegiatan/'.$kegiatans->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Kegiatan </label>
                                            <input type="text" class="form-control" placeholder="Nama Kegiatan " name="nama_kegiatan" value="{{$kegiatans->nama_kegiatan}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Kegiatan</label>
                                            <select class="form-control" name="jenis_kegiatan" value="{{$kegiatans->jenis_kegiatan}}">
                                                    <option value="Ibadah Umum" {{$kegiatans->jenis_kegiatan == 'Ibadah Umum' ? 'selected' : ''}}>Ibadah Umum</option>
                                                    <option value="Ibadah Youth" {{$kegiatans->jenis_kegiatan == 'Ibadah Youth' ? 'selected' : ''}}>Ibadah Youth</option>
                                                    <option value="Ibadah Anak" {{$kegiatans->jenis_kegiatan == 'Ibadah Anak' ? 'selected' : ''}}>Ibadah Anak</option>
                                                    <option value="COOL Youth" {{$kegiatans->jenis_kegiatan == 'COOL Youth' ? 'selected' : ''}}>COOL Youth</option>
                                                    <option value="COOL Umum" {{$kegiatans->jenis_kegiatan == 'COOL Umum' ? 'selected' : ''}}>COOL Umum</option>
                                                    <option value="Lain-lain" {{$kegiatans->jenis_kegiatan == 'Lain-lain' ? 'selected' : ''}}>Lain-lain</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" value="{{$kegiatans->tanggal}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pemimpin Kegiatan</label>
                                            <input type="text" class="form-control" placeholder="Pemimpin Kegiatan" name="nama_pendeta" value="{{$kegiatans->nama_pendeta}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" class="form-control" placeholder="Lokasi" name="lokasi" value="{{$kegiatans->lokasi}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="{{$kegiatans->keterangan}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select class="form-control" name="status" value="{{$kegiatans->status}}">
                                                    <option value="Aktif" {{$kegiatans->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                                                    <option value="Nonaktif" {{$kegiatans->status == 'Nonaktif' ? 'selected' : ''}}>Non Aktif</option>
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