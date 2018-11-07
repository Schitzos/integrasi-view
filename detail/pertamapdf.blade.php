<!DOCTYPE html>
<html lang="en">
<head>
<title>Serah Teriam Pertama</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Sistem Informasi Surat Pertanggung Jawaban" name="description"/>
<meta content="Wahyu Kurniawan Telp :081234303080" name="author"/>
<meta id="token" name="token" content="{{csrf_token()}}"/>
{{-- <link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/> --}}
</head>
<style>
@page { margin: 130px 50px; }
#header { position: fixed; left: 0px; top: -130px; right: 0px; height: 90px;  text-align: center; }
#footer { position: fixed; left: 0px; bottom: -1px; right: 0px; height: 10px;}
#footer .page:after { }
.myTable { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable th { background-color:#fff;padding:5px;border:1px solid #000000;font-size: 0.9em; }
.myTable td { 
padding:5px;
border:1px solid #000000;
font-size: 0.9em
}
.myTable1 { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable1 th { background-color:#fff;padding:5px;font-size: 0.9em; }
.myTable1 td { 
padding: 3px;
font-size: 0.9em;
}
</style>
<body>
<div id="header">
<img src="{{asset('/images/kopsurat.png')}}" width="100%" height="125px" align="center">
</div>
<div id="footer" align="right">
</div>
<div id="content">
<table class="myTable1" width="100%" align="center">
<tr>
<td style="text-align:center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;"><b>ANGGARAN PENDAPATAN  DAN BELANJA DAERAH</b></td>
<td colspan="6" style="text-align:center;border-top:1px solid #000000;border-right:1px solid #000000;"><b></b></td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;"><b>KABUPATEN GRESIK</b></td>
<td colspan="6" style="text-align:center;border-right:1px solid #000000;"><b>BERITA ACARA KEMAJUAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;"><b>TAHUN ANGGURAN {{$data->periode}}</b></td>
<td colspan="6"  style="text-align:center;border-right:1px solid #000000;"><b>PEKERJAAN PERENCANAAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;"><b>{{strtoupper($data->nama_paket)}}</b></td>
<td style="text-align:left;border-top:1px solid #000000;"><b>Nomor</b></td>
<td style="text-align:center;border-top:1px solid #000000;">:</td>
<td colspan="4" style="text-align:left;border-top:1px solid #000000;border-right:1px solid #000000;">{{$nomor1}}</td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;"><b>DI {{$data->nama_desa}}</b></td>
<td style="text-align:left;"><b>Tanggal</b></td>
<td style="text-align:center;">:</td>
<td colspan="4" style="text-align:left;border-right:1px solid #000000;">
@if(date("m",strtotime($tgl1))==1)
{{date('d',strtotime($tgl1)).' Januari '.date('Y',strtotime($tgl1))}}
@elseif(date("m",strtotime($tgl1))==2)
{{date('d',strtotime($tgl1)).' Februari '.date('Y',strtotime($tgl1))}}
@elseif(date("m",strtotime($tgl1))==3)
{{ date('d',strtotime($tgl1)).' Maret '.date('Y',strtotime($tgl1))}}
@elseif(date("m",strtotime($tgl1))==4)
{{ date('d',strtotime($tgl1)).' April '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==5)
{{ date('d',strtotime($tgl1)).' Mei '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==6)
{{ date('d',strtotime($tgl1)).' Juni '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==7)
{{ date('d',strtotime($tgl1)).' Juli '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==8)
{{ date('d',strtotime($tgl1)).' Agustus '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==9)
{{ date('d',strtotime($tgl1)).' September '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==10)
{{ date('d',strtotime($tgl1)).' Oktober '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==11)
{{ date('d',strtotime($tgl1)).' November '.date('Y',strtotime($tgl1))}}
@elseif (date("m",strtotime($tgl1))==12)
{{ date('d',strtotime($tgl1)).' Desember '.date('Y',strtotime($tgl1))}}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;border-bottom:1px solid #000000;"><b>{{$data->nama_kecamatan}}</b></td>
<td style="text-align:left;border-bottom:1px solid #000000;"><b>Lampiran</b></td>
<td style="text-align:center;border-bottom:1px solid #000000;">:</td>
<td colspan="4" style="text-align:left;border-right:1px solid #000000;border-bottom:1px solid #000000;">-</td>
</tr>
</table>
<br/>
<table>
<tr>
<td style="text-align:left;vertical-align: top;">A.</td>
<td style="text-align:left;vertical-align: top;">Telah melaksanakan pekerjaan perencanaan untuk  :</td>
</tr>
</table>
<table width="100%" align="left">
<tr>
<td style="text-align:center;vertical-align: top;">a.</td>
<td style="text-align:left;vertical-align: top;">Pekerjaan</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">{{$data->nama_paket}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">b.</td>
<td style="text-align:left;vertical-align: top;">Lokasi</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">{{$data->nama_desa}} - {{$data->nama_kecamatan}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">c.</td>
<td style="text-align:left;vertical-align: top;">Dinas/Instansi</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">d.</td>
<td style="text-align:left;vertical-align: top;">Sumber Dana</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">APBD Tahun Anggaran {{$data->periode}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">e.</td>
<td style="text-align:left;vertical-align: top;">Surat Perjanjian Kontrak</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td style="text-align:center;vertical-align: top;">Nomor</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">{{$data->nomor_kontrak}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;"></td>
<td style="text-align:left;vertical-align: top;"></td>
<td style="text-align:center;vertical-align: top;"></td>
<td style="text-align:center;vertical-align: top;">Tanggal</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">
@if(date("m",strtotime($data->tgl_mulai))==1)
{{date('d',strtotime($data->tgl_mulai)).' Januari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif(date("m",strtotime($data->tgl_mulai))==2)
{{date('d',strtotime($data->tgl_mulai)).' Februari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif(date("m",strtotime($data->tgl_mulai))==3)
{{ date('d',strtotime($data->tgl_mulai)).' Maret '.date('Y',strtotime($data->tgl_mulai))}}
@elseif(date("m",strtotime($data->tgl_mulai))==4)
{{ date('d',strtotime($data->tgl_mulai)).' April '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==5)
{{ date('d',strtotime($data->tgl_mulai)).' Mei '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==6)
{{ date('d',strtotime($data->tgl_mulai)).' Juni '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==7)
{{ date('d',strtotime($data->tgl_mulai)).' Juli '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==8)
{{ date('d',strtotime($data->tgl_mulai)).' Agustus '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==9)
{{ date('d',strtotime($data->tgl_mulai)).' September '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==10)
{{ date('d',strtotime($data->tgl_mulai)).' Oktober '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==11)
{{ date('d',strtotime($data->tgl_mulai)).' November '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==12)
{{ date('d',strtotime($data->tgl_mulai)).' Desember '.date('Y',strtotime($data->tgl_mulai))}}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">f.</td>
<td style="text-align:left;vertical-align: top;">Kontraktor Pelaksana</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">{{$data->nama_kontraktor}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">g.</td>
<td style="text-align:left;vertical-align: top;">Nilai Kontrak</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Rp. {{number_format($data->nilai_paket,2,",",".")}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">h.</td>
<td style="text-align:left;vertical-align: top;">Waktu Pelaksanaan</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">
@if (date("m",strtotime($data->tgl_mulai))==1)
{{date('d',strtotime($data->tgl_mulai)).' Januari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==2)
{{ date('d',strtotime($data->tgl_mulai)).' Februari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==3)
{{ date('d',strtotime($data->tgl_mulai)).' Maret '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==4)
{{ date('d',strtotime($data->tgl_mulai)).' April '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==5)
{{ date('d',strtotime($data->tgl_mulai)).' Mei '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==6)
{{ date('d',strtotime($data->tgl_mulai)).' Juni '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==7)
{{ date('d',strtotime($data->tgl_mulai)).' Juli '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==8)
{{ date('d',strtotime($data->tgl_mulai)).' Agustus '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==9)
{{ date('d',strtotime($data->tgl_mulai)).' September '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==10)
{{ date('d',strtotime($data->tgl_mulai)).' Oktober '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==11)
{{ date('d',strtotime($data->tgl_mulai)).' November '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==12)
{{ date('d',strtotime($data->tgl_mulai)).' Desember '.date('Y',strtotime($data->tgl_mulai))}}
@endif
s/d 
@if (date("m",strtotime($data->tgl_selesai))==1)
{{date('d',strtotime($data->tgl_selesai)).' Januari '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==2)
{{date('d',strtotime($data->tgl_selesai)).' Februari '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==3)
{{date('d',strtotime($data->tgl_selesai)).' Maret '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==4)
{{date('d',strtotime($data->tgl_selesai)).' April '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==5)
{{date('d',strtotime($data->tgl_selesai)).' Mei '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==6)
{{date('d',strtotime($data->tgl_selesai)).' Juni '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==7)
{{date('d',strtotime($data->tgl_selesai)).' Juli '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==8)
{{date('d',strtotime($data->tgl_selesai)).' Agustus '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==9)
{{date('d',strtotime($data->tgl_selesai)).' September '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==10)
{{date('d',strtotime($data->tgl_selesai)).' Oktober '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==11)
{{date('d',strtotime($data->tgl_selesai)).' November '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==12)
{{date('d',strtotime($data->tgl_selesai)).' Desember '.date('Y',strtotime($data->tgl_selesai))}}
@endif
</td>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<table>
<tr>
<td style="text-align:left;vertical-align: top;">B.</td>
<td style="text-align:left;vertical-align: top;">Berdasarkan Surat Perjanjian (Kontrak) tersebut diatas maka Konsultan Perencanaan telah selesai melakukan kegiatan berupa :</td>
</tr>
</table>
<table class="myTable" width="100%" align="center">
<thead>
<tr>
<th style="text-align:center;">No.</th> 
<th style="text-align:center;">Tahap Pekerjaan</th>
<th style="text-align:center;">Bobot Pekerjaan (%)</th>
<th style="text-align:center;">Tahap Penyelesaian Perkejaan (%)</th>
<th style="text-align:center;">Bobot Prestasi (%)</th>
</tr>
</thead>
<tbody>
@for ($i=0; $i <$jumlah ; $i++)
<tr>
<td style="text-align:center;">{{$i+1}}</td>
<td style="text-align:left;">{{$jenisnya[$i]}}</td>
<td style="text-align:center;">{{$jenis[$i]}}</td>
<td style="text-align:center;">100</td>
<td style="text-align:center;">{{$jenis[$i]}}</td>
</tr>
@endfor
@if($i<=9)
@for ($j=0; $j <10 ; $j++)
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">&nbsp;&nbsp;</td>
<td style="text-align:center;"></td>
<td style="text-align:center;"></td>
<td style="text-align:center;"></td>
</tr>
@endfor
@endif
</tbody>
</table>
<div style="page-break-before: always;">
<table>
<tr>
<td>Demikian Berita Acara Kemajuan Pekerjaan Perencanaan ini dibuat dengan sebenarnya untuk dipergunakan seperlunya.</td>
</tr>
</table>
<br/>
<table width="100%" align="center">
<tr>
<td style="text-align:center;"></td>
<td style="text-align:center;"><b>Dibuat oleh :</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>Pejabat Pelaksana Teknis Kegiatan</b></td>
<td style="text-align:center;"><b>Kontraktor Pelaksana</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>(PPTK)</b></td>
<td style="text-align:center;"><b>{{strtoupper($data->nama_kontraktor)}}</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b><u>{{strtoupper($data->nama_pptk) }}</u></b></td>
<td style="text-align:center;"><b><u>{{strtoupper($data->direktur_kontraktor)}}</u> </b></td>
</tr>
<tr>
<td style="text-align:center;"><b>NIP. {{$data->nip_pptk}}</b></td>
<td style="text-align:center;"><b>Direktur</b></td>
</tr>
</table>
<br/>
<table width="100%" align="center">
<tr>
<td style="text-align:center;">Diperiksa oleh :</td>
</tr>
<tr>
<td style="text-align:center;">Tim Karya Perencanaan Dinas Pekerjaan Umum dan Tata Ruang</td>
</tr>
<tr>
<td style="text-align:center;">Kabupaten Gresik</td>
</tr>
</table>
<br>
<table width="100%" align="center">
@if($jmlpphp->jml>=2)
<tr>
<td style="text-align:center;">1.</td>
@if($ketuapphp!=null)
<td style="text-align:left;">{{strtoupper($ketuapphp->nama_pegawai)}}</td>
@else
<td style="text-align:left;"></td>
@endif
<td style="text-align:left;">Ketua</td>
<td style="text-align:left;">1................................</td>
</tr>
<tr>
<td style="text-align:center;">2.</td>
@if($sekpphp!=null)
<td style="text-align:left;">{{strtoupper($sekpphp->nama_pegawai)}}</td>
@else 
<td style="text-align:left;"></td>
@endif
<td style="text-align:left;">Sekretaris</td>
<td style="text-align:right;">2................................</td>
</tr>
<?php $i=3;?>
@foreach($anggotapphp as $a)
<tr>
<td style="text-align:center;">{{$i}}.</td>
<td style="text-align:left;">{{strtoupper($a->nama_pegawai)}}</td>
<td style="text-align:left;">Anggota</td>
<td style="text-align:left;">{{$i}}................................</td>
</tr>
<?php $i++;?>
@endforeach
@else
<tr>
<td style="text-align:center;">1.</td>
<td style="text-align:left;">{{strtoupper($anggotapphp->nama_pegawai)}}</td>
<td style="text-align:left;">Pejabat</td>
<td style="text-align:left;">1................................</td>
</tr>
@endif
</table>
<br>
<table width="100%" align="center">
<tr>
<td style="text-align:center;">Mengetahui :</td>
</tr>
<tr>
<td style="text-align:center;">A.n. KEPALA DINAS PEKERJAAN UMUM</td>
</tr>
<tr>
<td style="text-align:center;">KABUPATEN GRESIK</td>
</tr>
<tr>
<td style="text-align:center;">{{strtoupper($data->nama_bidang)}}</td>
</tr>
<tr>
<td style="text-align:center;">Selaku</td>
</tr>
<tr>
<td style="text-align:center;">Pejabat Pembuat Komitmen (PPK)</td>
</tr>
<tr>
<td style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;"><u>{{strtoupper($data->nama_ppk)}}</u></td>
</tr>
<tr>
<td style="text-align:center;">{{$data->pangkat}}</td>
</tr>
<tr>
<td style="text-align:center;">NIP. {{$data->nip_ppk}}</td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<table class="myTable1" width="100%" align="center">
<tr>
<td style="text-align:center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>ANGGARAN PENDAPATAN  DAN BELANJA DAERAH</b></td>
<td colspan="6" style="text-align:center;border-top:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b></b></td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>KABUPATEN GRESIK</b></td>
<td colspan="6" style="text-align:center;border-right:1px solid #000000;width: 50%;"><b>BERITA ACARA KEMAJUAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>TAHUN ANGGURAN {{$data->periode}}</b></td>
<td colspan="6"  style="text-align:center;border-right:1px solid #000000;"><b>PEKERJAAN PERENCANAAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>{{strtoupper($data->nama_paket)}}</b></td>
<td style="text-align:left;border-top:1px solid #000000;"><b>Nomor</b></td>
<td style="text-align:center;border-top:1px solid #000000;">:</td>
<td colspan="4" style="text-align:left;border-top:1px solid #000000;border-right:1px solid #000000;">{{$nomor2}}</td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>DI {{$data->nama_desa}}</b></td>
<td style="text-align:left;"><b>Tanggal</b></td>
<td style="text-align:center;">:</td>
<td colspan="4" style="text-align:left;border-right:1px solid #000000;">
@if(date("m",strtotime($tgl2))==1)
{{date('d',strtotime($tgl2)).' Januari '.date('Y',strtotime($tgl2))}}
@elseif(date("m",strtotime($tgl2))==2)
{{date('d',strtotime($tgl2)).' Februari '.date('Y',strtotime($tgl2))}}
@elseif(date("m",strtotime($tgl2))==3)
{{ date('d',strtotime($tgl2)).' Maret '.date('Y',strtotime($tgl2))}}
@elseif(date("m",strtotime($tgl2))==4)
{{ date('d',strtotime($tgl2)).' April '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==5)
{{ date('d',strtotime($tgl2)).' Mei '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==6)
{{ date('d',strtotime($tgl2)).' Juni '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==7)
{{ date('d',strtotime($tgl2)).' Juli '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==8)
{{ date('d',strtotime($tgl2)).' Agustus '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==9)
{{ date('d',strtotime($tgl2)).' September '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==10)
{{ date('d',strtotime($tgl2)).' Oktober '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==11)
{{ date('d',strtotime($tgl2)).' November '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==12)
{{ date('d',strtotime($tgl2)).' Desember '.date('Y',strtotime($tgl2))}}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;border-bottom:1px solid #000000;;width: 50%"><b>{{$data->nama_kecamatan}}</b></td>
<td style="text-align:left;vertical-align: top;border-bottom:1px solid #000000;"><b>Lampiran</b></td>
<td style="text-align:center;vertical-align: top;border-bottom:1px solid #000000;">:</td>
<td colspan="4" style="text-align:left;vertical-align: top;border-right:1px solid #000000;border-bottom:1px solid #000000;">Berita Acara Laporan Kemajuan Pekerjaan Perencanaan</td>
</tr>
</table>
<br>
<p>Pada hari ini, <b>{{$hari2}}</b> tanggal <b>{{$tglnya2}}</b> bulan <b>{{$bulan2}}</b> Tahun <b>{{$tahun2}}</b>, kami yang bertanda tangan dibawah ini :</p>
<table width="100%" align="left">
<tr>
<td style="text-align:center;">A.</td>
<td style="text-align:left;">Nama</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">{{$data->nama_ppk}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Jabatan</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">Kepala {{$data->nama_bidang}} DPU Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Alamat Kantor</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">Jl. Dr. Wahidin Sudiro Husodo No. 247 Gresik</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td colspan="6" style="text-align:left;">Yang Selanjutnya disebut sebagai <b>PIHAK PERTAMA</b></td>
</tr>
<tr>
<td style="text-align:center;">B.</td>
<td style="text-align:left;">Nama</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">{{$data->direktur_kontraktor}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Jabatan</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">Direktur {{strtoupper($data->nama_kontraktor)}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Alamat Kantor</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">{{$data->alamat_kontraktor}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td colspan="6" style="text-align:left;">Yang Selanjutnya disebut sebagai <b>PIHAK KEDUA</b></td>
</tr>
<tr>
<td colspan="7" style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td colspan="7" style="text-align:left;">Kedua belah pihak berdasarkan :</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">1.</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Surat Penunjukan Penyedia Barang/Jasa untuk pelaksanaan pekerjaan {{$data->nama_paket}} Di {{$data->nama_desa}}-{{$data->nama_kecamatan}}  Nomor : {{$data->nomor_kontrak}} Tanggal 
@if (date("m",strtotime($data->tgl_mulai))==1)
{{date('d',strtotime($data->tgl_mulai)).' Januari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==2)
{{ date('d',strtotime($data->tgl_mulai)).' Februari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==3)
{{ date('d',strtotime($data->tgl_mulai)).' Maret '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==4)
{{ date('d',strtotime($data->tgl_mulai)).' April '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==5)
{{ date('d',strtotime($data->tgl_mulai)).' Mei '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==6)
{{ date('d',strtotime($data->tgl_mulai)).' Juni '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==7)
{{ date('d',strtotime($data->tgl_mulai)).' Juli '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==8)
{{ date('d',strtotime($data->tgl_mulai)).' Agustus '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==9)
{{ date('d',strtotime($data->tgl_mulai)).' September '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==10)
{{ date('d',strtotime($data->tgl_mulai)).' Oktober '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==11)
{{ date('d',strtotime($data->tgl_mulai)).' November '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==12)
{{ date('d',strtotime($data->tgl_mulai)).' Desember '.date('Y',strtotime($data->tgl_mulai))}}
@endif
.</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">2.</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Berita Acara Laporan Kemajuan Pekerjaan Perencanaan  Nomor : {{$nomor2}} Tanggal 
@if (date("m",strtotime($tgl2))==1)
{{date('d',strtotime($tgl2)).' Januari '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==2)
{{ date('d',strtotime($tgl2)).' Februari '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==3)
{{ date('d',strtotime($tgl2)).' Maret '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==4)
{{ date('d',strtotime($tgl2)).' April '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==5)
{{ date('d',strtotime($tgl2)).' Mei '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==6)
{{ date('d',strtotime($tgl2)).' Juni '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==7)
{{ date('d',strtotime($tgl2)).' Juli '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==8)
{{ date('d',strtotime($tgl2)).' Agustus '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==9)
{{ date('d',strtotime($tgl2)).' September '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==10)
{{ date('d',strtotime($tgl2)).' Oktober '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==11)
{{ date('d',strtotime($tgl2)).' November '.date('Y',strtotime($tgl2))}}
@elseif (date("m",strtotime($tgl2))==12)
{{ date('d',strtotime($tgl2)).' Desember '.date('Y',strtotime($tgl2))}}
@endif
.</td>
</tr>
<tr>
<td colspan="7" style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td colspan="7" style="text-align:left;vertical-align: top;">Dengan ini telah disetujui serta sepakat untuk melakukan Serah Terima Pekerjaan {{$data->nama_paket}} dengan ketentuan – ketentuan sebagai berikut :</td>
</tr>
<tr>
<td colspan="7" style="text-align:center;">&nbsp;</td>
</tr>
<tr>
<td colspan="7" style="text-align:center;">Pasal 1</td>
</tr>
<tr>
<td colspan="7" style="text-align:left;vertical-align: top;"><b>PIHAK KEDUA</b> menyerahkan kepada <b>PIHAK PERTAMA</b> dan <b>PIHAK PERTAMA</b>  menerima <b>PIHAK KEDUA</b>  seluruh hasil pekerjaan untuk :</td>
</tr>
<tr>
<td style="text-align:center;">a.</td>
<td style="text-align:left;">Pekerjaan</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">{{$data->nama_paket}}</td>
</tr>
<tr>
<td style="text-align:center;">b.</td>
<td style="text-align:left;">Lokasi</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">{{$data->nama_kecamatan}},{{$data->nama_desa}} Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;">c.</td>
<td style="text-align:left;">Instansi</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;">d.</td>
<td style="text-align:left;">Sumber Dana</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">APBD Tahun Anggaran {{$data->periode}}</td>
</tr>
<tr>
<td colspan="7" style="text-align:left;vertical-align: top;">Menyerahkan sebagaimana dimaksud pasal 1 diatas termasuk meliputi (sesuai Surat Perintah Kerja) :</td>
</tr>
<tr>
<td style="text-align:center;">a.</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Laporan Pendahuluan</td>
</tr>
<tr>
<td style="text-align:center;">b.</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Laporan Fakta dan Analisa</td>
</tr>
<tr>
<td style="text-align:center;">c.</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Laporan Akhir</td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="left">
<tr>
<td style="text-align:center;">Pasal 2</td>
</tr>
<tr>
<td style="text-align:left;vertical-align: top;">Sebagaimana kelengkapan dari Berita Acara Serah Terima Pertama ini dilampirkan Berita Acara Kemajuan Pekerjaan Perencanaan yang ditanda tangani oleh Konsultan Perencanaan dan diperiksa oleh Tim Karya Perencanaan dari Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Gresik dan disetujui oleh Kepala {{$data->nama_bidang}} Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Gresik.</td>
</tr>
<tr>
<td style="text-align:left;vertical-align: top;">Demikian Berita Acara Serah Terima Pekerjaan Perencanaan ini dibuat dan ditanda tangani di Gresik oleh kedua belah pihak dalam rangkap 4 (empat)  menurut kebutuhan untuk dipergunakan seperlunya.</td>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<table width="100%" align="center">
<tr>
<td style="text-align:center;"><b>PIHAK KEDUA</b></td>
<td style="text-align:center;"><b>PIHAK PERTAMA</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>Kontraktor Pelaksana</b></td>
<td style="text-align:center;"><b>KEPALA {{$data->nama_bidang}}</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>{{strtoupper($data->nama_kontraktor)}}</b></td>
<td style="text-align:center;"><b>DINAS PEKERJAAN UMUM DAN TATA RUANG</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>KABUPATEN GRESIK</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b><u>{{$data->direktur_kontraktor}}</u></b></td>
<td style="text-align:center;"><b><u>{{$data->nama_ppk}}</u></b></td>
</tr>
<tr>
<td style="text-align:center;"><b>Direktur</b></td>
<td style="text-align:center;"><b>{{$data->pangkat}}</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>NIP. {{$data->nip_ppk}}</b></td>
</tr>
</table>
</div>
<div style="page-break-before: always;">
<table class="myTable1" width="100%" align="center">
<tr>
<td style="text-align:center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>ANGGARAN PENDAPATAN  DAN BELANJA DAERAH</b></td>
<td colspan="6" style="text-align:center;border-top:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>BERITA ACARA KEMAJUAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>KABUPATEN GRESIK</b></td>
<td colspan="6" style="text-align:center;border-right:1px solid #000000;width: 50%;"><b>PEKERJAAN PERENCANAAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>TAHUN ANGGURAN {{$data->periode}}</b></td>
<td colspan="6"  style="text-align:center;border-right:1px solid #000000;"><b>UNTUK PEMBAYARAN ANGSURAN</b></td>
</tr>
<tr>
<td style="text-align:center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>{{strtoupper($data->nama_paket)}}</b></td>
<td style="text-align:left;border-top:1px solid #000000;"><b>Nomor</b></td>
<td style="text-align:center;border-top:1px solid #000000;">:</td>
<td colspan="4" style="text-align:left;border-top:1px solid #000000;border-right:1px solid #000000;">{{$nomor3}}</td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;width: 50%;"><b>DI {{$data->nama_desa}}</b></td>
<td style="text-align:left;"><b>Tanggal</b></td>
<td style="text-align:center;">:</td>
<td colspan="4" style="text-align:left;border-right:1px solid #000000;">
@if(date("m",strtotime($tgl3))==1)
{{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
@elseif(date("m",strtotime($tgl3))==2)
{{date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
@elseif(date("m",strtotime($tgl3))==3)
{{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
@elseif(date("m",strtotime($tgl3))==4)
{{ date('d',strtotime($tgl3)).' April '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==5)
{{ date('d',strtotime($tgl3)).' Mei '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==6)
{{ date('d',strtotime($tgl3)).' Juni '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==7)
{{ date('d',strtotime($tgl3)).' Juli '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==8)
{{ date('d',strtotime($tgl3)).' Agustus '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==9)
{{ date('d',strtotime($tgl3)).' September '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==10)
{{ date('d',strtotime($tgl3)).' Oktober '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==11)
{{ date('d',strtotime($tgl3)).' November '.date('Y',strtotime($tgl3))}}
@elseif (date("m",strtotime($tgl3))==12)
{{ date('d',strtotime($tgl3)).' Desember '.date('Y',strtotime($tgl3))}}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;border-left:1px solid #000000;border-right:1px solid #000000;border-bottom:1px solid #000000;;width: 50%"><b>{{$data->nama_kecamatan}}</b></td>
<td style="text-align:left;vertical-align: top;border-bottom:1px solid #000000;"><b>Lampiran</b></td>
<td style="text-align:center;vertical-align: top;border-bottom:1px solid #000000;">:</td>
<td colspan="4" style="text-align:left;vertical-align: top;border-right:1px solid #000000;border-bottom:1px solid #000000;">Berita Acara Serah Terima Pekerjaan</td>
</tr>
</table>
<br>
<p>Pada hari ini, <b>{{$hari3}}</b> tanggal <b>{{$tglnya3}}</b> bulan <b>{{$bulan3}}</b> Tahun <b>{{$tahun3}}</b>, kami yang bertanda tangan dibawah ini :</p>
<table width="100%" align="left">
<tr>
<td style="text-align:center;">A.</td>
<td style="text-align:left;">Nama</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">{{$data->nama_ppk}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Jabatan</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">Kepala {{$data->nama_bidang}} DPU Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Alamat Kantor</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">Jl. Dr. Wahidin Sudiro Husodo No. 247 Gresik</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td colspan="6" style="text-align:left;">Yang Selanjutnya disebut sebagai <b>PIHAK PERTAMA</b></td>
</tr>
<tr>
<td style="text-align:center;">B.</td>
<td style="text-align:left;">Nama</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">{{$data->direktur_kontraktor}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Jabatan</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">Direktur {{strtoupper($data->nama_kontraktor)}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td style="text-align:left;">Alamat Kantor</td>
<td style="text-align:center;">:</td>
<td colspan="3" style="text-align:left;">{{$data->alamat_kontraktor}}</td>
</tr>
<tr>
<td style="text-align:center;"></td>
<td colspan="6" style="text-align:left;">Yang Selanjutnya disebut sebagai <b>PIHAK KEDUA</b></td>
</tr>
<tr>
<td colspan="7" style="text-align:center;">&nbsp;</td>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<p><u>Dengan ini menyatakan bahwa :</u></p>
<p>1.	Kedua belah pihak telah setuju dan sepakat bahwa untuk :</p>
<table width="100%" align="left">
<tr>
<td style="text-align:center;vertical-align: top;">a.</td>
<td style="text-align:left;vertical-align: top;">Pekerjaan</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">{{$data->nama_paket}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">b.</td>
<td style="text-align:left;vertical-align: top;">Lokasi</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">{{$data->nama_desa}} - {{$data->nama_kecamatan}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">c.</td>
<td style="text-align:left;vertical-align: top;">Dinas/Instansi</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">d.</td>
<td style="text-align:left;vertical-align: top;">Sumber Dana</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">APBD Tahun Anggaran {{$data->periode}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">e.</td>
<td style="text-align:left;vertical-align: top;">Surat Perjanjian Kontrak</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td style="text-align:center;vertical-align: top;">Nomor</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">{{$data->nomor_kontrak}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;"></td>
<td style="text-align:left;vertical-align: top;"></td>
<td style="text-align:center;vertical-align: top;"></td>
<td style="text-align:center;vertical-align: top;">Tanggal</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="3" style="text-align:left;vertical-align: top;">
@if(date("m",strtotime($data->tgl_mulai))==1)
{{date('d',strtotime($data->tgl_mulai)).' Januari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif(date("m",strtotime($data->tgl_mulai))==2)
{{date('d',strtotime($data->tgl_mulai)).' Februari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif(date("m",strtotime($data->tgl_mulai))==3)
{{ date('d',strtotime($data->tgl_mulai)).' Maret '.date('Y',strtotime($data->tgl_mulai))}}
@elseif(date("m",strtotime($data->tgl_mulai))==4)
{{ date('d',strtotime($data->tgl_mulai)).' April '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==5)
{{ date('d',strtotime($data->tgl_mulai)).' Mei '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==6)
{{ date('d',strtotime($data->tgl_mulai)).' Juni '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==7)
{{ date('d',strtotime($data->tgl_mulai)).' Juli '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==8)
{{ date('d',strtotime($data->tgl_mulai)).' Agustus '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==9)
{{ date('d',strtotime($data->tgl_mulai)).' September '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==10)
{{ date('d',strtotime($data->tgl_mulai)).' Oktober '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==11)
{{ date('d',strtotime($data->tgl_mulai)).' November '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==12)
{{ date('d',strtotime($data->tgl_mulai)).' Desember '.date('Y',strtotime($data->tgl_mulai))}}
@endif
</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">f.</td>
<td style="text-align:left;vertical-align: top;">Kontraktor Pelaksana</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">{{$data->nama_kontraktor}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">g.</td>
<td style="text-align:left;vertical-align: top;">Nilai Kontrak</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">Rp. {{number_format($data->nilai_paket,2,",",".")}}</td>
</tr>
<tr>
<td style="text-align:center;vertical-align: top;">h.</td>
<td style="text-align:left;vertical-align: top;">Waktu Pelaksanaan</td>
<td style="text-align:center;vertical-align: top;">:</td>
<td colspan="6" style="text-align:left;vertical-align: top;">
@if (date("m",strtotime($data->tgl_mulai))==1)
{{date('d',strtotime($data->tgl_mulai)).' Januari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==2)
{{ date('d',strtotime($data->tgl_mulai)).' Februari '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==3)
{{ date('d',strtotime($data->tgl_mulai)).' Maret '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==4)
{{ date('d',strtotime($data->tgl_mulai)).' April '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==5)
{{ date('d',strtotime($data->tgl_mulai)).' Mei '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==6)
{{ date('d',strtotime($data->tgl_mulai)).' Juni '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==7)
{{ date('d',strtotime($data->tgl_mulai)).' Juli '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==8)
{{ date('d',strtotime($data->tgl_mulai)).' Agustus '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==9)
{{ date('d',strtotime($data->tgl_mulai)).' September '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==10)
{{ date('d',strtotime($data->tgl_mulai)).' Oktober '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==11)
{{ date('d',strtotime($data->tgl_mulai)).' November '.date('Y',strtotime($data->tgl_mulai))}}
@elseif (date("m",strtotime($data->tgl_mulai))==12)
{{ date('d',strtotime($data->tgl_mulai)).' Desember '.date('Y',strtotime($data->tgl_mulai))}}
@endif
s/d 
@if (date("m",strtotime($data->tgl_selesai))==1)
{{date('d',strtotime($data->tgl_selesai)).' Januari '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==2)
{{date('d',strtotime($data->tgl_selesai)).' Februari '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==3)
{{date('d',strtotime($data->tgl_selesai)).' Maret '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==4)
{{date('d',strtotime($data->tgl_selesai)).' April '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==5)
{{date('d',strtotime($data->tgl_selesai)).' Mei '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==6)
{{date('d',strtotime($data->tgl_selesai)).' Juni '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==7)
{{date('d',strtotime($data->tgl_selesai)).' Juli '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==8)
{{date('d',strtotime($data->tgl_selesai)).' Agustus '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==9)
{{date('d',strtotime($data->tgl_selesai)).' September '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==10)
{{date('d',strtotime($data->tgl_selesai)).' Oktober '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==11)
{{date('d',strtotime($data->tgl_selesai)).' November '.date('Y',strtotime($data->tgl_selesai))}}
@elseif (date("m",strtotime($data->tgl_selesai))==12)
{{date('d',strtotime($data->tgl_selesai)).' Desember '.date('Y',strtotime($data->tgl_selesai))}}
@endif
</td>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<p>Dimana prestasi pekerjaan telah mencapai kemajuan sebesar : <b>100 % (Seratus Persen)</b>, dan telah diselesaikan dengan baik sesuai dengan tugas pekerjaan yang termaktub dalam Surat Perintah Kerja.</p>
</div>
<div style="page-break-before: always;">
<table width="100%" align="left">
<tr>
<td style="text-align: left;vertical-align: top;">2.</td>
<td style="text-align: left;vertical-align: top;">Berdasarkan pasal 7 Surat Perjanjian Kerja Perencanaan tersebut diatas dan prestasi dilaporkan, maka PIHAK KEDUA berhak menerima dari PIHAK PERTAMA pembayaran sebesar 100 % x Rp. {{number_format($data->nilai_paket,2,",",".")}} = Rp. {{number_format($data->nilai_paket,2,",",".")}} ({{$bilangnya}} Rupiah)</td>
</tr>
<tr>
<td colspan="2" style="text-align: left;vertical-align: top;">Demikian Berita Acara Pembayaran Angsuran ini dibuat dan ditanda tangani di Gresik oleh kedua belah pihak dalam rangkap menurut kebutuhan untuk dipergunakan seperlunya.</td>
</tr>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<table width="100%" align="center">
<tr>
<td style="text-align:center;"><b>PIHAK KEDUA</b></td>
<td style="text-align:center;"><b>PIHAK PERTAMA</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>Kontraktor Pelaksana</b></td>
<td style="text-align:center;"><b>KEPALA {{$data->nama_bidang}}</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>{{strtoupper($data->nama_kontraktor)}}</b></td>
<td style="text-align:center;"><b>DINAS PEKERJAAN UMUM DAN TATA RUANG</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>KABUPATEN GRESIK</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>&nbsp;</b></td>
</tr>
<tr>
<td style="text-align:center;"><b><u>{{$data->direktur_kontraktor}}</u></b></td>
<td style="text-align:center;"><b><u>{{$data->nama_ppk}}</u></b></td>
</tr>
<tr>
<td style="text-align:center;"><b>Direktur</b></td>
<td style="text-align:center;"><b>{{$data->pangkat}}</b></td>
</tr>
<tr>
<td style="text-align:center;"><b>&nbsp;</b></td>
<td style="text-align:center;"><b>NIP. {{$data->nip_ppk}}</b></td>
</tr>
</table>
</div>
</div>
</body>
</html>