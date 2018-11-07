<!DOCTYPE html>
<html lang="en">
<head>
<title>Uang &amp; Absensi Lembur</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Sistem Informasi Surat Pertanggung Jawaban" name="description"/>
<meta content="Wahyu Kurniawan Telp :081234307080" name="author"/>
<meta id="token" name="token" content="{{csrf_token()}}"/>
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
</head>
<style type="text/css">/*
@page { margin: 30px 50px; }*/
@page { margin: 5px; }
body { margin: 0px; }
#header { position: fixed; left: 0px; top: -10px; right: 0px; height: 90px;  text-align: center; }
#footer { position: fixed; left: 0px; bottom: -10px; right: 0px; height: 50px;}
#footer .page:after {}

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
<table  class="tabelku">
<tr>
<td style="text-align:center;width:6%;">Kegiatan : </td>
<td style="text-align:left;width:64%;" colspan="6">{{strtoupper($data->uraian_kegiatan)}}</td>
<td style="text-align:left;width:30%;" colspan="3"><b>PEMBAYARAN UANG LEMBUR DAN UANG MAKAN HARIAN</b></td>
</tr>
<tr>
<td style="text-align:left;width:6%;"></td>
<td style="text-align:left;width:94%;" colspan="9">(KR : {{$data->kd_kegiatan}})</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Kantor</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;Dinas Pekerjaan Umum Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Dibebankan</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->beban}}</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">No. Rekening</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->nama_rekening}}</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Tahun Anggaran</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->periode}}</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Bagian Bulan</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->bulan}} {{$data->periode}}</td>
</tr>
</table>
<br/>
<table class="myTable" width="100%">
<thead>
<tr>
<th style="text-align:center;" >NO</th>
<th style="text-align:center;" >NAMA</th>
<th style="text-align:center;" >GOL</th>
<th style="text-align:center;" >JABATAN<br/>DALAM PROYEK</th>
<th style="text-align:center;" >VOLUME</th>
<th style="text-align:center;" >HARGA<br/>SATUAN<br/>(RP.)</th>
<th style="text-align:center;vertical-align:bottom;" >TOTAL<br/>(RP.)</th>
<th style="text-align:center;" >POT PPh 21<br/>( 15% / 5% )<br/>(RP.)</th>
<th style="text-align:center;" >TOTAL<br/>PENERIMAAN<br/>(RP.)</th>
<th style="text-align:center;" >TANDA TANGAN</th>
</tr>
<tr>
<th style="text-align:center;">1</th>
<th style="text-align:center;">2</th>
<th style="text-align:center;">3</th>
<th style="text-align:center;">4</th>
<th style="text-align:center;">5</th>
<th style="text-align:center;">6</th>
<th style="text-align:center;">7</th>
<th style="text-align:center;">8</th>
<th style="text-align:center;">9</th>
<th style="text-align:center;">10</th>
</tr>
</thead>
<tbody>
<?php $i=1;$total1=0;$total2=0;$total3=0?>
@foreach($detail as $dt)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nama_pegawai}}</td>
<td style="text-align:center;">{{$dt->nama_golongan}}</td>
<td style="text-align:left;">{{$dt->jabatan}}</td>
<td style="text-align:left;">1 org x {{$dt->volume}} jam x {{$dt->lama_lembur}} hari<br/>1 org x {{$dt->volume}} jam x {{$dt->lama_lembur}} hari</td>
<td style="text-align:right;">{{number_format($dt->uang_makan_lembur,2,",",".")}}<br/>{{number_format($dt->uang_lembur_lembur,2,",",".")}}</td>
<td style="text-align:right;">{{number_format($dt->volume*$dt->uang_makan_lembur*$dt->lama_lembur,2,",",".")}}<br/>{{number_format($dt->volume*$dt->uang_lembur_lembur*$dt->lama_lembur,2,",",".")}}</td>
<?php $total1+= ($dt->volume*$dt->uang_makan_lembur*$dt->lama_lembur)+($dt->volume*$dt->uang_lembur_lembur*$dt->lama_lembur);?>
<td style="text-align:right;">
@if($dt->pajak==0)
{{number_format(0,2,",",".")}}
@else
{{number_format(((($dt->volume*$dt->uang_makan_lembur*$dt->lama_lembur)+($dt->volume*$dt->uang_lembur_lembur*$dt->lama_lembur))*$dt->pajak)/100,2,",",".")}}
<?php $total2 +=((($dt->volume*$dt->uang_makan_lembur*$dt->lama_lembur)+($dt->volume*$dt->uang_lembur_lembur*$dt->lama_lembur))*$dt->pajak)/100;?>
@endif
</td>
<?php $tot = (($dt->volume*$dt->uang_makan_lembur*$dt->lama_lembur)+($dt->volume*$dt->uang_lembur_lembur*$dt->lama_lembur)) - ((($dt->volume*$dt->uang_makan_lembur*$dt->lama_lembur)+($dt->volume*$dt->uang_lembur_lembur*$dt->lama_lembur))*$dt->pajak)/100;
$total3 += $tot;?>
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
<td style="text-align:center;"></td>
<td style="text-align:left;"><b>JUMLAH</b></td>
<td style="text-align:center;"></td>
<td style="text-align:left;"></td>
<td style="text-align:left;"></td>
<td style="text-align:right;"></td>
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
<div style="page-break-before: always;">
<table  class="tabelku">
<tr>
<td style="text-align:center;width:6%;">Kegiatan : </td>
<td style="text-align:left;width:64%;" colspan="6">{{strtoupper($data->uraian_kegiatan)}}</td>
<td style="text-align:left;width:30%;" colspan="3"><b>DAFTAR HADIR / ABSENSI LEMBUR PNS</b></td>
</tr>
<tr>
<td style="text-align:left;width:6%;"></td>
<td style="text-align:left;width:94%;" colspan="9">(KR : {{$data->kd_kegiatan}})</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Kantor</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;Dinas Pekerjaan Umum Kabupaten Gresik</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Dibebankan</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->beban}}</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">No. Rekening</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->nama_rekening}}</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Tahun Anggaran</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->periode}}</td>
</tr>
<tr>
<td style="text-align:left;width:64%;" colspan="7"></td>
<td style="text-align:left;width:6%;">Bagian Bulan</td>
<td style="text-align:left;width:30%;" colspan="2">:&nbsp;&nbsp;{{$data->bulan}} {{$data->periode}}</td>
</tr>
</table>
<br/>
<table class="myTable1" width="100%">
<thead>
<?php $jml = cal_days_in_month(CAL_GREGORIAN, date('m',strtotime($absensi[0]->tgl_absensi)), date('Y',strtotime($absensi[0]->tgl_absensi)));?>
<tr>
<th style="text-align:center;" rowspan="3">NO</th>
<th style="text-align:center;" rowspan="3">NAMA</th>
<th style="text-align:center;" rowspan="3">GOL</th>
<th style="text-align:center;" rowspan="3">PEKERJAAN YANG<br/>DILAKSANANKAN</th>
<th style="text-align:center;" rowspan="3">JAM<br/>PELAKSANAAN</th>
<th style="text-align:center;" colspan="{{$jml*2}}">BULAN {{strtoupper($data->bulan)}} {{$data->periode}}</th>

