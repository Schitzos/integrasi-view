<!DOCTYPE html>
<html lang="en">
<head>
<title>Honor Rapat</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="Sistem Informasi Surat Pertanggung Jawaban" name="description"/>
<meta content="Wahyu Kurniawan Telp :081234307080" name="author"/>
<meta id="token" name="token" content="{{csrf_token()}}"/>
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
</head>
<style type="text/css">
@media print {
body {-webkit-print-color-adjust: exact;}
table {-webkit-print-color-adjust: exact;}
}
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
<td style="text-align:center;">REKAP R2 DAN R3</td>
</tr>
<tr>
<td style="text-align:center;">DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN </td>
</tr>
</table><br>
<table class="myTable" width="100%">
<thead>
<tr>
    <th>No<i class="fa sort"></i></th>
    <th>Kegiatan<i class="fa sort"></i></th>
    <th>R2/R3<i class="fa sort"></i></th>
    <th>Januari (%)<i class="fa sort"></i></th>
    <th>Februari (%)<i class="fa sort"></i></th>
    <th>Maret (%)<i class="fa sort"></i></th>
    <th>April (%)<i class="fa sort"></i></th>
    <th>Mei (%)<i class="fa sort"></i></th>
    <th>Juni (%)<i class="fa sort"></i></th>
    <th>Juli (%)<i class="fa sort"></i></th>
    <th>Agustus (%)<i class="fa sort"></i></th>
    <th>September (%)<i class="fa sort"></i></th>
    <th>Oktober (%)<i class="fa sort"></i></th>
    <th>November (%)<i class="fa sort"></i></th>
    <th>Desember (%)<i class="fa sort"></i></th>
</tr>
</thead>
<tbody>
@php
$i =1;    
@endphp
@foreach ($data as $dt)
@php
// r2
$r2jan = $dt->rdjan;
$r2feb = $dt->rdfeb + $r2jan;
$r2mar = $dt->rdmar + $r2feb;
$r2apr = $dt->rdapr + $r2mar;
$r2mei = $dt->rdmei + $r2apr;
$r2jun = $dt->rdjun + $r2mei;
$r2jul = $dt->rdjul + $r2jun;
$r2agus = $dt->rdagus + $r2jul;
$r2sep = $dt->rdsep + $r2agus;
$r2okt = $dt->rdokt + $r2sep;
$r2nov = $dt->rdnov + $r2okt;
$r2des = $dt->rddes + $r2nov;
// r3
$r3jan = $dt->rtjan;
$r3feb = $dt->rtfeb + $r3jan;
$r3mar = $dt->rtmar + $r3feb;
$r3apr = $dt->rtapr + $r3mar;
$r3mei = $dt->rtmei + $r3apr;
$r3jun = $dt->rtjun + $r3mei;
$r3jul = $dt->rtjul + $r3jun;
$r3agus = $dt->rtagus + $r3jul;
$r3sep = $dt->rtsep + $r3agus;
$r3okt = $dt->rtokt + $r3sep;
$r3nov = $dt->rtnov + $r3okt;
$r3des = $dt->rtdes + $r3nov;
@endphp
<tr>
    <td rowspan="2">{{ $i }}</td>
    <td rowspan="2">{{ $dt->nama_kegiatan }}</td>
    <td style="text-align: center">R2</td>
    <td style="text-align: center; @if($dt->rdjan > 0) background-color: yellow; @endif">{{ $r2jan }}</td>
    <td style="text-align: center; @if($dt->rdfeb > 0) background-color: yellow; @endif">@if($dt->rdfeb == 0) {{ $dt->rdfeb }} @else {{ $r2feb }} @endif</td>
    <td style="text-align: center; @if($dt->rdmar > 0) background-color: yellow; @endif">@if($dt->rdmar == 0) {{ $dt->rdmar }} @else {{ $r2mar }} @endif</td>
    <td style="text-align: center; @if($dt->rdapr > 0) background-color: yellow; @endif">@if($dt->rdapr == 0) {{ $dt->rdapr }} @else {{ $r2apr }} @endif</td>
    <td style="text-align: center; @if($dt->rdmei > 0) background-color: yellow; @endif">@if($dt->rdmei == 0) {{ $dt->rdmei }} @else {{ $r2mei }} @endif</td>
    <td style="text-align: center; @if($dt->rdjun > 0) background-color: yellow; @endif">@if($dt->rdjun == 0) {{ $dt->rdjun }} @else {{ $r2jun }} @endif</td>
    <td style="text-align: center; @if($dt->rdjul > 0) background-color: yellow; @endif">@if($dt->rdjul == 0) {{ $dt->rdjul }} @else {{ $r2jul }} @endif</td>
    <td style="text-align: center; @if($dt->rdagus > 0) background-color: yellow; @endif">@if($dt->rdagus == 0) {{ $dt->rdagus }} @else {{ $r2agus }} @endif</td>
    <td style="text-align: center; @if($dt->rdsep > 0) background-color: yellow; @endif">@if($dt->rdsep == 0) {{ $dt->rdsep }} @else {{ $r2sep }} @endif</td>
    <td style="text-align: center; @if($dt->rdokt > 0) background-color: yellow; @endif">@if($dt->rdokt == 0) {{ $dt->rdokt }} @else {{ $r2okt }} @endif</td>
    <td style="text-align: center; @if($dt->rdnov > 0) background-color: yellow; @endif">@if($dt->rdnov == 0) {{ $dt->rdnov }} @else {{ $r2nov }} @endif</td>
    <td style="text-align: center; @if($dt->rddes > 0) background-color: yellow; @endif">@if($dt->rddes == 0) {{ $dt->rddes }} @else {{ $r2des }} @endif</td>
