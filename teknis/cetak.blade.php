<!DOCTYPE html>
<html lang="en">
<head>
<title>Honor Pelaksana Teknis</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Sistem Informasi Surat Pertanggung Jawaban" name="description"/>
<meta content="Wahyu Kurniawan Telp :081234307080" name="author"/>
<meta id="token" name="token" content="{{csrf_token()}}"/>
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
</head>
<style type="text/css">
@page { margin: 5px; }
body { margin: 0px; }
#header { position: fixed; left: 0px; top: -10px; right: 0px; height: 90px;  text-align: center; }
#footer { position: fixed; left: 0px; bottom: -10px; right: 0px; height: 50px;}
#footer .page:after { content:''; }

.myTable { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable th { background-color:#fff;padding:5px;border:1px solid #000000;font-size: 0.8em; }
.myTable td { padding:5px;border:1px solid #000000;font-size: 0.8em}
.myTable1 { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable1 th { background-color:#fff;padding:5px;border:1px solid #000000;font-size: 0.7em; }
.myTable1 td { padding:5px;border:1px solid #000000;font-size: 0.7em}
.tabelku { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.tabelku th { background-color:#fff;font-size: 0.9em; }
.tabelku td { font-size: 0.9em}

</style>
<body>
<div id="footer" align="right">
</div>
<div id="content">
<table style="width:100%">
<tr>
<td style="text-align:center;">DAFTAR PENERIMA HONORARIUM PNS</td>
</tr>
<tr>
<td style="text-align:center;">KEGIATAN {{strtoupper($data->uraian_kegiatan)}} (KR : {{$data->kd_kegiatan}})</td>
</tr>
<tr>
<td style="text-align:center;">BAGIAN BULAN {{strtoupper($data->bulan_honor)}} {{$data->periode_honor}}</td>
</tr>
</table>
<br/>
<p align="right">KR Belanja : {{$data->nama_rekening}}</p>
<table class="myTable" width="100%">
<thead>
<tr>
<th style="text-align:center;" >NO</th>
<th style="text-align:center;" >NAMA</th>
<th style="text-align:center;" >JABATAN/GOL</th>
<th style="text-align:center;" >JML<br/>(bln)</th>
<th style="text-align:center;" >HONOR PERBULAN<br/>(Rp.)</th>
<th style="text-align:center;" >JUMLAH UANG<br/>(Rp.)</th>
<th style="text-align:center;" >POT PPh 21<br/>( 15% / 5% )<br/>(RP.)</th>
<th style="text-align:center;" >JUMLAH UANG<br/> YANG DITERIMAKAN<br/>(RP.)</th>
<th style="text-align:center;" >TANDA TANGAN</th>
</tr>
</thead>
<tbody>
<?php $i=1;$total1=0;$total2=0;$total3=0?>
@foreach($detail as $dt)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nama_pegawai}}</td>
<td style="text-align:left;">{{$dt->pangkat}}/{{$dt->nama_golongan}}</td>
<td style="text-align:center;">1</td>
<td style="text-align:left;">{{number_format($dt->uang_honor,2,",",".")}}</td>
<td style="text-align:right;">{{number_format($dt->uang_honor,2,",",".")}}</td>
<?php $total1+= $dt->uang_honor;?>
<td style="text-align:right;">
@if($dt->pajak==0)
{{number_format(0,2,",",".")}}
<?php $tot = $dt->uang_honor;?>
@else
{{number_format($dt->uang_honor*($dt->pajak/100),2,",",".")}}
<?php $total2 +=$dt->uang_honor*($dt->pajak/100);?>
<?php $tot = $dt->uang_honor - ($dt->uang_honor*($dt->pajak/100));?>
@endif
<?php $total3 += $tot;?>
</td>
<td style="text-align:right;">{{number_format($tot,2,",",".")}}</td>
@if($i%2==0)
<td style="text-align:right;">{{$i}}....................</td>
@else
<td style="text-align:left;">{{$i}}....................</td>
@endif
</tr>
<?php $i++;?>
@endforeach
<tr>
<td style="text-align:center;" colspan="5"><b>JUMLAH</b></td>
<td style="text-align:right;"><b>{{number_format($total1,2,",",".")}}</b></td>
<td style="text-align:right;"><b>{{number_format($total2,2,",",".")}}</b></td>
<td style="text-align:right;"><b>{{number_format($total3,2,",",".")}}</b></td>
<td style="text-align:left;"></td>
</tr>
</tbody>
</table>
<br/>
<table style="width:100%">
<tr>
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:30%">Lunas dibayar :</td>
<td style="text-align:center;width:40%">Gresik,</td>
</tr>
<tr>
<td style="text-align:center;width:30%">Mengetahui/Menyetujui :</td>
<td style="text-align:center;width:30%">TGL :</td>
<td style="text-align:center;width:40%"></td>
</tr>
<tr>
<td style="text-align:center;width:30%">PEJABAT PEMBUAT KOMITMEN</td>
<td style="text-align:center;width:30%">BENDAHARA PENGELUARAN</td>
<td style="text-align:center;width:40%">PEJABAT PELAKSANA TEKNIS KEGIATAN</td>
</tr>
<tr>
<td style="text-align:center;width:30%">&nbsp;</td>
<td style="text-align:center;width:30%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:30%">&nbsp;</td>
<td style="text-align:center;width:30%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:30%">&nbsp;</td>
<td style="text-align:center;width:30%">&nbsp;</td>
<td style="text-align:center;width:40%">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center;width:30%"><b><u>{{$ppk->nama_pegawai}}</u></b></td>
<td style="text-align:center;width:30%"><b><u>{{$bendahara->nama_pegawai}}</u></td>
<td style="text-align:center;width:40%"><b><u>{{$data->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="text-align:center;width:30%">NIP. {{$ppk->nip_pegawai}}</td>
<td style="text-align:center;width:30%">NIP. {{$bendahara->nip_pegawai}}</td>
<td style="text-align:center;width:30%">NIP. {{$data->nip_pegawai}}</td>
</tr>
</table>
</div>
</body>
</html>