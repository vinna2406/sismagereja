@extends('layouts.master')

@section('css')

@endsection

@section('content')

<div class="page-wrapper" style="background-color: #f2f4fb;" >
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Admin</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">Tambah Admin</li>
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
                                <h4 class="card-title" style="color: black;">Tambah Admin</h4>
                                <h6 class="card-subtitle" >Gereja Bethel Indonesia Rayon 1-I</h6>
                            </div>
                            <br>
                            <form action="{{Help::url('admin')}}" method="post" enctype="multipart/form-data">
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
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type="text" class="form-control" placeholder="No Telepon" name="no_telepon">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
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
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input type="password" class="form-control" placeholder="Ulangi Password" name="confirm_password" id="confirm_password">
                                            <span id="message"></span>
                                        </div>
                                    </div>
                                </div>
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
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    <!-- <i class="fa fa-check"</i> -->
                                    Simpan
                                </button>
                                <label>
                                    <a href="{{Help::url('admin')}}" class="btn btn-danger">Kembali</a>
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

@section('js')
    <script type="text/javascript">
        $('#confirm_password').on('keyup', function(){
            if($(this).val() == $('#password').val()){
                $('#message').html('Password sama').css('color', 'green');
            }else{
                $('#message').html('Password tidak sama').css('color', 'red');
            }
        })
    </script>
@endsection