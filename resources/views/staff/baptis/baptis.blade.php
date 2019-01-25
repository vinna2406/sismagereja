@extends('layouts.master')
    @section('css')

    @endsection
    @section('content')
    <div class="page-wrapper" style="background-color: #f2f4fb;">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Baptis</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Baptis</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="card" style="background-color: #ebf0f6;">
                    <div class="card-body">
                        <h4 class="card-title">Data Baptis</h4>
                        <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon 1-I</h6>
                        <div>
                            <a href="{{Help::url('baptis/tambah-baptis')}}" class="btn btn-primary">Tambah Baptis </a>
                        </div>
                        <div class="table-responsive m-t-40" style="background-color: white;">
                            <table id="myTable" class="table table-bordered table-striped" style="background-color: white;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Baptis</th>
                                        <th>Status</th>                                     
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach($baptis as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->tgl_baptis}}</td>
                                            <td>
                                                @if($item->status == 'aktif')
                                                    <label class="alert alert-normal" style="padding: 1px 20px; font-size: 16px; color: green;"><i class="fa fa-check"></i> Aktif</label>
                                                @else
                                                    <label class="alert alert-normal" style="padding: 1px 20px; font-size: 16px; color: red;"><i class="fa fa-exclamation-triangle"></i> Non Aktif</label>
                                                @endif
                                            </td>
                                            <td>
                                                <<center><button class="btn btn-info" data-toggle="modal" data-target="#detailBaptis{{ $item->id }}">Lihat</button>
                                                <a href="{{Help::url('baptis/'.$item->id.'/edit')}}" class="btn btn-warning ">Edit</a></center>
                                            </td>
                                        </tr>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailBaptis{{$item->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Baptis: {{$item->nama}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <h4>Nama</h4>
                                                                    <h4>Tempat Lahir</h4>
                                                                    <h4>Tanggal Lahir</h4>
                                                                    <h4>Tanggal Baptis</h4>
                                                                    <h4>Pendeta</h4>
                                                                    <h4>Keterangan</h4>
                                                                    <h4>Status</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h4>: {{$item->nama}}</h4>
                                                                <h4>: {{$item->tempat_lahir}}</h4>
                                                                <h4>: {{$item->tanggal_lahir}}</h4>
                                                                <h4>: {{$item->tgl_baptis}}</h4>
                                                                <h4>: {{$item->pendeta}}</h4>
                                                                <h4>: {{$item->keterangan}}</h4>
                                                                <h4>: {{$item->status}}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{Help::url('baptis')}}" class="btn btn-danger">Kembali</a>
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
                $('#detailBaptis').modal('show');
            }
        </script>
    @endsection
    

