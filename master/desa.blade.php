@extends('layouts.master')
@section('title','Desa')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Desa
<small>Daftar Desa</small>
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
<i class="icon-bar-chart font-dark hide"></i>
<button class="btn blue-madison" onclick="TambahDesa();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Desa</button>
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
<th style="text-align:center;">Kecamatan</th>
<th style="text-align:center;">Nama Desa</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_kecamatan}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_desa}}</td>
<td  style="text-align:center;vertical-align:middle;">
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Desa" onclick="UbahDesa({{$dt->id_desa}});" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/desa/delete/' . $dt->id_desa) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Desa" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahDesa" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Desa</h3>
</div>
<div class="modal-body">
<form action="{{ url('desa') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Kecamatan" class="control-label col-md-4">Kecamatan</label>
<div class="col-md-8"> 
<select name="Kecamatan" id="Kecamatan" class="select2 form-control">
<option value="a">Pilih Kecamatan</option>
@foreach($kecamatan as $k)
<option value="{{$k->id_kecamatan}}">{{$k->nama_kecamatan}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Desa" class="control-label col-md-4">Nama Desa</label>
<div class="col-md-8">                                            
<input type="text" id="Nama_Desa" name="Nama_Desa" class="form-control" value="{{ old('Nama_Desa') }}">
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
<div class="modal fade" id="UbahDesa" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Desa</h3>
</div>
<div class="modal-body">
<form action="{{ url('desa/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="iddesa" name="iddesa">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Kecamatan_Ubah" class="control-label col-md-4" >Kecamatan</label>
<div class="col-md-8">
<select name="Kecamatan_Ubah" id="Kecamatan_Ubah" class="select2 form-control">
<option value="a">Pilih Kecamatan</option>
@foreach($kecamatan as $k)
<option value="{{$k->id_kecamatan}}">{{$k->nama_kecamatan}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Desa_Ubah" class="control-label col-md-4" >Nama Desa</label>
<div class="col-md-8">
<input  type="text" id="Nama_Desa_Ubah" name="Nama_Desa_Ubah" class="form-control" >
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