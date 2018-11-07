@extends('layouts.master')
@section('title', 'Ubah Luar Daerah')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>Ubah
<small>Perjalanan Dinas Luar Daerah</small>
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
<div class="caption caption-md"></div>
<div class="actions">
<div class="btn-group">
</div>
</div>
</div>
<div class="portlet-body">
<form action="{{ url('luar/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" id="idperjalanan" name="idperjalanan" value="{{$data->id_perjalanan}}">
<div class="row">
<div class="col-md-6">
<div class="portlet light bordered">
<div class="portlet-title"><div class="caption"><i class="icon-rocket font-dark"></i>Data Perjalanan Dinas</div></div>
<div class="portlet-body form">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Nomor_Surat" class="control-label col-md-4" style="color:#555555;">Nomor Surat</label>
<div class="col-md-1"><label class="control-label" style="color:#555555;">094/</label></div>
<div class="col-md-2">
<?php $nom= explode('/', $data->nomor_perjalanan); ?>
<input type="text" id="No_Surat"  name="No_Surat" class="form-control" value="{{$nom[1]}}" />
</div>
<div class="col-md-4">
<label class="control-label" style="color:#555555;text-align:left">/437.86/{{date('Y')}}</label>
</div>
</div>
</div>                                  
</div>
<div class="row">
    <div class="col-md-12">
    <div class="form-group">                                   
    <label for="tgl_sp" class="control-label col-md-4" style="color:#555555;">Tanggal SP</label>
    <div class="col-md-8">                                               
    <input type="text" id="tgl_sp" name="tgl_sp" class="form-control" value="{{ $data->tgl_sp }}">
    </div>
    </div>
    </div>
</div>
<div class="row">
        <div class="col-md-12">
        <div class="form-group">                                   
        <label for="ttd" class="control-label col-md-4" style="color:#555555;">Tanda Tangan SP</label>
        <div class="col-md-8">                                               
                <select id="ttd" name="ttd" class="select2 form-control">
                <option value="a">Pilih Pejabat</option>
                @foreach($ttd as $td)                                        
                <option value="{{ $td->nip_pegawai }}" @if($data->ttd == $td->nip_pegawai) selected @endif>{{$td->nama_pegawai}}</option>
                @endforeach                                                    
                </select>
        </div>
        </div>
        </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Kegiatan" class="control-label col-md-4" style="color:#555555;">Kegiatan</label>
<div class="col-md-8">                                               
<select id="Kegiatan" name="Kegiatan" class="select2 form-control">
<option value="a">Pilih Kegiatan</option>
@foreach($kegiatan as $k)
@if($data->id_kegiatan==$k->id_kegiatan)                                       
<option value="{{$k->id_kegiatan}}" selected="selected">{{$k->nama_kegiatan}}</option>
@else
<option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
@endif                                          
@endforeach                                                     
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Tertugas" class="control-label col-md-4" style="color:#555555;">Menugaskan Kepada</label>
<div class="col-md-8">                                               
<select id="Tertugas" name="Tertugas" class="select2 form-control">
<option value="a">Pilih Pegawai</option>
@foreach($pegawai as $p)
@if($data->pegawai_tertugas==$p->nip_pegawai)                                       
<option value="{{$p->nip_pegawai}}" selected>{{$p->nama_pegawai}}</option>
@else
<option value="{{$p->nip_pegawai}}">{{$p->nama_pegawai}}</option>
@endif
@endforeach                                                     
</select>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Tugas" class="control-label col-md-4" style="color:#555555;">Tugas</label>
<div class="col-md-8">
<textarea id="Tugas"  name="Tugas" class="form-control">{{$data->tugas}}</textarea>
</div>
</div>
</div>                                  
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">                                   
<label for="Tujuan" class="control-label col-md-4" style="color:#555555;">Tujuan</label>
<div class="col-md-8">                                               
    <textarea id="Tujuan"  name="Tujuan" class="form-control">{{ $data->tujuan }}</textarea>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Alat" class="control-label col-md-4" style="color:#555555;">Alat Transportasi</label>
<div class="col-md-8">
<input type="text" id="Alat"  name="Alat" class="form-control" value="{{$data->transportasi}}" />
</div>
</div>
</div>                                  
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label class="control-label col-md-4">Waktu Perjalanan</label>
<div class="col-md-8">
<input type="text" class="form-control" id="Tgl_Perjalanan" name="Tgl_Perjalanan" value="{{date('Y-m-d',strtotime($data->tgl_berangkat))}} s/d {{date('Y-m-d',strtotime($data->tgl_hrs_kembali))}}">
</div>
</div>
</div>                                  
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="portlet light bordered">
<div class="portlet-title"><div class="caption"><i class="icon-users font-dark"></i>Data Pengikut</div></div>
<div class="portlet-body form">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<div class="col-md-12">                                             
<select multiple="multiple" class="multi-select" id="Pengikut_Ubah" name="Pengikut_Ubah[]">
@foreach($pegawai as $p)
<option value="{{$p->nip_pegawai}}">{{$p->nama_pegawai}}</option>
@endforeach
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="portlet light bordered">
<div class="portlet-title">
<div class="caption"><i class="icon-wallet font-dark"></i>Uang Harian</div>
</div>
<div class="portlet-body form">
<div class="form-body" id="dynamicInputUbah">
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="portlet light bordered">
    <div class="portlet-title">
    <div class="caption"><i class="icon-wallet font-dark"></i>Uang Akomodasi</div>
    </div>
    <div class="portlet-body">
        <div id="bodinya">
                <div class="form-group">
                    <input type="hidden" name="jmlAko" id="jmlAko" value="{{ $jmlako }}">
                </div>
             @php
                $i = 1;
            @endphp
            @foreach ($akomodasi as $ako)
            <div class="form-group" id="sesiAko{{ $i }}">
                <input type="hidden" name="idako{{ $i }}" id="idako{{ $i }}" value="{{ $ako->id_akomodasi }}">
                <div class="col-md-4">
                    <label for="akojumlah{{ $i }}" class="control-label col-md-2" style="color:#555555;">Jumlah</label>
                    <div class="col-md-10">
                    <input type="text" id="akojumlah{{ $i }}"  name="akojumlah{{ $i }}" value="{{ $ako->jumlah }}" class="form-control autonumber"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="akoharga{{ $i }}" class="control-label col-md-2" style="color:#555555;">Harga</label>
                    <div class="col-md-10">
                    <input type="text" id="akoharga{{ $i }}"  name="akoharga{{ $i }}" data-a-sign="Rp " value="{{ $ako->harga }}" class="form-control autonumber"/>
                    <input type="hidden" id="hargaAko{{ $i }}" name="hargaAko{{ $i }}" value="{{ $ako->harga }}"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="akohari{{ $i }}" class="control-label col-md-2" style="color:#555555;">Hari</label>
                    <div class="col-md-10">
                    <input type="text" id="akohari{{ $i }}"  name="akohari{{ $i }}" class="form-control autonumber" value="{{ $ako->Hari }}"/>
                    </div>
                </div>
            </div>
            @php
                $i++;
            @endphp
            @endforeach
        </div>
    </div>
    </div>
    </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="portlet light bordered">
<div class="portlet-title"><div class="caption"><i class="icon-speedometer font-dark"></i>Uang Transport</div></div>
<div class="portlet-body form">
<div class="form-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="Hari_Transport" class="control-label col-md-4" style="color:#555555;">Hari</label>
<div class="col-md-2">
<input type="text" id="Hari_Transport"  name="Hari_Transport" class="form-control" readonly value="{{$data->lama_perjalanan}}" />
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="Nominal_Lumsum" class="control-label col-md-4" style="color:#555555;">Nominal</label>
<div class="col-md-8">
<input type="text" id="Nominal_Lumsum"  name="Nominal_Lumsum" data-a-sign="Rp " class="form-control autonumber" value="{{$data->nominalRiil}}" />
<input type="hidden" id="No_Sum" name="No_Sum" value="{{$data->nominalRiil}}" />
</div>
</div>
</div>                                 
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Keterangan" class="control-label col-md-2" style="color:#555555;">Keterangan</label>
<div class="col-md-10">
<textarea id="Keterangan"  name="Keterangan" class="form-control">{{$data->keterangan_biaya}}</textarea>
</div>
</div>
</div>                              
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
        <div class="col-md-12">
        <div class="portlet light bordered">
        <div class="portlet-title"><div class="caption"><i class="icon-list font-dark"></i>Data Lain-lain</div></div>
        <div class="portlet-body form">
        <div class="form-body">
        <div class="row">
        <div class="col-md-12">
        <div class="form-group">
            <label for="hadir" class="control-label col-md-2" style="color:#555555;">Hadir dalam pertemuan</label>
            <div class="col-md-10">
            <textarea id="hadir"  name="hadir" class="form-control">{{$data->hadir}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="petunjuk" class="control-label col-md-2" style="color:#555555;">Petunjuk arah yang diberikan</label>
            <div class="col-md-10">
            <textarea id="petunjuk"  name="petunjuk" class="form-control">{{$data->petunjuk}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="mslah" class="control-label col-md-2" style="color:#555555;">Masalah / Temuan</label>
            <div class="col-md-10">
            <textarea id="mslah"  name="mslah" class="form-control">{{$data->masalah}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="saran" class="control-label col-md-2" style="color:#555555;">Saran Tindakan</label>
            <div class="col-md-10">
            <textarea id="saran"  name="saran" class="form-control">{{$data->saran}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="dll" class="control-label col-md-2" style="color:#555555;">Lain-lain</label>
            <div class="col-md-10">
            <textarea id="dll"  name="dll" class="form-control">{{$data->lain_lain}}</textarea>
            </div>
        </div>
        </div>                              
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
<div class="row">
<div class="col-md-12">
<div class="portlet light bordered">
<div class="portlet-title"><div class="caption"><i class="icon-note font-dark"></i>Hasil Perjalanan</div>
</div>
<div class="portlet-body form">
<div class="form-body">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="Hasil" class="control-label col-md-2" style="color:#555555;">Hasil Perjalanan</label>
<div class="col-md-10">
<textarea id="Hasil"  name="Hasil" class="form-control">@foreach($hasil as $hl)-{{$hl->uraian_hasil_perjalanan}}.@endforeach
</textarea>
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
<a class="btn red-intense" href="{{ URL::to('/luar') }}">
<i class="fa fa-times"></i>&nbsp;Batal
</a>
</div>
</div>
</div>
</div>
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
</div>
</div>
</div>
</div>
</div>
@endsection