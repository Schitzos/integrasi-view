@extends('layouts.master')
@section('title','Daerah Bawean')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Dalam Daerah
<small>Perjalanan Dinas Bawean</small>
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
<a  class="btn blue-madison" data-container="body" href="{{ URL::to('/bawean/create') }}">
<i class="fa fa-plus-square"></i>&nbsp;Tambah Perjalanan Bawean
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
<th style="text-align:center;">Nomor Surat</th>
<th style="text-align:center;">Petugas</th>
<th style="text-align:center;">Tugas</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
@if($dt->sts_kendali==0)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nomor_perjalanan}}</td>
<td style="text-align:right;">{{$dt->nama_pegawai}}</td>
<td style="text-align:left;">{{$dt->tugas}}</td>
<td style="text-align:center;">
<a class="btn tooltips btn-xs blue-sharp " data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('bawean/' . $dt->id_perjalanan .'/cetak') }}" target="_blank">
<i class="fa fa-print"></i>
</a>&nbsp;&nbsp;
<a class="btn tooltips btn-xs yellow-casablanca " data-container="body" data-placement="top" data-original-title="Ubah Perjalanan Dinas" href="{{ URL::to('/bawean/'.$dt->id_perjalanan.'/edit') }}">
<i class="fa fa-edit"></i>
</a>&nbsp;&nbsp;
<a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Perjalanan Dinas" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_perjalanan }},'/bawean');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/bawean/delete/'.$dt->id_perjalanan) }}" class="btn grey-gallery btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus Perjalanan ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>
</td>
</tr>
@elseif ($dt->sts_kendali==1)
<tr style="background-color:yellow">
<td style="text-align:center;">{{ $i}}</td>
<td style="text-align:left;">{{$dt->nomor_perjalanan}}</td>
<td style="text-align:right;">{{$dt->nama_pegawai}}</td>
<td style="text-align:left;">{{$dt->tugas}}</td>
<td style="text-align:center;">
<a class="btn tooltips btn-xs blue-sharp " data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('bawean/' . $dt->id_perjalanan .'/cetak') }}" target="_blank">
<i class="fa fa-print"></i>
</a>&nbsp;&nbsp;
</td>
</tr>
@elseif ($dt->sts_kendali==2)
<tr style="background-color:green">
<td style="text-align:center;">{{ $i}}</td>
<td style="text-align:left;">{{$dt->nomor_perjalanan}}</td>
<td style="text-align:right;">{{  $dt->nama_pegawai}}</td>
<td style="text-align:left;">{{ $dt->tugas}}</td>
<td style="text-align:center;">
<a class="btn tooltips btn-xs blue-sharp " data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('bawean/' . $dt->id_perjalanan .'/cetak') }}" target="_blank">
<i class="fa fa-print"></i>
</a>&nbsp;&nbsp;
</td>
</tr>
@elseif ($dt->sts_kendali==3)
<tr style="background-color:red">
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nomor_perjalanan}}</td>
<td style="text-align:right;">{{ $dt->nama_pegawai}}</td>
<td style="text-align:left;">{{$dt->tugas}}</td>
<td style="text-align:center;">
<a class="btn tooltips btn-xs blue-sharp " data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('bawean/' . $dt->id_perjalanan .'/cetak') }}" target="_blank">
<i class="fa fa-print"></i>
</a>&nbsp;&nbsp;
<a class="btn tooltips btn-xs yellow-casablanca " data-container="body" data-placement="top" data-original-title="Ubah Perjalanan Dinas" href="{{ URL::to('/bawean/'.$dt->id_perjalanan.'/edit') }}">
<i class="fa fa-edit"></i>
</a>&nbsp;&nbsp;
<a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Perjalanan Dinas" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_perjalanan }},'/bawean');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/bawean/delete/'.$dt->id_perjalanan) }}" class="btn grey-gallery btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus Perjalanan ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>
</td>
</tr>
@endif
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
<div class="modal fade" id="TambahKendali" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Pengajuan SPJ</h3>
</div>
<div class="modal-body">
<form action="{{ url('kendali') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idkegiatan" name="idkegiatan">
<input type="hidden" id="idtabel" name="idtabel">
<input type="hidden" id="routene" name="routene">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Bulan" class="control-label col-md-4" >Bulan</label>
<div class="col-md-8">
<select class="form-control select2" style="width:100%" id="Bulan_Kendali" name="Bulan_Kendali">
@foreach ($bulan as $b)
<option value="{{ $b->kode_bulan }}">{{ $b->nama_bulan }}</option>
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