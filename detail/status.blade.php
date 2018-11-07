@extends('layouts.master2')
@section('title','Status Paket')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>{{$data->nama_paket}}
<small>Status & Detail Paket</small>
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
<div class="portlet light ">
<div class="portlet-title">
<div class="caption caption-md">
<i class="icon-bar-chart font-dark hide"></i>
<span class="caption-subject font-green-steel uppercase bold">Stakeholder</span>
</di>
</div>
<div class="portlet-body">
<div class="panel-group accordion" id="accordion1">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1"> Dinas </a>
</h4>
</div>
<div id="collapse_1" class="panel-collapse in">
<div class="panel-body">
<div class="table-scrollable">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th> Uraian Tugas </th>
<th> Nama </th>
<th> NIP </th>
</tr>
</thead>
<tbody>
<tr>
<td> PPK </td>
<td> {{$data->nama_ppk}} </td>
<td> {{$data->nip_ppk}}</td>
</tr>
<tr>
<td> PPTK </td>
<td> {{$data->nama_pptk}} </td>
<td> {{$data->nip_pptk}}</td>
</tr>
<tr>
<td> Tenaga Teknis </td>
<td> {{$data->nama_kordinator}} </td>
<td> {{$data->kordinator_paket}}</td>
</tr>
@if($jmlpphp->jml==1)
<tr>
<td> PPHP </td>
<td> {{$pphp->nama_pegawai}} </td>
<td> {{$pphp->nip_pegawai}}</td>
</tr>
@else
<tr>
<td> PPHP </td>
<td></td>
<td></td>
</tr>
<tr>
<td> &nbsp;&nbsp;&nbsp; 1. Ketua </td>
@if($ketupphp!=null)
<td>{{$ketupphp->nama_pegawai}} </td>
<td>{{$ketupphp->nip_pegawai}}</td>
@else
<td></td>
<td></td>
@endif
</tr>
<tr>
<td> &nbsp;&nbsp;&nbsp; 2. Sekretaris </td>
@if($sekpphp!=null)
<td> {{$sekpphp->nama_pegawai}} </td>
<td> {{$sekpphp->nip_pegawai}}</td>
@else 
<td></td>
<td></td>
@endif
</tr>
<?php $i=3;?>
@if($angpphp!=null)
@foreach($angpphp as $a)
<tr>
<td> &nbsp;&nbsp;&nbsp; {{$i}}. Anggota </td>
<td> {{$a->nama_pegawai}} </td>
<td> {{$a->nip_pegawai}}</td>
</tr>
<?php $i++;?>
@endforeach
@endif
@endif
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2"> Kontraktor ( {{$data->nama_kontraktor}} )</a>
</h4>
</div>
<div id="collapse_2" class="panel-collapse collapse">
<div class="panel-body" style="height:200px; overflow-y:auto;">
<div class="table-scrollable">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th> Uraian Tugas </th>
<th> Nama </th>
<th> SKA/SKT </th>
<th> No. Telp </th>
<th> Keterangan </th>
</tr>
</thead>
<tbody>
<tr>
<td> PM </td>
<td> {{$data->pm_kontraktor}} </td>
<td> {{$data->ska_pm_kontraktor}} </td>
<td> {{$data->telp_pm_kontraktor}} </td>
<td> {{$data->keterangan_pm_kontraktor}} </td>
</tr>
<tr>
<td> SM </td>
<td> {{$data->sm_kontraktor}} </td>
<td> {{$data->ska_sm_kontraktor}} </td>
<td> {{$data->telp_sm_kontraktor}} </td>
<td> {{$data->keterangan_sm_kontraktor}} </td>
</tr>
<tr>
<td> Pelaksana </td>
<td> {{$data->pelaksana_kontraktor}} </td>
<td> {{$data->ska_pelaksana_kontraktor}} </td>
<td> {{$data->telp_pelaksana_kontraktor}} </td>
<td> {{$data->keterangan_pelaksana_kontraktor}} </td>
</tr>
<tr>
<td> Direktur </td>
<td> {{$data->direktur_kontraktor}} </td>
<td> {{$data->ska_direktur_kontraktor}} </td>
<td> {{$data->telp_direktur_kontraktor}} </td>
<td> {{$data->keterangan_direktur_kontraktor}} </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3"> Konsultan Pengawas/MK ( {{$data->nama_konsultan}} )</a>
</h4>
</div>
<div id="collapse_3" class="panel-collapse collapse">
<div class="panel-body">
<div class="table-scrollable">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th> Uraian Tugas </th>
<th> Nama </th>
<th> SKA/SKT </th>
<th> No. Telp </th>
<th> Keterangan </th>
</tr>
</thead>
<tbody>
<tr>
<td> PM </td>
<td> {{$data->pm_konsultan}} </td>
<td> {{$data->ska_pm_konsultan}} </td>
<td> {{$data->telp_pm_konsultan}} </td>
<td> {{$data->keterangan_pm_konsultan}} </td>
</tr>
<tr>
<td> SM </td>
<td> {{$data->sm_konsultan}} </td>
<td> {{$data->ska_sm_konsultan}} </td>
<td> {{$data->telp_sm_konsultan}} </td>
<td> {{$data->keterangan_sm_konsultan}} </td>
</tr>
<tr>
<td> Pelaksana </td>
<td> {{$data->pelaksana_konsultan}} </td>
<td> {{$data->ska_pelaksana_konsultan}} </td>
<td> {{$data->telp_pelaksana_konsultan}} </td>
<td> {{$data->keterangan_pelaksana_konsultan}} </td>
</tr>
<tr>
<td> Direktur </td>
<td> {{$data->direktur_konsultan}} </td>
<td> {{$data->ska_direktur_konsultan}} </td>
<td> {{$data->telp_direktur_konsultan}} </td>
<td> {{$data->keterangan_direktur_konsultan}} </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
{{-- <div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4"> Sub Kontraktor ( {{$data->nama_kontraktor}} )</a>
</h4>
</div>
<div id="collapse_4" class="panel-collapse collapse">
<div class="panel-body">
<div class="table-scrollable">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th> Daftar Sub Kontraktor </th>
<th> Pekerjaan Sub Kontraktor </th>
<th> Penanggung Jawab </th>
<th> Alamat </th>
<th> No. Telp </th>
</tr>
</thead>
<tbody>
<tr>
<td> {{$data->ska_pm_kontraktor}} </td>
<td> PM </td> 
<td> {{$data->pm_kontraktor}} </td>                       
<td> </td>
<td> {{$data->telp_pm_kontraktor}} </td>
</tr>
<tr>
<td> {{$data->ska_sm_kontraktor}} </td>
<td> SM </td> 
<td> {{$data->sm_kontraktor}} </td>                       
<td> </td>
<td> {{$data->telp_sm_kontraktor}} </td>
</tr>
<tr>
<td> {{$data->ska_pelaksana_kontraktor}} </td>
<td> Pelaksana </td> 
<td> {{$data->pelaksana_kontraktor}} </td>                       
<td> </td>
<td> {{$data->telp_pelaksana_kontraktor}} </td>
</tr>
<tr>
<td> {{$data->ska_direktur_kontraktor}} </td>
<td> Direktur </td> 
<td> {{$data->direktur_kontraktor}} </td>                       
<td> </td>
<td> {{$data->telp_direktur_kontraktor}} </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div> --}}
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="portlet light ">
<div class="portlet-title">
<div class="caption caption-md">
<i class="icon-bar-chart font-dark hide"></i>
<span class="caption-subject font-green-steel uppercase bold">Program & Kegiatan</span>
</div>
</div>
<div class="portlet-body form">
<form class="form-horizontal" role="form">
<div class="form-body">                                        
<div class="form-group">
<label class="col-md-3 control-label">Program</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->nama_program}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Kegiatan</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->nama_kegiatan}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Pekerjaan</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->nama_paket}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Kode Rekening</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->id_kegiatan}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Lokasi</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->nama_desa}} - {{$data->nama_kecamatan}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Pagu Anggaran</label>
<div class="col-md-9">
<p class="form-control-static">Rp. {{ number_format($data->nilai_paket,2,",",".") }}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tahun Anggaran</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->periode}}</p>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="portlet light ">
<div class="portlet-title">
<div class="caption">
<i class="icon-share font-dark hide"></i>
<span class="caption-subject font-green-steel bold uppercase">Lokasi Proyek</span>
</div>
</div>
<div class="portlet-body">
<input type="hidden" id="latlok" value="{{$data->lati_lokasi}}"></input>
<input type="hidden" id="longlok" value="{{$data->longi_lokasi}}"></input>
<input type="hidden" id="nampro" value="{{$data->nama_paket}}"></input>
<div id="mapcanvas" class="gmaps" height="500px"> </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="portlet light ">
<div class="portlet-title">
<div class="caption caption-md">
<i class="icon-bar-chart font-dark hide"></i>
<span class="caption-subject font-green-steel uppercase bold">Detail Paket</span>
</div>
<div class="actions">
<div class="btn-group">
@if(Auth::user()->tipe==5||Auth::user()->tipe==6)
@if($usernya->status_pass==0)
<a class="btn blue-sharp" href="javascript:;" onClick="BukaStatus({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});">
<i class="fa fa-plus-square"></i>&nbsp;Tambah Adendum
</a>
@else
<a class="btn blue-sharp" href="javascript:;" onClick="TambahAdendum({{$data->id_paket}});">
<i class="fa fa-plus-square"></i>&nbsp;Tambah Adendum
</a>
@endif
@else
@if(Auth::user()->tipe==0)
<a class="btn blue-sharp" href="javascript:;" onClick="TambahAdendum({{$data->id_paket}});">
<i class="fa fa-plus-square"></i>&nbsp;Tambah Adendum
</a>
@endif
@endif
</div>
</div>
</div>
<div class="portlet-body form">
<form class="form-horizontal" role="form">
<div class="form-body">
<div class="form-group">
<label class="col-md-3 control-label">No. Kontrak</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->nomor_kontrak}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. Kontrak</label>
<div class="col-md-9">
<?php $tglmulai=""; 
if (date("m",strtotime($data->tgl_mulai))==1) {
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Januari '.date('Y',strtotime($data->tgl_mulai));
} elseif (date("m",strtotime($data->tgl_mulai))==2){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Februari '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==3){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Maret '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==4){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' April '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==5){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Mei '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==6){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Juni '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==7){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Juli '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==8){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Agustus '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==9){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' September '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==10){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Oktober '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==11){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' November '.date('Y',strtotime($data->tgl_mulai));
}elseif (date("m",strtotime($data->tgl_mulai))==12){
$tglmulai = date('d',strtotime($data->tgl_mulai)).' Desember '.date('Y',strtotime($data->tgl_mulai));
}?>
<p class="form-control-static">{{$tglmulai}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">No. SPMK</label>
<div class="col-md-9">
<p class="form-control-static">{{$data->no_spmk}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. SPMK</label>
<div class="col-md-9">
<?php $tglspmk=""; 
if (date("m",strtotime($data->tgl_spmk))==1) {
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Januari '.date('Y',strtotime($data->tgl_spmk));
} elseif (date("m",strtotime($data->tgl_spmk))==2){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Februari '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==3){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Maret '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==4){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' April '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==5){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Mei '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==6){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Juni '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==7){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Juli '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==8){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Agustus '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==9){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' September '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==10){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Oktober '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==11){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' November '.date('Y',strtotime($data->tgl_spmk));
}elseif (date("m",strtotime($data->tgl_spmk))==12){
$tglspmk = date('d',strtotime($data->tgl_spmk)).' Desember '.date('Y',strtotime($data->tgl_spmk));
}?>
<p class="form-control-static">{{$tglspmk}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. ST 1</label>
<div class="col-md-9">
<?php $tglst1=""; 
if (date("m",strtotime($data->tgl_st1))==1) {
$tglst1 = date('d',strtotime($data->tgl_st1)).' Januari '.date('Y',strtotime($data->tgl_st1));
} elseif (date("m",strtotime($data->tgl_st1))==2){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Februari '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==3){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Maret '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==4){
$tglst1 = date('d',strtotime($data->tgl_st1)).' April '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==5){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Mei '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==6){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Juni '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==7){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Juli '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==8){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Agustus '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==9){
$tglst1 = date('d',strtotime($data->tgl_st1)).' September '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==10){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Oktober '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==11){
$tglst1 = date('d',strtotime($data->tgl_st1)).' November '.date('Y',strtotime($data->tgl_st1));
}elseif (date("m",strtotime($data->tgl_st1))==12){
$tglst1 = date('d',strtotime($data->tgl_st1)).' Desember '.date('Y',strtotime($data->tgl_st1));
}?>
<p class="form-control-static">{{$tglst1}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. ST 2</label>
<div class="col-md-9">
<?php $tglst2=""; 
if (date("m",strtotime($data->tgl_st2))==1) {
$tglst2 = date('d',strtotime($data->tgl_st2)).' Januari '.date('Y',strtotime($data->tgl_st2));
} elseif (date("m",strtotime($data->tgl_st2))==2){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Februari '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==3){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Maret '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==4){
$tglst2 = date('d',strtotime($data->tgl_st2)).' April '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==5){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Mei '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==6){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Juni '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==7){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Juli '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==8){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Agustus '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==9){
$tglst2 = date('d',strtotime($data->tgl_st2)).' September '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==10){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Oktober '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==11){
$tglst2 = date('d',strtotime($data->tgl_st2)).' November '.date('Y',strtotime($data->tgl_st2));
}elseif (date("m",strtotime($data->tgl_st2))==12){
$tglst2 = date('d',strtotime($data->tgl_st2)).' Desember '.date('Y',strtotime($data->tgl_st2));
}?>
<p class="form-control-static">{{$tglst2}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Masa Pelaksanaan</label>
<div class="col-md-9">
<?php
$startTimeStamp = strtotime($data->tgl_mulai);
$endTimeStamp = strtotime($data->tgl_selesai);
$timeDiff = abs($endTimeStamp - $startTimeStamp);
$numberDays = $timeDiff/86400;
$numberDays = intval($numberDays);
$numberDays+=1;
?> 
<p class="form-control-static"> {{$numberDays}} Hari Kalender</p>
</div>
</div> 
<div class="form-group">
<label class="col-md-3 control-label">Masa Pemeliharaan</label>
<div class="col-md-9">
<p class="form-control-static"> {{$numberDays}} Hari Kalender</p>
</div>
</div> 
<div class="form-group">
<label class="col-md-3 control-label">Nilai Kontrak</label>
<div class="col-md-9">
<p class="form-control-static">Rp. {{ number_format($data->nilai_paket,2,",",".") }}</p>
</div>
</div> 
</div>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<?php $i=1;?>
@foreach($adendum as $a)
<div class="col-md-6 col-sm-6">
<div class="portlet light ">
<div class="portlet-title">
<div class="caption caption-md">
<i class="icon-bar-chart font-dark hide"></i>
<span class="caption-subject font-green-steel uppercase bold">Adendum Ke {{$i}}</span>
</div>
<div class="actions">
<div class="btn-group">
@if(Auth::user()->tipe==5||Auth::user()->tipe==6)
@if($usernya->status_pass==0)
<a  onClick="BukaStatus({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="btn red-flamingo"><i class="fa fa-trash"></i>Hapus Adendum</a>
@else
<a href="{{ URL::to('/status/delete/' . $a->id_adendum) }}" class="btn red-flamingo" data-placement="left" data-singleton="true" data-original-title="Hapus Adendum" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true"><i class="fa fa-trash"></i>Hapus Adendum</a>
@endif
@else
@if(Auth::user()->tipe==0)
<a href="{{ URL::to('/status/delete/' . $a->id_adendum) }}" class="btn red-flamingo" data-placement="left" data-singleton="true" data-original-title="Hapus Adendum" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true"><i class="fa fa-trash"></i>Hapus Adendum</a>
@endif
@endif
</div>
</div>
</div>
<div class="portlet-body form">
<form class="form-horizontal" role="form">
<div class="form-body">
<div class="form-group">
<label class="col-md-3 control-label">No. Kontrak</label>
<div class="col-md-9">
<p class="form-control-static">{{$a->no_kontrak_adendum}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. Adendum</label>
<div class="col-md-9">
<?php $tglmulai=""; 
if (date("m",strtotime($a->tgl_kontrak_adendum))==1) {
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Januari '.date('Y',strtotime($a->tgl_kontrak_adendum));
} elseif (date("m",strtotime($a->tgl_kontrak_adendum))==2){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Februari '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==3){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Maret '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==4){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' April '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==5){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Mei '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==6){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Juni '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==7){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Juli '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==8){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Agustus '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==9){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' September '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==10){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Oktober '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==11){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' November '.date('Y',strtotime($a->tgl_kontrak_adendum));
}elseif (date("m",strtotime($a->tgl_kontrak_adendum))==12){
$tglmulai = date('d',strtotime($a->tgl_kontrak_adendum)).' Desember '.date('Y',strtotime($a->tgl_kontrak_adendum));
}?>
<p class="form-control-static">{{$tglmulai}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. ST 1</label>
<div class="col-md-9">
<?php $tglst1=""; 
if (date("m",strtotime($a->tgl_st1_adendum))==1) {
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Januari '.date('Y',strtotime($a->tgl_st1_adendum));
} elseif (date("m",strtotime($a->tgl_st1_adendum))==2){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Februari '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==3){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Maret '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==4){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' April '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==5){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Mei '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==6){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Juni '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==7){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Juli '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==8){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Agustus '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==9){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' September '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==10){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Oktober '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==11){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' November '.date('Y',strtotime($a->tgl_st1_adendum));
}elseif (date("m",strtotime($a->tgl_st1_adendum))==12){
$tglst1 = date('d',strtotime($a->tgl_st1_adendum)).' Desember '.date('Y',strtotime($a->tgl_st1_adendum));
}?>
<p class="form-control-static">{{$tglst1}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Tgl. ST 2</label>
<div class="col-md-9">
<?php $tglst2=""; 
if (date("m",strtotime($a->tgl_st2_adendum))==1) {
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Januari '.date('Y',strtotime($a->tgl_st2_adendum));
} elseif (date("m",strtotime($a->tgl_st2_adendum))==2){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Februari '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==3){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Maret '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==4){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' April '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==5){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Mei '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==6){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Juni '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==7){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Juli '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==8){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Agustus '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==9){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' September '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==10){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Oktober '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==11){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' November '.date('Y',strtotime($a->tgl_st2_adendum));
}elseif (date("m",strtotime($a->tgl_st2_adendum))==12){
$tglst2 = date('d',strtotime($a->tgl_st2_adendum)).' Desember '.date('Y',strtotime($a->tgl_st2_adendum));
}?>
<p class="form-control-static">{{$tglst2}}</p>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Nilai Kontrak</label>
<div class="col-md-9">
<p class="form-control-static">Rp. {{ number_format($a->nilai_kontrak_adendum,2,",",".") }}</p>
</div>
</div> 
</div>
</form>
</div>
</div>
</div>
<?php $i++;?>
@endforeach
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade bs-modal-lg" id="TambahAdendum" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-full">
<div class="modal-content">
<form action="{{ url('status') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="idpaket1" id="idpaket1">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h4 class="modal-title">Tambah Adendum</h4>
</div>
<div class="modal-body form">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Nomor_Kontrak" class="col-md-4 control-label">Nomor Kontrak Adendum</label>
<div class="col-md-8">
<input  type="text" id="Nomor_Kontrak" name="Nomor_Kontrak" class="form-control" value="{{ old('Nomor_Kontrak') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_Adendum" class="control-label col-md-4">Tgl Adendum</label>
<div class="col-md-8">
<input  type="text" id="Tgl_Adendum" name="Tgl_Adendum" class="form-control" value="{{ old('Tgl_Adendum') }}">                    
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_ST1" class="col-md-4 control-label">Tgl ST 1</label>
<div class="col-md-8">
<input  type="text" id="Tgl_ST1" name="Tgl_ST1" class="form-control" value="{{ old('Tgl_ST1') }}">
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Tgl_ST2" class="control-label col-md-4">Tgl ST 2</label>
<div class="col-md-8">
<input type="text" id="Tgl_ST2" name="Tgl_ST2" class="form-control" value="{{ old('Tgl_ST2') }}">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Nilai_Kontrak" class="col-md-4 control-label">Nilai Kontrak</label>
<div class="col-md-8">
<input  type="text" id="Nilai_Kontrak" name="Nilai_Kontrak" class="form-control autonumber" data-a-sign="Rp " value="{{ old('Nilai_Kontrak') }}">
<input type="hidden" id="Nilai_Kon" name="Nilai_Kon" />
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn red-intense" data-dismiss="modal">Batal</button>
<button type="submit" class="btn blue-sharp">Simpan</button>
</div>
</form>
</div>
</div>
</div>
<div class="modal fade " id="BukaStatus" role="dialog" aria-hidden="true">
<div class="modal-dialog ">
<div class="modal-content">
<form action="{{ url('/status/buka') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="idpaket2" id="idpaket2">
<input type="hidden" name="tipenya" id="tipenya">
<input type="hidden" name="idnya" id="idnya">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h4 class="modal-title">Buka Kunci</h4>
</div>
<div class="modal-body form">
<div class="row">
@if(Auth::user()->tipe==5)
<div class="col-md-12">
<div class="form-group">
<label for="Passnya" class="col-md-4 control-label">Password Konsultan</label>
<div class="col-md-6">
<input  type="password" id="Passnya" name="Passnya" class="form-control" value="{{ old('Passnya') }}">
</div>
</div>
</div>
@else
<div class="col-md-12">
<div class="form-group">
<label for="Passnya" class="col-md-4 control-label">Password Kontraktor</label>
<div class="col-md-6">
<input  type="password" id="Passnya" name="Passnya" class="form-control" value="{{ old('Passnya') }}">
</div>
</div>
</div>
@endif
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn red-intense" data-dismiss="modal">Batal</button>
<button type="submit" class="btn blue-sharp">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection