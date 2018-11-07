<!DOCTYPE html>
<html lang="en">
<head>
<title>Surat Perintah &amp; Hasil Lembur</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Sistem Informasi Surat Pertanggung Jawaban" name="description"/>
<meta content="Wahyu Kurniawan Telp :081234303080" name="author"/>
<meta id="token" name="token" content="{{csrf_token()}}"/>
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
</head>
<style>
@page { margin: 130px 50px; }
#header { position: fixed; left: 0px; top: -130px; right: 0px; height: 90px;  text-align: center; }
#footer { position: fixed; left: 0px; bottom: -130px; right: 0px; height: 30px;}
#footer .page:after { }
.myTable { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable th { background-color:#fff;padding:5px;border:1px solid #000000;font-size: 0.7em; }
.myTable td { 
padding:5px;
border:1px solid #000000;
font-size: 0.7em
}
</style>
<body>
<div id="header">
<img src="{{asset('/images/cetak/kopsurat.png')}}" width="100%" align="center">
</div>
<div id="footer" align="right">
</div>
<div id="content">
<table width="100%" align="center">
<tr>
<td style="text-align:center;"><b><u>SURAT PERINTAH</u></b></td>
</tr>
<tr>
<td style="text-align:center;"><b>NOMOR : {{$data->nomor_lembur}}</b></td>
</tr>
</table>
<br/>
<table width="80%">
<tr>
<td style="text-align:left;">Nama</td>
<td style="text-align:center;">:</td>
<td style="text-align:left;">{{$ppk->nama_pegawai}}</td>
</tr>
<tr>
<td style="text-align:left;">Jabatan</td>
<td style="text-align:center;">:</td>
<td style="text-align:left;">Kepala {{ucwords(strtolower($data->nama_bidang))}}</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:center;"></td>
<td style="text-align:left;">DPU Kabupaten Gresik</td>
</tr>
</table>
<br/>
<table width="100%"align="center">
<tr>
<td style="text-align:left;">Dalam Rangka  Kegiatan {{$data->uraian_kegiatan}} Tahun Anggaran {{$data->periode}} serta untuk kepentingan Dinas, maka :</td>
</tr>
<tr>
<td style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;"><b><u>MEMERINTAHKAN</u></b></td>
</tr>
</table>
<br/>
<table width="100%"align="center">
<tr>
<td style="text-align:left;">Kepada</td>
<td style="text-align:center;">:</td>
<td style="text-align:left;" colspan="3">Daftar nama-nama terlampir</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:center;"></td>
<td style="text-align:left;vertical-align:top;">1.</td>
<td style="text-align:justify;vertical-align:top;" colspan="2">Melaksanakan lembur kegiatan {{$data->uraian_kegiatan}} pada 
<?php $strhasil ='';$j=1;?>
@foreach($absensi as $a)
@if($j==$jmllembur)
<?php $strhasil .= date('d',strtotime($a->tgl_absensi)); ?>
@else
<?php $strhasil .= date('d',strtotime($a->tgl_absensi)).','; ?>
@endif
<?php $j++;?>
@endforeach
{{$strhasil}} {{$data->bulan}} {{$data->periode}}</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:center;"></td>
<td style="text-align:left;vertical-align:top;">2.</td>
<td style="text-align:justify;vertical-align:top;" colspan="2">Uang lembur dan uang makan dibebankan pada {{$data->beban}}  Tahun Anggaran {{$data->periode}} pada {{$data->uraian_kegiatan}} ({{$data->kd_kegiatan}}) dengan Belanja {{$data->nama_rekening}}.</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:center;"></td>
<td style="text-align:left;vertical-align:top;">3.</td>
<td style="text-align:justify;vertical-align:top;" colspan="2">Melaporkan hasilnya kepada atasan langsungnya.</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:center;"></td>
<td style="text-align:left;vertical-align:top;">4.</td>
<td style="text-align:justify;vertical-align:top;" colspan="2">Melaksanakan Surat Perintah ini dengan sebaik-baiknya dan penuh rasa tanggung jawab.</td>
</tr>
</table>
<br/>
<table width="100%"align="center">
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:left;width:19%">Dikeluarkan di</td>
<td style="text-align:left;width:21%">: Gresik</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:left;width:19%">Pada tanggal</td>
<td style="text-align:left;width:21%">: 
@if(date("m",strtotime( $data->tgl_cetak_lembur))==1)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Januari {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==2)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Februari {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==3)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Maret {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==4)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} April {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==5)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Mei {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==6)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Juni {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==7)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Juli {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==8)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Agustus {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==9)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} September {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==10)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Oktober {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==11)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} November {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==12)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Desember {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2"><b>KEPALA {{$data->nama_bidang}}</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2"><b>DINAS PEKERJAAN UMUM DAN TATA RUANG</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2"><b>KABUPATEN GRESIK</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2"><b><u>{{$ppk->nama_pegawai}}</u></b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2">{{$ppk->pangkat}}</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%" colspan="2">NIP. {{$ppk->nip_pegawai}}</td>
</tr>
</table>
<div style="page-break-before: always;">
<table>
<tr>
<td style="text-align:left;vertical-align:top;">Daftar</td>
<td style="text-align:center;vertical-align:top;">:</td>
<td style="text-align:left;vertical-align:top;">Nama-nama yang melaksanakan Lembur Kegiatan {{$data->uraian_kegiatan}} pada 
<?php $strhasil ='';$j=1;?>
@foreach($absensi as $a)
@if($j==$jmllembur)
<?php $strhasil .= date('d',strtotime($a->tgl_absensi)); ?>
@else
<?php $strhasil .= date('d',strtotime($a->tgl_absensi)).','; ?>
@endif
<?php $j++;?>
@endforeach
{{$strhasil}} {{$data->bulan}} {{$data->periode}}</td>
</tr>
</table>
<br/>
<table class="myTable">
<thead>
<tr>
<th style="text-align:center;">No</th>
<th style="text-align:center;">Nama/Nip</th>
<th style="text-align:center;">Golongan/Ruang</th>
<th style="text-align:center;">Jabatan</th>
<th style="text-align:center;">Jabatan Dalam Kegiatan</th>
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($detail as $dt)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nama_pegawai}}{{$dt->nip_pegawai}}</td>
<td style="text-align:left;">{{$dt->nama_golongan}}</td>
<td style="text-align:left;">{{$dt->jabatan_instansi}}</td>
<td style="text-align:left;">{{$dt->jabatan}}</td>
</tr>
<?php $i++;?>
@endforeach
</tbody>
</table>
<br/>
<table width="100%"align="center">
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">Gresik, 
@if(date("m",strtotime( $data->tgl_cetak_lembur))==1)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Januari {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==2)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Februari {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==3)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Maret {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==4)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} April {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==5)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Mei {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==6)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Juni {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==7)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Juli {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==8)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Agustus {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==9)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} September {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==10)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Oktober {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==11)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} November {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==12)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Desember {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%"><b>KEPALA {{$data->nama_bidang}}</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%"><b>DINAS PEKERJAAN UMUM DAN TATA RUANG</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%"><b>KABUPATEN GRESIK</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%"><b><u>{{$ppk->nama_pegawai}}</u></b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">{{$ppk->pangkat}}</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">NIP. {{$ppk->nip_pegawai}}</td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="center">
<tr>
<td style="text-align:center;"><b><u>HASIL LEMBUR</u></b></td>
</tr>
</table>
<br/>
<table style="width:100%;" cellpadding="0" cellspacing="0">
<tr>
<td style="text-align:center;width:5%">1.</td>
<td style="text-align:left;width:30%">DASAR</td>
<td style="text-align:center;width:5%">:</td>
<td style="text-align:left;width:60%">Surat Perintah Kepala {{ucwords(strtolower($data->nama_bidang))}}</td>
</tr>
<tr>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:30%"></td>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:60%">DPU Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;width:5%">2.</td>
<td style="text-align:left;width:30%">KEGIATAN</td>
<td style="text-align:center;width:5%">:</td>
<td style="text-align:left;width:60%">{{$data->uraian_kegiatan}}</td>
</tr>
<tr>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:30%"></td>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:60%">{{$data->kd_kegiatan}}</td>
</tr>
<?php
$strhasil ='';
$j=1;
?>
@foreach($absensi as $a)
@if($j==$jmllembur)
<?php $strhasil .= date('d',strtotime($a->tgl_absensi)); ?>
@else
<?php $strhasil .= date('d',strtotime($a->tgl_absensi)).','; ?>
@endif
<?php $j++;?>
@endforeach
<tr>
<td style="text-align:center;width:5%">3.</td>
<td style="text-align:left;width:30%">WAKTU PELAKSANAAN</td>
<td style="text-align:center;width:5%">:</td>
<td style="text-align:left;width:60%">{{$strhasil}} {{$data->bulan}} {{$data->periode}}</td>
</tr>
<?php $j=0;?>
@foreach($detail as $dt)
@if($j==0)
<tr>
<td style="text-align:center;width:5%">4.</td>
<td style="text-align:left;width:30%">NAMA PETUGAS</td>
<td style="text-align:center;width:5%">:</td>
<td style="text-align:left;width:60%">{{$j+1}}. {{$dt->nama_pegawai}}</td>
</tr>
@else
<tr>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:30%"></td>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:60%">{{$j+1}}. {{$dt->nama_pegawai}}</td>
</tr>
@endif
<?php $j++;?>
@endforeach
<?php $j=0;?>
@foreach($hasil as $dt)
@if($j==0)
<tr>
<td style="text-align:center;width:5%">5.</td>
<td style="text-align:left;width:30%">HASIL LEMBUR</td>
<td style="text-align:center;width:5%">:</td>
<td style="text-align:left;vertical-align:top;width:60%">{{$j+1}}. {{$dt->uraian_hasil}}.</td>
</tr>
@else
<tr>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:30%"></td>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;vertical-align:top;width:60%">{{$j+1}}. {{$dt->uraian_hasil}}.</td>
</tr>
@endif
<?php $j++;?>
@endforeach
<tr>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;width:30%"></td>
<td style="text-align:center;width:5%"></td>
<td style="text-align:left;vertical-align:top;width:60%">{{$j+1}}. Koordinasi untuk kegiatan lanjutan.</td>
</tr>
</table>
<br/>
<table width="100%"align="center">
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">Gresik, 
@if(date("m",strtotime( $data->tgl_cetak_lembur))==1)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Januari {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==2)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Februari {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==3)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Maret {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==4)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} April {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==5)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Mei {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==6)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Juni {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==7)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Juli {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==8)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Agustus {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==9)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} September {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==10)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Oktober {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==11)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} November {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@elseif(date('m',strtotime($data->tgl_cetak_lembur))==12)
{{ date('d',strtotime($data->tgl_cetak_lembur)) }} Desember {{ date('Y',strtotime($data->tgl_cetak_lembur)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%"><b>PELAPOR</b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<?php $ada=0?>
@foreach($detail as $dt)
@if($dt->nama_golongan=='IIIa'||$dt->nama_golongan=='IIIb'||$dt->nama_golongan=='IIIc'||$dt->nama_golongan=='IIId')
@if($ada==0)
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%"><b><u>{{$dt->nama_pegawai}}</u></b></td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">{{$dt->pangkat}}</td>
</tr>
<tr>
<td style="text-align:center;width:60%">&nbsp;</td>
<td style="text-align:center;width:40%">NIP. {{$dt->nip_pegawai}}</td>
</tr>
<?php $ada=1?>
@endif
@endif
@endforeach
</table>
</div>
</div>
</body>
</html>