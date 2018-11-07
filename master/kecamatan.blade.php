@extends('layouts.master')
@section('title','Kecamatan')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Kecamatan
<small>Daftar Kecamatan</small>
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
<button class="btn blue-madison" onclick="TambahKecamatan();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Kecamatan</button>
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
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_kecamatan}}</td>
<td  style="text-align:center;vertical-align:middle;">

<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Kecamatan" onclick="UbahKecamatan({{$dt->id_kecamatan}});" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/kecamatan/delete/' . $dt->id_kecamatan) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Kecamatan" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahKecamatan" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Kecamatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('kecamatan') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Kecamatan" class="control-label col-md-4">Kecamatan</label>
<div class="col-md-8">
<input type="text" id="Nama_Kecamatan" name="Nama_Kecamatan" class="form-control" value="{{ old('Nama_Kecamatan') }}">
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
<div class="modal fade" id="UbahKecamatan" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Kecamatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('kecamatan/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idkecamatan" name="idkecamatan">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Kecamatan_Ubah" class="control-label col-md-4" >Kecamatan</label>
<div class="col-md-8">
<input  type="text" id="Nama_Kecamatan_Ubah" name="Nama_Kecamatan_Ubah" class="form-control" >
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