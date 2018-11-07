@extends('layouts.master')
@section('title','Bidang')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Bidang
<small>Daftar Bidang</small>
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
<button class="btn blue-madison" onclick="TambahBidang();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Bidang</button>
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
<th style="text-align:center;">Nama Bidang</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
<tr>
<td  style="text-align:center;vertical-align:middle;">{{$i}}</td>
<td  style="text-align:left;vertical-align:middle;">{{$dt->nama_bidang}}</td>
<td  style="text-align:center;vertical-align:middle;">
<button class="btn tooltips yellow-casablanca btn-xs" title="Ubah Bidang" onclick="UbahBidang({{ $dt->id_bidang}});" ><i class="fa fa-edit"></i></button>
<a href="{{ URL::to('/bidang/delete/' . $dt->id_bidang) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Bidang" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahBidang" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title" style="color:#009dc7;text-align:center;">Tambah Bidang</h3>
</div>
<div class="modal-body">
<form action="{{ url('bidang') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Bidang" class="control-label col-md-4">Bidang</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Nama_Bidang" name="Nama_Bidang" class="form-control" value="{{ old('Nama_Bidang') }}" style="color:#009dc7;" />
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
<div class="modal fade" id="UbahBidang" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title"  align="center">Ubah Bidang</h3>
</div>
<div class="modal-body">
<form action="{{ url('bidang/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idbidang" name="idbidang">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nama_Bidang_Ubah" class="control-label col-md-4" >Bidang</label>
<div class="col-md-8">
<input  type="text" id="Nama_Bidang_Ubah" name="Nama_Bidang_Ubah" class="form-control" style="color:#009dc7;"/>
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