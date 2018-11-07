<!DOCTYPE html>
<html lang="en">
<head>
<title>Surat Perjalanan Dinas | SIM SPJ</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Sistem Informasi Surat Pertanggung Jawaban" name="description"/>
<meta content="Wahyu Kurniawan Telp :081234307080" name="author"/>
<meta id="token" name="token" content="{{csrf_token()}}"/>
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
</head>
<body>
<style type="text/css">
@page { margin: 145px 30px; }
#header { position: fixed; left: 0px; top: -140px; right: 0px; height: 90px;  text-align: center; }
#footer { position: fixed; left: 0px; bottom: -150px; right: 0px; height: 50px;}
#footer .page:after {  }
.myTable { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable th { background-color:#fff;padding:5px;border:1px solid #000000;font-size: 0.9em; }
.myTable td { 
padding:5px;
border:1px solid #000000;
font-size: 0.9em
}
</style>
<div id="header">
<img src="{{asset('/images/cetak/kopsurat.png')}}" width="100%" height="120px" align="center">
</div>
<div id="footer" align="right">
<p class="page"></p>
</div>
<div id="content" style="font-size:14px;font-family:'Times New Roman';">
<table width="100%" align="center">
<tr>
<td style="text-align:center;"><b><u>SURAT TUGAS</u></b></td>
</tr>
<tr>
@if($nomor==null||$nomor=='')
<td style="text-align:center;"><b>NOMOR : 094/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/437.86/{{$tahun}}</b></td>
@else
<td style="text-align:center;"><b>NOMOR : {{$data->nomor_perjalanan}}</b></td>
@endif
</tr>
</table>
<br/>
<table width="100%"align="center">
<tr>
<td style="text-align:left;">Dasar</td>
<td style="text-align:center;">:</td>
<td style="text-align:center;">1.</td>
<td style="text-align:left;">Peraturan Daerah Nomor 11 Tahun {{date('Y',strtotime($data->tgl_cetak))-1}} tentang Anggaran Pendapatan dan Belanja Daerah Tahun {{date('Y',strtotime($data->tgl_cetak))}}.</td>
</tr>
<tr>
<td style="text-align:left;">&nbsp;</td>
<td style="text-align:center;">&nbsp;</td>
<td style="text-align:center;vertical-align:top;">2.</td>
<td style="text-align:left;vertical-align:top;">Peraturan Bupati Gresik Nomor 35 Tahun {{date('Y',strtotime($data->tgl_cetak))-1}} tentang Penjabaran Anggaran Pendapatan dan Belanja Daerah Kabupaten Gresik Tahun Anggaran {{date('Y',strtotime($data->tgl_cetak))}}.</td>
</tr>
</table>
<br/>
<h4 align="center">MENUGASKAN</h4>

<h5 align="left">Kepada :</h5>
<table class="myTable" align="center">
<thead>
<tr>
<th style="text-align:center;">NO</th>
<th style="text-align:center;">NAMA</th>
<th style="text-align:center;">NIP</th>
<th style="text-align:center;">PANGKAT/GOLONGAN</th>
<th style="text-align:center;">JABATAN</th>   
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($menugaskan as $lp)
<tr>
	<td style="text-align:center;">{{$i}}</td>
	<td style="text-align:left;">{{$lp->nama_pegawai}}</td>
	<td style="text-align:left;">@if($lp->id_golongan == 18) - @else {{ $lp->nip_pegawai }} @endif</td>
	<td style="text-align:left;">{{$lp->pangkat}}/{{$lp->nama_golongan}}</td>
	<td style="text-align:left;">@if($lp->id_jabatan == 4 || $lp->id_jabatan == 5) {{ $lp->nama_jabatan }} SEKSI {{ $lp->nama_seksi }}@elseif($lp->id_jabatan == 3){{ $lp->nama_jabatan }} {{ $lp->nama_seksi }}@elseif($lp->id_bidang == 1) SEKRETARIS DINAS @else {{ $lp->nama_jabatan }} {{ $lp->nama_bidang }} @endif </td>
</tr>
<?php $i+=1;?>
@endforeach
</tbody>
</table>
<br/>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;vertical-align:top;">Untuk</td>
<td style="text-align:center;vertical-align:top;">:</td>
<td style="text-align:center;vertical-align:top;">1.</td>
<td style="text-align:justify;vertical-align:top;">Melaksanakan Perjalanan Dinas Luar Daerah dalam rangka {{$data->tugas}} untuk kegiatan {{$data->nama_kegiatan}} ke {{$data->tujuan}} tanggal 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
.</td>
</tr>
<tr>
<td style="text-align:left;">&nbsp;</td>
<td style="text-align:center;">&nbsp;</td>
<td style="text-align:center;vertical-align:top;">2.</td>
<td style="text-align:justify;vertical-align:top;">Melaksanakan tugas ini dengan penuh tanggung jawab dan melaporkan hasil pelaksanaannya kepada pejabat yang berwenang.</td>
</tr>
<tr>
<td style="text-align:left;">&nbsp;</td>
<td style="text-align:center;">&nbsp;</td>
<td style="text-align:center;vertical-align:top;">3.</td>
<td style="text-align:justify;vertical-align:top;">Apabila terdapat kekeliruan dalam Surat Tugas ini akan diadakan perbaikan kembali sebagaimana mestinya.</td>
</tr>
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Ditetapkan di</td>
<td style="text-align:center;" width="5%">:</td>
<td style="text-align:left;" width="20%">Gresik</td>
</tr>
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Pada tanggal</td>
<td style="text-align:center;" width="5%">:</td>
<td style="text-align:left;" width="20%"> 
@if(date("m",strtotime( $data->tgl_sp))==1)
{{ date('d',strtotime($data->tgl_sp)) }} Januari {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==2)
{{ date('d',strtotime($data->tgl_sp)) }} Februari {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==3)
{{ date('d',strtotime($data->tgl_sp)) }} Maret {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==4)
{{ date('d',strtotime($data->tgl_sp)) }} April {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==5)
{{ date('d',strtotime($data->tgl_sp)) }} Mei {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==6)
{{ date('d',strtotime($data->tgl_sp)) }} Juni {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==7)
{{ date('d',strtotime($data->tgl_sp)) }} Juli {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==8)
{{ date('d',strtotime($data->tgl_sp)) }} Agustus {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==9)
{{ date('d',strtotime($data->tgl_sp)) }} September {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==10)
{{ date('d',strtotime($data->tgl_sp)) }} Oktober {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==11)
{{ date('d',strtotime($data->tgl_sp)) }} November {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==12)
{{ date('d',strtotime($data->tgl_sp)) }} Desember {{ date('Y',strtotime($data->tgl_sp)) }}
@endif
</td>
</tr>
</table>
<br/>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>@if($data->id_jabatan == 3 || $data->id_jabatan == 4 || $data->id_jabatan == 5) KEPALA BIDANG {{$ttd2->nama_bidang}} DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN @else KEPALA DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN @endif</b></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>KABUPATEN GRESIK</b></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
@if($data->id_jabatan == 3 || $data->id_jabatan == 4 || $data->id_jabatan == 5) 
<td style="text-align:center;" width="50%"><u><b>{{$ttd2->nama_pegawai}}</b></u></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>NIP. {{$ttd2->nip_pegawai}}</b></td>
</tr>
@else 
<td style="text-align:center;" width="50%"><u><b>{{$ttd1->nama_pegawai}}</b></u></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>NIP. {{$ttd1->nip_pegawai}}</b></td>
</tr>
@endif
</table>
<div style="page-break-before: always;">
<table width="100%">
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Lembar ke</td>
<td style="text-align:center;" width="25%">:................................................</td>
</tr>
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Kode No.</td>
<td style="text-align:center;" width="25%">:................................................</td>
</tr>
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Nomor</td>
<td style="text-align:center;" width="25%">:................................................</td>
</tr>
</table>
<h4 align="center">SURAT PERJALANAN DINAS (SPD)</h4>
<table class="myTable">
<tr>
<td style="text-align:center;">1</td>
<td style="text-align:left;">Kuasa Pengguna Anggaran</td>
<td></td>
<td style="text-align:left;"  colspan="2">{{$ppk->nama_pegawai}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;" rowspan="2">2</td>
<td style="text-align:left;">Nama/NIP Pegawai yang melaksanakan Perjalanan Dinas</td>
<td></td>
<td style="text-align:left;" colspan="2">{{$data->nama_pegawai}}</td>
</tr>
<tr>
<td style="text-align:left;">NIP/Tanggal Lahir</td>
<td></td>
<td style="text-align:left;"  colspan="2">{{$data->nip_pptk}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">3</td>
<td style="text-align:left;">a. Pangkat dan golongan<br/>b. Jabatan/Instansi<br/>c. Tingkat Biaya Perjalanan Dinas</td>
<td style="text-align:center;">a<br/>b<br>c</td>
<td style="text-align:left;"  colspan="2">{{$data->pangkat}}/{{$data->nama_golongan}}<br/>@if($lp->id_jabatan == 4 || $lp->id_jabatan == 5) {{ $lp->nama_jabatan }} SEKSI {{ $lp->nama_seksi }}@elseif($lp->id_jabatan == 3){{ $lp->nama_jabatan }} {{ $lp->nama_seksi }}@elseif($lp->id_bidang == 1) SEKRETARIS DINAS @else {{ $lp->nama_jabatan }} {{ $lp->nama_bidang }} @endif<br/>-</td>
</tr>
<tr>
<td style="text-align:center;">4</td>
<td style="text-align:left;">Maksud perjalanan dinas</td>
<td></td>
<td style="text-align:left;"  colspan="2">{{$data->tugas}}</td>
</tr>
<tr>
<td style="text-align:center;">5</td>
<td style="text-align:left;">Alat angkutan yang digunakan</td>
<td></td>
<td style="text-align:left;"  colspan="2">{{$data->transportasi}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">6</td>
<td style="text-align:left;">a. Tempat berangkat<br/>b. Tempat tujuan</td>
<td style="text-align:center;">a<br/>b</td>
<td style="text-align:left;"  colspan="2">Dinas Perumahan dan Kawasan Permukiman Kab. Gresik<br/>{{$data->tujuan}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">7</td>
<td style="text-align:left;">a. Lamanya perjalanan dinas<br/>b. Tanggal berangkat<br/>c. Tanggal harus kembali</td>
<td style="text-align:center;">a<br/>b<br>c</td>
<td style="text-align:left;" colspan="2">{{$data->lama_perjalanan}} hari<br/>
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
<br/>
@if(date("m",strtotime( $data->tgl_hrs_kembali))==1)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Januari {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==2)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Februari {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==3)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Maret {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==4)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} April {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==5)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Mei {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==6)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Juni {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==7)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Juli {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==8)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Agustus {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==9)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} September {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==10)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Oktober {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==11)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} November {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@elseif(date('m',strtotime($data->tgl_hrs_kembali))==12)
{{ date('d',strtotime($data->tgl_hrs_kembali)) }} Desember {{ date('Y',strtotime($data->tgl_hrs_kembali)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;">8</td>
<td style="text-align:left;">Pengikut : Nama</td>
<td></td>
<td style="text-align:center;">NIP</td>
<td style="text-align:center;">Keterangan</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">
@foreach($pengikut as $p)
{{$p->nama_pegawai}}<br/>
@endforeach
</td>
<td></td>
<td style="text-align:left;">
@foreach($pengikut as $p)
@if($p->id_golongan == 18) - @else {{ $p->nip_pegawai }} @endif<br/>
@endforeach
</td>
<td style="text-align:left;"></td>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">9</td>
<td style="text-align:left;">Pembebanan Anggaran<br/>a. Instansi<br/>b. Kode Rekening</td>
<td style="text-align:center;"></td>
<td style="text-align:left;"  colspan="2">APBD<br/>Dinas Perumahan dan Kawasan Permukiman Kab. Gresik<br/>{{$data->id_kegiatan}}</td>
</tr>
<tr>
<td style="text-align:center;">10</td>
<td style="text-align:left;">Keterangan lain-lain</td>
<td></td>
<td style="text-align:left;" colspan="2">Lihat halaman sebaliknya</td>
</tr>
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Dikeluarkan di</td>
<td style="text-align:center;" width="5%">:</td>
<td style="text-align:left;" width="20%">Gresik</td>
</tr>
<tr>
<td style="text-align:left;" width="60%">&nbsp;</td>
<td style="text-align:left;" width="15%">Pada tanggal</td>
<td style="text-align:center;" width="5%">:</td>
<td style="text-align:left;" width="20%"> 
@if(date("m",strtotime( $data->tgl_sp))==1)
{{ date('d',strtotime($data->tgl_sp)) }} Januari {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==2)
{{ date('d',strtotime($data->tgl_sp)) }} Februari {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==3)
{{ date('d',strtotime($data->tgl_sp)) }} Maret {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==4)
{{ date('d',strtotime($data->tgl_sp)) }} April {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==5)
{{ date('d',strtotime($data->tgl_sp)) }} Mei {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==6)
{{ date('d',strtotime($data->tgl_sp)) }} Juni {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==7)
{{ date('d',strtotime($data->tgl_sp)) }} Juli {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==8)
{{ date('d',strtotime($data->tgl_sp)) }} Agustus {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==9)
{{ date('d',strtotime($data->tgl_sp)) }} September {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==10)
{{ date('d',strtotime($data->tgl_sp)) }} Oktober {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==11)
{{ date('d',strtotime($data->tgl_sp)) }} November {{ date('Y',strtotime($data->tgl_sp)) }}
@elseif(date('m',strtotime($data->tgl_sp))==12)
{{ date('d',strtotime($data->tgl_sp)) }} Desember {{ date('Y',strtotime($data->tgl_sp)) }}
@endif
</td>
</tr>
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>KUASA PENGGUNA ANGGARAN</b></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><u><b>{{$ppk->nama_pegawai}}</b></u></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>NIP. {{$ppk->nip_pegawai}}</b></td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<h4 align="center"><u>KWITANSI</u></h4>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;">Sudah terima dari</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">Pemerintah Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:left;">Uang sebesar</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">{{$bilang}} Rupiah</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top;">Untuk pembayaran</td>
<td style="text-align:left;vertical-align:top;">:</td>
<td style="text-align:left;vertical-align:top;">Belanja Perjalanan Dinas Luar Daerah Kegiatan {{$data->nama_kegiatan}} menurut Surat Tugas Perjalanan Dinas Tanggal
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:left;"></td>
<td style="text-align:left;">
@if($nomor==null||$nomor=='')
Nomor : 094/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/437.86/{{$tahun}}
@else
Nomor : {{$data->nomor_perjalanan}}
@endif
</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:left;"></td>
<td style="text-align:left;">Kegiatan : {{$data->id_kegiatan}}</td>
</tr>
<tr>
<td style="text-align:left;"></td>
<td style="text-align:left;"></td>
<td style="text-align:left;">Rekening : 5.2.2.10.01</td>
</tr>
<tr>
<td style="text-align:left;">Sebesar</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">Rp. {{number_format($nilai,2,",",".")}}</td>
</tr>
<tr>
<td style="text-align:left;">Kedudukan</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;"></td>
</tr>
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">Gresik, 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">Yang Bepergian</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><u><b>{{$data->nama_pegawai}}</b></u></td>
</tr>
<tr>
<td style="text-align:left;" width="50%">&nbsp;</td>
<td style="text-align:center;" width="50%"><b>NIP. {{$data->nip_pptk}}</b></td>
</tr>
</table>
<br/>
<h4 align="center">PERINCIAN PERHITUNGAN BIAYA PERJALANAN DINAS</h4>
<table class="myTable">
<tr>
<th style="text-align:center;">NO</th>
<th style="text-align:center;">PERINCIAN PERJALANAN</th>
<th style="text-align:center;">JUMLAH</th>
<th style="text-align:center;">KETERANGAN</th>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">1</td>
<td style="text-align:left;vertical-align:middle;">Uang Harian<br/>Selama :<br/>
@foreach($rincian as $r)
@if(strlen($r->nama_golongan)==1)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@elseif(strlen($r->nama_golongan)==2)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@elseif(strlen($r->nama_golongan)==3)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@elseif(strlen($r->nama_golongan)==4)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp; {{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@else
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;{{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@endif
@endforeach
</td>
<td style="text-align:right;vertical-align:middle;">
<br/>
<br/>
<?php $tot=0;?>
@foreach($rincian as $r)
<?php $tot = $r->jumlah*$r->lama_perjalanan*$r->uang_harian_pengikut;?>
{{number_format($tot,2,",",".")}}<br/>
@endforeach
</td>
<td style="text-align:center;vertical-align:middle;"></td>
</tr>
<tr>
		<td style="text-align:center;vertical-align:middle;">2</td>
		<td style="text-align:left;vertical-align:middle;">Uang Akomodasi :<br/>
		@foreach($akomodasi as $ako)
		Jumlah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$ako->jumlah}} &nbsp;&nbsp;x&nbsp;&nbsp;{{$ako->Hari}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($ako->harga,2,",",".")}}<br/>
		@endforeach
		</td>
		<td style="text-align:right;vertical-align:middle;">
		<br/>
		<br/>
		<?php $totak=0;?>
		@foreach($akomodasi as $ako)
		<?php $totak = $ako->jumlah*$ako->Hari*$ako->harga;?>
		{{number_format($totak,2,",",".")}}<br/>
		@endforeach
		</td>
		<td style="text-align:center;vertical-align:middle;"></td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:center;"><b>JUMLAH</b></td>
<td style="text-align:right;"><b>{{number_format($nilai,2,",",".")}}</b></td>
<td style="text-align:center;"></td>
</tr>
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:center">Pejabat Pelaksana Teknis Kegiatan</td>
<td style="text-align:center">Mengetahui/Menyetujui,</td>
<td style="text-align:center">Lunas Dibayar</td>
</tr>
<tr>
<td style="text-align:center">(PPTK)</td>
<td style="text-align:center">Kuasa Pengguna Anggaran</td>
<td style="text-align:center">Bendahara Pengeluaran</td>
</tr>
<tr>
<td style="text-align:center"></td>
<td style="text-align:center">(KPA)</td>
<td style="text-align:center"></td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
<td style="text-align:center">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center"><u><b>{{$data->nama_pegawai}}</b></u></td>
<td style="text-align:center"><u><b>{{$ppk->nama_pegawai}}</b></u></td>
<td style="text-align:center"><u><b>{{$bendahara->nama_pegawai}}</b></u></td>
</tr>
<tr>
<td style="text-align:center">{{$data->nip_pptk}}</td>
<td style="text-align:center">{{$ppk->nip_pegawai}}</td>
<td style="text-align:center">{{$bendahara->nip_pegawai}}</td>
</tr>
</table>
</div>

<div style="page-break-before: always;">
<h4 align="center"><u>RINCIAN BIAYA PERJALANAN DINAS</u></h4>
<br/>
<table width="70%">
<tr>
<td style="text-align:left;">Lampiran SPD Nomor</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">
@if($nomor==null||$nomor=='')
  094/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/437.86/{{$tahun}}
@else
  {{$data->nomor_perjalanan}}
@endif
</td>
</tr>
<tr>
<td style="text-align:left;">Tanggal</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
</table>
<table class="myTable">
<tr>
<th style="text-align:center;">NO</th>
<th style="text-align:center;">PERINCIAN PERJALANAN</th>
<th style="text-align:center;">JUMLAH</th>
<th style="text-align:center;">KETERANGAN</th>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">1</td>
<td style="text-align:left;vertical-align:middle;">Uang Harian<br/>Selama :<br/>
@foreach($rincian as $r)
@if(strlen($r->nama_golongan)==1)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@elseif(strlen($r->nama_golongan)==2)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@elseif(strlen($r->nama_golongan)==3)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@elseif(strlen($r->nama_golongan)==4)
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;&nbsp; {{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@else
Gol. {{$r->nama_golongan}}&nbsp;&nbsp;&nbsp;{{$r->jumlah}} org&nbsp;&nbsp;x&nbsp;&nbsp;{{$r->lama_perjalanan}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($r->uang_harian_pengikut,2,",",".")}}<br/>
@endif
@endforeach
</td>
<td style="text-align:right;vertical-align:middle;">
<br/>
<br/>
<?php $tot=0;?>
@foreach($rincian as $r)
<?php $tot = $r->jumlah*$r->lama_perjalanan*$r->uang_harian_pengikut;?>
{{number_format($tot,2,",",".")}}<br/>
@endforeach
</td>
<td style="text-align:center;vertical-align:middle;"></td>
</tr>
<tr>
		<td style="text-align:center;vertical-align:middle;">2</td>
		<td style="text-align:left;vertical-align:middle;">Uang Akomodasi :<br/>
		@foreach($akomodasi as $ako)
		Jumlah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$ako->jumlah}} &nbsp;&nbsp;x&nbsp;&nbsp;{{$ako->Hari}} hr&nbsp;&nbsp;x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp {{number_format($ako->harga,2,",",".")}}<br/>
		@endforeach
		</td>
		<td style="text-align:right;vertical-align:middle;">
		<br/>
		<br/>
		<?php $totak=0;?>
		@foreach($akomodasi as $ako)
		<?php $totak = $ako->jumlah*$ako->Hari*$ako->harga;?>
		{{number_format($totak,2,",",".")}}<br/>
		@endforeach
		</td>
		<td style="text-align:center;vertical-align:middle;"></td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:center;"><b>JUMLAH</b></td>
<td style="text-align:right;"><b>{{number_format($nilai,2,",",".")}}</b></td>
<td style="text-align:center;"></td>
</tr>
</table>
<table width="70%">
<tr>
<td style="text-align:left;">Terbilang</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">{{$bilang}} Rupiah</td>
</tr>    
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;">Gresik, 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:left;width:50%;">Telah dibayar sejumlah</td>
<td style="text-align:left;width:50%;">Telah menerima jumlah uang sebesar</td>
</tr>
<tr>
<td style="text-align:left;width:50%;">Rp {{number_format($nilai,2,",",".")}}</td>
<td style="text-align:left;width:50%;">Rp {{number_format($nilai,2,",",".")}}</td>
</tr>
<tr>
<td style="text-align:left;width:50%;">Bendahara Pengeluaran,</td>
<td style="text-align:left;width:50%;">Yang Menerima,</td>
</tr>
<tr>
<td style="text-align:left;width:50%;">&nbsp;</td>
<td style="text-align:left;width:50%;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;width:50%;">&nbsp;</td>
<td style="text-align:left;width:50%;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;width:50%;"><u>{{$bendahara->nama_pegawai}}</u></td>
<td style="text-align:left;width:50%;"><u>{{$data->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="text-align:left;width:50%;">NIP. {{$bendahara->nip_pegawai}}</td>
<td style="text-align:left;width:50%;">NIP. {{$data->nip_pptk}}</td>
</tr>
</table>
<hr/>
<h4 align="center"><u>PERHITUNGAN SPD RAMPUNG</u></h4>
<table width="70%">
<tr>
<td style="text-align:left;">Ditetapkan sejumlah</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">Rp {{number_format($nilai,2,",",".")}}</td>
</tr>
<tr>
<td style="text-align:left;">Yang telah dibayar semula</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">Rp {{number_format($nilai,2,",",".")}}</td>
</tr>
<tr>
<td style="text-align:left;">Sisa kurang/lebih</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">Rp </td>
</tr>
</table>
<br/>
<table width="100%">
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;">{{$ppk->nama_jabatan}}</td>
</tr>
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;">Selaku PPK</td>
</tr>
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;"><u>{{$ppk->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="text-align:left;width:50%;"></td>
<td style="text-align:left;width:50%;">NIP {{$ppk->nip_pegawai}}</td>
</tr>
</table>
<table width="50%">
<tr>
<td style="text-align:left;">SKPD</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">Dinas PKP Kab. Gresik</td>
</tr>
<tr>
<td style="text-align:left;">Kode Rekening</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">{{$data->id_kegiatan}}</td>
</tr>
<tr>
<td style="text-align:left;">Tahun Anggaran</td>
<td style="text-align:left;">:</td>
<td style="text-align:left;">{{$tahun}}</td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<h4 align="center"><u>DAFTAR PENERIMAAN UANG PERJALANAN DINAS</u></h4>
<p>Dalam rangka {{$data->tugas}} ke {{$data->tujuan}} pada tanggal 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
.</p>
<table class="myTable">
<tr>
<th style="text-align:center">NO</th>
<th style="text-align:center">NAMA</th>
<th style="text-align:center">NIP</th>
<th style="text-align:center">JABATAN</th>
<th style="text-align:center">UANG HARIAN</th>
<th style="text-align:center">TANDA TANGAN</th>
</tr>
<?php $i=1;$tot=0;?>
@foreach($menugaskan as $p)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$p->nama_pegawai}}</td>
<td style="text-align:left;">@if($p->id_golongan == 18) - @else {{ $p->nip_pegawai }} @endif</td>
<td style="text-align:center;">@if($p->id_jabatan == 4 || $p->id_jabatan == 5) {{ $p->nama_jabatan }} SEKSI {{ $p->nama_seksi }}@elseif($p->id_jabatan == 3){{ $p->nama_jabatan }} {{ $p->nama_seksi }}@elseif($p->id_bidang == 1) SEKRETARIS DINAS @else {{ $p->nama_jabatan }} {{ $p->nama_bidang }} @endif</td>
<td style="text-align:right;">{{number_format($p->uang_harian_pengikut*$data->lama_perjalanan,2,",",".")}}</td>
<?php $tot+= $p->uang_harian_pengikut*$data->lama_perjalanan;?>
@if($i%2==0)
<td style="text-align:right;">{{$i}}....................</td>
@else
<td style="text-align:left;">{{$i}}....................</td>
@endif
</tr>
<?php $i+=1;?>
@endforeach
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;"></td>
<td style="text-align:left;"></td>
<td style="text-align:center;"><b>JUMLAH</b></td>
<td style="text-align:right;">{{number_format($tot,2,",",".")}}</td>
<td style="text-align:right;"></td>
</tr>
</table>
<br/>
<table style="width:100%">
<tr>
<td style="width:50%;text-align:center;"></td> 
<td style="width:50%;text-align:center;">Gresik, 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">Pejabat Pelaksana Teknik Kegiatan</td> 
<td style="width:50%;text-align:center;">{{$ppk->nama_jabatan}}</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">(PPTK)</td> 
<td style="width:50%;text-align:center;">Selaku PPK</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">&nbsp;</td> 
<td style="width:50%;text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">&nbsp;</td> 
<td style="width:50%;text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="width:50%;text-align:center;"><u>{{$data->nama_pegawai}}</u></td> 
<td style="width:50%;text-align:center;"><u>{{$ppk->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="width:50%;text-align:center;">NIP. {{$data->nip_pptk}}</td> 
<td style="width:50%;text-align:center;">NIP. {{$ppk->nip_pegawai}}</td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<h4 align="center"><u>DAFTAR PENGELUARAN RIIL</u></h4>
<br/>
<p>Yang bertanda tangan di bawah ini :</p>
<br/>
<table width="50%">
<tr>
<td style="text-align:left">Nama</td>
<td style="text-align:left">:</td>
<td style="text-align:left">{{$ppk->nama_pegawai}}</td>
</tr>
<tr>
<td style="text-align:left">NIP</td>
<td style="text-align:left">:</td>
<td style="text-align:left">{{$ppk->nip_pegawai}}</td>
</tr>
<tr>
<td style="text-align:left">Jabatan</td>
<td style="text-align:left">:</td>
<td style="text-align:left">{{$ppk->nama_jabatan}}</td>
</tr>
</table>
<p>Berdasarkan Surat Perjalanan Dinas (SPD) tanggal 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif 
@if($nomor==null||$nomor=='')
NOMOR : 094/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/437.86/{{$tahun}}
@else
NOMOR : {{$data->nomor_perjalanan}}
@endif, dengan ini kami menyatakan dengan sesungguhnya bahwa :</p>
<p>1.  Biaya transport pegawai dan/atau biaya penginapan dibawah ini yang tidak diperoleh bukti-bukti pengeluarannya, meliputi :</p>
<table class="myTable">
<tr>
<th style="text-align:center">NO</th>
<th style="text-align:center">URAIAN</th>
<th style="text-align:center">JUMLAH</th>
</tr>
<tr>
<td style="text-align:center;vertical-align:middle;">1</td>
<td style="text-align:left;vertical-align:middle;">{{$data->uraianRiil}}</td>
<td style="text-align:right;vertical-align:middle;">{{number_format($data->nominalRiil,2,",",".")}}</td>
</tr>
<tr>
<th style="text-align:center"></th>
<th style="text-align:center">JUMLAH</th>
<td style="text-align:right;">{{number_format($data->nominalRiil,2,",",".")}}</td>
</tr>
</table>
<br/>
<p>2.   Jumlah uang tersebut pada angka 1 diatas benar-benar dikeluarkan untuk pelaksanaan perjalanan dinas dimaksud dan apabila dikemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetor kelebihan tersebut ke Kas Negara.</p>
<p>Demikian pernyataan ini kami buat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.</p>
<br/>
<table style="width:100%">
<tr>
<td style="width:50%;text-align:center;"></td> 
<td style="width:50%;text-align:center;">Gresik, 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">Mengetahui/Menyetujui</td> 
<td style="width:50%;text-align:center;">Pelaksana SPD</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">Kuasa Pengguna Anggaran</td> 
<td style="width:50%;text-align:center;"></td>
</tr>
<tr>
<td style="width:50%;text-align:center;">&nbsp;</td> 
<td style="width:50%;text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">&nbsp;</td> 
<td style="width:50%;text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="width:50%;text-align:center;"><u>{{$ppk->nama_pegawai}}</u></td> 
<td style="width:50%;text-align:center;"><u>{{$data->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="width:50%;text-align:center;">NIP. {{$ppk->nip_pegawai}}</td> 
<td style="width:50%;text-align:center;">NIP. {{$data->nip_tertugas}}</td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<h4 align="center"><u>LAPORAN PERJALANAN DINAS</u></h4>
<br/>
<table style="width:100%">
<tr>
<td style="text-align:left;vertical-align:top">I.</td>
<td style="text-align:left;vertical-align:top">DASAR</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">Surat Perintah @if($data->id_jabatan == 3 || $data->id_jabatan == 4 || $data->id_jabatan == 5) KEPALA BIDANG {{ $ttd2->nama_bidang }} DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN @else KEPALA DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN @endif</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">II.</td>
<td style="text-align:left;vertical-align:top">MAKSUD DAN TUJUAN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->tugas}}</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">III.</td>
<td style="text-align:left;vertical-align:top">WAKTU PELAKSANAAN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">IV.</td>
<td style="text-align:left;vertical-align:top">NAMA PETUGAS</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">
@foreach($menugaskan as $lp)
- {{$lp->nama_pegawai}}<br/>
@endforeach
</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">V.</td>
<td style="text-align:left;vertical-align:top">DAERAH TUJUAN/INSTANSI</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->tujuan}}</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">VI.</td>
<td style="text-align:left;vertical-align:top">HADIR DALAM PERTEMUAN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->hadir}}</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">VII.</td>
<td style="text-align:left;vertical-align:top">PETUNJUK ARAHAN YANG DIBERIKAN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->petunjuk}}</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">VIII.</td>
<td style="text-align:left;vertical-align:top">HASIL PERJALANAN DINAS</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">
	@foreach($hasil as $h)
	- {{$h->uraian_hasil_perjalanan}}<br/>
	@endforeach
</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">IX.</td>
<td style="text-align:left;vertical-align:top">MASALAH/TEMUAN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->masalah}}</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">X.</td>
<td style="text-align:left;vertical-align:top">SARAN TINDAKAN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->saran}}</td>
</tr>
<tr>
<td style="text-align:left;vertical-align:top">XI.</td>
<td style="text-align:left;vertical-align:top">LAIN-LAIN</td>
<td style="text-align:left;vertical-align:top">:</td>
<td style="text-align:left;vertical-align:top">{{$data->lain_lain}}</td>
</tr>
</table>
<br/>
<table style="width:100%">
<tr>
<td style="width:50%;text-align:center;"></td> 
<td style="width:50%;text-align:center;">Gresik, 
@if(date("m",strtotime( $data->tgl_berangkat))==1)
{{ date('d',strtotime($data->tgl_berangkat)) }} Januari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==2)
{{ date('d',strtotime($data->tgl_berangkat)) }} Februari {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==3)
{{ date('d',strtotime($data->tgl_berangkat)) }} Maret {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==4)
{{ date('d',strtotime($data->tgl_berangkat)) }} April {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==5)
{{ date('d',strtotime($data->tgl_berangkat)) }} Mei {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==6)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juni {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==7)
{{ date('d',strtotime($data->tgl_berangkat)) }} Juli {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==8)
{{ date('d',strtotime($data->tgl_berangkat)) }} Agustus {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==9)
{{ date('d',strtotime($data->tgl_berangkat)) }} September {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==10)
{{ date('d',strtotime($data->tgl_berangkat)) }} Oktober {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==11)
{{ date('d',strtotime($data->tgl_berangkat)) }} November {{ date('Y',strtotime($data->tgl_berangkat)) }}
@elseif(date('m',strtotime($data->tgl_berangkat))==12)
{{ date('d',strtotime($data->tgl_berangkat)) }} Desember {{ date('Y',strtotime($data->tgl_berangkat)) }}
@endif
</td>
</tr>
<tr>
<td style="width:50%;text-align:center;"></td> 
<td style="width:50%;text-align:center;">Pelapor,</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">&nbsp;</td> 
<td style="width:50%;text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="width:50%;text-align:center;">&nbsp;</td> 
<td style="width:50%;text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="width:50%;text-align:center;"></td> 
<td style="width:50%;text-align:center;"><u>{{$data->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="width:50%;text-align:center;"></td> 
<td style="width:50%;text-align:center;">NIP. {{$data->nip_tertugas}}</td>
</tr>
</table>
</div>
</div>
</body>
</html>