@extends('layouts.master')
@section('title','Daftar Rekening Tindakan')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Master
<small>Daftar Rekening</small>
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
<button class="btn blue-madison" onclick="tambahRekening();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Rekening Tindakan</button>
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
<th style="text-align:center;">Nomor Rekening</th>
<th style="text-align:center;">Jenis Tindakan</th>
<th style="text-align:center;">Option</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td style="text-align:center;">{{ $i }}</td>
<td style="text-align:left;">{{ $dt->nomor_rekening }}</td>
<td style="text-align:left;">{{ $dt->nama_tipe }}</td>
<td style="text-align:center;">
<a class="btn tooltips btn-xs yellow-casablanca " data-container="body" data-placement="top" data-original-title="Ubah Rekening Tindakan" data-toggle="modal" href="#" onclick="ubahRekening('{{ $dt->id_rekening }}')">
<i class="fa fa-edit"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/rekening/delete/' . $dt->id_rekening) }}" class="btn grey-gallery btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus Hari Rekening Tindakan ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="tambahRekening" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Daftar Rekening</h3>
</div>
<div class="modal-body">
<form action="{{ url('rekening') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tgl_Libur" class="control-label col-md-4" style="color:#009dc7;">Nomor Rekening</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="nomor_rekening" name="nomor_rekening" class="form-control" value="">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jenis_Tindakan" class="control-label col-md-4" style="color:#009dc7;">Jenis Tindakan</label>
<div class="col-md-8">
<select style="color:#009dc7;" type="text" id="tindakan" name="tindakan" class="form-control">
</select>
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
<button type="button" class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Batal</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="ubahRekening" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Rekening Tindakan</h3>
</div>
<div class="modal-body">
<form action="{{ url('rekening/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="id_rekening" name="id_rekening">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="nomor_rekening" class="control-label col-md-4" style="color:#009dc7;">Nomor Rekening</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="nomor_rekening_edit" name="nomor_rekening" class="form-control" >
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jenis_tindakan" class="control-label col-md-4" style="color:#009dc7;">Jenis Tindakan</label>
<div class="col-md-8">
<select style="color:#009dc7;" type="text" id="tindakan_edit" name="tindakan" class="form-control">
</select>
</div>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="row" align="center">
<div class="col-md-12">                                    
<button type="submit" class="btn blue-madison">
<i class="fa fa-hdd-o"></i>&nbsp;Simpan
</button>
<button type="button" class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Batal</button>
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