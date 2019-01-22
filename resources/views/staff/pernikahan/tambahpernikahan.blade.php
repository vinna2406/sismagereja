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
                            <form action="{{Help::url('pernikahan')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Pria</label>
                                            <input type="text" class="form-control" placeholder="Nama Pria " name="nama_pria">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Wanita</label>
                                            <input type="text" class="form-control" placeholder="Nama Wanita" name="nama_wanita">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir Pria</label>
                                            <input type="text" class="form-control" placeholder="Tempat Lahir Pria" name="tempat_lahir_pria">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir Wanita</label>
                                            <input type="text" class="form-control" placeholder="Tempat Lahir Wanita" name="tempat_lahir_wanita">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir Pria</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Pria" name="tgllahir_pria">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir Wanita</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Wanita" name="tgllahir_wanita">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah Pria</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah Pria" name="nama_ayah_pria">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah Wanita</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah Wanita" name="nama_ayah_wanita">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu Pria</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu Pria" name="nama_ibu_pria">
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu Wanita</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu Wanita" name="nama_ibu_wanita">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Pernikahan</label>
                                            <input type="date" class="form-control" name="tgl_pernikahan">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" class="form-control" placeholder="lokasi" name="lokasi">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                                        </div>
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