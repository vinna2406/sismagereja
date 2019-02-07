@extends('layouts.master')
	@section('css')

	@endsection
	@section('content')
	<div class="page-wrapper">
		<div class="row page-titles">
	        <div class="col-md-5 align-self-center">
	            <h3 class="text-primary">Anggota</h3> </div>
	        <div class="col-md-7 align-self-center">
	            <ol class="breadcrumb">
	                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
	                <li class="breadcrumb-item active">Anggota</li>
	            </ol>
	        </div>
	    </div>
		<div class="container-fluid" >
			<!-- <div class="row"> -->
				<div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Anggota</h4>
                        <h6 class="card-subtitle">Gereja Bethel Indonesia Rayon 1-I</h6>
                        <div>
                    		<a href="{{Help::url('anggota/tambah-anggota')}}" class="btn btn-primary">Tambah Anggota </a>
                    		<a href="{{Help::url('anggota/cetak-anggota')}}" class="btn btn-danger">Cetak Anggota </a>
                        </div>
                        <div class="table-responsive m-t-40" style="background-color: white;">
                            <table id="myTable" class="table table-bordered table-striped" style="background-color: white;">
                                <thead>
                                    <tr style="text-align:center;">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Ibu</th>
                                        <th>Status</th>
                                        <!-- <th>Foto</th>
                                        <th>Status</th>
                                        <th>Baptis</th>
                                        <th>Staff</th> -->
                                        <th style="text-align:center;" >Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@php
                                		$no=1;
                                	@endphp
                                    @foreach($anggotas as $item)
                                   	@php
                                   		$tgl = $item->tanggal_lahir;
                                   		$tanggal_lahir = date('d/m/Y', strtotime($tgl));
                                   	@endphp
                                    	<tr>
                                    		<td>{{$no++}}</td>
                                    		<td>{{$item->nama}}</td>
                                    		<td>{{$tanggal_lahir}}</td>
                                    		<td>{{$item->jenis_kelamin}}</td>
                                    		<td>{{$item->nama_ibu}}</td>
                                    		<!-- <td>
                                    			<button class="btn btn-primary btn-lg" onclick="lihatFoto('{{$item->foto}}')">Lihat Foto</button>
                                    		</td> -->
                                    		<td>
                                    			@if($item->status == 'aktif')
                                    				<label class="alert alert-normal" style="padding: 1px 20px; font-size: 16px; color: green;"><i class="fa fa-check"></i> Aktif</label>
                                    			@else
                                    				<label class="alert alert-normal" style="padding: 1px 20px; font-size: 16px; color: red;"><i class="fa fa-exclamation-triangle"></i> Non Aktif</label>
                                    			@endif
                                    		</td>
                                    		<!-- <td>
                                			<center>
                                				@if($item->status_baptis == 'tidak_ada')
                                					<a href="{{Help::url('baptis/tambah-baptis/'.$item->id.'/proses')}}" class="btn btn-warning btn-sm">baptis</a>
                                				@else
                                					<span class="alert alert-info" style="padding: 7px 15px">
                                						<i class="fa fa-check"></i>
                                						Baptis
                                					</span>
                                				@endif
                                			</center>
                                    		</td>
                                    		<td>
                                    			{{$item->user->nama}}
                                    		</td> -->
                                    		<td>
                                    			<center><button class="btn btn-info" data-toggle="modal" data-target="#detailAnggota{{ $item->id }}">Lihat</button>
                                    			<a href="{{Help::url('anggota/'.$item->id.'/edit')}}" class="btn btn-warning">Edit</a></center>
                                    		</td>
                                    	</tr>
                                    	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="detailAnggota{{ $item->id }}">
					                        <div class="modal-dialog modal-lg">
					                            <div class="modal-content">
					                                <div class="modal-header">
					                                    <h4 class="modal-title" id="myModalLabel">Nama Anggota : {{$item->nama}}</h4>
					                                </div>
					                                <div class="modal-body">
					                                    <div class="row">
					                                    	<div class="col-md-4">
					                                    		<!-- <div class="form-group"> -->
						                                    		<h4>Nama </h4>
						                                    		<h4>Tempat Lahir</h4>
						                                    		<h4>Tanggal_lahir</h4>
						                                    		<h4>Jenis Kelamin</h4>
						                                    		<h4>Alamat</h4>
						                                    		<h4>No Telepon</h4>
						                                    		<h4>Nama Ayah</h4>
						                                    		<h4>Nama Ibu</h4>
						                                    		<h4>No Telepon Keluarga</h4>
						                                    		<h4>Status Keluarga</h4>
						                                    <!-- 		<h4>Foto</h4> -->
						                                    		<h4>Status</h4>
						                                    	<!-- </div> -->
					                                    	</div>
					                                    	<div class="col-md-5">
					                                    		<h4>: {{$item->nama}}</h4>
					                                    		<h4>: {{$item->tempat_lahir}}</h4>
					                                    		<h4>: {{$item->tanggal_lahir}}</h4>
					                                    		<h4>: {{$item->jenis_kelamin}}</h4>
					                                    		<h4>: {{$item->alamat}}</h4>
					                                    		<h4>: {{$item->no_telepon}}</h4>
					                                    		<h4>: {{$item->nama_ayah}}</h4>
					                                    		<h4>: {{$item->nama_ibu}}</h4>
					                                    		<h4>: {{$item->notlp_keluarga}}</h4>
					                                    		<h4>: {{$item->status_keluarga}}</h4>
					                                    	<!-- 	<h4>: {{$item->foto}}</h4> -->
					                                    		<h4>: {{$item->status}}</h4>
					                                    	</div>	
					                                    	<div class="col-md-3" style="float: right;">
						                                    	<img src="{{url('images/anggota/'.$item->foto)}}" width="150px">
						                                    </div>
					                                    </div>
					                                </div> 
					                                <div class="modal-footer">
					                                    <a href="{{Help::url('anggota')}}" class="btn btn-danger">Kembali</a>
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
	    <script src="{{asset('backend/js/bootbox.min.js')}}"></script>
	    <script type="text/javascript">
	    	function lihatFoto(foto){
	    		bootbox.dialog({
	    			message: '<img src="{{asset('images/anggota/')}}/'+foto+'" class="img-responsive"><a href="{{Help::url('anggota')}}" class="btn btn-secondary btn-block pull-right" style="margin-top: 5px">Back</a>',
	    			size: 'small',
	    			closeButton: false, 
	    		});
	    	}

	    	    function showDetail() {
			        $('#detailAnggota').modal('show');
			    }
	    </script>
	@endsection