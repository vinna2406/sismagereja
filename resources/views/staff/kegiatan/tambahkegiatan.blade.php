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
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{Help::url('kegiatan')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <input type="text" class="form-control" placeholder="Nama Kegiatan" name="nama_kegiatan">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Pendeta</label>
                                        <select class="form-control" name="pendeta_id">
                                            @foreach($pendetas as $pendeta)
                                                <option value="{{$pendeta->id}}">{{$pendeta->nama}}</option>
                                            @endforeach
                                        </select>
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
                                        <label>Tanggal</label>
                                        <input type="date" class="form-control" placeholder="Tanggal" name="tanggal">
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
                                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i>
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection