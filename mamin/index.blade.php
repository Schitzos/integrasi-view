@extends('layouts.master')
@section('title','Mamin')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Mamin
<small>Makanan dan Minuman</small>
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
<a  class="btn blue-madison" data-container="body" onclick="tambahmamin();">
<i class="fa fa-plus-square"></i>&nbsp;Buat Kwitansi Mamin
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
<th style="text-align:center;">Uraian</th>
<th style="text-align:center;">Nilai</th>
<th style="text-align:center;">Tanggal</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($data as $dt)
@if($dt->sts_kendali==0)
<tr>
        <td style="text-align:center;">{{$i}}</td>
        <td style="text-align:left;">{{$dt->uraian_mamin}}</td>
        <td style="text-align:right;">{{number_format($dt->nilai_mamin,2,",",".")}}</td>
        <td style="text-align:left;">
        @if(date("m",strtotime( $dt->tanggal_mamin))==1)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Januari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==2)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Februari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==3)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Maret {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==4)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} April {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==5)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Mei {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==6)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juni {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==7)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juli {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==8)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Agustus {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==9)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} September {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==10)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Oktober {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==11)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} November {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==12)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Desember {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @endif
        </td>
        <td style="text-align:center;">
        <a class="btn tooltips btn-xs blue-sharp" data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('mamin/' . $dt->id_mamin .'/cetak') }}" target="_blank">
        <i class="fa fa-print"></i>
        </a>&nbsp;&nbsp;
        <a class="btn tooltips btn-xs yellow-casablanca" data-container="body" data-placement="top" data-original-title="Ubah Mamin" data-toggle="modal" href="#" onclick="ubahmamin('{{ $dt->id_mamin}}')">
        <i class="fa fa-edit"></i>
        </a>&nbsp;&nbsp;
        <a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Mamin" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_mamin }},'/mamin');">
        <i class="fa fa-check"></i>
        </a>&nbsp;&nbsp;
        <a href="{{ URL::to('/mamin/delete/'.$dt->id_mamin) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Mamin ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
        <i class="fa fa-trash-o"></i>
        </a>
        </td>
        </tr>
@elseif ($dt->sts_kendali==1)
<tr style="background-color: darkgoldenrod;">
        <td style="text-align:center;">{{$i}}</td>
        <td style="text-align:left;color: cornsilk;">{{$dt->uraian_mamin}}</td>
        <td style="text-align:right;color: cornsilk;">{{number_format($dt->nilai_mamin,2,",",".")}}</td>
        <td style="text-align:left;color: cornsilk;">
        @if(date("m",strtotime( $dt->tanggal_mamin))==1)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Januari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==2)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Februari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==3)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Maret {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==4)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} April {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==5)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Mei {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==6)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juni {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==7)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juli {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==8)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Agustus {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==9)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} September {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==10)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Oktober {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==11)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} November {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==12)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Desember {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @endif
        </td>
        <td style="text-align:center;">
        <a class="btn tooltips btn-xs blue-sharp" data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('mamin/' . $dt->id_mamin .'/cetak') }}" target="_blank">
        <i class="fa fa-print"></i>
        </a>&nbsp;&nbsp;
        {{--  <a class="btn tooltips btn-xs yellow-casablanca" data-container="body" data-placement="top" data-original-title="Ubah Mamin" data-toggle="modal" href="#" onclick="ubahmamin('{{ $dt->id_mamin}}')">
        <i class="fa fa-edit"></i>
        </a>&nbsp;&nbsp;
        <a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Mamin" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_mamin }},'/mamin');">
        <i class="fa fa-check"></i>
        </a>&nbsp;&nbsp;
        <a href="{{ URL::to('/mamin/delete/'.$dt->id_mamin) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Mamin ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
        <i class="fa fa-trash-o"></i>
        </a>  --}}
        </td>
        </tr>
@elseif ($dt->sts_kendali==2)
<tr style="background-color: forestgreen;">
        <td style="text-align:center;">{{$i}}</td>
        <td style="text-align:left;color: cornsilk;">{{$dt->uraian_mamin}}</td>
        <td style="text-align:right;color: cornsilk;">{{number_format($dt->nilai_mamin,2,",",".")}}</td>
        <td style="text-align:left;color: cornsilk;">
        @if(date("m",strtotime( $dt->tanggal_mamin))==1)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Januari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==2)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Februari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==3)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Maret {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==4)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} April {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==5)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Mei {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==6)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juni {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==7)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juli {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==8)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Agustus {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==9)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} September {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==10)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Oktober {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==11)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} November {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==12)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Desember {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @endif
        </td>
        <td style="text-align:center;">
        <a class="btn tooltips btn-xs blue-sharp" data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('mamin/' . $dt->id_mamin .'/cetak') }}" target="_blank">
        <i class="fa fa-print"></i>
        </a>&nbsp;&nbsp;
        {{--  <a class="btn tooltips btn-xs yellow-casablanca" data-container="body" data-placement="top" data-original-title="Ubah Mamin" data-toggle="modal" href="#" onclick="ubahmamin('{{ $dt->id_mamin}}')">
        <i class="fa fa-edit"></i>
        </a>&nbsp;&nbsp;
        <a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Mamin" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_mamin }},'/mamin');">
        <i class="fa fa-check"></i>
        </a>&nbsp;&nbsp;
        <a href="{{ URL::to('/mamin/delete/'.$dt->id_mamin) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Mamin ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
        <i class="fa fa-trash-o"></i>
        </a>  --}}
        </td>
        </tr>
