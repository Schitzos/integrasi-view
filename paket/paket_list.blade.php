@extends('layouts.master')
@section('title','Paket')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Daftar Paket
<small>Daftar Paket</small>
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
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->ppbj==1)
<a class="btn blue-madison" href="{{ URL::to('/paket/create') }}"><i class="fa fa-plus-square"></i>&nbsp;Tambah Paket</a>
@endif
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
<th style="text-align:center;">Nama Paket</th>
<th style="text-align:center;">Progres Fisik</th>
<th style="text-align:center;">Waktu<br>(Hari)</th>
<th style="text-align:center;">Progress Performa</th>
<th style="text-align:center;">Progres Keuangan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;$j=0;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}
<input type="hidden" id="idpaket{{$i}}" name="idpaket{{$i}}" value="{{$dt->id_paket}}"/>
</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_paket}}
<td  style="text-align:center;">
<div class="progress progress-striped active" onclick="TampilProgress({{$dt->id_paket}});" style="height:15px;margin-bottom:1px;">
<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$dt->realisasi_jadwal}}" aria-valuemin="0" aria-valuemax="100"  style="width: {{$dt->realisasi_jadwal}}%">
<span></span>
</div>
</div>
<div class="progress progress-striped active" onclick="TampilProgress({{$dt->id_paket}});" style="height:15px;margin-bottom:1px;">
<div id="progrencana" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{$dt->rencana_jadwal}}" aria-valuemin="0" aria-valuemax="100"
style="width: {{$dt->rencana_jadwal}}%">
<span></span>
</div>
</div>
</td>
<td  style="text-align:left;vertical-align:middle;">
<input id="range_{{$i}}" type="text" readonly/>
<input type="hidden" id="idpro_{{$i}}" value="{{$dt->id_paket}}"/>
</td>
<td  style="text-align:center;vertical-align:middle;">
<div id="chartdivmini_{{$i}}" onclick="TampilPerforma({{$dt->id_paket}});" style="width: 110px; height: 30px; display: inline-block; vertical-align: middle;">
</div>
</td>
<td  style="text-align:center;vertical-align:middle;">{{$dt->realisasi_keuangan}}%</td>
<td  style="text-align:center;vertical-align:middle;">
@if(Auth::user()->admin==1)
<a href="{{ URL::to('/status/'.$dt->id_paket) }}" class="btn green-jungle tooltips" title="Detail Paket"><i class="icon-eye"></i></a>
<a href="{{ URL::to('/paket/' . $dt->id_paket .'/edit') }}" class="btn yellow-casablanca tooltips" title="Ubah Paket"><i class="fa fa-edit"></i></a>
<a href="{{ URL::to('/paket/delete/' . $dt->id_paket) }}" class="btn grey-gallery" data-placement="left" data-singleton="true" data-original-title="Hapus Paket" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true"><i class="fa fa-trash"></i></a>
@else
@if(Auth::user()->ppk==1)
<a href="{{ URL::to('/status/'.$dt->id_paket) }}" class="btn green-jungle tooltips" title="Detail Paket"><i class="icon-eye"></i></a>
@elseif(Auth::user()->pptk==1)
<a href="{{ URL::to('/status/'.$dt->id_paket) }}" class="btn green-jungle tooltips" title="Detail Paket"><i class="icon-eye"></i></a>
<a href="{{ URL::to('/paket/' . $dt->id_paket .'/edit') }}" class="btn yellow-casablanca tooltips" title="Ubah Paket"><i class="fa fa-edit"></i></a>
<a href="{{ URL::to('/paket/delete/' . $dt->id_paket) }}" class="btn grey-gallery" data-placement="left" data-singleton="true" data-original-title="Hapus Paket" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true"><i class="fa fa-trash"></i></a>
@elseif(Auth::user()->ppbj==1)
<a href="{{ URL::to('/paket/' . $dt->id_paket .'/edit') }}" class="btn yellow-casablanca tooltips" title="Ubah Paket"><i class="fa fa-edit"></i></a>
<a href="{{ URL::to('/paket/delete/' . $dt->id_paket) }}" class="btn grey-gallery" data-placement="left" data-singleton="true" data-original-title="Hapus Paket" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true"><i class="fa fa-trash"></i></a>
@else
<a href="{{ URL::to('/status/'.$dt->id_paket) }}" class="btn green-jungle tooltips" title="Detail Paket"><i class="icon-eye"></i></a>
@endif
@endif
</td>
</tr>
<?php $i++;?>
@endforeach
<?php $jml = $i-1;?>
<input type="hidden" id="jmlpro" value="{{$jml}}"/>
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
<div class="modal fade fixed" id="grafikprogres" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal-full">
<div class="modal-content">
<div class="modal-body">
<div id="chartdivProgress"></div>
<button type="button" class="btn red-flamingo" data-dismiss="modal" aria-hidden="true">
<i class="fa fa-times"></i>&nbsp;Tutup
</button>
</div>
</div>
</div>
</div>
<div class="modal fade fixed" id="grafikrencana" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal-full">
<div class="modal-content">
<div class="modal-body">
<div><img src="../images/avatar/index2.png" width="100%"></div>
<button type="button" class="btn red-flamingo" data-dismiss="modal" aria-hidden="true" align="center">
<i class="fa fa-times"></i>&nbsp;Tutup
</button>
</div>
</div>
</div>
</div>
<div class="modal fade fixed" id="grafikperforma" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal-full">
<div class="modal-content">
<div class="modal-body">
<div id="chartdivPerforma"></div>
<button type="button" class="btn red-flamingo" data-dismiss="modal" aria-hidden="true">
<i class="fa fa-times"></i>&nbsp;Tutup
</button>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection