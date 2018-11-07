@extends('layouts.master')
@section('title','Honor PPBJ')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Honor
<small>PPBJ</small>
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
<button class="btn blue-madison" onclick="Tambah_ppb_kegiatan();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Kegiatan</button>
</div>
{{-- <div class="actions">
<div class="btn-group">
</div>
</div> --}}
</div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover order-column">
<thead>
<tr>
<th>No<i class="fa sort"></i></th>
<th>Kegiatan<i class="fa sort"></i></th>
<th>Tindakan<i class="fa sort"></i></th>
</tr>
</thead>
<tbody>
@php
$i =1;    
@endphp
@foreach ($data as $dt)
@if ($dt->sts_kendali==0)
<tr>
<td>{{ $i }}</td>
<td>{{ $dt->nama_kegiatan }}</td>
<td style="text-align: center">
<a onclick="pilihbulanPPB('{{ $dt->id_kegiatan }}','{{ $dt->id_ppb }}');" class="btn tooltips yellow-crusta btn-xs" title="Cetak Honor PPB"  ><i class="fa fa-print"></i></a>
<a href="{{ url('/honor/ppb/list/'.$dt->id_ppb) }}" class="btn tooltips green btn-xs" title="List Honor PPB"  ><i class="fa fa-list"></i></a>
<a class="btn tooltips green-jungle btn-xs" title="Ubah PPB" onclick="EditHppb({{ $dt->id_ppb }});" ><i class="fa fa-edit"></i></a>
<a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Honor PPB" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_ppb }},'/honor/ppb');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/honor/ppb/delete/' . $dt->id_ppb) }}" class="btn red-mint btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Honor PPB" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>
</td>
</tr>

@elseif ($dt->sts_kendali==1)
<tr style="background-color: darkgoldenrod">
<td style="color: cornsilk;">{{ $i }}</td>
<td style="color: cornsilk;">{{ $dt->nama_kegiatan }}</td>
<td style="text-align: center">
<a onclick="pilihbulanPPB('{{ $dt->id_kegiatan }}','{{ $dt->id_ppb }}');" class="btn tooltips yellow-crusta btn-xs" title="Cetak Honor PPB"  ><i class="fa fa-print"></i></a>
{{--  <a href="{{ url('/honor/ppb/list/'.$dt->id_ppb) }}" class="btn tooltips green btn-xs" title="List Honor PPB"  ><i class="fa fa-list"></i></a>
<a class="btn tooltips green-jungle btn-xs" title="Ubah PPB" onclick="EditHppb({{ $dt->id_ppb }});" ><i class="fa fa-edit"></i></a>
<a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Honor PPB" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_ppb }},'/honor/ppb');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/honor/ppb/delete/' . $dt->id_ppb) }}" class="btn red-mint btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Honor PPB" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>  --}}
</td>
</tr>
@elseif ($dt->sts_kendali==2)
<tr style="background-color: forestgreen">
<td style="color: cornsilk;">{{ $i }}</td>
<td style="color: cornsilk;">{{ $dt->nama_kegiatan }}</td>
<td style="text-align: center">
<a onclick="pilihbulanPPB('{{ $dt->id_kegiatan }}','{{ $dt->id_ppb }}');" class="btn tooltips yellow-crusta btn-xs" title="Cetak Honor PPB"  ><i class="fa fa-print"></i></a>
{{--  <a href="{{ url('/honor/ppb/list/'.$dt->id_ppb) }}" class="btn tooltips green btn-xs" title="List Honor PPB"  ><i class="fa fa-list"></i></a>
<a class="btn tooltips green-jungle btn-xs" title="Ubah PPB" onclick="EditHppb({{ $dt->id_ppb }});" ><i class="fa fa-edit"></i></a>
<a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Honor PPB" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_ppb }},'/honor/ppb');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/honor/ppb/delete/' . $dt->id_ppb) }}" class="btn red-mint btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Honor PPB" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>  --}}
</td>
</tr>

@elseif ($dt->sts_kendali==3)
<tr style="background-color: firebrick">
<td style="color: cornsilk;">{{ $i }}</td>
<td style="color: cornsilk;">{{ $dt->nama_kegiatan }}</td>
<td style="text-align: center">
<a onclick="pilihbulanPPB('{{ $dt->id_kegiatan }}','{{ $dt->id_ppb }}');" class="btn tooltips yellow-crusta btn-xs" title="Cetak Honor PPB"  ><i class="fa fa-print"></i></a>
<a href="{{ url('/honor/ppb/list/'.$dt->id_ppb) }}" class="btn tooltips green btn-xs" title="List Honor PPB"  ><i class="fa fa-list"></i></a>
<a class="btn tooltips green-jungle btn-xs" title="Ubah PPB" onclick="EditHppb({{ $dt->id_ppb }});" ><i class="fa fa-edit"></i></a>
<a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Honor PPBJ" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_ppb }},'/honor/ppb');">
<i class="fa fa-check"></i>
</a>&nbsp;&nbsp;
<a href="{{ URL::to('/honor/ppb/delete/' . $dt->id_ppb) }}" class="btn red-mint btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Honor PPB" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
<i class="fa fa-trash-o"></i>
</a>
</td>
</tr>
@endif
@php
$i++;
@endphp
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
<div class="modal fade" id="tambah_H_ppb" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Tambah Kegiatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('honor/ppb/add_h_ppb/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="ppb_keg" class="control-label col-md-4">Kegiatan</label>
<div class="col-md-8">
<select style="color:#009dc7;" id="ppb_keg" name="ppb_keg" class="select2 form-control" required>
<option style="color:#009dc7;" value="">Pilih Kegiatan</option>
@foreach($kegiatan as $keg)                                     
<option style="color:#009dc7;" value="{{ $keg->id_kegiatan }}">{{ $keg->nama_kegiatan }}</option> 
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
<div class="modal fade" id="edit_H_ppb" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Edit Kegiatan</h3>
</div>
<div class="modal-body">
<form action="{{ url('honor/ppb/update_h_ppb/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" id="idhnrPpb" name="idhnrPpb">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="ppb_keg" class="control-label col-md-4">Kegiatan</label>
<div class="col-md-8">
<select style="color:#009dc7;" id="ppb_eh_keg" name="ppb_eh_keg" class="form-control" required>
<option style="color:#009dc7;" value="">Pilih Kegiatan</option>
@foreach($kegiatan as $keg)                                     
<option style="color:#009dc7;" value="{{ $keg->id_kegiatan }}">{{ $keg->nama_kegiatan }}</option> 
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
<div class="modal fade" id="change_bulanPPB" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Pilih Bulan</h3>
</div>
<div class="modal-body">
<form action="{{ url('/honor/ppb/cetak_h_ppb/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" id="idkegiatan1" name="idkegiatan1">
<input type="hidden" id="kd_honor" name="kd_honor">
<input type="hidden" id="idPPB" name="idPPB">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="bulan" class="control-label col-md-4">Bulan</label>
<div class="col-md-8">
<select style="color:#009dc7;" id="pil_bln" name="pil_bln" class="select2 form-control" required>
<option style="color:#009dc7;" value="">Pilih Bulan</option>
@foreach($bulan as $bln)                                     
<option style="color:#009dc7;" value="{{ $bln->kode_bulan }}">{{ $bln->nama_bulan }}</option> 
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
<i class="fa fa-hdd-o"></i>&nbsp;Cetak
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
@endsection