</tr>
<tr>
    <td style="text-align: center">R3</td>
    <td style="text-align: center; @if($dt->rtjan > 0) background-color: orange; @endif">{{ $dt->rtjan }}</td>
    <td style="text-align: center; @if($dt->rtfeb > 0) background-color: orange; @endif">@if($dt->rtfeb == 0) {{ $dt->rtfeb }} @else {{ $r3feb }} @endif</td>
    <td style="text-align: center; @if($dt->rtmar > 0) background-color: orange; @endif">@if($dt->rtmar == 0) {{ $dt->rtmar }} @else {{ $r3mar }} @endif</td>
    <td style="text-align: center; @if($dt->rtapr > 0) background-color: orange; @endif">@if($dt->rtapr == 0) {{ $dt->rtapr }} @else {{ $r3apr }} @endif</td>
    <td style="text-align: center; @if($dt->rtmei > 0) background-color: orange; @endif">@if($dt->rtmei == 0) {{ $dt->rtmei }} @else {{ $r3mei }} @endif</td>
    <td style="text-align: center; @if($dt->rtjun > 0) background-color: orange; @endif">@if($dt->rtjun == 0) {{ $dt->rtjun }} @else {{ $r3jun }} @endif</td>
    <td style="text-align: center; @if($dt->rtjul > 0) background-color: orange; @endif">@if($dt->rtjul == 0) {{ $dt->rtjul }} @else {{ $r3jul }} @endif</td>
    <td style="text-align: center; @if($dt->rtagus > 0) background-color: orange; @endif">@if($dt->rtagus == 0) {{ $dt->rtagus }} @else {{ $r3agus }} @endif</td>
    <td style="text-align: center; @if($dt->rtsep > 0) background-color: orange; @endif">@if($dt->rtsep == 0) {{ $dt->rtsep }} @else {{ $r3sep }} @endif</td>
    <td style="text-align: center; @if($dt->rtokt > 0) background-color: orange; @endif">@if($dt->rtokt == 0) {{ $dt->rtokt }} @else {{ $r3okt }} @endif</td>
    <td style="text-align: center; @if($dt->rtnov > 0) background-color: orange; @endif">@if($dt->rtnov == 0) {{ $dt->rtnov }} @else {{ $r3nov }} @endif</td>
    <td style="text-align: center; @if($dt->rtdes > 0) background-color: orange; @endif">@if($dt->rtdes == 0) {{ $dt->rtdes }} @else {{ $r3des }} @endif</td>
</tr>
@php
$i++;
@endphp
@endforeach
</tbody>
</table>
</div>
</body>
</html>