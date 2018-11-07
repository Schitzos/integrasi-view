@extends('layouts.master')
@section('title','Jabatan Sistem')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Jabatan Sistem
<small>Daftar Jabatan Pengguna Sistem</small>
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
<button class="btn blue-madison" onclick="TambahJabatanUser();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Jabatan</button>
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
<th style="text-align:center;">Jabatan</th>
<th style="text-align:center;">Keterangan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_jabatan_user}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->keterangan_jabatan_user}}</td>
<td  style="text-align:center;vertical-align:middle;">
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Jabatan" onclick="UbahJabatanUser({{$dt->id_jabatan_user}});" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/jabut/delete/' . $dt->id_jabatan_user) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Jabatan" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahJabatan" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Jabatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('jabut') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Jabatan" class="control-label col-md-4">Jabatan</label>
<div class="col-md-8">
<input type="text" id="Nama_Jabatan" name="Nama_Jabatan" class="form-control" value="{{ old('Nama_Jabatan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Keterangan_Jabatan" class="control-label col-md-4">Keterangan</label>
<div class="col-md-8">
<textarea id="Keterangan_Jabatan" name="Keterangan_Jabatan" class="form-control" >{{ old('Keterangan_Jabatan') }}</textarea>
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
<div class="modal fade" id="UbahJabatan" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Jabatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('jabut/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idjabatan" name="idjabatan">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Jabatan_Ubah" class="control-label col-md-4" >Jabatan</label>
<div class="col-md-8">
<input  type="text" id="Nama_Jabatan_Ubah" name="Nama_Jabatan_Ubah" class="form-control" >
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Keterangan_Jabatan_Ubah" class="control-label col-md-4">Keterangan</label>
<div class="col-md-8">
<textarea id="Keterangan_Jabatan_Ubah" name="Keterangan_Jabatan_Ubah" class="form-control" ></textarea>
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