@elseif ($dt->sts_kendali==3)
<tr style="background-color: firebrick;">
        <td style="text-align:center;">{{$i}}</td>
        <td style="text-align:left;color: cornsilk;">{{$dt->uraian_mamin}}</td>
        <td style="text-align:right;color: cornsilk;">{{number_format($dt->nilai_mamin,2,",",".")}}</td>
        <td style="text-align:left;color: cornsilk;">
        @if(date("m",strtotime( $dt->tanggal_mamin))==1)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Januari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==2)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Februari {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==3)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Maret {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==4)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} April {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==5)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Mei {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==6)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juni {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==7)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Juli {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==8)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Agustus {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==9)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} September {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==10)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Oktober {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==11)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} November {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @elseif(date('m',strtotime($dt->tanggal_mamin))==12)
        {{ date('d',strtotime($dt->tanggal_mamin)) }} Desember {{ date('Y',strtotime($dt->tanggal_mamin)) }}
        @endif
        </td>
        <td style="text-align:center;">
        <a class="btn tooltips btn-xs blue-sharp" data-container="body" data-placement="top" data-original-title="Cetak" href="{{ URL::to('mamin/' . $dt->id_mamin .'/cetak') }}" target="_blank">
        <i class="fa fa-print"></i>
        </a>&nbsp;&nbsp;
        <a class="btn tooltips btn-xs yellow-casablanca" data-container="body" data-placement="top" data-original-title="Ubah Mamin" data-toggle="modal" href="#" onclick="ubahmamin('{{ $dt->id_mamin}}')">
        <i class="fa fa-edit"></i>
        </a>&nbsp;&nbsp;
        <a class="btn tooltips btn-xs btn-success" data-container="body" data-placement="top" data-original-title="Ajukan Mamin" href="#" onclick="TambahKendali(`{{ $dt->id_kegiatan }}`,{{ $dt->id_mamin }},'/mamin');">
        <i class="fa fa-check"></i>
        </a>&nbsp;&nbsp;
        <a href="{{ URL::to('/mamin/delete/'.$dt->id_mamin) }}" class="btn grey-gallery btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Mamin ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="tambahmamin" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title" style="color:#009dc7;" align="center">Buat Kwitansi Mamin</h3>
</div>
<div class="modal-body">
<form action="{{ url('mamin') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jumlah" class="control-label col-md-4" style="color:#009dc7;">Uang Sejumlah</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Jumlah" name="Jumlah" data-a-sign="Rp " class="form-control autonumber"/>
<input type="hidden" id="Jml" name="Jml"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Untuk" class="control-label col-md-4" style="color:#009dc7;">Untuk Pembayaran</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Untuk" name="Untuk" class="form-control"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Kegiatan" class="control-label col-md-4" style="color:#009dc7;">Kegiatan</label>
<div class="col-md-8">                                               
<select id="Kegiatan" name="Kegiatan" class="select2 form-control">
<option value="">Pilih Kegiatan</option>
@foreach($kegiatan as $k)
<option value="{{$k->id_dpa}}">{{ $k->uraian }} - {{ $k->nama_kegiatan }}</option>
@endforeach                                                
</select>                                           
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tanggal_Mamin" class="control-label col-md-4" style="color:#009dc7;">Tanggal</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Tanggal_Mamin" name="Tanggal_Mamin" class="form-control"/>
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
<div class="modal fade" id="ubahmamin" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h3 class="modal-title" style="color:#009dc7;" align="center">Ubah Kwitansi Mamin</h3>
</div>
<div class="modal-body">
<form action="{{ url('mamin/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idmamin" name="idmamin">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Jumlah_Ubah" class="control-label col-md-4" style="color:#009dc7;">Uang Sejumlah</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Jumlah_Ubah" name="Jumlah_Ubah" data-a-sign="Rp " class="form-control autonumber"/>
<input type="hidden" id="Jml_Ubah" name="Jml_Ubah"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Untuk_Ubah" class="control-label col-md-4" style="color:#009dc7;">Untuk Pembayaran</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Untuk_Ubah" name="Untuk_Ubah" class="form-control"/>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Kegiatan_Ubah" class="control-label col-md-4" style="color:#009dc7;">Kegiatan</label>
<div class="col-md-8">                                               
<select id="Kegiatan_Ubah" name="Kegiatan_Ubah" class="select2 form-control">
<option value="">Pilih Kegiatan</option>
@foreach($kegiatan as $k)
<option value="{{$k->id_dpa}}">{{ $k->uraian }} - {{ $k->nama_kegiatan }}</option>
@endforeach                                                
</select>                                           
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tanggal_Mamin_Ubah" class="control-label col-md-4" style="color:#009dc7;">Tanggal</label>
<div class="col-md-8">
<input style="color:#009dc7;" type="text" id="Tanggal_Mamin_Ubah" name="Tanggal_Mamin_Ubah" class="form-control"/>
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