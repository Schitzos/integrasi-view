@extends('layouts.master')
@section('title','Hari Libur')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Libur
<small>Daftar Hari Libur</small>
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
<button class="btn blue-madison" onclick="tambahlibur();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Hari Libur</button>
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
<th style="text-align:center;">Tanggal Libur</th>
<th style="text-align:center;">Keterangan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td style="text-align:center;">{{ $i }}</td>
<td style="text-align:left;">
@if(date("m",strtotime( $dt->tgl_libur))==1)
{{ date('d',strtotime($dt->tgl_libur)) }} Januari {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==2)
{{ date('d',strtotime($dt->tgl_libur)) }} Februari {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==3)
{{ date('d',strtotime($dt->tgl_libur)) }} Maret {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==4)
{{ date('d',strtotime($dt->tgl_libur)) }} April {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==5)
{{ date('d',strtotime($dt->tgl_libur)) }} Mei {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==6)
{{ date('d',strtotime($dt->tgl_libur)) }} Juni {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==7)
{{ date('d',strtotime($dt->tgl_libur)) }} Juli {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==8)
{{ date('d',strtotime($dt->tgl_libur)) }} Agustus {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==9)
{{ date('d',strtotime($dt->tgl_libur)) }} September {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==10)
{{ date('d',strtotime($dt->tgl_libur)) }} Oktober {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==11)
{{ date('d',strtotime($dt->tgl_libur)) }} November {{ date('Y',strtotime($dt->tgl_libur)) }}
@elseif(date('m',strtotime($dt->tgl_libur))==12)
{{ date('d',strtotime($dt->tgl_libur)) }} Desember {{ date('Y',strtotime($dt->tgl_libur)) }}
@endif
</td>
<td style="text-align:left;">{{ $dt->keterangan_libur }}</td>
<td style="text-align:center;">
<a class="btn tooltips btn-xs yellow-casablanca " data-container="body" data-placement="top" data-original-title="Ubah Hari Libur" data-toggle="modal" href="#" onclick="ubahlibur('{{ $dt->id_libur }}')">
<i class="fa fa-edit"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/libur/delete/' . $dt->id_libur) }}" class="btn grey-gallery btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus Hari Libur ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="tambahlibur" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Hari Libur</h3>
</div>
<div class="modal-body">
<form action="{{ url('libur') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tgl_Libur" class="control-label col-md-4" style="color:#009dc7;">Tanggal</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Tgl_Libur" name="Tgl_Libur" class="form-control" value="{{ old('Tgl_Libur') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Keterangan_Libur" class="control-label col-md-4" style="color:#009dc7;">Keterangan</label>
<div class="col-md-8">
<textarea id="Keterangan_Libur" name="Keterangan_Libur" class="form-control" style="color:#009dc7;"></textarea>
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
<div class="modal fade" id="ubahlibur" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Hari Libur</h3>
</div>
<div class="modal-body">
<form action="{{ url('libur/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idlibur" name="idlibur">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tgl_Libur_Ubah" class="control-label col-md-4" style="color:#009dc7;">Tanggal</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Tgl_Libur_Ubah" name="Tgl_Libur_Ubah" class="form-control" >
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Keterangan_Libur_Ubah" class="control-label col-md-4" style="color:#009dc7;">Keterangan</label>
<div class="col-md-8">
<textarea id="Keterangan_Libur_Ubah" name="Keterangan_Libur_Ubah" class="form-control" style="color:#009dc7;"></textarea>
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