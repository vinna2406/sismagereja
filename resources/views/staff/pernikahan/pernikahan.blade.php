@extends('layouts.master')
    @section('css')

    @endsection
    @section('content')
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Pernikahan</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Pernikahan</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <!-- <div class="row"> -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pernikahan</h4>
                        <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon I-1 Bali</h6>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pria</th>
                                        <th>Nama Wanita</th>
                                        <th>Tanggal Pernikahan</th>
                                        <th>Status</th>                                     
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @foreach($pernikahans as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->nama_pria}}</td>
                                            <td>{{$item->nama_wanita}}</td>
                                            <td>{{$item->tgl_pernikahan}}</td>
                                            <td>
                                                @if($item->status == 'aktif')
                                                    <label class="alert alert-info" style="padding: 1px 20px; font-size: 16px"><i class="fa fa-check"></i> Aktif</label>
                                                @else
                                                    <label class="alert alert-danger" style="padding: 1px 20px; font-size: 16px"><i class="fa fa-exclamation-triangle"></i> Non Aktif</label>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailPernikahan{{ $item->id }}">Lihat</button>
                                                <a href="{{Help::url('pernikahan/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailPernikahan{{ $item->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Nama Pendeta : {{$item->nama}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <h4>Nama Pria</h4>
                                                                    <h4>Nama Wanita</h4>
                                                                    <h4>
                                                                        Tempat Lahir Pria
                                                                    </h4>
                                                                    <h4>
                                                                        Tempat Lahir Wanita
                                                                    </h4>
                                                                    <h4>
                                                                        Tanggal Lahir Pria
                                                                    </h4>
                                                                    <h4>
                                                                        Tanggal Lahir Wanita
                                                                    </h4>
                                                                    <h4>Nama Ayah Pria</h4>
                                                                    <h4>Nama Ayah Wanita</h4>
                                                                    <h4>Nama Ibu Pria</h4>
                                                                    <h4>Nama Ibu Wanita</h4> 
                                                                    <h4>
                                                                        Tanggal Pernikahan
                                                                    </h4>
                                                                    <h4>Lokasi</h4>
                                                                    <h4>Keterangan</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h4>: {{$item->nama_pria}}</h4>
                                                                <h4>: {{$item->nama_wanita}}</h4>
                                                                <h4>: 
                                                                    {{$item->tempat_lahir_pria}}<
                                                                    <h4>
                                                                <h4>:
                                                                    {{$item->tempat_lahir_wanita}}</h4>
                                                                <h4>: 
                                                                    {{$item->tgllahir_pria}}</h4>
                                                                <h4>: 
                                                                    {{$item->tgllahir_wanita}}</h4>
                                                                <h4>: 
                                                                    {{$item->nama_ayah_pria}}</h4>
                                                                <h4>: 
                                                                    {{$item->nama_ayah_wanita}}</h4>
                                                                <h4>: 
                                                                    {{$item->nama_ibu_pria}}</h4>
                                                                <h4>: 
                                                                    {{$item->nama_ibu_pria}}</h4>
                                                                <h4>: 
                                                                    {{$item->tgl_pernikahan}}</h4>
                                                                <h4>: {{$item->lokasi}}</h4>
                                                                <h4>: {{$item->keterangan}}</h4>
                                                                <h4>: {{$item->status}}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{Help::url('pernikahan')}}" class="btn btn-primary btn-md">Kembali</a>
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
                $('#detailPernikahan').modal('show');
            }
        </script>
    @endsection
