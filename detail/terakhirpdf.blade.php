<!DOCTYPE html>
<html lang="en">
<head>
<title>Serah Teriam Terakhir</title>
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
<table width="100%" align="center">
	<tr>
		<td style="text-align: center"><b><u>BERITA ACARA PENYERAHAN AKHIR PEKERJAAN KONSTRUKSI</u></b></td>
	</tr>
	<tr>
		<td style="text-align: center"><b><u>FINAL HAND OVER (FHO)</u></b></td>
	</tr>
	<tr>
		<td style="text-align: center">Nomor : {{$nomor1}}</td>
	</tr>
</table>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: left">Program</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">{{$data->nama_program}}</td>
	</tr>
	<tr>
		<td style="text-align: left">Kegiatan</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">{{$data->nama_kegiatan}}</td>
	</tr>
	<tr>
		<td style="text-align: left">Pekerjaan</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">{{$data->nama_paket}}</td>
	</tr>
	<tr>
		<td style="text-align: left">Nomor Kontrak</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">{{$data->nomor_kontrak}}</td>
	</tr>
	<tr>
		<td style="text-align: left">Tanggal Kontrak</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">
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
		</td>
	</tr>
	<tr>
		<td style="text-align: left">Nomor PHO</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">{{$nomor1}}</td>
	</tr>
	<tr>
		<td style="text-align: left">Tanggal PHO</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">
			@if (date("m",strtotime($tgl1))==1)
	             {{date('d',strtotime($tgl1)).' Januari '.date('Y',strtotime($tgl1))}}
	        @elseif (date("m",strtotime($tgl1))==2)
               {{ date('d',strtotime($tgl1)).' Februari '.date('Y',strtotime($tgl1))}}
            @elseif (date("m",strtotime($tgl1))==3)
               {{ date('d',strtotime($tgl1)).' Maret '.date('Y',strtotime($tgl1))}}
            @elseif (date("m",strtotime($tgl1))==4)
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
		<td style="text-align: left">Tahun Anggaran</td>
		<td style="text-align: center">:</td>
		<td style="text-align: left">{{$data->periode}}</td>
	</tr>
</table>
<br/>
<hr/>
<br/>
<p>Pada hari ini, {{$hari2}} tanggal {{$tglnya2}} bulan {{$bulan2}} tahun {{$tahun2}}, bertempat di Kantor Dinas Pekerjaan Umum dan Tata Ruang, kami yang bertanda tangan dibawah ini </p>
<table width="100%" align="left">
	<tr>
		<td style="text-align:center;">1.</td>
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
		<td style="text-align:center;">2.</td>
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
		<td colspan="7" style="text-align:left;"><b><u>Berdasarkan :</u></b></td>
	</tr>
	<tr>
		<td style="text-align:center;vertical-align: top;">1.</td>
		<td colspan="6" style="text-align:left;vertical-align: top;">Kontrak Nomor : {{$data->nomor_kontrak}}, tanggal  
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
		antara Pihak Pertama dan Pihak Kedua tentang Surat Perjanjian (Kontrak) / SPK {{$data->nama_paket}}   Lokasi {{$data->nama_desa}}, {{$data->nama_kecamatan}} serta Berita Acara Serah Terima Pertama / PHO {{$nomor1}} tanggal
			@if (date("m",strtotime($tgl1))==1)
	             {{date('d',strtotime($tgl1)).' Januari '.date('Y',strtotime($tgl1))}}
	        @elseif (date("m",strtotime($tgl1))==2)
               {{ date('d',strtotime($tgl1)).' Februari '.date('Y',strtotime($tgl1))}}
            @elseif (date("m",strtotime($tgl1))==3)
               {{ date('d',strtotime($tgl1)).' Maret '.date('Y',strtotime($tgl1))}}
            @elseif (date("m",strtotime($tgl1))==4)
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
		<td style="text-align:center;vertical-align: top;">2.</td>
		<td colspan="6" style="text-align:left;vertical-align: top;">Surat Panitia Penerima Hasil Pekerjaan pada Pejabat Pembuat Komitmen Nomor : {{$nomor2}}, tanggal  
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
		perihal Rekomendasi / Penyampaian Berita Acara Hasil Pemeriksaan Pekerjaan Dalam Rangka Penyerahan Akhir Pekerjaan (FHO).</td>
	</tr>
	<tr>
		<td colspan="7" style="text-align:center;">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7" style="text-align:left;vertical-align: top;"><b><u>Menyatakan bahwa :</u></b></td>
	</tr>
	<tr>
		<td style="text-align:center;vertical-align: top;">1.</td>
		<td colspan="6" style="text-align:left;vertical-align: top;">PIHAK PERTAMA menyatakan bahwa PIHAK KEDUA telah melaksanakan pemeliharaan pekerjaan dengan baik.</td>
	</tr>
	<tr>
		<td style="text-align:center;vertical-align: top;">2.</td>
		<td colspan="6" style="text-align:left;vertical-align: top;">PIHAK KEDUA menyerahkan pemeliharaan {{$data->nama_paket}} Lokasi {{$data->nama_desa}}, {{$data->nama_kecamatan}}, Kabupaten Gresik kepada PIHAK PERTAMA dan PIHAK PERTAMA menerima penyerahan akhir pekerjaan konstruksi tersebut dari PIHAK KEDUA.</td>
	</tr>
</table>
<div style="page-break-before: always;">
<table>
	<tr>
		<td>Demikian Berita Acara Penyerahan Akhir Pekerjaan / Final Hand Over (FHO) ini dibuat dengan sebenarnya dalam rangkap 4 (empat) dan 2 (dua) rangkap diantaranya dibubuhi materai Rp. 6.000,- (enam ribu rupiah), masing-masing rangkap mempunyai kekuatan hukum yang sama.</td>
	</tr>
</table>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align:center;"></td>
		<td style="text-align:center;">Gresik
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
		</td>
	</tr>
	<tr>
		<td style="text-align:center;">&nbsp;</td>
		<td style="text-align:center;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align:center;">Yang Menerima Pekerjaan</td>
		<td style="text-align:center;">Yang Menyerahkan Pekerjaan</td>
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
		<td style="text-align:center;"><b><u>{{strtoupper($data->direktur_kontraktor)}}</u></b></td>
	</tr>
	<tr>
		<td style="text-align:center;">NIP. {{$data->nip_pptk}}</td>
		<td style="text-align:center;">Direktur Utama</td>
	</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="center">
	<tr>
		<td colspan="5" style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Gresik
			@if (date("m",strtotime($tgl3))==1)
	             {{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
	        @elseif (date("m",strtotime($tgl3))==2)
               {{ date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
            @elseif (date("m",strtotime($tgl3))==3)
               {{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
            @elseif (date("m",strtotime($tgl3))==4)
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
		<td colspan="5" style="text-align: center;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: left;">Nomor</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;">{{$nomor3}}</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Kepada Yth.</td>
	</tr>
	<tr>
		<td style="text-align: left;">Sifat</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;">Biasa</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Pejabat Pembuat Komitment</td>
	</tr>
	<tr>
		<td style="text-align: left;">Lampiran</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;">-</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">{{$data->nama_kegiatan}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">Perihal</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;"><b><u>Permintaan FHO</u></b></td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Tahun {{$data->periode}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">di -</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>GRESIK</u></b></td>
	</tr>
</table>
<br/>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama ini kami laporkan bahwa sesuai Surat Perjanjian (Kontrak) Nomor : {{$data->nomor_kontrak}}, tanggal 
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
        @endif, dan PHO No.{{$nomor3}} tanggal 
        @if (date("m",strtotime($tgl3))==1)
             {{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
        @elseif (date("m",strtotime($tgl3))==2)
           {{ date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
        @elseif (date("m",strtotime($tgl3))==3)
           {{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
        @elseif (date("m",strtotime($tgl3))==4)
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
        @endif {{$data->nama_paket}} Lokasi {{$data->nama_desa}},{{$data->nama_kecamatan}}, Kabupaten Gresik , masa pemeliharaan selesai tanggal 
        @if (date("m",strtotime($tgl4))==1)
             {{date('d',strtotime($tgl4)).' Januari '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==2)
           {{ date('d',strtotime($tgl4)).' Februari '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==3)
           {{ date('d',strtotime($tgl4)).' Maret '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==4)
           {{ date('d',strtotime($tgl4)).' April '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==5)
           {{ date('d',strtotime($tgl4)).' Mei '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==6)
           {{ date('d',strtotime($tgl4)).' Juni '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==7)
           {{ date('d',strtotime($tgl4)).' Juli '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==8)
           {{ date('d',strtotime($tgl4)).' Agustus '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==9)
           {{ date('d',strtotime($tgl4)).' September '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==10)
           {{ date('d',strtotime($tgl4)).' Oktober '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==11)
           {{ date('d',strtotime($tgl4)).' November '.date('Y',strtotime($tgl4))}}
        @elseif (date("m",strtotime($tgl4))==12)
           {{ date('d',strtotime($tgl4)).' Desember '.date('Y',strtotime($tgl4))}}
        @endif, oleh karena itu mohon diadakan pemeriksaan untuk Penyerahan Akhir Pekerjaan (FHO) serta pengajuan pembayaran</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian kami sampaikan kepada Bapak, atas kerja sama yang baik diucapkan terima kasih.</p>
<br/>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">{{strtoupper($data->nama_kontraktor)}}</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;"><b><u>{{$data->direktur_kontraktor}}</u></b></td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">Direktur Utama</td>
	</tr>
</table>
<br/>
<br/>
<p><u>Tembusan disampaikan kepada :</u></p>
<table>
	<tr>
		<td style="text-align: left;">Yth.</td>
		<td style="text-align: left;">1.</td>
		<td style="text-align: left;">Sdr. Pejabat Pelaksana Teknis Kegiatan (PPTK);</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: left;">2.</td>
		<td style="text-align: left;">PPHP;</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: left;">3.</td>
		<td style="text-align: left;">Pemegang Kas;</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: left;">4.</td>
		<td style="text-align: left;">Arsip;</td>
	</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="center">
	<tr>
		<td colspan="5" style="text-align: center;">&nbsp;
		<td  style="text-align: left;">Gresik
			@if (date("m",strtotime($tgl3))==1)
	             {{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
	        @elseif (date("m",strtotime($tgl3))==2)
               {{ date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
            @elseif (date("m",strtotime($tgl3))==3)
               {{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
            @elseif (date("m",strtotime($tgl3))==4)
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
		<td colspan="5" style="text-align: center;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Kepada Yth.</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Pejabat Pembuat Komitment</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">{{$data->nama_kegiatan}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">Prrihal</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;"><b><u>Laporan Selesai Masa Pemeliharaan</u></b></td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">di -</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>GRESIK</u></b></td>
	</tr>
</table>
<br/>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan pelaksanaan  <b>{{$data->nama_paket}} Lokasi {{$data->nama_desa}},{{$data->nama_kecamatan}}, Kabupaten Gresik </b> yang  pelaksanaannya dipercayakan kepada perusahaan {{$data->nama_kontraktor}} sesuai Kontrak Nomor : {{$data->nomor_kontrak}}, tanggal 
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
    @endif, dan dan Berita Acara Serah Terima Pertama PHO No.{{$nomor3}} tanggal 
    @if (date("m",strtotime($tgl3))==1)
         {{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
    @elseif (date("m",strtotime($tgl3))==2)
       {{ date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
    @elseif (date("m",strtotime($tgl3))==3)
       {{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
    @elseif (date("m",strtotime($tgl3))==4)
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
    @endif</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkenaan dengan hal tersebut di atas, dapat kami sampaikan kepada Bapak bahwa masa pemeliharaan  selesai pada tanggal 
    @if (date("m",strtotime($tgl4))==1)
         {{date('d',strtotime($tgl4)).' Januari '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==2)
       {{ date('d',strtotime($tgl4)).' Februari '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==3)
       {{ date('d',strtotime($tgl4)).' Maret '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==4)
       {{ date('d',strtotime($tgl4)).' April '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==5)
       {{ date('d',strtotime($tgl4)).' Mei '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==6)
       {{ date('d',strtotime($tgl4)).' Juni '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==7)
       {{ date('d',strtotime($tgl4)).' Juli '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==8)
       {{ date('d',strtotime($tgl4)).' Agustus '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==9)
       {{ date('d',strtotime($tgl4)).' September '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==10)
       {{ date('d',strtotime($tgl4)).' Oktober '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==11)
       {{ date('d',strtotime($tgl4)).' November '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==12)
       {{ date('d',strtotime($tgl4)).' Desember '.date('Y',strtotime($tgl4))}}
    @endif sesuai dengan Kontrak.
</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian kami sampaikan kepada Bapak, atas perhatiannya diucapkan terima kasih.</p>
<br/>
<br/>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">PPTK</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;"><b><u>{{$data->nama_pptk}}</u></b></td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">NIP {{$data->nip_pptk}}</td>
	</tr>
</table>
</div>
<div style="page-break-before: always;">
<p style="text-align: right;">Gresik 
	@if (date("m",strtotime($tgl5))==1)
         {{date('d',strtotime($tgl5)).' Januari '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==2)
       {{ date('d',strtotime($tgl5)).' Februari '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==3)
       {{ date('d',strtotime($tgl5)).' Maret '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==4)
       {{ date('d',strtotime($tgl5)).' April '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==5)
       {{ date('d',strtotime($tgl5)).' Mei '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==6)
       {{ date('d',strtotime($tgl5)).' Juni '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==7)
       {{ date('d',strtotime($tgl5)).' Juli '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==8)
       {{ date('d',strtotime($tgl5)).' Agustus '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==9)
       {{ date('d',strtotime($tgl5)).' September '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==10)
       {{ date('d',strtotime($tgl5)).' Oktober '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==11)
       {{ date('d',strtotime($tgl5)).' November '.date('Y',strtotime($tgl5))}}
    @elseif (date("m",strtotime($tgl5))==12)
       {{ date('d',strtotime($tgl5)).' Desember '.date('Y',strtotime($tgl5))}}
    @endif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
<br/>
<table width="100%" align="left">
	<tr>
		<td style="text-align: left;">Nomor</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">{{$nomor4}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">Lampiran</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">-</td>
	</tr>
	<tr>
		<td style="text-align: left;">Kepada Yth</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">Pejabat  Penerima Hasil Pekerjaan pada {{$data->nama_bidang}}</td>
	</tr>
	<tr>
		<td style="text-align: left;"></td>
		<td style="text-align: left;"></td>
		<td style="text-align: left;">di - </td>
	</tr>
	<tr>
		<td style="text-align: left;"></td>
		<td style="text-align: left;"></td>
		<td style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>GRESIK</u></td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;&nbsp;</td>
		<td style="text-align: left;">&nbsp;&nbsp;</td>
		<td style="text-align: left;">&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: left;">Perihal</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">Pelaksanaan Penyerahan Akhir Pekerjaan (FHO)</td>
	</tr>
	<tr>
		<td style="text-align: left;"></td>
		<td style="text-align: left;"></td>
		<td style="text-align: left;">{{$data->nama_paket}}</td>
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan surat {{$data->nama_kontraktor}} pelaksana {{$data->nama_paket}} Lokasi {{$data->nama_desa}},{{$data->nama_kecamatan}},  Nomor : {{$nomor3}} tanggal 
	@if (date("m",strtotime($tgl3))==1)
         {{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
    @elseif (date("m",strtotime($tgl3))==2)
       {{ date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
    @elseif (date("m",strtotime($tgl3))==3)
       {{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
    @elseif (date("m",strtotime($tgl3))==4)
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
 perihal permintaan FHO, dengan Kontrak Nomor : {{$data->nomor_kontrak}}, tanggal 
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
    @endif serta surat PPTK tentang Laporan Selesai Masa Pemeliharaan tanggal
  	@if (date("m",strtotime($tgl4))==1)
         {{date('d',strtotime($tgl4)).' Januari '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==2)
       {{ date('d',strtotime($tgl4)).' Februari '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==3)
       {{ date('d',strtotime($tgl4)).' Maret '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==4)
       {{ date('d',strtotime($tgl4)).' April '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==5)
       {{ date('d',strtotime($tgl4)).' Mei '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==6)
       {{ date('d',strtotime($tgl4)).' Juni '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==7)
       {{ date('d',strtotime($tgl4)).' Juli '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==8)
       {{ date('d',strtotime($tgl4)).' Agustus '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==9)
       {{ date('d',strtotime($tgl4)).' September '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==10)
       {{ date('d',strtotime($tgl4)).' Oktober '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==11)
       {{ date('d',strtotime($tgl4)).' November '.date('Y',strtotime($tgl4))}}
    @elseif (date("m",strtotime($tgl4))==12)
       {{ date('d',strtotime($tgl4)).' Desember '.date('Y',strtotime($tgl4))}}
    @endif, maka dengan ini diminta kepada Panitia Penerima Hasil Pekerjaan untuk melaksanakan :</p>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;vertical-align: top;">1.</td>
		<td style="text-align: left;vertical-align: top;">Pemeriksaan {{$data->nama_paket}} Lokasi {{$data->nama_desa}},{{$data->nama_kecamatan}}, Kabupaten Gresik  yang menyangkut kelengkapan administrasi dan pemeriksaan pekerjaan.</td>
	</tr>
	<tr>
		<td style="text-align: center;vertical-align: top;">2.</td>
		<td style="text-align: left;vertical-align: top;">Membuat laporan/Berita Acara Hasil Pemeriksaan Pekerjaan atas pekerjaan tersebut dalam rangka proses Penyerahan Akhir Pekerjaan Konstruksi (FHO).</td>
	</tr>
</table>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian disampaikan untuk dilaksanakan dan atas perhatiannya diucapkan terima kasih.</p>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">Pejabat Pembuat Komitmen</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;"><b><u>{{$data->nama_ppk}}</u></b></td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">NIP {{$data->nip_ppk}}</td>
	</tr>
</table>
<br/>
<br/>
<br/>
<table>
	<tr>
		<td colspan="2" style="text-align: left;"><b><u>Tembusan :</u></b></td>
	</tr>
	<tr>
		<td style="text-align: left;">1.</td>
		<td style="text-align: left;">{{strtoupper($data->nama_kontraktor)}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">2.</td>
		<td style="text-align: left;">PPTK</td>
	</tr>
	<tr>
		<td style="text-align: left;">3.</td>
		<td style="text-align: left;">Pengawas Pekerjaan</td>
	</tr>
	<tr>
		<td style="text-align: left;">4.</td>
		<td style="text-align: left;">Pertinggal</td>
	</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="center">
	<tr>
		<td colspan="5" style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Gresik
			@if (date("m",strtotime($tgl6))==1)
	             {{date('d',strtotime($tgl6)).' Januari '.date('Y',strtotime($tgl6))}}
	        @elseif (date("m",strtotime($tgl6))==2)
               {{ date('d',strtotime($tgl6)).' Februari '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==3)
               {{ date('d',strtotime($tgl6)).' Maret '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==4)
               {{ date('d',strtotime($tgl6)).' April '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==5)
               {{ date('d',strtotime($tgl6)).' Mei '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==6)
               {{ date('d',strtotime($tgl6)).' Juni '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==7)
               {{ date('d',strtotime($tgl6)).' Juli '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==8)
               {{ date('d',strtotime($tgl6)).' Agustus '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==9)
               {{ date('d',strtotime($tgl6)).' September '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==10)
               {{ date('d',strtotime($tgl6)).' Oktober '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==11)
               {{ date('d',strtotime($tgl6)).' November '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==12)
               {{ date('d',strtotime($tgl6)).' Desember '.date('Y',strtotime($tgl6))}}
            @endif
		</td>
	</tr>
	<tr>
		<td colspan="5" style="text-align: center;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: left;">Nomor</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;">{{$nomor3}}</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">Kepada Yth.</td>
	</tr>
	<tr>
		<td style="text-align: left;">Sifat</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;">Biasa</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">1. Sdr. Direktur {{$data->nama_kontraktor}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">Lampiran</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;">-</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">2. Sdr. PPTK</td>
	</tr>
	<tr>
		<td style="text-align: left;">Perihal</td>
		<td style="text-align: center;">:</td>
		<td colspan="2" style="text-align: left;"><b><u>Undangan</u></b></td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">3. Sdr. Pengawas Lapangan</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">di -</td>
	</tr>
	<tr>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: center;">&nbsp;</td>
		<td colspan="2" style="text-align: left;">&nbsp;</td>
		<td  style="text-align: center;">&nbsp;</td>
		<td  style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>GRESIK</u></b></td>
	</tr>
</table>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berkenaan dengan surat Pejabat Pembuat Komitmen tanggal 
	@if (date("m",strtotime($tgl3))==1)
	     {{date('d',strtotime($tgl3)).' Januari '.date('Y',strtotime($tgl3))}}
	@elseif (date("m",strtotime($tgl3))==2)
	   {{ date('d',strtotime($tgl3)).' Februari '.date('Y',strtotime($tgl3))}}
	@elseif (date("m",strtotime($tgl3))==3)
	   {{ date('d',strtotime($tgl3)).' Maret '.date('Y',strtotime($tgl3))}}
	@elseif (date("m",strtotime($tgl3))==4)
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
	@endif, tentang Pelaksanaan Penyerahan Akhir Pekerjaan (FHO) paket {{$data->nama_paket}}  dengan Kontrak Nomor : {{$data->nomor_kontrak}}, tanggal 
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
    @endif serta Berita Acara Serah Terima Pertama/PHO No.{{$nomor2}} tanggal
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
    , maka dengan ini saudara diundang untuk mengikuti rapat dan peninjauan lapangan yang akan diadakan pada:</p>
<br/>
<table width="80%" align="center">
	<tr>
		<td style="text-align: left;">Hari / Tanggal</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">
			@if (date("m",strtotime($tgl6))==1)
	             {{date('d',strtotime($tgl6)).' Januari '.date('Y',strtotime($tgl6))}}
	        @elseif (date("m",strtotime($tgl6))==2)
               {{ date('d',strtotime($tgl6)).' Februari '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==3)
               {{ date('d',strtotime($tgl6)).' Maret '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==4)
               {{ date('d',strtotime($tgl6)).' April '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==5)
               {{ date('d',strtotime($tgl6)).' Mei '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==6)
               {{ date('d',strtotime($tgl6)).' Juni '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==7)
               {{ date('d',strtotime($tgl6)).' Juli '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==8)
               {{ date('d',strtotime($tgl6)).' Agustus '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==9)
               {{ date('d',strtotime($tgl6)).' September '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==10)
               {{ date('d',strtotime($tgl6)).' Oktober '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==11)
               {{ date('d',strtotime($tgl6)).' November '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==12)
               {{ date('d',strtotime($tgl6)).' Desember '.date('Y',strtotime($tgl6))}}
            @endif
        </td>
	</tr>
	<tr>
		<td style="text-align: left;">Tempat</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">Kantor Dinas Pekerjaan Umum Kab. Gresik</td>
	</tr>
	<tr>
		<td style="text-align: left;"></td>
		<td style="text-align: left;"></td>
		<td style="text-align: left;">Jl.Dr. Wahidin Sudirohusodo No. 247 Gresik</td>
	</tr>
	<tr>
		<td style="text-align: left;">Acara</td>
		<td style="text-align: left;">:</td>
		<td style="text-align: left;">Rapat dalam rangka Penyerahan Akhir Pekerjaan (FHO)</td>
	</tr>
	<tr>
		<td style="text-align: left;"></td>
		<td style="text-align: left;"></td>
		<td style="text-align: left;">{{$data->nama_paket}} </td>
	</tr>
	<tr>
		<td style="text-align: left;"></td>
		<td style="text-align: left;"></td>
		<td style="text-align: left;">Lokasi {{$data->nama_desa}}-{{$data->nama_kecamatan}}, Kabupaten Gresik</td>
	</tr>
</table>
<br/>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian disampaikan untuk dihadiri, dan atas perhatiannya diucapkan terima kasih.</p>
<br/>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">Pejabat Penerima Hasil Pekerjaan</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">Ketua,</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		@if($pphp!=null)
		<td style="text-align: center;"><b><u>{{$pphp->nama_ketua}}</u></b></td>
		@else 
		<td style="text-align: center;"><b><u></u></b></td>
		@endif
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		@if($pphp!=null)
		<td style="text-align: center;">NIP {{$pphp->nip_ketua}}</td>
		@else 
		<td style="text-align: center;">NIP </td>
		@endif
	</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="center">
	<tr>
		<td colspan="3" style="text-align: center;"><b>BERITA ACARA HASIL PEMERIKSAAN PEKERJAAN</b></td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: center;"><b>PANITIA PENERIMA HASIL PEKERJAAN</b></td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: center;"><b>PADA PENYERAHAN AKHIR</b></td>
	</tr>
</table>
<table width="80%" align="center">
	<tr>
		<td style="text-align: right;">Nomor</td>
		<td style="text-align: center;">:</td>
		<td  style="text-align: left;">{{$nomor4}}</td>
	</tr>
	<tr>
		<td style="text-align: right;">Tanggal</td>
		<td style="text-align: center;">:</td>
		<td  style="text-align: left;">
			@if (date("m",strtotime($tgl6))==1)
	             {{date('d',strtotime($tgl6)).' Januari '.date('Y',strtotime($tgl6))}}
	        @elseif (date("m",strtotime($tgl6))==2)
               {{ date('d',strtotime($tgl6)).' Februari '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==3)
               {{ date('d',strtotime($tgl6)).' Maret '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==4)
               {{ date('d',strtotime($tgl6)).' April '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==5)
               {{ date('d',strtotime($tgl6)).' Mei '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==6)
               {{ date('d',strtotime($tgl6)).' Juni '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==7)
               {{ date('d',strtotime($tgl6)).' Juli '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==8)
               {{ date('d',strtotime($tgl6)).' Agustus '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==9)
               {{ date('d',strtotime($tgl6)).' September '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==10)
               {{ date('d',strtotime($tgl6)).' Oktober '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==11)
               {{ date('d',strtotime($tgl6)).' November '.date('Y',strtotime($tgl6))}}
            @elseif (date("m",strtotime($tgl6))==12)
               {{ date('d',strtotime($tgl6)).' Desember '.date('Y',strtotime($tgl6))}}
            @endif
		</td>
	</tr>
</table>
<br/>
<p>Pada hari ini, {{$hari6}} tanggal {{$tglnya6}} bulan {{$bulan6}} tahun {{$tahun6}} sesuai dengan Perjanjian  (Kontrak)/ SPK  Nomor  : {{$data->nomor_kontrak}}, tanggal 
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
 serta Berita Acara Serah Terima Pertama/PHO {{$nomor2}} tanggal  
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
    @endif {{$data->nama_paket}} Lokasi {{$data->nama_desa}}-{{$data->nama_kecamatan}}, Kabupaten Gresik dan Keputusan Kepala Dinas Pekerjaan Umum dan Tata Ruang, tentang Pembentukan Panitia Penerima Hasil Pekerjaan pada {{$data->nama_bidang}} Dinas Pekerjaan Umum, maka  Panitia  Penerima Hasil Pekerjaan bersama-sama dengan unsur Kegiatan, {{strtoupper($data->nama_kontraktor)}}  mengadakan rapat yang dihadiri oleh seperti dalam daftar hadir dibawah.</p>
<p>Panitia mengambil kesimpulan sebagai berikut :</p>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;vertical-align: top;">1.</td>
		<td style="text-align: left;vertical-align: top;">Setelah mempelajari secara seksama hasil pemeriksaan lapangan dan hasil pemeriksaan kelengkapan Administrasi Panitia menyatakan bahwa Penyedia telah melaksanakan pekerjaan pemeliharaan dengan baik sebagaimana dalam Kontrak.</td>
	</tr>
	<tr>
		<td style="text-align: center;vertical-align: top;">2.</td>
		<td style="text-align: left;vertical-align: top;">Demikian Berita Acara ini dibuat dan ditanda tangani di Gresik pada tanggal tersebut diatas.</td>
	</tr>
</table>
<br/>
<table class="myTable1" width="100%" align="center">
	<tr>
		<th style="text-align: center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;">No</th>
		<th style="text-align: center;border-top:1px solid #000000;border-right:1px solid #000000;">Nama</th>
		<th style="text-align: center;border-top:1px solid #000000;border-right:1px solid #000000;">Kedudukan</th>
		<th style="text-align: center;border-top:1px solid #000000;border-right:1px solid #000000;">Tanda Tangan</th>
	</tr>
	<tr>
		<td style="text-align: center;border-top:1px solid #000000;border-left:1px solid #000000;border-right:1px solid #000000;"></td>
		<td style="text-align: left;border-top:1px solid #000000;border-right:1px solid #000000;"><b><u>UNSUR PEJABAT</u></b></td>
		<td style="text-align: center;border-top:1px solid #000000;border-right:1px solid #000000;"></td>
		<td style="text-align: left;border-top:1px solid #000000;border-right:1px solid #000000;"></td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;"></td>
		@if($pphp!=null)
		<td style="text-align: left;border-right:1px solid #000000;">{{strtoupper($pphp->nama_ketua)}}</td>
		@else 
		<td style="text-align: left;border-right:1px solid #000000;"></td>
		@endif
		<td style="text-align: center;border-right:1px solid #000000;">PPHP</td>
		<td style="text-align: center;border-right:1px solid #000000;">..........................................</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;"></td>
		<td style="text-align: left;border-right:1px solid #000000;"><b><u>UNSUR TERKAIT</u></b></td>
		<td style="text-align: center;border-right:1px solid #000000;"></td>
		<td style="text-align: center;border-right:1px solid #000000;"></td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;"></td>
		<td style="text-align: left;border-right:1px solid #000000;">{{strtoupper($data->nama_pptk)}}</td>
		<td style="text-align: center;border-right:1px solid #000000;">PPTK</td>
		<td style="text-align: center;border-right:1px solid #000000;">.........................................</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;"></td>
		<td style="text-align: left;border-right:1px solid #000000;">{{strtoupper($data->nama_kordinator)}}</td>
		<td style="text-align: center;border-right:1px solid #000000;">Pengawas Lapangan</td>
		<td style="text-align: center;border-right:1px solid #000000;">.........................................</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;"></td>
		<td style="text-align: left;border-right:1px solid #000000;">{{strtoupper($data->direktur_kontraktor)}}</td>
		<td style="text-align: center;border-right:1px solid #000000;">Penyedia</td>
		<td style="text-align: center;border-right:1px solid #000000;">.........................................</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;">&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;border-left:1px solid #000000;border-right:1px solid #000000;border-bottom:1px solid #000000;">&nbsp;</td>
		<td style="text-align: left;border-right:1px solid #000000;border-bottom:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;border-bottom:1px solid #000000;">&nbsp;</td>
		<td style="text-align: center;border-right:1px solid #000000;border-bottom:1px solid #000000;">&nbsp;</td>
	</tr>
</table>
</div>
<div style="page-break-before: always;">
<table width="100%" align="center">
	<tr>
		<td style="text-align: left;">Nomor</td>
		<td style="text-align: center;">:</td>
		<td colspan="4" style="text-align: left;">{{$nomor4}}</td>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: left;">
			@if (date("m",strtotime($tgl6))==1)
		    	{{date('d',strtotime($tgl6)).' Januari '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==2)
		       	{{ date('d',strtotime($tgl6)).' Februari '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==3)
		       	{{ date('d',strtotime($tgl6)).' Maret '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==4)
		       	{{ date('d',strtotime($tgl6)).' April '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==5)
		       	{{ date('d',strtotime($tgl6)).' Mei '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==6)
		       	{{ date('d',strtotime($tgl6)).' Juni '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==7)
		       	{{ date('d',strtotime($tgl6)).' Juli '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==8)
		       	{{ date('d',strtotime($tgl6)).' Agustus '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==9)
		       	{{ date('d',strtotime($tgl6)).' September '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==10)
		       	{{ date('d',strtotime($tgl6)).' Oktober '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==11)
		       	{{ date('d',strtotime($tgl6)).' November '.date('Y',strtotime($tgl6))}}
		    @elseif (date("m",strtotime($tgl6))==12)
		       	{{ date('d',strtotime($tgl6)).' Desember '.date('Y',strtotime($tgl6))}}
		    @endif
		</td>
	</tr>
	<tr>
		<td style="text-align: left;">Lampiran</td>
		<td style="text-align: center;">:</td>
		<td colspan="4" style="text-align: left;">1 (Satu) berkas</td>
		<td style="text-align: left;">&nbsp;</td>
		<td style="text-align: left;">&nbsp;</td>
	</tr>
</table>
<br/>
<table>
	<tr>
		<td colspan="4" style="text-align: left;">Kepada Yth.</td>
	</tr>
	<tr>
		<td colspan="4" style="text-align: left;">Pejabat Pembuat Komitment</td>
	</tr>
	<tr>
		<td colspan="4" style="text-align: left;">di -</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: left;">&nbsp;</td>
		<td style="text-align: left;"><b><u>GRESIK</u></b></td>
	</tr>
</table>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: left;vertical-align: top;">Perihal</td>
		<td style="text-align: center;vertical-align: top;">:</td>
		<td style="text-align: left;vertical-align: top;"><b>Rekomendasi/Penyampaian Berita Acara Hasil Pemeriksaan {{$data->nama_paket}}, Dalam Rangka Penyerahan Akhir Pekerjaan / Final Hand Over (FHO)</b></td>
	</tr>
</table>
<br/>
<p>Berdasarkan Berita Acara Hasil Pemeriksaan Pekerjaan PPHP pada Penyerahan Akhir Tahun {{$data->periode}} Nomor: {{$nomor4}}, 
 	@if (date("m",strtotime($tgl6))==1)
    	{{date('d',strtotime($tgl6)).' Januari '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==2)
       	{{ date('d',strtotime($tgl6)).' Februari '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==3)
       	{{ date('d',strtotime($tgl6)).' Maret '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==4)
       	{{ date('d',strtotime($tgl6)).' April '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==5)
       	{{ date('d',strtotime($tgl6)).' Mei '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==6)
       	{{ date('d',strtotime($tgl6)).' Juni '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==7)
       	{{ date('d',strtotime($tgl6)).' Juli '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==8)
       	{{ date('d',strtotime($tgl6)).' Agustus '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==9)
       	{{ date('d',strtotime($tgl6)).' September '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==10)
       	{{ date('d',strtotime($tgl6)).' Oktober '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==11)
       	{{ date('d',strtotime($tgl6)).' November '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==12)
       	{{ date('d',strtotime($tgl6)).' Desember '.date('Y',strtotime($tgl6))}}
    @endif {{$data->nama_paket}} Lokasi {{$data->nama_desa}}-{{$data->nama_kecamatan}}, Kabupaten Gresik, maka bersama ini dilaporkan kepada Bapak bahwa tim Pejabat Penerima Hasil Pekerjaan telah meninjau kelapangan pada tanggal  
    @if (date("m",strtotime($tgl6))==1)
    	{{date('d',strtotime($tgl6)).' Januari '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==2)
       	{{ date('d',strtotime($tgl6)).' Februari '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==3)
       	{{ date('d',strtotime($tgl6)).' Maret '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==4)
       	{{ date('d',strtotime($tgl6)).' April '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==5)
       	{{ date('d',strtotime($tgl6)).' Mei '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==6)
       	{{ date('d',strtotime($tgl6)).' Juni '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==7)
       	{{ date('d',strtotime($tgl6)).' Juli '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==8)
       	{{ date('d',strtotime($tgl6)).' Agustus '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==9)
       	{{ date('d',strtotime($tgl6)).' September '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==10)
       	{{ date('d',strtotime($tgl6)).' Oktober '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==11)
       	{{ date('d',strtotime($tgl6)).' November '.date('Y',strtotime($tgl6))}}
    @elseif (date("m",strtotime($tgl6))==12)
       	{{ date('d',strtotime($tgl6)).' Desember '.date('Y',strtotime($tgl6))}}
    @endif dan ditemui bahwa pekerjaaan pemeliharaan telah terlaksana sesuai kontrak.
</p>
<p>Demikian Hasil Pemeriksaan Pekerjaan ini disampaikan dalam rangka rencana Serah Terima Akhir Pekerjaan  tersebut diatas.</p>
<br/>
<br/>
<br/>
<table width="100%" align="center">
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">Pejabat Penerima Hasil Pekerjaan</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">Ketua,</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		@if($pphp!=null)
		<td style="text-align: center;"><b><u>{{$pphp->nama_ketua}}</u></b></td>
		@else 
		<td style="text-align: center;"><b><u></u></b></td>
		@endif
	</tr>
	<tr>
		<td style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		@if($pphp!=null)
		<td style="text-align: center;">NIP {{$pphp->nip_ketua}}</td>
		@else 
		<td style="text-align: center;">NIP </td>
		@endif
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
<table>
	<tr>
		<td colspan="2" style="text-align: left;"><b><u>Tembusan :</u></b></td>
	</tr>
	<tr>
		<td style="text-align: left;">1.</td>
		<td style="text-align: left;">{{strtoupper($data->nama_kontraktor)}}</td>
	</tr>
	<tr>
		<td style="text-align: left;">2.</td>
		<td style="text-align: left;">Pertinggal</td>
	</tr>
</table>
</div>
</div>
</body>
</html>