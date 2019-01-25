@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper" style="background-color: #f2f4fb;">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Anggota</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Anggota</a></li>
                <li class="breadcrumb-item active">Edit Anggota</li>
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
                                <h4 class="card-title">Edit Anggota</h4>
                                <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon 1-I</h6>
                                <!-- <div>
                                    <a href="{{Help::url('anggota')}}" class="btn btn-primary">Kembali</a>
                                </div> -->
                            </div>
                            <br>
                            <div class="card">
                            <form action="{{Help::url('anggota/'.$anggotas->id.'/edit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <i><Label>Data Pribadi</Label></i>
                                <div class="row" style="color: black;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama </label>
                                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$anggotas->nama}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" value="{{$anggotas->jenis_kelamin}}">
                                            <option value="Laki-laki" {{$anggotas->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                            <option value="Perempuan" {{$anggotas->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{$anggotas->tempat_lahir}}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{$anggotas->alamat}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{$anggotas->tanggal_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" value="{{$anggotas->no_telepon}}">
                                    </div>
                                </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah" value="{{$anggotas->nama_ayah}}">
                                        </div>    
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" value="{{$anggotas->nama_ibu}}">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <i><label>Data Anggota Keluarga Yang Dapat Dihubungi</label></i>
                                <div class="row" style="color: black;">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Anggota Keluarga</label>
                                            <input type="text" class="form-control" placeholder="Nama Anggota Keluarga" name="nm_anggota_keluarga" value="{{$anggotas->nm_anggota_keluarga}}">
                                        </div>
                                    </div>                                   
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No Telepon Anggota Keluarga</label>
                                            <input type="text" class="form-control" placeholder="No Telepon Anggota Keluarga" name="notlp_keluarga" value="{{$anggotas->notlp_keluarga}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status Anggota Keluarga</label>
                                            <select class="form-control" name="status_keluarga" value="{{$anggotas->status_keluarga}}">
                                                <option value="Ayah" {{$anggotas->status_keluarga == 'Ayah' ? 'selected' : ''}}>Ayah</option>
                                                <option value="Ibu" {{$anggotas->status_keluarga == 'Ibu' ? 'selected' : ''}}>Ibu</option>
                                                <option value="Saudara" {{$anggotas->status_keluarga == 'Saudara' ? 'selected' : ''}}>Saudara</option>
                                                <option value="Lain-lain" {{$anggotas->status_keluarga == 'Lain-lain' ? 'selected' : ''}}>Lain-lain</option>
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
                                                <select class="form-control" name="status" value="{{$anggotas->status}}">
                                                    <option value="Aktif" {{$anggotas->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                                                    <option value="Nonaktif" {{$anggotas->status == 'Nonaktif' ? 'selected' : ''}}>Non Aktif</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <br>
                                            <input type="file" name="foto" value="{{$anggotas->foto}}">
                                        </div>
                                    </div>                                          
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <!-- <i class="fa fa-check"></i> -->
                                    Simpan
                                </button>
                                <label>
                                    <a href="{{Help::url('anggota')}}" class="btn btn-danger">Kembali</a>
                                </label>
                                <!-- <a href="{{Help::url('anggota')}}" class="btn btn-secondary">Kembali</a> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection