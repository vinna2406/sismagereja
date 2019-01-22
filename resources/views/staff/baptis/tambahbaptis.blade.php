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
                            <form action="{{Help::url('baptis')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Baptis</label>
                                        <input type="date" class="form-control" name="tgl_baptis">
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
                                        <label>Anggota</label>
                                        <select class="form-control" name="anggota_id">
                                            @foreach($anggotas as $anggota)
                                                <option value="{{$anggota->id}}">{{$anggota->nama}}</option>
                                            @endforeach
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