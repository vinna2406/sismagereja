@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambah Baptis</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tambah Baptis</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{Help::url('baptis/'.$baptis->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Tanggal Baptis " name="nama" value="{{$baptis->nama}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Baptis </label>
                                            <input type="date" class="form-control" placeholder="Tanggal Baptis " name="tanggal_baptis" value="{{$baptis->tgl_baptis}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir </label>
                                            <input type="text" class="form-control" placeholder="Tanggal Baptis " name="tempat_lahir" value="{{$baptis->tempat_lahir}}">
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
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" placeholder="Tanggal Baptis " name="tanggal_lahir" value="{{$baptis->tanggal_lahir}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control" placeholder="keterangan" name="keterangan" value="{{$baptis->keterangan}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                                <select class="form-control" name="status" value="{{$baptis->status}}">
                                                    <option value="Aktif" {{$baptis->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                                                    <option value="Nonaktif" {{$baptis->status == 'Nonaktif' ? 'selected' : ''}}>Non Aktif</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i>
                                    Submit
                                </button>
                                <a href="{{Help::url('baptis')}}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection