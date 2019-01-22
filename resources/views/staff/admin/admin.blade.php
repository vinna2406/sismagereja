@extends('layouts.master')
    @section('css')
    
    @endsection
    @section('content')
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Admin</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="card" style="background-color: #ebf0f6;">
                    <div class="card-body">
                        <h4 class="card-title">Data Admin</h4>
                        <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon I-1 Bali</h6>
                        <div>
                            <a href="{{Help::url('anggota/tambah-admin')}}" class="btn btn-danger">Tambah Admin</a>
                        </div>
                        <div class="table-responsive m-t-40" style="background-color: white;">
                            <table id="myTable" class="table table-bordered table-striped" style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telepon</th>
                                        <th>Status</th>                                     
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach($users as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->jenis_kelamin}}</td>
                                            <td>{{$item->no_telepon}}</td>
                                            <td>
                                                @if($item->status == 'aktif')
                                                    <label class="alert alert-info" style="padding: 1px 20px; font-size: 16px"><i class="fa fa-check"></i> Aktif</label>
                                                @else
                                                    <label class="alert alert-danger" style="padding: 1px 20px; font-size: 16px"><i class="fa fa-exclamation-triangle"></i> Non Aktif</label>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailAdmin{{ $item->id }}">Lihat</button>
                                                <a href="{{Help::url('admin/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailAdmin{{ $item->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Nama Admin : {{$item->nama}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <h4>Nama </h4>
                                                                    <h4>Email</h4>
                                                                    <h4>Tempat Lahir</h4>
                                                                    <h4>Tanggal lahir</h4>
                                                                    <h4>Jenis Kelamin</h4>
                                                                    <h4>Alamat</h4>
                                                                    <h4>No Telepon</h4>
                                                                    <h4>Status</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h4>: {{$item->nama}}</h4>
                                                                <h4>: {{$item->email}}</h4>
                                                                <h4>: {{$item->tempat_lahir}}</h4>
                                                                <h4>: {{$item->tanggal_lahir}}</h4>
                                                                <h4>: {{$item->jenis_kelamin}}</h4>
                                                                <h4>: {{$item->alamat}}</h4>
                                                                <h4>: {{$item->no_telepon}}</h4>
                                                                <h4>: {{$item->status}}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{Help::url('admin')}}" class="btn btn-primary btn-md">Kembali</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
    @endsection
    @section('js')
        <script src="{{asset('backend/js/lib/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/js/lib/datatables/datatables-init.js')}}"></script>
        <script type="text/javascript">
            function showDetail() {
                $('#detailAdmin').modal('show');
            }
        </script>
    @endsection