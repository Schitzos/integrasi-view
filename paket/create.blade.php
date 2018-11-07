@extends('layouts.master')
@section('title','Tambah Paket')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Tambah Paket
<small>Tambah Paket</small>
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
{{--  id="form_wizard_1" --}}
<div class="portlet light ">
<div class="portlet-title">
<div class="caption">
<i class=" icon-layers font-blue-aqua"></i>
</div>
<div class="actions">
<div class="btn-group">
<a class="btn blue-madison" href="{{ URL::to('/home') }}"><i class="fa fa-times"></i>&nbsp;Batal</a>
</div>
</div>          
</div>
<div class="portlet-body form">
<form class="form-horizontal" action="{{ url('/paket') }}" id="submit_form" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<h3 class="block">Isikan Detail Paket</h3>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Paket" class="col-md-2 control-label">Nama Paket<span class="required"> * </span></label>
<div class="col-md-10">
<input  type="text" id="Nama_Paket" name="Nama_Paket" class="form-control" value="{{ old('Nama_Paket') }}">
</div>
</div>
</div>
{{-- <div class="col-md-6">
<div class="form-group">
<label for="Nama_Singkat" class="col-md-4 control-label">Nama Singkat Paket<span class="required"> * </span></label>
<div class="col-md-8">
<input  type="text" id="Nama_Singkat" name="Nama_Singkat" class="form-control" value="{{ old('Nama_Singkat') }}">
</div>
</div>
</div> --}}
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Paket" class="col-md-2 control-label">Peruntukan Paket<span class="required"> * </span></label>
<div class="col-md-4">
<select name="tujuan_paket" id="tujuan_paket" class="select2 form-control">
<option value="">-- Pilih Peruntukan --</option>
<option value="1">Konsultan Perencanaan</option>
<option value="1">Konsultan Pengawas</option>
<option value="1">Kontraktor</option>
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Program_Paket" class="col-md-4 control-label">Bidang<span class="required"> * </span></label>
<div class="col-md-8">
<select name="Program_Paket" id="Program_Paket" class="select2 form-control">
<option value="">Pilih Bidang</option>
@foreach($bidang as $b)
<option value="{{$b->id_bidang}}">{{$b->nama_bidang}}</option>
@endforeach
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Kegiatan_Paket" class="col-md-4 control-label">Kegiatan<span class="required"> * </span></label>
<div class="col-md-8">
<select name="Kegiatan_Paket" id="Kegiatan_Paket" class="select2 form-control">
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="DPA_Paket" class="col-md-4 control-label">Paket<span class="required"> * </span></label>
<div class="col-md-8">
<select name="DPA_Paket" id="DPA_Paket" class="select2 form-control">
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Kordinator_Paket" class="col-md-4 control-label">Kordinator Paket<span class="required"> * </span></label>
<div class="col-md-8">
<select name="Kordinator_Paket" id="Kordinator_Paket" class="select2 form-control">
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Nomor_Kontrak" class="col-md-4 control-label">Nomor Kontrak<span class="required"> * </span></label>
<div class="col-md-8">
<input  type="text" id="Nomor_Kontrak" name="Nomor_Kontrak" class="form-control" value="{{ old('Nomor_Kontrak') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_SPMK" class="control-label col-md-4">Tgl Kontrak<span class="required"> * </span></label>
<div class="col-md-8">
<input type="text" id="Tgl_SPMK" name="Tgl_SPMK" class="form-control" value="{{ old('Tgl_SPMK') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Nomor_SPMK" class="col-md-4 control-label">Nomor SPMK<span class="required"> * </span></label>
<div class="col-md-8">
<input  type="text" id="Nomor_SPMK" name="Nomor_SPMK" class="form-control" value="{{ old('Nomor_SPMK') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_Kontrak" class="control-label col-md-4">Masa Pelaksanaan 
<span class="required"> * </span>
</label>
<div class="col-md-8">
<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
<input type="text" class="form-control" name="from" id="Tgl_Kontrak1">
<span class="input-group-addon"> s/d </span>
<input type="text" class="form-control" name="to" id="Tgl_Kontrak2">
</div>
</div>
</div>
</div>
</div>
{{-- <div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_ST1" class="col-md-4 control-label">Tgl ST 1<span class="required"> * </span></label>
<div class="col-md-8">
<input  type="text" id="Tgl_ST1" name="Tgl_ST1" class="form-control" value="{{ old('Tgl_ST1') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_ST2" class="control-label col-md-4">Tgl ST 2<span class="required"> * </span></label>
<div class="col-md-8">
<input type="text" id="Tgl_ST2" name="Tgl_ST2" class="form-control" value="{{ old('Tgl_ST2') }}">
</div>
</div>
</div>
</div> --}}
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Nilai_Kontrak" class="col-md-4 control-label">Nilai Kontrak<span class="required"> * </span></label>
<div class="col-md-8">
<input  type="text" id="Nilai_Kontrak" name="Nilai_Kontrak" class="form-control autonumber" data-a-sign="Rp " value="{{ old('Nilai_Kontrak') }}">
<input type="hidden" id="Nilai_Kon" name="Nilai_Kon" />
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Tahun_Anggaran" class="col-md-4 control-label">Tahun Anggaran<span class="required"> * </span></label>
<div class="col-md-8">
<input  type="text" id="Tahun_Anggaran" name="Tahun_Anggaran" class="form-control"  value="{{ old('Tahun_Anggaran') }}">
</div>
</div>
</div>
</div>  
<div class="row" id="dynamicInput">
<div class="col-md-6">
<div class="form-group">
<label for="Cara_Bayar" class="col-md-4 control-label">Cara Pembayaran<span class="required"> * </span></label>
<div class="col-md-8">
<select class="select2 form-control" id="Cara_Bayar" name="Cara_Bayar">
<option value="">Pillih Cara Pembayaran</option>
<option value="1">Termin</option>
<option value="2">Sekaligus</option>
<option value="3">Bulanan</option>
</select>
</div>
</div>
</div>
</div>
<h5 style="text-align:center;">PPHP</h5>
<hr/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="PPHP_Proyek" class="col-md-4 control-label">PPHP (PL)</label>
<div class="col-md-8">
<select name="PPHP_Proyek" id="PPHP_Proyek" class="select2 form-control">
{{-- <option value="">Pilih PPHP Proyek</option>
@foreach($pegawai as $p)
<option value="{{$p->nip_pegawai}}">{{$p->nama_pegawai}}</option>
@endforeach --}}
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Anggota_PPHP" class="col-md-4 control-label">Anggota PPHP</label>
<div class="col-md-8">
<select multiple="multiple" class="multi-select" id="Anggota_PPHP" name="Anggota_PPHP[]">
@foreach($pegawai as $p)
<option value="{{$p->nip_pegawai}}">{{$p->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Ketua_PPHP" class="col-md-4 control-label">Ketua PPHP</label>
<div class="col-md-8">
<select name="Ketua_PPHP" id="Ketua_PPHP" class="select2 form-control">
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Sekertaris_PPHP" class="col-md-4 control-label">Sekertaris PPHP</label>
<div class="col-md-8">
<select name="Sekertaris_PPHP" id="Sekertaris_PPHP" class="select2 form-control">
</select>
</div>
</div>
</div>
</div>
<h3 class="block">Detail Lokasi</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Kecamatan_Paket" class="col-md-4 control-label">Kecamatan</label>
<div class="col-md-8">
<select name="Kecamatan_Paket" id="Kecamatan_Paket" class="select2 form-control">
<option value="">Pilih Kecamatan</option>
@foreach($kecamatan as $k)
<option value="{{$k->id_kecamatan}}">{{$k->nama_kecamatan}}</option>
@endforeach
</select>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Desa_Paket" class="col-md-4 control-label">Desa</label>
<div class="col-md-8">
<select name="Desa_Paket" id="Desa_Paket" class="select2 form-control">
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Latitude" class="col-md-4 control-label">Latitude</label>
<div class="col-md-8">
<input  type="text" id="Latitude" name="Latitude" class="form-control" value="{{ old('Latitude') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Longitude" class="col-md-4 control-label">Longitude</label>
<div class="col-md-8">
<input  type="text" id="Longitude" name="Longitude" class="form-control" value="{{ old('Longitude') }}">
</div>
</div>
</div>
</div>
<h3 class="block">Pilih Kontraktor atau masukkan data Kontraktor baru</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Kontraktor_Paket" class="col-md-4 control-label">Kontraktor</label>
<div class="col-md-8">
<select name="Kontraktor_Paket" id="Kontraktor_Paket" class="select2 form-control">
<option value="">Pilih Kontraktor</option>
@foreach($kontraktor as $o)
<option value="{{$o->id_kontraktor}}">{{$o->nama_kontraktor}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<h5 style="text-align:center">Masukkan Data Kontraktor Baru</h5>
<hr/>
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
<div class="col-md-6">
<div class="form-group">
<label for="Direktur_Kontraktor" class="control-label col-md-4">Direktur</label>
<div class="col-md-8">
<input type="text" id="Direktur_Kontraktor" name="Direktur_Kontraktor" class="form-control" value="{{ old('Direktur_Kontraktor') }}">
</div>
</div>
</div>
</div>
{{-- <h5 style="text-align:center">Detail</h5>
<hr/>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="PM_Kontraktor" class="control-label col-md-3">PM</label>
<div class="col-md-9">
<input type="text" id="PM_Kontraktor" name="PM_Kontraktor" class="form-control" value="{{ old('PM_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_PM_Kontraktor" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_PM_Kontraktor" name="SKA_PM_Kontraktor" class="form-control" value="{{ old('SKA_PM_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_PM_Kontraktor" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_PM_Kontraktor" name="Telp_PM_Kontraktor" class="form-control" value="{{ old('Telp_PM_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_PM_Kontraktor" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_PM_Kontraktor" name="Keterangan_PM_Kontraktor" class="form-control" value="{{ old('Keterangan_PM_Kontraktor') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="SM_Kontraktor" class="control-label col-md-3">SM</label>
<div class="col-md-9">
<input type="text" id="SM_Kontraktor" name="SM_Kontraktor" class="form-control" value="{{ old('SM_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_SM_Kontraktor" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_SM_Kontraktor" name="SKA_SM_Kontraktor" class="form-control" value="{{ old('SKA_SM_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_SM_Kontraktor" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_SM_Kontraktor" name="Telp_SM_Kontraktor" class="form-control" value="{{ old('Telp_SM_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_SM_Kontraktor" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_SM_Kontraktor" name="Keterangan_SM_Kontraktor" class="form-control" value="{{ old('Keterangan_SM_Kontraktor') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="Pelaksana_Kontraktor" class="control-label col-md-3">Pelaksana</label>
<div class="col-md-9">
<input type="text" id="Pelaksana_Kontraktor" name="Pelaksana_Kontraktor" class="form-control" value="{{ old('Pelaksana_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_Pelaksana_Kontraktor" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_Pelaksana_Kontraktor" name="SKA_Pelaksana_Kontraktor" class="form-control" value="{{ old('SKA_Pelaksana_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_Pelaksana_Kontraktor" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_Pelaksana_Kontraktor" name="Telp_Pelaksana_Kontraktor" class="form-control" value="{{ old('Telp_Pelaksana_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_Pelaksana_Kontraktor" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_Pelaksana_Kontraktor" name="Keterangan_Pelaksana_Kontraktor" class="form-control" value="{{ old('Keterangan_Pelaksana_Kontraktor') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="Direktur_Kontraktor" class="control-label col-md-3">Direktur</label>
<div class="col-md-9">
<input type="text" id="Direktur_Kontraktor" name="Direktur_Kontraktor" class="form-control" value="{{ old('Direktur_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_Direktur_Kontraktor" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_Direktur_Kontraktor" name="SKA_Direktur_Kontraktor" class="form-control" value="{{ old('SKA_Direktur_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_Direktur_Kontraktor" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_Direktur_Kontraktor" name="Telp_Direktur_Kontraktor" class="form-control" value="{{ old('Telp_Direktur_Kontraktor') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_Direktur_Kontraktor" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_Direktur_Kontraktor" name="Keterangan_Direktur_Kontraktor" class="form-control" value="{{ old('Keterangan_Direktur_Kontraktor') }}">
</div>
</div>
</div>
</div> --}}
<h3 class="block">Pilih Konsultan atau masukkan data Konsultan baru</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Konsultan_Paket" class="col-md-4 control-label">Konsultan</label>
<div class="col-md-8">
<select name="Konsultan_Paket" id="Konsultan_Paket" class="select2 form-control">
<option value="">Pilih Konsultan</option>
@foreach($konsultan as $o)
<option value="{{$o->id_konsultan}}">{{$o->nama_konsultan}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<h5 style="text-align:center">Masukkan Data Konsultan Baru</h5>
<hr/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Nama_Konsultan" class="control-label col-md-4">Nama Konsultan</label>
<div class="col-md-8">
<input type="text" id="Nama_Konsultan" name="Nama_Konsultan" class="form-control" value="{{ old('Nama_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Telp_Konsultan" class="control-label col-md-4">Nomor Telepon</label>
<div class="col-md-8">
<input type="text" id="Telp_Konsultan" name="Telp_Konsultan" class="form-control" value="{{ old('Telp_Konsultan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Alamat_Konsultan" class="control-label col-md-4">Alamat</label>
<div class="col-md-8">
<input type="text" id="Alamat_Konsultan" name="Alamat_Konsultan" class="form-control" value="{{ old('Alamat_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Direktur_Konsultan" class="control-label col-md-4">Direktur</label>
<div class="col-md-8">
<input type="text" id="Direktur_Konsultan" name="Direktur_Konsultan" class="form-control" value="{{ old('Direktur_Konsultan') }}">
</div>
</div>
</div>
</div>
{{-- <h5 align="center">Detail</h5>
<hr/>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="PM_Konsultan" class="control-label col-md-3">PM</label>
<div class="col-md-9">
<input type="text" id="PM_Konsultan" name="PM_Konsultan" class="form-control" value="{{ old('PM_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_PM_Konsultan" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_PM_Konsultan" name="SKA_PM_Konsultan" class="form-control" value="{{ old('SKA_PM_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_PM_Konsultan" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_PM_Konsultan" name="Telp_PM_Konsultan" class="form-control" value="{{ old('Telp_PM_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_PM_Konsultan" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_PM_Konsultan" name="Keterangan_PM_Konsultan" class="form-control" value="{{ old('Keterangan_PM_Konsultan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="SM_Konsultan" class="control-label col-md-3">SM</label>
<div class="col-md-9">
<input type="text" id="SM_Konsultan" name="SM_Konsultan" class="form-control" value="{{ old('SM_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_SM_Konsultan" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_SM_Konsultan" name="SKA_SM_Konsultan" class="form-control" value="{{ old('SKA_SM_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_SM_Konsultan" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_SM_Konsultan" name="Telp_SM_Konsultan" class="form-control" value="{{ old('Telp_SM_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_SM_Konsultan" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_SM_Konsultan" name="Keterangan_SM_Konsultan" class="form-control" value="{{ old('Keterangan_SM_Konsultan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="Pelaksana_Konsultan" class="control-label col-md-3">Pelaksana</label>
<div class="col-md-9">
<input type="text" id="Pelaksana_Konsultan" name="Pelaksana_Konsultan" class="form-control" value="{{ old('Pelaksana_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_Pelaksana_Konsultan" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_Pelaksana_Konsultan" name="SKA_Pelaksana_Konsultan" class="form-control" value="{{ old('SKA_Pelaksana_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_Pelaksana_Konsultan" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_Pelaksana_Konsultan" name="Telp_Pelaksana_Konsultan" class="form-control" value="{{ old('Telp_Pelaksana_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_Pelaksana_Konsultan" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_Pelaksana_Konsultan" name="Keterangan_Pelaksana_Konsultan" class="form-control" value="{{ old('Keterangan_Pelaksana_Konsultan') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label for="Direktur_Konsultan" class="control-label col-md-3">Direktur</label>
<div class="col-md-9">
<input type="text" id="Direktur_Konsultan" name="Direktur_Konsultan" class="form-control" value="{{ old('Direktur_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="SKA_Direktur_Konsultan" class="control-label col-md-3">SKA/SKT</label>
<div class="col-md-9">
<input type="text" id="SKA_Direktur_Konsultan" name="SKA_Direktur_Konsultan" class="form-control" value="{{ old('SKA_Direktur_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Telp_Direktur_Konsultan" class="control-label col-md-3">Telp</label>
<div class="col-md-9">
<input type="text" id="Telp_Direktur_Konsultan" name="Telp_Direktur_Konsultan" class="form-control" value="{{ old('Telp_Direktur_Konsultan') }}">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label for="Keterangan_Direktur_Konsultan" class="control-label col-md-3">Ket</label>
<div class="col-md-9">
<input type="text" id="Keterangan_Direktur_Konsultan" name="Keterangan_Direktur_Konsultan" class="form-control" value="{{ old('Keterangan_Direktur_Kontraktor') }}">
</div>
</div>
</div>
</div> --}}
</div>
<div class="form-actions">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<button type="submit" class="btn green button-submit"> Simpan
<i class="fa fa-disk"></i>
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
</div>
</div>
</div>
</div>
</div>
@endsection