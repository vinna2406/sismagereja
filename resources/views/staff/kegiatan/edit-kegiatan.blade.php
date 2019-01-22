@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Kegiatan</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tambah Kegiatan</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{Help::url('kegiatan/'.$kegiatans->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Kegiatan </label>
                                        <input type="text" class="form-control" placeholder="Nama Kegiatan " name="nama_kegiatan" value="{{$kegiatans->nama_kegiatan}}">
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
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" value="{{$kegiatans->tanggal}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kegiatan</label>
                                        <select class="form-control" name="jenis_kegiatan">
                                            <option value="Ibadah Raya">Ibadah Raya</option>
                                            <option value="COOL Youth">COOL Youth</option>
                                            <option value="COOL Umum">COOL Umum</option>
                                            <option value="COOL HABG">Ibadah HABG</option>
                                            <option value="Menara Doa">Menara Doa</option>
                                        </select>
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
                                <a href="{{Help::url('kegiatan')}}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection