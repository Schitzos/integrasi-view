@extends('layouts.master')
@section('title','Kendali')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Kendali
<small>SPJ</small>
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
</div>
<div class="actions">
<div class="btn-group">
</div>
</div>
</div>
<div class="portlet-body">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="Bindang-Kendali" class="control-label col-lg-3">Bidang</label>
<div class="col-lg-9">
<select class="form-control select2" id="Bidang-Kendali" name="Bidang-Kendali" style="width: 100%;">
@if($bidange==0)
<option value="0" selected>Semua Bidang</option>
@foreach($bidang as $b)
<option value="{{$b->id_bidang}}">{{$b->nama_bidang}}</option>
@endforeach
@else
<option value="0">Semua Bidang</option>
@foreach($bidang as $b)
@if($bidange==$b->id_bidang)
<option value="{{$b->id_bidang}}" selected>{{$b->nama_bidang}}</option>
@else
<option value="{{$b->id_bidang}}" >{{$b->nama_bidang}}</option>
@endif
@endforeach
@endif
</select>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Kegiatan-Kendali" class="control-label col-lg-3">Kegiatan</label>
<div class="col-lg-9">
<select class="form-control select2" id="Kegiatan-Kendali" name="Kegiatan-Kendali" style="width: 100%;">
@if($kegiatane==0)
<option value="0" selected>Semua Kegiatan</option>
@foreach($kegiatan as $k)
<option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
@endforeach
@else
<option value="0">Semua Kegiatan</option>
@foreach($kegiatan as $k)
@if($kegiatane==$k->id_kegiatan)
<option value="{{$k->id_kegiatan}}" selected>{{$k->nama_kegiatan}}</option>
@else
<option value="{{$k->id_kegiatan}}" >{{$k->nama_kegiatan}}</option>
@endif
@endforeach
@endif
</select>
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label for="Bulan-Kendali" class="control-label col-lg-3">Bulan</label>
<div class="col-lg-9">
<select class="form-control select2" id="Bulan-Kendali" name="Bulan-Kendali" style="width: 100%;">
@if($bulane==0)
<option value="0" selected>Semua Bulan</option>
@foreach($bulan as $b)
<option value="{{$b->kode_bulan}}">{{$b->nama_bulan}}</option>
@endforeach
@else
<option value="0">Semua Bulan</option>
@foreach($bulan as $b)
@if($bulane==$b->kode_bulan)
<option value="{{$b->kode_bulan}}" selected>{{$b->nama_bulan}}</option>
@else
<option value="{{$b->kode_bulan}}">{{$b->nama_bulan}}</option>
@endif
@endforeach
@endif
</select>
</div>
</div>
</div>
</div>
<br/>
<hr/>
<table class="table table-striped table-bordered table-hover order-column" id="sample_1">
<thead>
<tr>
<th style="text-align:center;">No</th>
<th style="text-align:center;">Kegiatan</th>
<th style="text-align:center;">SPJ</th>
<th style="text-align:center;">Bulan Pengajuan</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
@if ($dt->status_kendali==0)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nama_kegiatan}}</td>
<td style="text-align:left;">
@if ($dt->tipe_spj==0)
Perjalan Dinas Dalam Daerah
@elseif ($dt->tipe_spj==1)
Perjalan Dinas Luar Daerah
@elseif ($dt->tipe_spj==2)
ATK
@elseif ($dt->tipe_spj==3)
Mamin
@elseif ($dt->tipe_spj==4)
Penggandaan
@elseif ($dt->tipe_spj==5)
Honor PPHP
@elseif ($dt->tipe_spj==6)
Honor PPBJ
@elseif ($dt->tipe_spj==7)
Honor Tim Teknis
@elseif ($dt->tipe_spj==8)
Honor Bulanan
@elseif ($dt->tipe_spj==9)
Honor Rapat
@elseif ($dt->tipe_spj==10)
Lembur
@endif
</td>
<td style="text-align:left;">
@if($dt->bulan_kendali==1)
Januari
@elseif($dt->bulan_kendali==2)
Februari
@elseif($dt->bulan_kendali==3)
Maret
@elseif($dt->bulan_kendali==4)
April
@elseif($dt->bulan_kendali==5)
Mei
@elseif($dt->bulan_kendali==6)
Juni
@elseif($dt->bulan_kendali==7)
Juli
@elseif($dt->bulan_kendali==8)
Agustus
@elseif($dt->bulan_kendali==9)
September
@elseif($dt->bulan_kendali==10)
Oktober
@elseif($dt->bulan_kendali==11)
November
@elseif($dt->bulan_kendali==12)
Desember
@endif
</td>
<td style="text-align:center;">
@if (Auth::user()->admin==1||Auth::user()->bendahara==1)
<a class="btn tooltips btn-xs green-meadow" data-container="body" data-placement="top" data-original-title="Setujui" data-toggle="modal" href="#" onclick="SetujuKendali('{{ $dt->id_kendali }}','{{ $dt->id_kegiatan }}');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/kendali/delete/'.$dt->id_kendali) }}" class="btn red-intense btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus/Tolak ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-times"></i>
</a>
@else
<a href="{{ URL::to('/kendali/delete/'.$dt->id_kendali) }}" class="btn red-intense btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus/Tolak ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-times"></i>
</a>
@endif
</td>
</tr>    
@else
<tr style="background-color: forestgreen;">
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;color: cornsilk;">{{$dt->nama_kegiatan}}</td>
<td style="text-align:left;color: cornsilk;">
@if ($dt->tipe_spj==0)
Perjalan Dinas Dalam Daerah
@elseif ($dt->tipe_spj==1)
Perjalan Dinas Luar Daerah
@elseif ($dt->tipe_spj==2)
ATK
@elseif ($dt->tipe_spj==3)
Mamin
@elseif ($dt->tipe_spj==4)
Penggandaan
@elseif ($dt->tipe_spj==5)
Honor PPHP
@elseif ($dt->tipe_spj==6)
Honor PPBJ
@elseif ($dt->tipe_spj==7)
Honor Tim Teknis
@elseif ($dt->tipe_spj==8)
Honor Bulanan
@elseif ($dt->tipe_spj==9)
Honor Rapat
@elseif ($dt->tipe_spj==10)
Lembur
@endif
</td>
<td style="text-align:left;color:cornsilk;">
@if($dt->bulan_kendali==1)
Januari
@elseif($dt->bulan_kendali==2)
Februari
@elseif($dt->bulan_kendali==3)
Maret
@elseif($dt->bulan_kendali==4)
April
@elseif($dt->bulan_kendali==5)
Mei
@elseif($dt->bulan_kendali==6)
Juni
@elseif($dt->bulan_kendali==7)
Juli
@elseif($dt->bulan_kendali==8)
Agustus
@elseif($dt->bulan_kendali==9)
September
@elseif($dt->bulan_kendali==10)
Oktober
@elseif($dt->bulan_kendali==11)
November
@elseif($dt->bulan_kendali==12)
Desember
@endif
</td>
<td style="text-align:center;">
@if (Auth::user()->admin==1||Auth::user()->bendahara==1)
{{--  <a class="btn tooltips btn-xs green-meadow" data-container="body" data-placement="top" data-original-title="Setujui" data-toggle="modal" href="#" onclick="SetujuKendali('{{ $dt->id_kendali }}','{{ $dt->id_kegiatan }}');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;  --}}
<a href="{{ URL::to('/kendali/delete/'.$dt->id_kendali) }}" class="btn red-intense btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus/Tolak ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-times"></i>
</a>
@else
<a href="{{ URL::to('/kendali/delete/'.$dt->id_kendali) }}" class="btn red-intense btn-xs " data-placement="left" data-singleton="true" data-original-title="Hapus/Tolak ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-times"></i>
</a>
@endif
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
</div>
</div>
<div class="modal fade" id="SetujuKendali" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Persetujuan SPJ</h3>
</div>
<div class="modal-body">
<form action="{{ url('kendali/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idkegiatan" name="idkegiatan">
<input type="hidden" id="idkendali" name="idkendali">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Bulan_Kendali" class="control-label col-md-4" >Bulan</label>
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
@endsection