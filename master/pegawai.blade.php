@extends('layouts.master')
@section('title','Pegawai')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Pegawai
<small>Daftar Pegawai</small>
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
<button class="btn blue-madison" onclick="TambahPegawai();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Pegawai</button>
</div>
<div class="actions">
<div class="btn-group">
</div>
</div>
</div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover order-column" id="sample_3">
<thead>
<tr>                                                            
<th style="text-align:center;">No</th>
<th style="text-align:center;">Bidang</th>
<th style="text-align:center;">Seksi</th>
<th style="text-align:center;">NIP</th>
<th style="text-align:center;">Nama Pegawai</th>
<th style="text-align:center;">Jabatan / Golongan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_bidang}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_seksi}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nip_pegawai}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_pegawai}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_jabatan}} / {{ $dt->nama_golongan}} - {{  $dt->pangkat}}</td>
<td  style="text-align:center;vertical-align:middle;">
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Pegawai" onclick="UbahPegawai(`{{ $dt->nip_pegawai}}`);" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/pegawai/delete/' . $dt->nip_pegawai) }}" class="btn grey-gallery btn-xs" data-placement="bottom" data-singleton="true" data-original-title="Hapus Pegawai" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahPegawai" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title" style="text-align:center">Tambah Pegawai</h3>
</div>
<div class="modal-body">
<form action="{{ url('pegawai') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Pegawai" class="control-label col-md-4">Nama Pegawai</label>
<div class="col-md-8">                                            
<input type="text" id="Nama_Pegawai" name="Nama_Pegawai" class="form-control" value="{{ old('Nama_Pegawai') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="nip_pegawai" class="control-label col-md-4">NIP Pegawai</label>
<div class="col-md-8">                                            
<input type="text" id="nip_pegawai" name="nip_pegawai" class="form-control" value="{{ old('nip_pegawai') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Golongan" class="control-label col-md-4">Golongan</label>
<div class="col-md-8"> 
<select name="Golongan" id="Golongan" class="select2 form-control">
<option value="a">Pilih Golongan</option>
@foreach($golongan as $g)
<option value="{{$g->id_golongan}}">{{$g->nama_golongan}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jabdin" class="control-label col-md-4">Jabatan Dinas</label>
<div class="col-md-8"> 
<select name="Jabdin" id="Jabdin" class="select2 form-control">
<option value="a">Pilih Jabatan</option>
@foreach($jabatan as $j)
<option value="{{ $j->id_jabatan}}">{{ $j->nama_jabatan }}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row" id="bipeg" style="display:none">
<div class="col-md-12">
<div class="form-group">
<label for="Bidang-Pegawai" class="control-label col-md-4">Bidang</label>
<div class="col-md-8">
<select name="Bidang-Pegawai" id="Bidang-Pegawai" class="select2 form-control">
<option value="a">Pilih Bidang</option>
@foreach($bidang as $s)
<option value="{{ $s->id_bidang}}">{{ $s->nama_bidang }}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row" id="sekpeg" style="display:none">
<div class="col-md-12">
<div class="form-group">
<label for="Seksi-Pegawai" class="control-label col-md-4">Seksi</label>
<div class="col-md-8">
<select name="Seksi-Pegawai" id="Seksi-Pegawai" class="select2 form-control">
<option value="a">Pilih Seksi</option>
@foreach($seksi as $s)
<option value="{{ $s->id_seksi}}">{{ $s->nama_seksi }}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h4 style="text-align:center"> Jabatan Sistem </h4>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Chk-Admin" class="control-label col-md-4">Admin</label>
<div class="col-md-8">
<input id="Chk-Admin" name="Chk-Admin" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();"/>
<input type="hidden" id="ckadmin" name="ckadmin"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPK" class="control-label col-md-4">PPK</label>
<div class="col-md-8">
<input id="Chk-PPK" name="Chk-PPK" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();"/>
<input type="hidden" id="ckppk" name="ckppk"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPTK" class="control-label col-md-4">PPTK</label>
<div class="col-md-8">
<input id="Chk-PPTK" name="Chk-PPTK" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();"/>
<input type="hidden" id="ckpptk" name="ckpptk"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPBJ" class="control-label col-md-4">PPBJ</label>
<div class="col-md-8">
<input id="Chk-PPBJ" name="Chk-PPBJ" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak"onchange="JabatanSistem();">
<input type="hidden" id="ckppbj" name="ckppbj"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPHP" class="control-label col-md-4">PPHP</label>
<div class="col-md-8">
<input id="Chk-PPHP" name="Chk-PPHP" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();">
<input type="hidden" id="ckpphp" name="ckpphp"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-Bendahara" class="control-label col-md-4">Bd.hara</label>
<div class="col-md-8">
<input id="Chk-Bendahara" name="Chk-Bendahara" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();">
<input type="hidden" id="ckbenda" name="ckbenda"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Chk-SPJ" class="control-label col-md-4">SPJ</label>
<div class="col-md-8">
<input id="Chk-SPJ" name="Chk-SPJ" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();">
<input type="hidden" id="ckspj" name="ckspj"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-Kor" class="control-label col-md-4">Koor.Pkt</label>
<div class="col-md-8">
<input id="Chk-Kor" name="Chk-Kor" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();">
<input type="hidden" id="ckkor" name="ckkor"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-P1" class="control-label col-md-4">P1</label>
<div class="col-md-8">
<input id="Chk-P1" name="Chk-P1" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistem();">
<input type="hidden" id="ckp1" name="ckp1"/>
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
<div class="modal fade" id="UbahPegawai" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  style="text-align:center">Ubah Pegawai</h3>
</div>
<div class="modal-body">
<form action="{{ url('pegawai/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idpegawai" name="idpegawai">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Pegawai_Ubah" class="control-label col-md-4" >Nama Pegawai</label>
<div class="col-md-8">
<input  type="text" id="Nama_Pegawai_Ubah" name="Nama_Pegawai_Ubah" class="form-control"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="NIP_Pegawai_Ubah" class="control-label col-md-4">NIP Pegawai</label>
<div class="col-md-8">                                            
<input type="text" id="NIP_Pegawai_Ubah" name="NIP_Pegawai_Ubah" class="form-control" value="{{ old('NIP_Pegawai_Ubah') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Golongan_Ubah" class="control-label col-md-4">Golongan</label>
<div class="col-md-8"> 
<select name="Golongan_Ubah" id="Golongan_Ubah" class="select2 form-control">
<option value="a">Pilih Golongan</option>
@foreach($golongan as $g)
<option value="{{$g->id_golongan}}">{{$g->nama_golongan}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jabdin_Ubah" class="control-label col-md-4">Jabatan Dinas</label>
<div class="col-md-8"> 
<select name="Jabdin_Ubah" id="Jabdin_Ubah" class="select2 form-control">
<option value="a">Pilih Jabatan</option>
@foreach($jabatan as $j)
<option value="{{$j->id_jabatan}}">{{ $j->nama_jabatan}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row" id="bipegubah">
<div class="col-md-12">
<div class="form-group">
<label for="Bidang-Pegawai_Ubah" class="control-label col-md-4">Bidang</label>
<div class="col-md-8"> 
<select name="Bidang-Pegawai_Ubah" id="Bidang-Pegawai_Ubah" class="select2 form-control">
<option value="a">Pilih Bidang</option>
@foreach($bidang as $s)
<option value="{{$s->id_bidang}}">{{ $s->nama_bidang}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
<div class="row" id="sekpegubah">
<div class="col-md-12">
<div class="form-group">
<label for="Seksi-Pegawai_Ubah" class="control-label col-md-4">Seksi</label>
<div class="col-md-8"> 
<select name="Seksi-Pegawai_Ubah" id="Seksi-Pegawai_Ubah" class="select2 form-control">
<option value="a">Pilih Seksi</option>
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
<h4 style="text-align:center"> Jabatan Sistem </h4>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Chk-Admin_Ubah" class="control-label col-md-4">Admin</label>
<div class="col-md-8">
<input id="Chk-Admin_Ubah" name="Chk-Admin_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();"/>
<input type="hidden" id="ckadminubah" name="ckadminubah"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPK_Ubah" class="control-label col-md-4">PPK</label>
<div class="col-md-8">
<input id="Chk-PPK_Ubah" name="Chk-PPK" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();"/>
<input type="hidden" id="ckppkubah" name="ckppkubah"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPTK_Ubah" class="control-label col-md-4">PPTK</label>
<div class="col-md-8">
<input id="Chk-PPTK_Ubah" name="Chk-PPTK_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();"/>
<input type="hidden" id="ckpptkubah" name="ckpptkubah"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPBJ_Ubah" class="control-label col-md-4">PPBJ</label>
<div class="col-md-8">
<input id="Chk-PPBJ_Ubah" name="Chk-PPBJ_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak"onchange="JabatanSistemUbah();">
<input type="hidden" id="ckppbjubah" name="ckppbjubah"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-PPHP_Ubah" class="control-label col-md-4">PPHP</label>
<div class="col-md-8">
<input id="Chk-PPHP_Ubah" name="Chk-PPHP_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();">
<input type="hidden" id="ckpphpubah" name="ckpphpubah"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-Bendahara_Ubah" class="control-label col-md-4">Bd.hara</label>
<div class="col-md-8">
<input id="Chk-Bendahara_Ubah" name="Chk-Bendahara_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();">
<input type="hidden" id="ckbendaubah" name="ckbendaubah"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Chk-SPJ_Ubah" class="control-label col-md-4">SPJ</label>
<div class="col-md-8">
<input id="Chk-SPJ_Ubah" name="Chk-SPJ_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();">
<input type="hidden" id="ckspjubah" name="ckspjubah"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-Kor_Ubah" class="control-label col-md-4">Koor.Pkt</label>
<div class="col-md-8">
<input id="Chk-Kor_Ubah" name="Chk-Kor_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();">
<input type="hidden" id="ckkorubah" name="ckkorubah"/>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Chk-P1_Ubah" class="control-label col-md-4">P1</label>
<div class="col-md-8">
<input id="Chk-P1_Ubah" name="Chk-P1_Ubah" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="JabatanSistemUbah();">
<input type="hidden" id="ckp1ubah" name="ckp1ubah"/>
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
@endsection