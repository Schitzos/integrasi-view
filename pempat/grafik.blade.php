@extends('layouts.master')
@section('title','Grafik Progres')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Grafik
<small>Progres</small>
</h1>
</div>
</div>
</div>
<div class="page-content">
<div class="container">
<div class="page-content-inner">
<div class="mt-content-body">
<div class="row">
<select style="color:#009dc7;" id="sel_keg" name="sel_keg" class="form-control">
<option value="a">Pilih Kegiatan</option>
@foreach($kegiatan as $keg)                                     
<option value="{{ $keg->id_kegiatan }}">{{ $keg->nama_kegiatan }}</option> 
@endforeach
</select>
</div>
<div class="row">
<div id="grafdiv" style="background-color: azure"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection