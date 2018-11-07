<!DOCTYPE html>
<![if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]>
<![if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]>
<![if !IE]><html lang="en"><![endif]>
    <head>
        <meta charset="utf-8" />
        <title>Kwitansi ATK | Integrasi</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="widatah=device-widatah, initial-scale=1" name="viewport" />
        <meta content="Sistem Informasi Surat Perjalanan Dinas Kabupaten Gresik" name="description" />
        <meta content="Wahyu Kurniawan 081234307080" name="author" />
        <style type='text/css'>
            body {
                margin: 0px;
                padding: 0px;
            }
            div.container {
                position: relative;
                widatah: 1280px;
                height: 640px;
            }
            img.bg {
                position: relative;
                top: 0px;
                left: 0px;
                width: 100%;
            }
            div.no, div.kr1, div.kr2, div.dari, div.bilang, div.uraian, div.uraian2, div.uang {
                position: absolute;
                font-family: arial;
                font-size: 12px;
                font-weight: bold;
            }
            div.no {
                top: 22px;
                left: 180px;
            }
            div.kr1 {
                top: 22px;
                left: 500px;
            }
            div.kr2 {
                top: 40px;
                left: 500px;
            }
            div.dari {
                top: 57px;
                left: 180px;
            }
            div.bilang {
                top: 93px;
                left: 190px;
            }
            div.uraian {
                top: 133px;
                left: 170px;
            }
            div.uraian2 {
                top: 290px;
                left: 30px;
            }
            div.uang {
                top: 187px;
                left: 75px;
                font-size: 18px;
            }
            div.ppk, div.bendahara, div.pptk {
                position: absolute;
                font-family: arial;
                font-size: 10px;
                font-weight: bold;
                text-align: center;
            }
            div.ppk {
                top: 208px;
                left: 50px;
            }
            div.bendahara {
                top: 208px;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
            }
            div.pptk {
                top: 194px;
                right: 50px;
            }
        </style>
</head>
<body onload="window.print();">
<div class="page-content">
    <img class='bg' src="{{asset('/images/cetak/kwitansi.png')}}">
    <div class='no'></div>
    <div class="kr1">Kr Kegiatan : {{$data->id_kegiatan}}</div>
    <div class="kr2">Kr &nbsp;&nbsp;&nbsp;&nbsp; : {{ $data->rekening }}</div>
    <div class='dari'>PEMERINTAH KABUPATEN GRESIK</div>
    <div class='uang'>{{number_format($data->nilai_atk,2,",",".")}}</div>
    <div class='bilang'>{{$bilang}} Rupiah</div>
    <div class='uraian'>{{$data->uraian_atk}}</div>
    <div class='ppk'>Menyetujui,<br/>KUASA PENGGUNA ANGGARAN<br/><br/><br/><br/><br/><br/><u>{{$ppk->nama_pegawai}}</u><br/>{{$ppk->nip_pegawai}}</div>
    <div class='bendahara'><br/>BENDAHARA PENGELUARAN<br/><br/><br/><br/><br/><br/><u>{{$bendahara->nama_pegawai}}</u><br/>{{$bendahara->nip_pegawai}}</div>
    <div class='pptk'>Gresik,  
    @if(date("m",strtotime( $data->tanggal_atk))==1)
        {{ date('d',strtotime($data->tanggal_atk)) }} Januari {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==2)
      {{ date('d',strtotime($data->tanggal_atk)) }} Februari {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==3)
      {{ date('d',strtotime($data->tanggal_atk)) }} Maret {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==4)
      {{ date('d',strtotime($data->tanggal_atk)) }} April {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==5)
      {{ date('d',strtotime($data->tanggal_atk)) }} Mei {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==6)
      {{ date('d',strtotime($data->tanggal_atk)) }} Juni {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==7)
      {{ date('d',strtotime($data->tanggal_atk)) }} Juli {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==8)
      {{ date('d',strtotime($data->tanggal_atk)) }} Agustus {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==9)
      {{ date('d',strtotime($data->tanggal_atk)) }} September {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==10)
      {{ date('d',strtotime($data->tanggal_atk)) }} Oktober {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==11)
      {{ date('d',strtotime($data->tanggal_atk)) }} November {{ date('Y',strtotime($data->tanggal_atk)) }}
    @elseif(date('m',strtotime($data->tanggal_atk))==12)
      {{ date('d',strtotime($data->tanggal_atk)) }} Desember {{ date('Y',strtotime($data->tanggal_atk)) }}
    @endif
    <br/><br/>PEJABAT PELAKSANA<br/>TEKNIS KEGIATAN<br/><br/><br/><br/><br/><u>{{$data->nama_pegawai}}</u><br/>{{$data->nip_pegawai}}</div>
</div>
</body>
</html>
