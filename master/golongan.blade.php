@extends('layouts.master')
@section('title','Golongan')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Golongan
<small>Daftar Golongan</small>
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
<button class="btn blue-madison" onclick="TambahGolongan();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Golongan</button>
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
<th style="text-align:center;">Golongan</th>
<th style="text-align:center;">Pangkat</th>
<th style="text-align:center;">Pajak</th>
<th style="text-align:center;">Uang Harian</th>
<th style="text-align:center;">Uang Lembur</th>
<th style="text-align:center;">Uang Makan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_golongan}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->pangkat}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->pajak}}</td>
<td  style="text-align:right;vertical-align:middle;">{{ number_format($dt->uang_harian,2,",",".") }}</td>
<td  style="text-align:right;vertical-align:middle;">{{ number_format($dt->uang_lembur,2,",",".") }}</td>
<td  style="text-align:right;vertical-align:middle;">{{ number_format($dt->uang_makan,2,",",".") }}</td>
<td  style="text-align:center;vertical-align:middle;">
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Golongan" onclick="UbahGolongan({{$dt->id_golongan}});" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/golongan/delete/' . $dt->id_golongan) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Golongan" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahGolongan" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Golongan</h3>
</div>
<div class="modal-body">
<form action="{{ url('golongan') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Golongan" class="control-label col-md-4">Golongan</label>
<div class="col-md-8">
<input type="text" id="Nama_Golongan" name="Nama_Golongan" class="form-control" value="{{ old('Nama_Golongan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Pangkat_Golongan" class="control-label col-md-4">Pangkat</label>
<div class="col-md-8">
<input type="text" id="Pangkat_Golongan" name="Pangkat_Golongan" class="form-control" value="{{ old('Pangkat_Golongan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Pajak_Golongan" class="control-label col-md-4">Pajak</label>
<div class="col-md-8">
<input type="text" id="Pajak_Golongan" name="Pajak_Golongan" class="form-control" value="{{ old('Pajak_Golongan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Uang_Harian_Golongan" class="control-label col-md-4">Uang Harian</label>
<div class="col-md-8">
<input type="text" data-a-sign="Rp." id="Uang_Harian_Golongan" name="Uang_Harian_Golongan" class="form-control autonumber" value="{{ old('Uang_Harian_Golongan') }}">
<input type="hidden"  id="UangHarian" name="UangHarian">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Uang_Lembur_Golongan" class="control-label col-md-4">Uang Lembur</label>
<div class="col-md-8">
<input type="text" data-a-sign="Rp." id="Uang_Lembur_Golongan" name="Uang_Lembur_Golongan" class="form-control autonumber" value="{{ old('Uang_Lembur_Golongan') }}">
<input type="hidden"  id="UangLembur" name="UangLembur">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Uang_Makan_Golongan" class="control-label col-md-4">Uang Makan</label>
<div class="col-md-8">
<input type="text" data-a-sign="Rp." id="Uang_Makan_Golongan" name="Uang_Makan_Golongan" class="form-control autonumber" value="{{ old('Uang_Makan_Golongan') }}">
<input type="hidden"  id="UangMakan" name="UangMakan">
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
<div class="modal fade" id="UbahGolongan" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Golongan</h3>
</div>
<div class="modal-body">
<form action="{{ url('golongan/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idgolongan" name="idgolongan">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Golongan_Ubah" class="control-label col-md-4" >Golongan</label>
<div class="col-md-8">
<input  type="text" id="Nama_Golongan_Ubah" name="Nama_Golongan_Ubah" class="form-control" >
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Pangkat_Golongan_Ubah" class="control-label col-md-4">Pangkat</label>
<div class="col-md-8">
<input type="text" id="Pangkat_Golongan_Ubah" name="Pangkat_Golongan_Ubah" class="form-control" value="{{ old('Pangkat_Golongan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Pajak_Golongan_Ubah" class="control-label col-md-4">Pajak</label>
<div class="col-md-8">
<input type="text" id="Pajak_Golongan_Ubah" name="Pajak_Golongan_Ubah" class="form-control" value="{{ old('Pajak_Golongan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Uang_Harian_Golongan_Ubah" class="control-label col-md-4">Uang Harian</label>
<div class="col-md-8">
<input type="text" data-a-sign="Rp." id="Uang_Harian_Golongan_Ubah" name="Uang_Harian_Golongan_Ubah" class="form-control autonumber" value="{{ old('Uang_Harian_Golongan') }}">
<input type="hidden"  id="UangHarianUbah" name="UangHarianUbah">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Uang_Lembur_Golongan_Ubah" class="control-label col-md-4">Uang Lembur</label>
<div class="col-md-8">
<input type="text" data-a-sign="Rp." id="Uang_Lembur_Golongan_Ubah" name="Uang_Lembur_Golongan_Ubah" class="form-control autonumber" value="{{ old('Uang_Lembur_Golongan') }}">
<input type="hidden"  id="UangLemburUbah" name="UangLemburUbah">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Uang_Makan_Golongan_Ubah" class="control-label col-md-4">Uang Makan</label>
<div class="col-md-8">
<input type="text" data-a-sign="Rp." id="Uang_Makan_Golongan_Ubah" name="Uang_Makan_Golongan_Ubah" class="form-control autonumber" value="{{ old('Uang_Makan_Golongan') }}">
<input type="hidden"  id="UangMakanUbah" name="UangMakanUbah">
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