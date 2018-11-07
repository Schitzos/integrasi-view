@extends('layouts.master')
@section('title','Honor Rapat')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>ATK
<small>Honor Rapat</small>
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
<a  class="btn blue-madison" data-container="body" onclick="tambahhonorrapat()">
<i class="fa fa-plus-square"></i>&nbsp;Tambah Rapat
</a>
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
<th style="text-align:center;">Kegiatan</th>
<th style="text-align:center;">Acara</th>
<th style="text-align:center;">Peserta</th>
<th style="text-align:center;">Tanggal</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
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
<div class="modal fade" id="tambahhonorrapat"  role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title" style="color:#009dc7;" align="center">Tambah Rapat</h3>
</div>
<div class="modal-body">
<form action="{{ url('atk') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Kegiatan" class="control-label col-md-4" style="color:#009dc7;">Kegiatan</label>
<div class="col-md-8">                                               
<select id="Kegiatan" name="Kegiatan" class="select2 form-control">
<option value="">Pilih Kegiatan</option>
                                               
</select>                                           
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tanggal_ATK" class="control-label col-md-4" style="color:#009dc7;">Tanggal</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Tanggal_ATK" name="Tanggal_ATK" class="form-control"/>
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <label for="Jumlah" class="control-label col-md-4" style="color:#009dc7;">Tempat</label>
    <div class="col-md-8">
    <input style="color:#009dc7;" type="text" id="Jumlah" name="Jumlah" data-a-sign="Rp " class="form-control autonumber"/>
    <input type="hidden" id="Jml" name="Jml"/>
    </div>
    </div>
    </div>
    </div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jumlah" class="control-label col-md-4" style="color:#009dc7;">Jam</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Jumlah" name="Jumlah" data-a-sign="Rp " class="form-control autonumber"/>
<input type="hidden" id="Jml" name="Jml"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Untuk" class="control-label col-md-4" style="color:#009dc7;">Acara</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Untuk" name="Untuk" class="form-control"/>
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
<div class="modal fade" id="ubahatk" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title" style="color:#009dc7;" align="center">Ubah Kwitansi ATK</h3>
</div>
<div class="modal-body">
<form action="{{ url('atk/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idatk" name="idatk">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jumlah_Ubah" class="control-label col-md-4" style="color:#009dc7;">Uang Sejumlah</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Jumlah_Ubah" name="Jumlah_Ubah" data-a-sign="Rp " class="form-control autonumber"/>
<input type="hidden" id="Jml_Ubah" name="Jml_Ubah"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Untuk_Ubah" class="control-label col-md-4" style="color:#009dc7;">Untuk Pembayaran</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Untuk_Ubah" name="Untuk_Ubah" class="form-control"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Kegiatan_Ubah" class="control-label col-md-4" style="color:#009dc7;">Kegiatan</label>
<div class="col-md-8">                                               
<select id="Kegiatan_Ubah" name="Kegiatan_Ubah" class="select2 form-control">
<option value="">Pilih Kegiatan</option>
                                              
</select>                                           
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tanggal_ATK_Ubah" class="control-label col-md-4" style="color:#009dc7;">Tanggal</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Tanggal_ATK_Ubah" name="Tanggal_ATK_Ubah" class="form-control"/>
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
</div>
</div>
@endsection