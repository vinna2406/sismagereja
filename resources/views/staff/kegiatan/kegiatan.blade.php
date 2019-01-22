@extends('layouts.master')
    @section('css')

    @endsection
    @section('content')
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Kegiatan</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Kegiatan</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kegiatan</h4>
                        <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon 1-I Bali</h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Kegiatan</th> 
                                        <th>Status</th>                                    
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach($kegiatans as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->nama_kegiatan}}</td>
                                            <td>{{$item->lokasi}}</td>
                                            <td>{{$item->tanggal}}</td>
                                            <td>{{$item->jenis_kegiatan}}</td>
                                            <td>
                                                @if($item->status == 'aktif')
                                                    <label class="alert alert-info" style="padding: 1px 20px; font-size: 16px"><i class="fa fa-check"></i> Aktif</label>
                                                @else
                                                    <label class="alert alert-danger" style="padding: 1px 20px; font-size: 16px"><i class="fa fa-exclamation-triangle"></i> Non Aktif</label>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailKegiatan{{ $item->id }}">Lihat</button>
                                                <a href="{{Help::url('kegiatan/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailKegiatan{{ $item->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Nama Kegiatan : {{$item->nama_kegiatan}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <h4>Nama Kegiatan</h4>
                                                                    <h4>Lokasi</h4>
                                                                    <h4>Tanggal</h4>
                                                                    <h4>Jenis Kegiatan</h4>
                                                                    <h4>Keterangan</h4>
                                                                    <h4>Status</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h4>: {{$item->nama_kegiatan}}</h4>
                                                                <h4>: {{$item->lokasi}}</h4>
                                                                <h4>: {{$item->tanggal}}</h4>
                                                                <h4>: {{$item->jenis_kegiatan}}
                                                                <h4>: {{$item->keterangan}}</h4>
                                                                <h4>: {{$item->status}}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{Help::url('kegiatan')}}" class="btn btn-primary btn-md">Kembali</a>
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
                $('#detailKegiatan').modal('show');
            }
        </script>
    @endsection

