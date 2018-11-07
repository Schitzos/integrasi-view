@extends('layouts.master')
@section('title','Kegiatan')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Kegiatan
<small>Daftar Kegiatan</small>
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
<button class="btn blue-madison" onclick="TambahKegiatan();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Kegiatan</button>
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
<th style="text-align:center;">Kode Program</th>
<th style="text-align:center;">Kode Kegiatan</th>
<th style="text-align:center;">Nama Kegiatan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{ $i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{ $dt->id_program }}</td>
<td  style="text-align:left;vertical-align:middle;">{{ $dt->id_kegiatan }}</td>
<td  style="text-align:left;vertical-align:middle;">{{ $dt->nama_kegiatan }}</td>
<td  style="text-align:center;vertical-align:middle;">
<a href="{{ URL::to('/kegiatan/dpa/' . $dt->id_kegiatan) }}" class="btn green-meadow btn-xs"  title="DPA">
<i class="fa fa-file-o"></i>
</a>
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Kegiatan" onclick="UbahKegiatan(`{{$dt->id_kegiatan}}`);" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/kegiatan/delete/' . $dt->id_kegiatan) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Kegiatan" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahKegiatan" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Kegiatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('kegiatan') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Seksi" class="control-label col-md-4">Seksi</label>
<div class="col-md-8">
<select name="Seksi" id="Seksi" class="select2 form-control">
<option value="">Pilih Seksi</option>
@foreach($seksi as $s)
<option value="{{$s->id_seksi}}">{{ $s->nama_seksi}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Program" class="control-label col-md-4">Program</label>
<div class="col-md-8">
<select name="Program" id="Program" class="select2 form-control">
<option value="">Pilih Program</option>
@foreach($program as $p)
<option value="{{$p->id_program}}">{{$p->nama_program}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="id_kegiatan" class="control-label col-md-4">Kode Kegiatan</label>
<div class="col-md-8">                                            
<input type="text" id="id_kegiatan" name="id_kegiatan" class="form-control" value="{{ old('id_kegiatan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Kegiatan" class="control-label col-md-4">Nama Kegiatan</label>
<div class="col-md-8">                                            
<input type="text" id="Nama_Kegiatan" name="Nama_Kegiatan" class="form-control" value="{{ old('Nama_Kegiatan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="PPK" class="control-label col-md-4">PPK</label>
<div class="col-md-8">
<select name="PPK" id="PPK" class="select2 form-control">
<option value="">Pilih PPK</option>
@foreach($ppk as $k)
<option value="{{$k->nip_pegawai}}">{{$k->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="PPTK" class="control-label col-md-4">PPTK</label>
<div class="col-md-8">
<select name="PPTK" id="PPTK" class="select2 form-control">
<option value="">Pilih PPTK</option>
@foreach($pptk as $t)
<option value="{{$t->nip_pegawai}}">{{$t->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="PPBJ" class="control-label col-md-4">PPBJ</label>
<div class="col-md-8">
<select name="PPBJ" id="PPBJ" class="select2 form-control">
<option value="">Pilih PPBJ</option>
@foreach($ppbj as $t)
<option value="{{$t->nip_pegawai}}">{{$t->nama_pegawai}}</option>
@endforeach
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
<div class="modal fade" id="UbahKegiatan" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Kegiatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('kegiatan/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idkegiatan" name="idkegiatan">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Seksi_Ubah" class="control-label col-md-4">Seksi</label>
<div class="col-md-8">
<select name="Seksi_Ubah" id="Seksi_Ubah" class="select2 form-control">
<option value="">Pilih Seksi</option>
@foreach($seksi as $s)
<option value="{{$s->id_seksi}}">{{ $s->nama_seksi}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Program_Ubah" class="control-label col-md-4" >Program</label>
<div class="col-md-8">
<select name="Program_Ubah" id="Program_Ubah" class="select2 form-control">
<option value="a">Pilih Program</option>
@foreach($program as $p)
<option value="{{$p->id_program}}">{{$p->nama_program}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Kode_Kegiatan_Ubah" class="control-label col-md-4">Kode Kegiatan</label>
<div class="col-md-8">                                            
<input type="text" id="Kode_Kegiatan_Ubah" name="Kode_Kegiatan_Ubah" class="form-control" value="{{ old('Kode_Kegiatan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Kegiatan_Ubah" class="control-label col-md-4" >Nama Kegiatan</label>
<div class="col-md-8">
<input  type="text" id="Nama_Kegiatan_Ubah" name="Nama_Kegiatan_Ubah" class="form-control"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="PPK_Ubah" class="control-label col-md-4">PPK</label>
<div class="col-md-8">
<select name="PPK_Ubah" id="PPK_Ubah" class="select2 form-control">
<option value="">Pilih PPK</option>
@foreach($ppk as $k)
<option value="{{$k->nip_pegawai}}">{{$k->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="PPTK_Ubah" class="control-label col-md-4">PPTK</label>
<div class="col-md-8">
<select name="PPTK_Ubah" id="PPTK_Ubah" class="select2 form-control">
<option value="">Pilih PPTK</option>
@foreach($pptk as $t)
<option value="{{$t->nip_pegawai}}">{{$t->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="PPBJ_Ubah" class="control-label col-md-4">PPBJ</label>
<div class="col-md-8">
<select name="PPBJ_Ubah" id="PPBJ_Ubah" class="select2 form-control">
<option value="">Pilih PPBJ</option>
@foreach($ppbj as $t)
<option value="{{$t->nip_pegawai}}">{{$t->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Pagu_Paket_Ubah" class="control-label col-md-4">Pagu Paket</label>
<div class="col-md-8">
<input type="text" id="Pagu_Paket_Ubah" name="Pagu_Paket_Ubah" class="form-control" readonly/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Pagu_Nonpaket_Ubah" class="control-label col-md-4">Pagu Nonpaket</label>
<div class="col-md-8">
<input type="text" id="Pagu_Nonpaket_Ubah" name="Pagu_Nonpaket_Ubah" class="form-control" readonly/>
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