</tr>
<tr>
@for ($i = 0; $i < $jml; $i++)
<th colspan="2" style="text-align:center;font-size: 0.35em;">{{$i+1}}</th>
@endfor
</tr>
<tr>
@for ($i = 0; $i < $jml; $i++)
<th style="text-align:center;font-size: 0.35em;">M</th>
<th style="text-align:center;font-size: 0.35em;">S</th>
@endfor
</tr>
</thead>
<tbody>
<?php $i=1;?>
@foreach($detail as $dt)
<tr>
<td style="text-align:center;">{{$i}}</td>
<td style="text-align:left;">{{$dt->nama_pegawai}}</td>
<td style="text-align:center;">{{$dt->nama_golongan}}</td>
<td style="text-align:left;">{{$dt->pekerjaan}}</td>
<td style="text-align:center;">Harikerja<br/>15.30 s/d 18.30<br/>Hari Libur:<br/>09.30 s/d 12.30</td>
@for ($j = 0; $j < $jml; $j++)
<?php $ada =0;?>
@foreach($absensi as $a)
@if($a->nip_pegawai==$dt->nip_pegawai)
@if(date('d',strtotime($a->tgl_absensi))==$j+1)
<?php $ada=1;?>
@endif
@endif
@endforeach
@if($ada==1)
<td style="text-align:center;font-size: 0.35em"></td>
<td style="text-align:center;font-size: 0.35em"></td>
@else
<td style="text-align:center;background-color:#bfcad1;font-size: 0.35em"></td>
<td style="text-align:center;background-color:#bfcad1;font-size: 0.35em"></td>
@endif
@endfor
</tr>
<?php $i++;?>
@endforeach
</tbody>
</table>
<br/>
<table style="width:100%">
<tr>
<td style="text-align:left;width:30%">Keterangan :</td>
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:40%"></td>
</tr>
<tr>
<td style="text-align:left;width:30%">- M : Mulai</td>
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:40%"></td>
</tr>
<tr>
<td style="text-align:left;width:30%">- S : Selesai</td>
<td style="text-align:center;width:30%"></td>
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
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:40%"><b><u>{{$data->nama_pegawai}}</u></td>
</tr>
<tr>
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:30%"></td>
<td style="text-align:center;width:30%">NIP. {{$data->nip_pegawai}}</td>
</tr>
</table>
</div>
</div>
</body>
</html>