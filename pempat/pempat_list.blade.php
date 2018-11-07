@extends('layouts.master')
@section('title','P-4')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>P-4
{{-- <small>Perjalanan Dinas Dalam Daerah</small> --}}
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
<div class="col-lg-4">
<label for="Bidang-P4" class="control-label col-md-2" style="color:#555555;">Bidang</label>
<div class="col-md-10">                                               
<select id="Bidang-P4" name="Bidang-P4" class="select2 form-control">
@if ($bidange==0)
<option value="0" selected>Semua Bidang</option>
@foreach($bidang as $bid)                                     
<option value="{{ $bid->id_bidang }}">{{ $bid->nama_bidang }}</option> 
@endforeach    
@else
<option value="0">Semua Bidang</option>
@foreach($bidang as $bid)
@if($bidange==$bid->id_bidang)                                    
<option value="{{ $bid->id_bidang }}" selected>{{ $bid->nama_bidang }}</option> 
@else 
<option value="{{ $bid->id_bidang }}">{{ $bid->nama_bidang }}</option> 
@endif
@endforeach 
@endif
</select>
</div>
</div>
<div class="col-lg-4">
<label for="Bulan-P4" class="control-label col-md-2" style="color:#555555;">Bulan</label>
<div class="col-md-8">                                               
<select id="Bulan-P4" name="Bulan-P4" class="select2 form-control">
@if ($bulane==0)
<option value="0" selected>Semua Bulan</option>                                     
@foreach($bulan as $bln)
<option value="{{ $bln->kode_bulan }}">{{ $bln->nama_bulan }}</option>
@endforeach                        
@else
<option value="0">Semua Bulan</option>                                     
@foreach($bulan as $bln)
@if ($bln->kode_bulan==$bulane)                                     
<option value="{{ $bln->kode_bulan }}" selected>{{ $bln->nama_bulan }}</option>
@else 
<option value="{{ $bln->kode_bulan }}">{{ $bln->nama_bulan }}</option>
@endif
@endforeach  
@endif

</select>
</div>
</div><br><br>
</div>
<div class="portlet-body">
<table class="table table-striped table-bordered table-hover order-column">
<thead>
<tr>
<th colspan="8" style="text-align: center;">{{ $judule }}</th>
</tr>
<tr>
<th rowspan="2" style="vertical-align : middle;text-align:center;">No<i class="fa sort"></i></th>
<th rowspan="2" style="vertical-align : middle;text-align:center;">Kegiatan<i class="fa sort"></i></th>
<th colspan="3" style="text-align: center">Fisik<i class="fa sort"></i></th>
<th colspan="3" style="text-align: center">Keuangan<i class="fa sort"></i></th>                  
</tr>
<tr>
<th>Rencana<i class="fa sort"></i></th>
<th>Realisasi<i class="fa sort"></i></th>
<th>Selisih<i class="fa sort"></i></th>
<th>Rencana<i class="fa sort"></i></th>
<th>Realisasi<i class="fa sort"></i></th>
<th>Selisih<i class="fa sort"></i></th>
</tr>
</thead>
<tbody>
@php
$i=1;
@endphp
@foreach ($data as $dt)
<tr>
<td style="text-align: center;">{{ $i }}</td>
<td>{{ $dt->nama_kegiatan }}</td>
<td style="text-align: center;">{{ $dt->rencana_fisik }}</td>
<td style="text-align: center;">{{ $dt->realisasi_fisik }}</td>
<td style="text-align: center;">{{ $dt->rencana_fisik - $dt->realisasi_fisik}}</td>
<td style="text-align: right;">{{ number_format($dt->rencana_keuangan,2,",",".") }}</td>
<td style="text-align: right;">{{ number_format($dt->realisasi_keuangan,2,",",".") }}</td>
<td style="text-align: right;">{{ number_format($dt->rencana_keuangan -$dt->realisasi_keuangan,2,",",".") }}</td>
</tr>
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
{{-- <div id="content">
<div class="outer">
<div class="inner bg-light lter">
<div class="row">
<!-- .col-lg-6 -->
<div class="col-lg-12">
<div class="box">
<header>
<center><h4>P-4</h4></center>
</header>
<div id="sortableTable" class="body collapse in">
<table class="table table-bordered sortableTable responsive-table">
<thead>
<tr>
<th colspan="7" style="text-align: center;">Bidang Bina Marga</th>
</tr>
<tr>
<th>Kode<i class="fa sort"></i></th>
<th>Program | Kegiatan | Paket<i class="fa sort"></i></th>
<th>Pagu<i class="fa sort"></i></th>

<th>Progress<i class="fa sort"></i></th>
<th>Deviasi Keuangan<i class="fa sort"></i></th>
<th>Progress Fisik<i class="fa sort"></i></th>
<th>Deviasi Fisik<i class="fa sort"></i></th>
</tr>
</thead>
<tbody>
<tr>
<td>29</td>
<td>Program 1</td>
<td>Smith</td>
<td>50</td>
<td>50</td>
<td>Rp 50.000.000</td>
<td>50%</td>
</tr>
<tr>
<td>29.01</td>
<td>Kegiatan 1</td>
<td>Nama Kegiatan 1</td>
<td>50</td>
<td>50</td>
<td>Rp 50.000.000</td>
<td>50%</td>
</tr>
<tr>
<td>3</td>
<td>John</td>
<td>Doe</td>
<td>80</td>
</tr>
<tr>
<td>4</td>
<td>Adam</td>
<td>Johnson</td>
<td>67</td>
</tr>
</tbody>                </table>
</div>
</div>
</div>
<!-- /.col-lg-6 -->
</div>
</div>
<!-- /.inner -->
</div>
<!-- /.outer -->
</div>
<!-- /#content --> --}}
@endsection