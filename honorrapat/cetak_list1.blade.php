<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Form</title>
    <style>
        body {
        background: rgb(204,204,204); 
        }
        page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
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
        .subjudul{
            /* background-color: blueviolet; */
            padding-left: 1cm;
            text-align: left;
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
</head>
<body>
    {{-- <page size="A4"></page> --}}
    <page size="A4" layout="portrait">
        <div class="judul">
            <p><b>DAFTAR HONOR <br> {{ strtoupper($kegiatan->nama_kegiatan) }} <br> (KR:{{ $kegiatan->id_kegiatan }})</b></p>
        </div>
        <div class="subjudul">
            @php
                $date = $honorapat -> tgl_honor;
                $tgl = date('d-m-Y', strtotime($date));
            @endphp 
            HARI/TANGGAL :&nbsp;&nbsp; {{ strtoupper($tgl) }}<br>
            TEMPAT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; {{ $honorapat->tempat }}<br>
            JAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; {{ $honorapat->jam_mulai }} - {{ $honorapat->jam_selesai }}<br>
            ACARA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; {{ $honorapat->acara }}<br>
        </div>
        <div class="isi">
                <table>
                    <tr>
                        <th>NO</th>
                        <th style="width: 150px">NAMA</th>
                        <th style="width: 150px">INSTANSI</th>
                        <th >PANGKAT <br>/GOL</th>
                        <th style="width: 150px">NO.REK BANK JATIM</th>
                        <th style="width: 100px">NO.NPWP</th>
                        <th style="width: 90px">JUMLAH <br> UANG RAPAT</th>
                        <th style="width: 90px">PAJAK</th>
                        <th style="width: 90px">JUMLAH TERIMA</th>
                        <th style="width: 150px" colspan="2">TANDATANGAN</th>
                    </tr>
                    @php
                        $i =1;    
                    @endphp
                    @foreach ($peserta as $psrt)
                    <tr>
                        <td>{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: left;">@if($i % 2 ==0){{ $i }}............... @endif</td>
                        <td style="text-align: left;">@if($i % 2 ==1){{ $i }}............... @endif</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                    <tr>
                        <td style="height: 20px;"></td>
                        <td colspan="5" style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
                        <td style="height: 20px;"></td>
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
                Benndahara Pengeluaran <br><br><br><br>
                <b><u>{{ strtoupper($bendahara->nama_pegawai) }}</u></b><br>
                NIP.{{ $bendahara->nip_pegawai }}
            </div>
            <div class="ukuran4">
                Gresik,&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;&emsp;&ensp;2018 <br>
                PEJABAT PELAKSANA TEKNIS KEGIATAN <br><br><br><br><br>
                <b><u>{{ strtoupper($kegiatan->nama_pegawai) }}</u></b><br>
                NIP.{{$kegiatan->nip_pegawai }}
            </div>
        </div>
    </page>
    
</body>
</html>