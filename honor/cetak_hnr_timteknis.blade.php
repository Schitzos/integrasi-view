<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cetak Honorer</title>
<style>
body {
background: rgb(204,204,204); 
}
page {
background: white;
display: block;
margin: 0 auto;
margin-bottom: 0.5cm;
/* box-shadow: 0 0 0.5cm rgba(0,0,0,0.5); */
font-family: Arial, Helvetica, sans-serif;
font-size: 0.8em;
}
page[size="A4"] {  
width: 21cm;
height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
width: 33cm;
height: 21.5cm;  
}
@media print {
body, page {
margin: 0;
box-shadow: 0;
}
}
.judul{
/* background-color: aqua; */
padding-top: 0.5cm;
text-align: center;
}
.isi{
/* background-color: coral; */
margin-top:0.7cm; 
padding-left: 1cm;
padding-right: 1cm;
text-align: center;
}
table {
border-collapse: collapse;
width: 100%;
}

table, td, th {
border: 2px solid black;
}
td{
height: 35px;
}
.footer{
/* background-color: coral; */
/* margin-top:0.7cm;  */
position:absolute;
padding-left: 1cm;
padding-right: 1cm;
padding-bottom: 1cm;
text-align: center;
}
.ukuran4{
/* background-color: yellow; */
/* margin-top:0.7cm;  */
width: 10.3cm;
float: left;
text-align: center;
}
</style>
<style type="text/css" media="print">
@page 
{
size: auto;   /* auto is the initial value */
margin: 0mm;  /* this affects the margin in the printer settings */
}
</style>
</head>
<body>
{{-- <page size="A4"></page> --}}
<page size="A4" layout="portrait">
@php
$nama = '';
switch ($kodeHonor) {
case '1':
$nama = 'PPHP';
break;
case '2':
$nama = 'PPB';
break;
case '3':
$nama = 'TIM TEKNIS';
break;
case '4':
$nama = 'BULANAN';
break;    
default:
$nama = 'Tidak diketahui';
break;
}
@endphp
<div class="judul">
<p><b>DAFTAR PENERIMA HONORARIUM {{ $nama }} <br> 
KEGIATAN {{ strtoupper($kegiatan->nama_kegiatan) }} (KR:{{ $kegiatan->id_kegiatan }}) <br>
BAGIAN BULAN {{ strtoupper($bulan->nama_bulan) }} 2019
</b></p>
</div>
<div class="isi">
<table>
<tr>
<th style="width: 20px">NO</th>
<th style="width: 200px">NAMA/NIP</th>
<th >JABATAN <br>/GOL</th>
<th >NO.REKENING</th>
<th style="width: 200px">NO.NPWP</th>
<th >JML <br> (bln)</th>
<th >HONOR PER <br>BULAN(Rp)</th>
<th >JUMLAH UANG <br>(Rp)</th>
<th >PPH 5% <br>(Rp)</th>
<th >JUMLAH UANG Yg<br>DITERIMA(Rp)</th>
<th style="width: 60px" colspan="2">TANDATANGAN</th>
</tr>
@php
$i =1;    
@endphp
@foreach ($list as $lis)
@php
$pph = $lis->honor * 5 / 100;
$bersih = $lis->honor - $pph;
$uangtotal[$i] = $lis->honor;
$pphtotal[$i] = $pph;
$bersihtotal[$i] = $bersih;
@endphp
<tr>
<td>{{ $i }}</td>
<td style="text-align: left;">{{ $lis->nama_pegawai }} <br> {{ $lis->nip_pegawai }}</td>
<td>{{ $lis->nama_golongan }}</td>
<td></td>
<td></td>
<td>1</td>
<td>{{ number_format($lis->honor,2,",",".") }}</td>
<td>{{ number_format($lis->honor,2,",",".") }}</td>
<td>{{ number_format($pph,2,",",".") }}</td>
<td style="text-align: left;width: 20px;">{{ number_format($bersih,2,",",".") }}</td>
<td style="text-align: left;width: 30px;">@if($i % 2 ==0){{ $i }}........ @endif</td>
<td style="text-align: left;width: 30px;">@if($i % 2 ==1){{ $i }}........ @endif</td>
</tr>
@php
$i++;
@endphp
@endforeach
<tr>
<td colspan="7" style="height: 20px;">JUMLAH KESELURUHAN</td>
<td style="height: 20px;"><b>{{ number_format(array_sum($uangtotal),2,",",".") }}</b></td>
<td style="height: 20px;"><b>{{ number_format(array_sum($pphtotal),2,",",".") }}</b></td>
<td style="height: 20px;"><b>{{ number_format(array_sum($bersihtotal),2,",",".") }}</b></td>
<td style="height: 20px;"></td>
<td style="height: 20px;"></td>
</tr>
</table>
</div>
<div class="footer">
<div class="ukuran4">
Disetujui : <br>
PEJABAT PEMBUAT KOMITMEN <br><br><br><br><br>
<b><u>{{ strtoupper($ppk->nama_pegawai) }}</u></b><br>
NIP.{{ $ppk->nip_pegawai }}
</div>
<div class="ukuran4">
Lunas Dibayar <br>
Tgl:............ <br>
BENDAHARA PENGELUARAN <br><br><br><br>
<b><u>{{ strtoupper($bendahara->nama_pegawai) }}</u></b><br>
NIP.{{ $bendahara->nip_pegawai }}
</div>
<div class="ukuran4">
Gresik,&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;2019 <br>
PEJABAT PELAKSANA TEKNIS KEGIATAN <br><br><br><br><br>
<b><u>{{ strtoupper($kegiatan->nama_pegawai) }}</u></b><br>
NIP.{{$kegiatan->nip_pegawai }}
</div>
</div>
</page>

</body>
</html>