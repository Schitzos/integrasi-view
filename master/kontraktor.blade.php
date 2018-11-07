@extends('layouts.master')
@section('title','Kontraktor')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Kontraktor
<small>Daftar Kontraktor</small>
</h1>
</div>
</div>
</div>
<div class="page-content">
<div class="container">
<div class="page-content-inner">
<div class="mt-content-body">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="portlet light">
<div class="portlet-title">
<div class="caption caption-md">
<button class="btn blue-madison" onclick="TambahKontraktor();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Kontraktor</button>
</div>
<div class="actions">
<div class="btn-group">

</div>
</div>
</div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover order-column" id="sample_1">
<thead>
<tr>                                                            
<th style="text-align:center;">No</th>
<th style="text-align:center;">Nama</th>
<th style="text-align:center;">Telp</th>
<th style="text-align:center;">Alamat</th>
<th style="text-align:center;">Direktur</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_kontraktor}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->telp_kontraktor}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->alamat_kontraktor}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->direktur_kontraktor}}</td>
<td  style="text-align:center;vertical-align:middle;">
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Kontraktor" onclick="UbahKontraktor({{$dt->id_kontraktor}});" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/maskon/delete/' . $dt->id_kontraktor) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Kontraktor" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>
</td>
</tr>
<?php $i++;?>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="TambahKontraktor" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog modal-full">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 class="modal-title"  align="center">Tambah Kontraktor</h3>
			</div>
			<div class="modal-body">
				<form action="{{ url('maskon') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Nama_Kontraktor" class="control-label col-md-4">Nama Kontraktor</label>
									<div class="col-md-8">
										<input type="text" id="Nama_Kontraktor" name="Nama_Kontraktor" class="form-control" value="{{ old('Nama_Kontraktor') }}">
									</div>
								</div>
							</div>
								<div class="col-md-6">
								<div class="form-group">
								<label for="Telp_Kontraktor" class="control-label col-md-4">Nomor Telepon</label>
								<div class="col-md-8">
								<input type="text" id="Telp_Kontraktor" name="Telp_Kontraktor" class="form-control" value="{{ old('Telp_Kontraktor') }}">
								</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Alamat_Kontraktor" class="control-label col-md-4">Alamat</label>
									<div class="col-md-8">
										<input type="text" id="Alamat_Kontraktor" name="Alamat_Kontraktor" class="form-control" value="{{ old('Alamat_Kontraktor') }}">
									</div>
								</div>
							</div>
						</div>
						<h5 align="center">Detail</h5>
						<hr/>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="PM" class="control-label col-md-3">PM</label>
									<div class="col-md-9">
										<input type="text" id="PM" name="PM" class="form-control" value="{{ old('PM') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_PM" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_PM" name="SKA_PM" class="form-control" value="{{ old('SKA_PM') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_PM" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_PM" name="Telp_PM" class="form-control" value="{{ old('Telp_PM') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_PM" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_PM" name="Keterangan_PM" class="form-control" value="{{ old('Keterangan_PM') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="SM" class="control-label col-md-3">SM</label>
									<div class="col-md-9">
										<input type="text" id="SM" name="SM" class="form-control" value="{{ old('SM') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_SM" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_SM" name="SKA_SM" class="form-control" value="{{ old('SKA_SM') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_SM" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_SM" name="Telp_SM" class="form-control" value="{{ old('Telp_SM') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_SM" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_SM" name="Keterangan_SM" class="form-control" value="{{ old('Keterangan_SM') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="Pelaksana" class="control-label col-md-3">Pelaksana</label>
									<div class="col-md-9">
										<input type="text" id="Pelaksana" name="Pelaksana" class="form-control" value="{{ old('Pelaksana') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_Pelaksana" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_Pelaksana" name="SKA_Pelaksana" class="form-control" value="{{ old('SKA_Pelaksana') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_Pelaksana" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_Pelaksana" name="Telp_Pelaksana" class="form-control" value="{{ old('Telp_Pelaksana') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_Pelaksana" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_Pelaksana" name="Keterangan_Pelaksana" class="form-control" value="{{ old('Keterangan_Pelaksana') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="Direktur" class="control-label col-md-3">Direktur</label>
									<div class="col-md-9">
										<input type="text" id="Direktur" name="Direktur" class="form-control" value="{{ old('Direktur') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_Direktur" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_Direktur" name="SKA_Direktur" class="form-control" value="{{ old('SKA_Direktur') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_Direktur" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_Direktur" name="Telp_Direktur" class="form-control" value="{{ old('Telp_Direktur') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_Direktur" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_Direktur" name="Keterangan_Direktur" class="form-control" value="{{ old('Keterangan_Direktur') }}">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row" align="center">
							<div class="col-md-12">                                    
								<button type="submit" class="btn blue-sharp">
									<i class="fa fa-hdd-o"></i>&nbsp;Simpan
								</button>
								<button type="button" class="btn red-intense" data-dismiss="modal">
									<i class="fa fa-times"></i>&nbsp;Batal
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="UbahKontraktor" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog modal-full">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 class="modal-title"  align="center">Ubah Kontraktor</h3>
			</div>
			<div class="modal-body">
				<form action="{{ url('maskon/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="idkontraktor" id="idkontraktor" >
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Nama_Kontraktor_Ubah" class="control-label col-md-4">Nama Kontraktor</label>
									<div class="col-md-8">
										<input type="text" id="Nama_Kontraktor_Ubah" name="Nama_Kontraktor_Ubah" class="form-control" value="{{ old('Nama_Kontraktor_Ubah') }}">
									</div>
								</div>
							</div>
								<div class="col-md-6">
								<div class="form-group">
								<label for="Telp_Kontraktor_Ubah" class="control-label col-md-4">Nomor Telepon</label>
								<div class="col-md-8">
								<input type="text" id="Telp_Kontraktor_Ubah" name="Telp_Kontraktor_Ubah" class="form-control" value="{{ old('Telp_Kontraktor_Ubah') }}">
								</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="Alamat_Kontraktor_Ubah" class="control-label col-md-4">Alamat</label>
									<div class="col-md-8">
										<input type="text" id="Alamat_Kontraktor_Ubah" name="Alamat_Kontraktor_Ubah" class="form-control" value="{{ old('Alamat_Kontraktor_Ubah') }}">
									</div>
								</div>
							</div>
						</div>
						<h5 align="center">Detail</h5>
						<hr/>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="PM_Ubah" class="control-label col-md-3">PM</label>
									<div class="col-md-9">
										<input type="text" id="PM_Ubah" name="PM_Ubah" class="form-control" value="{{ old('PM_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_PM_Ubah" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_PM_Ubah" name="SKA_PM_Ubah" class="form-control" value="{{ old('SKA_PM_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_PM_Ubah" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_PM_Ubah" name="Telp_PM_Ubah" class="form-control" value="{{ old('Telp_PM_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_PM_Ubah" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_PM_Ubah" name="Keterangan_PM_Ubah" class="form-control" value="{{ old('Keterangan_PM_Ubah') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="SM_Ubah" class="control-label col-md-3">SM</label>
									<div class="col-md-9">
										<input type="text" id="SM_Ubah" name="SM_Ubah" class="form-control" value="{{ old('SM_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_SM_Ubah" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_SM_Ubah" name="SKA_SM_Ubah" class="form-control" value="{{ old('SKA_SM_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_SM_Ubah" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_SM_Ubah" name="Telp_SM_Ubah" class="form-control" value="{{ old('Telp_SM_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_SM_Ubah" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_SM_Ubah" name="Keterangan_SM_Ubah" class="form-control" value="{{ old('Keterangan_SM_Ubah') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="Pelaksana_Ubah" class="control-label col-md-3">Pelaksana</label>
									<div class="col-md-9">
										<input type="text" id="Pelaksana_Ubah" name="Pelaksana_Ubah" class="form-control" value="{{ old('Pelaksana_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_Pelaksana_Ubah" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_Pelaksana_Ubah" name="SKA_Pelaksana_Ubah" class="form-control" value="{{ old('SKA_Pelaksana_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_Pelaksana_Ubah" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_Pelaksana_Ubah" name="Telp_Pelaksana_Ubah" class="form-control" value="{{ old('Telp_Pelaksana_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_Pelaksana_Ubah" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_Pelaksana_Ubah" name="Keterangan_Pelaksana_Ubah" class="form-control" value="{{ old('Keterangan_Pelaksana_Ubah') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="Direktur_Ubah" class="control-label col-md-3">Direktur</label>
									<div class="col-md-9">
										<input type="text" id="Direktur_Ubah" name="Direktur_Ubah" class="form-control" value="{{ old('Direktur_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="SKA_Direktur_Ubah" class="control-label col-md-3">SKA/SKT</label>
									<div class="col-md-9">
										<input type="text" id="SKA_Direktur_Ubah" name="SKA_Direktur_Ubah" class="form-control" value="{{ old('SKA_Direktur_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Telp_Direktur_Ubah" class="control-label col-md-3">Telp</label>
									<div class="col-md-9">
										<input type="text" id="Telp_Direktur_Ubah" name="Telp_Direktur_Ubah" class="form-control" value="{{ old('Telp_Direktur_Ubah') }}">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="Keterangan_Direktur_Ubah" class="control-label col-md-3">Keterangan</label>
									<div class="col-md-9">
										<input type="text" id="Keterangan_Direktur_Ubah" name="Keterangan_Direktur_Ubah" class="form-control" value="{{ old('Keterangan_Direktur_Ubah') }}">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row" align="center">
							<div class="col-md-12">                                    
								<button type="submit" class="btn blue-sharp">
									<i class="fa fa-hdd-o"></i>&nbsp;Simpan
								</button>
								<button type="button" class="btn red-intense" data-dismiss="modal">
									<i class="fa fa-times"></i>&nbsp;Batal
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection