<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Detail Paket | @yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="Sistem Informasi Integrasi" name="description" />
<meta content="DPKP" name="author" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/cubeportfolio/css/cubeportfolio.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('/assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/assets/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link href="{{ asset('/assets/apps/css/inbox.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/pages/css/portfolio.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/layouts/layout3/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{ asset('/assets/layouts/layout3/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
<style>
.fc-day-grid-event > .fc-content {
white-space: nowrap;
}
.fc-month-view span.fc-title{
white-space: normal;
}
.mySlides {display:none}
.demo {cursor:pointer}
#chartdivProgress {
width: 100%;
height: 500px;
}
#chartdivGant {
width: 100%;
height: 1000px;
}
.myTable { background-color:#fff;border-collapse:collapse;table-layout: auto;width: 100%; }
.myTable th { background-color:#fff;padding:5px;border:1px solid #000000;font-size: 0.9em; }
.myTable td { 
padding:5px;
border:1px solid #000000;
font-size: 0.9em
}
</style>
</head>
<body class="page-container-bg-solid page-header-menu-fixed">
<div class="page-wrapper">
<div class="page-wrapper-row">
<div class="page-wrapper-top">
<div class="page-header">
<div class="page-header-top">
<div class="container">
<div class="page-logo ">
<a href="{{URL::to('/home')}}">
<img src="{{ asset('/admin/layout/img/logo.png')}}" alt="logo" class="logo-default">
</a>
</div>
<a href="javascript:;" class="menu-toggler"></a>
<div class="top-menu">
<ul class="nav navbar-nav pull-right">
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->ppk==1||Auth::user()->bendahara==1||Auth::user()->spj==1)
{{--  <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<i class="icon-bell"></i>
<span class="badge badge-default">5</span>
</a>
<ul class="dropdown-menu">
<li class="external">
<h3>Peringatan (Khusus Admin) </h3>
<a href="app_todo.html">detail</a>
</li>
<li>
<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
<li>
<a href="javascript:;">
<span class="time">15-2</span>
<span class="details">
<span class="label label-sm label-icon label-success">
<i class="fa fa-users"></i>
</span> 15 Orang Telah Login Hari Ini </span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="time">3 mins</span>
<span class="details">
<span class="label label-sm label-icon label-success">
<i class="fa fa-database"></i>
</span> Server Lancar </span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="time">14</span>
<span class="details">
<span class="label label-sm label-icon label-info">
<i class="fa fa-inbox"></i>
</span> 14 Kotak Masuk </span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="time">2 days</span>
<span class="details">
<span class="label label-sm label-icon label-success">
<i class="fa fa-plus"></i>
</span> 15 File Telah Ditambahkan </span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="time">3 days</span>
<span class="details">
<span class="label label-sm label-icon label-info">
<i class="fa fa-image"></i>
</span> 15 Gambar Telah Ditambahkan </span>
</a>
</li>
</ul>
</li>
</ul>
</li>
<!-- END NOTIFICATION DROPDOWN -->
<!-- BEGIN TODO DROPDOWN -->
<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<i class="icon-calendar"></i>
<span class="badge badge-default">3</span>
</a>
<ul class="dropdown-menu extended tasks">
<li class="external">
<h3>Laporan Kinerja (Admin & PPK)</h3>
<a href="app_todo_2.html">detail</a>
</li>
<li>
<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
<li>
<a href="javascript:;">
<span class="task">
<span class="desc">Pembangunan Gedung Kantor </span>
<span class="percent">30%</span>
</span>
<span class="progress">
<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">40% Complete</span>
</span>
</span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="task">
<span class="desc">Pembangunan Sarana & Prasarana Olah Raga</span>
<span class="percent">65%</span>
</span>
<span class="progress">
<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">65% Complete</span>
</span>
</span>
</a>
</li>
<li>
<a href="javascript:;">
<span class="task">
<span class="desc">Pembangunan Infrastruktur</span>
<span class="percent">98%</span>
</span>
<span class="progress">
<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
<span class="sr-only">98% Complete</span>
</span>
</span>
</a>
</li>
</ul>
</li>
</ul>
</li>  --}}
@endif
<li class="droddown dropdown-separator">
<span class="separator"></span>
</li>
<li class="dropdown dropdown-user dropdown-dark">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<img alt="" class="img-circle" src="{{ asset('/images/avatar/'.Auth::user()->avatar)}}">
<span class="username username-hide-mobile">{{Auth::user()->nama_pegawai}}</span>
</a>
<ul class="dropdown-menu dropdown-menu-default">
<li>
<a href="{{ URL::to('/profil/'.$data->id_paket) }}">
<i class="icon-user"></i> Profil </a>
</li>
<li class="{{ Request::is( 'kalender*') ? 'active' : '' }}">
<a href="{{ URL::to('/kalender/'.Auth::user()->tipe) }}">
<i class="icon-calendar"></i> Kalender Saya </a>
</li>
<li class="{{ Request::is( 'pesan*') ? 'active' : '' }}">
<a href="{{ URL::to('/pesan') }}">
<i class="icon-envelope-open"></i> Pesan
<span class="badge badge-danger"> 3 </span>
</a>
</li>
<li class="divider"> </li>
<li>
<a href="{{ url('/keluar') }}">
<i class="icon-power"></i> Keluar </a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="page-header-menu">
<div class="container">
<div class="hor-menu  ">
<ul class="nav navbar-nav">
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
<a href="{{ URL::to('/paket') }}"><i class="icon-grid"></i> Paket
<span class="arrow"></span>
</a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'status*') ? 'active' : '' }} menu-dropdown mega-menu-dropdown ">
<a href="{{ URL::to('/status/'.$data->id_paket) }}"><i class="icon-folder-alt"></i> Status Paket
</a>
</li>
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'foto*') ? 'active' : '' }} {{ Request::is( 'video*') ? 'active' : '' }} {{ Request::is( 'kualitas*') ? 'active' : '' }} {{ Request::is( 'kunjungan*') ? 'active' : '' }}">

<a href="javascript:;"> <i class="icon-camera"></i> Dokumentasi
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'foto*') ? 'active' : '' }}">
<a href="{{ URL::to('/foto/'.$data->id_paket) }}" class="nav-link  "> Foto </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'video*') ? 'active' : '' }}">
<a href="{{ URL::to('/video/'.$data->id_paket) }}" class="nav-link  "> Video </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'kualitas*') ? 'active' : '' }}">
<a href="{{ URL::to('/kualitas/'.$data->id_paket) }}" class="nav-link  "> Quality Control </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'kunjungan*') ? 'active' : '' }}">
<a href="{{ URL::to('/kunjungan/'.$data->id_paket) }}" class="nav-link  "> Kunjungan </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'hasillelang*') ? 'active' : '' }} {{ Request::is( 'rab*') ? 'active' : '' }} {{ Request::is( 'progress*') ? 'active' : '' }} {{ Request::is( 'mcnol*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-calculator"></i> RAB
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'hasillelang*') ? 'active' : '' }}">
<a href="{{ URL::to('/hasillelang/'.$data->id_paket) }}" class="nav-link  "> Hasil Lelang </a>
</li>
<li aria-haspopup="true" class="dropdown-submenu {{ Request::is( 'rab*') ? 'active' : '' }} {{ Request::is( 'progress*') ? 'active' : '' }}">
<a href="javascript:;" class="nav-link nav-toggle "> RAB Kontrak
<span class="arrow"></span>
</a>
<ul class="dropdown-menu">
<li aria-haspopup="true" class="{{ Request::is( 'rab*') ? 'active' : '' }}">
<a href="{{ URL::to('/rab/'.$data->id_paket) }}" class="nav-link "> RAB </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'isian*') ? 'active' : '' }}">
<a href="{{ URL::to('/isian/'.$data->id_paket) }}" class="nav-link "> Isian RAB </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'progress*') ? 'active' : '' }}">
<a href="{{ URL::to('/progress/'.$data->id_paket) }}" class="nav-link "> Progres Schedule </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/gantchart/'.$data->id_paket) }}" class="nav-link "> Gantt Chart Rencana </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="dropdown-submenu ">
<a href="javascript:;" class="nav-link nav-toggle "> CCO
<span class="arrow"></span>
</a>
<ul class="dropdown-menu">
<li aria-haspopup="true" class=" ">
<a href="table_static_basic.html" class="nav-link "> CCO 1 </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="table_static_responsive.html" class="nav-link "> CCO 2 </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'mcnol*') ? 'active' : '' }}">
<a href="{{ URL::to('/mcnol/'.$data->id_paket) }}" class="nav-link  "> MC 0% </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/mcnol/'.$data->id_paket) }}" class="nav-link  "> MC 100% </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'persetujuan*') ? 'active' : '' }} {{ Request::is( 'outline*') ? 'active' : '' }} {{ Request::is( 'teshasil*') ? 'active' : '' }} {{ Request::is( 'jaminan*') ? 'active' : '' }} {{ Request::is( 'perencanaan*') ? 'active' : '' }} {{ Request::is( 'shopdraw*') ? 'active' : '' }} {{ Request::is( 'asbuilt*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-list"></i> RKS & Gambar
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="dropdown-submenu {{ Request::is( 'persetujuan*') ? 'active' : '' }} {{ Request::is( 'outline*') ? 'active' : '' }} {{ Request::is( 'teshasil*') ? 'active' : '' }} {{ Request::is( 'jaminan*') ? 'active' : '' }}">
<a href="javascript:;" class="nav-link nav-toggle "> RKS
<span class="arrow"></span>
</a>
<ul class="dropdown-menu">
<li aria-haspopup="true" class="{{ Request::is( 'outline*') ? 'active' : '' }}">
<a href="{{ URL::to('/dokrks/'.$data->id_paket) }}" class="nav-link "> Dokumen RKS </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'outline*') ? 'active' : '' }}">
<a href="{{ URL::to('/outline/'.$data->id_paket) }}" class="nav-link "> Outline Spesifikasi </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'persetujuan*') ? 'active' : '' }}">
<a href="{{ URL::to('/persetujuan/'.$data->id_paket) }}" class="nav-link "> Persetujuan Material </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'teshasil*') ? 'active' : '' }}">
<a href="{{ URL::to('/teshasil/'.$data->id_paket) }}" class="nav-link "> Rencana dan Hasil Tes Kualitas </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'jaminan*') ? 'active' : '' }}">
<a href="{{ URL::to('/jaminan/'.$data->id_paket) }}" class="nav-link "> Jaminan Kualitas/Garansi </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="dropdown-submenu {{ Request::is( 'perencanaan*') ? 'active' : '' }} {{ Request::is( 'shopdraw*') ? 'active' : '' }} {{ Request::is( 'asbuilt*') ? 'active' : '' }}">
<a href="javascript:;" class="nav-link nav-toggle "> Gambar Kerja
<span class="arrow"></span>
</a>
<ul class="dropdown-menu">
<li aria-haspopup="true" class="{{ Request::is( 'perencanaan*') ? 'active' : '' }}">
<a href="{{ URL::to('/perencanaan/'.$data->id_paket) }}" class="nav-link "> Gambar Perencanaan </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'shopdraw*') ? 'active' : '' }}">
<a href="{{ URL::to('/shopdraw/'.$data->id_paket) }}" class="nav-link "> Shop Drawing </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'asbuilt*') ? 'active' : '' }}">
<a href="{{ URL::to('/asbuilt/'.$data->id_paket) }}" class="nav-link "> As Built Drawing </a>
</li>
</ul>
</li>
</ul>
</li>
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
<a href="javascript:;"> <i class="icon-check"></i> Pelaksanaan
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/soppek/'.$data->id_paket) }}" class="nav-link  "> SOP Pekerjaan </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/form/'.$data->id_paket) }}" class="nav-link nav-toggle "> Download Form </a>
</li>
<li aria-haspopup="true" class="dropdown-submenu ">
<a href="javascript:;" class="nav-link nav-toggle "> Laporan
<span class="arrow"></span>
</a>
<ul class="dropdown-menu">
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/lapharian/'.$data->id_paket) }}" class="nav-link  "> Laporan Harian </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/minglap/'.$data->id_paket) }}" class="nav-link  "> Laporan Mingguan </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/bulap/'.$data->id_paket) }}" class="nav-link  "> Laporan Bulanan </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/bulap/'.$data->id_paket) }}" class="nav-link  "> Sertifikat Pembayaran </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/jaked/'.$data->id_paket) }}" class="nav-link  "> Jadwal Kedatangan Material Penting</a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'jaminan*') ? 'active' : '' }}">
<a href="{{ URL::to('/rapat/'.$data->id_paket) }}" class="nav-link "> Pemasalahan Terkini &amp; Hasil Rapat </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'kontrak*') ? 'active' : '' }} {{ Request::is( 'muka*') ? 'active' : '' }} {{ Request::is( 'realisasi*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-wallet"></i> Keuangan
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'kontrak*') ? 'active' : '' }}">
<a href="{{ URL::to('/kontrak/'.$data->id_paket) }}" class="nav-link  "> Kontrak </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'muka*') ? 'active' : '' }}">
<a href="{{ URL::to('/muka/'.$data->id_paket) }}" class="nav-link  "> Uang Muka </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'realisasi*') ? 'active' : '' }}">
<a href="{{ URL::to('/realisasi/'.$data->id_paket) }}" class="nav-link  "> Realisasi </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'jamuang*') ? 'active' : '' }}">
<a href="{{ URL::to('/jamuang/'.$data->id_paket) }}" class="nav-link  "> Jaminan </a>
</li>
</ul>
</li>
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'pertama*') ? 'active' : '' }} {{ Request::is( 'pemeliharaan*') ? 'active' : '' }} {{ Request::is( 'terakhir*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-wallet"></i> Serah Terima
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'pertama*') ? 'active' : '' }}">
<a href="{{ URL::to('/pertama/'.$data->id_paket) }}" class="nav-link  "> Serah Terima Pertama </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/pemeliharaan/'.$data->id_paket) }}" class="nav-link  "> Masa Pemeliharaan </a>
</li>
<li aria-haspopup="true" class=" ">
<a href="{{ URL::to('/terakhir/'.$data->id_paket) }}" class="nav-link  "> Serah Terima Akhir </a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="page-wrapper-row full-height">
<div class="page-wrapper-middle">
@yield('content')
</div>
</div>
<div class="page-wrapper-row">
<div class="page-wrapper-bottom">
<div class="page-footer">
<div class="container"> 2017 &copy; SIMULTIPRO By
<a target="_blank" href="http://keenthemes.com">Agus Siswanto, ST.</a> &nbsp;|&nbsp;
<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">0819-3803-7505</a>
</div>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
</div>
</div>
<script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/serial.js') }}"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/gantt.js') }}"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="{{ asset('/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script><script src="{{ asset('/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/admin/layout/scripts/bootstrap-filestyle.min.js') }}"></script>
<script src="{{asset('/assets/global/plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD5kK81ZW9FDXi1f33OFvCwV3jMyAFAn5k" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>
<script src="{{asset('/assets/global/plugins/fancybox/source/jquery.fancybox.js') }}"></script>
<script src="{{asset('/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
{{-- <script src="{{ asset('/assets/pages/scripts/maps-google.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('/assets/pages/scripts/ui-confirmations.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/pages/scripts/portfolio-1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/layouts/layout3/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/apps/scripts/calendar.js')}}" type="text/javascript"></script>
@if (Session::has('message'))
<script type="text/javascript">
$(document).ready(function() {
toastr.options.closeButton = true;
toastr.options.timeOut = 10000;
toastr.options.showMethod = 'slideDown';
toastr.options.showEasing = 'swing';
toastr.options.hideEasing = 'linear';
toastr.options.closeEasing = 'linear';
toastr.success('{{ Session::get('message')}}', 'Informasi...');
});
</script>
@endif
@if (Session::has('eror'))
<script type="text/javascript">
$(document).ready(function() {
toastr.options.closeButton = true;
toastr.options.timeOut = 10000;
toastr.options.showMethod = 'slideDown';
toastr.options.showEasing = 'swing';
toastr.options.hideEasing = 'linear';
toastr.options.closeEasing = 'linear';
toastr.warning('{{ Session::get('eror')}}', 'Waduh....,ada yang salah !!!');
});
</script>
@endif
@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<script type="text/javascript">
$(document).ready(function() {
toastr.options.closeButton = true;
toastr.options.timeOut = 10000;
toastr.options.showMethod = 'slideDown';
toastr.options.showEasing = 'swing';
toastr.options.hideEasing = 'linear';
toastr.options.closeEasing = 'linear';
toastr.error('{{ $error }}', 'Waduh....,ada yang salah !!!');
});
</script>        
@endforeach
@endif
<script type="text/javascript">
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$(document).ready(function () {
$(".fancybox").fancybox();
$(".fancybox-video").fancybox({
helpers : {
media: true 
},
width: 500,
height: 500,
autoSize: false,
scrolling: false
});
$('#Tgl_Kontrak1,#Tgl_Kontrak2,#Tgl_Adendum,#Tgl_SPMK,#Tgl_ST1,#Tgl_ST2').datepicker({
autoclose:true,
format:'dd MM yyyy',
formatSubmit : 'yyyy-mm-dd',
});

$("#Nilai_Kontrak#nominal,#retensi,#nominal_ubah,#retensi_ubah").autoNumeric('init');
$('#Nilai_Kontrak').change(function () {
$('#Nilai_Kon').val($('#Nilai_Kontrak').autoNumeric('get'));
});
$("#nominal,#retensi,#nominal_ubah,#retensi_ubah").autoNumeric('init');
$('#nominal').change(function () {
$('#nom').val($('#nominal').autoNumeric('get'));
});
$('#nominal_ubah').change(function () {
$('#nom_ubah').val($('#nominal_ubah').autoNumeric('get'));
});
$('#retensi_ubah').change(function () {
$('#ret_ubah').val($('#retensi_ubah').autoNumeric('get'));
});
});
$('#Tanggal_Kunjungan').datepicker({
autoclose:true,
format:'dd MM yyyy',
formatSubmit : 'yyyy-mm-dd',
});
var idkedatangan ="";
var idpengiriman ="";
var idpersetstruk="";
var idpersetarsitek="";
var idurstruk="";
var idurarsi="";
var idurmekanik="";
var idurelek="";
var idurplum="";
var idurlain="";
var idur="";
for (var i = 1; i < 500; i++) {
idkedatangan = "#Tanggal_Kedatangan_"+i;
idpengiriman = "#Tanggal_Pengiriman_"+i;
idpersetstruk = "#Tanggal_Struktur_"+i;
idpersetarsi = "#Tanggal_Arsitektur_"+i;
idpersetmekanik = "#Tanggal_Mekanikal_"+i;
idpersetelektrik = "#Tanggal_Elektronikal_"+i;
idpersetplumbing = "#Tanggal_Plumbing_"+i;
idpersetlain = "#Tanggal_Lain_"+i;
idrapat = "#Tanggal_Rapat_"+i;
idhasilmasukstruk = "#Tanggal_Masuk_Struktur_"+i;
idhasilstruk = "#Tanggal_Hasil_Struktur_"+i;
idhasilmasukarsi = "#Tanggal_Masuk_Arsitektur_"+i;
idhasilarsi = "#Tanggal_Hasil_Arsitektur_"+i;
idhasilmasukmekanik = "#Tanggal_Masuk_Mekanikal_"+i;
idhasilmekanik = "#Tanggal_Hasil_Mekanikal_"+i;
idhasilmasukelektronik = "#Tanggal_Masuk_Elektronikal_"+i;
idhasilelektronik = "#Tanggal_Hasil_Elektronikal_"+i;
idhasilmasukplumbing = "#Tanggal_Masuk_Plumbing_"+i;
idhasilplumbing = "#Tanggal_Hasil_Plumbing_"+i;
idhasilmasuklain = "#Tanggal_Masuk_Lain_"+i;
idhasillain = "#Tanggal_Hasil_Lain_"+i;
$(idhasilmasukstruk).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilstruk).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilmasukarsi).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilarsi).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilmasukmekanik).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilmekanik).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilmasukelektronik).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilelektronik).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilmasukplumbing).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilplumbing).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasilmasuklain).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idhasillain).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});

idur = "#Uraian_Pekerjaan_"+i;
idurstruk = "#Uraian_Pekerjaan_Struktur_"+i;
idurarsi = "#Uraian_Pekerjaan_Arsitektur_"+i;
idurmekanik = "#Uraian_Pekerjaan_Mekanikal_"+i;
idurelek = "#Uraian_Pekerjaan_Elektrikal_"+i;
idurplum = "#Uraian_Pekerjaan_Plumbing_"+i;
idurlain="#Uraian_Pekerjaan_Lain_"+i;
$(idkedatangan).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpengiriman).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpersetstruk).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpersetarsi).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpersetmekanik).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpersetelektrik).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpersetplumbing).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idpersetlain).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idrapat).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idur).select2({});
$(idurstruk).select2({});
$(idurarsi).select2({});
$(idurmekanik).select2({});
$(idurelek).select2({});
$(idurplum).select2({});
$(idurlain).select2({});
}
function TambahFoto(id,idpro,jwl){
$('#idjadwal').val(id);
$('#idpaket').val(idpro);
$('#jadwalke').val(jwl);
$('#TambahFoto').modal('show');
}
function TambahKatVideo(id){
$('#idpaket').val(id);
$('#TambahKategori').modal('show');
}
function TambahVideo(id,idpro){
$('#idkategori').val(id);
$('#idpaket1').val(idpro);
$('#TambahVideo').modal('show');
}
function TambahKatKualitas(id){
$('#idpaket').val(id);
$('#TambahKategori').modal('show');
}
function TambahKualitas(id,idpro){
$('#idkategori').val(id);
$('#idpaket1').val(idpro);
$('#TambahKualitas').modal('show');
}
function TambahKatKunjungan(id){
$('#idpaket').val(id);
$('#TambahKategori').modal('show');
}
function TambahKunjungan(id,idpro){
$('#idkategori').val(id);
$('#idpaket1').val(idpro);
$('#TambahKunjungan').modal('show');
}
function TambahBAHP(id){
$('#idpaket').val(id);
$('#TambahBAHP').modal('show');
}
function TambahNego(id){
$('#idpaketnego').val(id);
$('#TambahNego').modal('show');
}
function TambahPenawaran(id){
$('#idpakettawar').val(id);
$('#TambahPenawaran').modal('show');
}
function TambahHPS(id){
$('#idpakethps').val(id);
$('#TambahHPS').modal('show');
}
function TambahRAB(id){
$('#idpaket').val(id);
$('#TambahRAB').modal('show');
}
function TambahKontrakRAB(id){
$('#idpaket0').val(id);
$('#TambahKontrakRAB').modal('show');
}
function TambahJenis(id){
$('#idpaket1').val(id);
$('#TambahJenis').modal('show');
}
function TambahRencana(id){
$('#idpaket2').val(id);
$('#TambahRencana').modal('show');
}
function TambahSOP(id){
$('#idpaket').val(id);
$('#TambahSOP').modal('show');
}
function TambahHarian(id){
$('#idpaket').val(id);
$('#TambahHarian').modal('show');
}
function TambahGambar(id){
$('#idpaket').val(id);
$('#TambahGambar').modal('show');
}
function TambahSerah(id){
$('#idpaket').val(id);
$('#TambahSerah').modal('show');
}
function TambahTerakhir(id){
$('#idpaket').val(id);
$('#TambahTerakhir').modal('show');
}
function UnduhHarian(){
var id = $('#idpro').val();
window.location.href = {!! json_encode(url('/')) !!}+"/lapharian/unduh/"+id;
}
function UnduhMingguan(){
var id = $('#idpro').val();
var minggu1 = $('#Minggu1').val();
var minggu2 = $('#Minggu2').val();
var rel = id+"/"+minggu1+"/"+minggu2;
window.location.href = {!! json_encode(url('/')) !!}+"/minglap/unduh/"+rel ;
}
function UnduhBulanan(){
var id = $('#idpro').val();
var bulan = $('#Bulan').val();
var rel = id+"/"+bulan;
window.location.href = {!! json_encode(url('/')) !!}+"/bulap/unduh/"+rel ;
}
var urutane=0;
function TambahKedatangan(idpro){
var table = document.getElementById("tabelkedatangan");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/jaked/showdata/" + idpro, async: false}).responseJSON;
if (urutane==0) {
urutane = Number(jsondata.jml);
} 
var indexke = urutane+1;
var idne0 ="#Nama_Material_"+indexke;
var idne="#Uraian_Pekerjaan_"+indexke;
var idne1="#Tanggal_Kedatangan_"+indexke;
var idne2="#Tanggal_Pengiriman_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/jaked/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_'+indexke+'" id="Uraian_Pekerjaan_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
var cell8 = row.insertCell(7);
var cell9 = row.insertCell(8);
// Add some text to the new cells:
cell1.innerHTML = '<input type="text" class="form-control" id="Nama_Material_'+indexke+'" name="Nama_Material_'+indexke+'"/>';
cell2.innerHTML = strinner;
cell3.innerHTML = '<input type="text" class="form-control" class="form-control" id="Tanggal_Kedatangan_'+indexke+'" name="Tanggal_Kedatangan_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Tanggal_Pengiriman_'+indexke+'" name="Tanggal_Pengiriman_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Pesan_'+indexke+'" type="radio" name="Status_Barang_'+indexke+'" value="1" class="form-control" onclick="simpankedatangan('+indexke+');" checked />';
cell6.innerHTML = '<input id="Status_Progress_'+indexke+'" type="radio" name="Status_Barang_'+indexke+'" value="2" class="form-control" onclick="simpankedatangan('+indexke+');"/>';
cell7.innerHTML = '<input id="Status_Datang_'+indexke+'" type="radio" name="Status_Barang_'+indexke+'" value="3" class="form-control"  onclick="simpankedatangan('+indexke+');"/>';
cell8.innerHTML = '<input id="Status_Approve_'+indexke+'" type="radio" name="Status_Barang_'+indexke+'" value="4" class="form-control" onclick="simpankedatangan('+indexke+');"/>';
cell9.innerHTML = '';  
$(idne).select2({});
$(idne1).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpankedatangan(indexke);
}
});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpankedatangan(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpankedatangan(indexke);
}
});
urutane+=1;
}
function UnggahKedatangan(id,idpro){
$('#idjaked').val(id);
$('#idpaket').val(idpro);
$('#UnggahKedatangan').modal('show');
}
function UnggahPersetujuan(id,idpro,tipene){
$('#idper').val(id);
$('#idpaket').val(idpro);
$('#tipene').val(tipene);
$('#UnggahPersetujuan').modal('show');
}
function LihatPersetujuan(id,idpro){
$('#idper').val(id);
$('#idpaket').val(idpro);
var urlnya = {!! json_encode(url('/')) !!}+"/images/dokumentasi/"+idpro+"/rks/PERSETUJUAN_"+idpro+"_"+id+".pdf";
document.getElementById('FramePDF').src = urlnya;
$('#LihatPersetujuan').modal('show');
}
function UnduhKedatangan(id){
window.location.href = {!! json_encode(url('/')) !!}+"/jaked/unduh/"+id;
}
var urutanestruk=0;
function TambahStruktur(idpro){
var table = document.getElementById("tabelstruktur");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showdatastruktur/" + idpro, async: false}).responseJSON;
if (urutanestruk==0) {
urutanestruk = Number(Number(jsondata.jml));
} 
var indexke = urutanestruk + 1;
var idne0="#Material_Struktur_"+indexke;
var idne="#Uraian_Pekerjaan_Struktur_"+indexke;
var idne1="#Hasil_Standart_Struktur_"+indexke;
var idne2="#Ciri_Cacat_Struktur_"+indexke;
var idne3="#Saran_Cara_Struktur_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_Struktur_'+indexke+'" id="Uraian_Pekerjaan_Struktur_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.style.textAlign='center';
cell1.innerHTML = indexke;
cell2.innerHTML = '<input type="text" class="form-control" class="form-control" id="Material_Struktur_'+indexke+'" name="Material_Struktur_'+indexke+'">';
cell3.innerHTML = strinner;
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Hasil_Standart_Struktur_'+indexke+'" name="Hasil_Standart_Struktur_'+indexke+'">';
cell5.innerHTML = '<input type="text" class="form-control" class="form-control" id="Ciri_Cacat_Struktur_'+indexke+'" name="Ciri_Cacat_Struktur_Struktur_'+indexke+'">';
cell6.innerHTML = '<input type="text" class="form-control" class="form-control" id="Saran_Cara_Struktur_'+indexke+'" name="Saran_Cara_Struktur_'+indexke+'">';
$(idne).select2({});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanstruktur(indexke);
}
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanstruktur(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanstruktur(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanstruktur(indexke);
}
});
urutanestruk+=1;
}
function simpanstruktur(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Struktur_"+id;
var iduraian = "#Uraian_Pekerjaan_Struktur_"+id;
var idhasil = "#Hasil_Standart_Struktur_"+id;
var idcacat = "#Ciri_Cacat_Struktur_"+id;
var idsaran = "#Saran_Cara_Struktur_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/simpanstruktur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian
},
success: function(response){
refreshTablestruktur(idpro);
urutanestruk=0;
}
});
}
function refreshTablestruktur(id) {
var url = {!! json_encode(url('/')) !!}+'/outline/showstruktur/'+id;
$('div.table-container-struktur').fadeOut();
$('div.table-container-struktur').load(url, function() {
$('div.table-container-struktur').fadeIn();
});
}
function deteksistruk(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahstruktur(id,idked);
}
}
function ubahstruktur(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Struktur_"+id;
var iduraian = "#Uraian_Pekerjaan_Struktur_"+id;
var idhasil = "#Hasil_Standart_Struktur_"+id;
var idcacat = "#Ciri_Cacat_Struktur_"+id;
var idsaran = "#Saran_Cara_Struktur_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/ubahstruktur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian,
'idout':idked
},
success: function(response){
refreshTablestruktur(idpro);
urutanestruk=0;
}
});
}
var urutanearsitek=0;
function TambahArsitektur(idpro){
var table = document.getElementById("tabelarsitektur");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showdataarsitektur/" + idpro, async: false}).responseJSON;
if (urutanearsitek==0) {
urutanearsitek = Number(jsondata.jml);
} 
var indexke = urutanearsitek+=1;
var idne0="#Material_Arsitektur_"+indexke;
var idne="#Uraian_Pekerjaan_Arsitektur_"+indexke;
var idne1="#Hasil_Standart_Arsitektur_"+indexke;
var idne2="#Ciri_Cacat_Arsitektur_"+indexke;
var idne3="#Saran_Cara_Arsitektur_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_Arsitektur_'+indexke+'" id="Uraian_Pekerjaan_Arsitektur_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.style.textAlign='center';
cell1.innerHTML = indexke;
cell2.innerHTML = '<input type="text" class="form-control" class="form-control" id="Material_Arsitektur_'+indexke+'" name="Material_Arsitektur_'+indexke+'">';
cell3.innerHTML = strinner;
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Hasil_Standart_Arsitektur_'+indexke+'" name="Hasil_Standart_Arsitektur_'+indexke+'">';
cell5.innerHTML = '<input type="text" class="form-control" class="form-control" id="Ciri_Cacat_Arsitektur_'+indexke+'" name="Ciri_Cacat_Arsitektur_'+indexke+'">';
cell6.innerHTML = '<input type="text" class="form-control" class="form-control" id="Saran_Cara_Arsitektur_'+indexke+'" name="Saran_Cara_Arsitektur_'+indexke+'">';
$(idne).select2({});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanarsitektur(indexke);
}
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanarsitektur(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanarsitektur(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanarsitektur(indexke);
}
});
urutanearsitek+=1;
}
function simpanarsitektur(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Arsitektur_"+id;
var iduraian = "#Uraian_Pekerjaan_Arsitektur_"+id;
var idhasil = "#Hasil_Standart_Arsitektur_"+id;
var idcacat = "#Ciri_Cacat_Arsitektur_"+id;
var idsaran = "#Saran_Cara_Arsitektur_"+id;
var material = $(idmaterial).val(); 
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/simpanarsitektur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian
},
success: function(response){
refreshTablearsitektur(idpro);
urutanearsitek=0;
}
});
}
function refreshTablearsitektur(id) {
var url = {!! json_encode(url('/')) !!}+'/outline/showarsitektur/'+id;
$('div.table-container-arsitektur').fadeOut();
$('div.table-container-arsitektur').load(url, function() {
$('div.table-container-arsitektur').fadeIn();
});
}
function deteksiarsitek(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubaharsitektur(id,idked);
}
}
function ubaharsitektur(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Arsitektur_"+id;
var iduraian = "#Uraian_Pekerjaan_Arsitektur_"+id;
var idhasil = "#Hasil_Standart_Arsitektur_"+id;
var idcacat = "#Ciri_Cacat_Arsitektur_"+id;
var idsaran = "#Saran_Cara_Arsitektur_"+id;
var material = $(idmaterial).val(); 
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/ubaharsitektur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian,
'idout':idked
},
success: function(response){
refreshTablearsitektur(idpro);
urutanearsitek=0;
}
});
}
var urutanemekanikal=0;
function TambahMekanikal(idpro){
var table = document.getElementById("tabelmekanikal");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showdatamekanikal/" + idpro, async: false}).responseJSON;
if (urutanemekanikal==0) {
urutanemekanikal = Number(jsondata.jml);
} 
var indexke = urutanemekanikal+1;
var idne0="#Material_Mekanikal_"+indexke;
var idne="#Uraian_Pekerjaan_Mekanikal_"+indexke;
var idne1="#Hasil_Standart_Mekanikal_"+indexke;
var idne2="#Ciri_Cacat_Mekanikal_"+indexke;
var idne3="#Saran_Cara_Mekanikal_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_Mekanikal_'+indexke+'" id="Uraian_Pekerjaan_Mekanikal_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.style.textAlign='center';
cell1.innerHTML = indexke;
cell2.innerHTML = '<input type="text" class="form-control" class="form-control" id="Material_Mekanikal_'+indexke+'" name="Material_Mekanikal_'+indexke+'">';
cell3.innerHTML = strinner;
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Hasil_Standart_Mekanikal_'+indexke+'" name="Hasil_Standart_Mekanikal_'+indexke+'">';
cell5.innerHTML = '<input type="text" class="form-control" class="form-control" id="Ciri_Cacat_Mekanikal_'+indexke+'" name="Ciri_Cacat_Mekanikal_'+indexke+'">';
cell6.innerHTML = '<input type="text" class="form-control" class="form-control" id="Saran_Cara_Mekanikal_'+indexke+'" name="Saran_Cara_Mekanikal_'+indexke+'">';
$(idne).select2({});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanmekanikal(indexke);
}
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanmekanikal(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanmekanikal(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanmekanikal(indexke);
}
});
urutanemekanikal+=1;
}
function simpanmekanikal(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Mekanikal_"+id;
var iduraian = "#Uraian_Pekerjaan_Mekanikal_"+id;
var idhasil = "#Hasil_Standart_Mekanikal_"+id;
var idcacat = "#Ciri_Cacat_Mekanikal_"+id;
var idsaran = "#Saran_Cara_Mekanikal_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/simpanmekanikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian
},
success: function(response){
refreshTablemekanikal(idpro);
urutanemekanikal=0;
}
});
}
function refreshTablemekanikal(id) {
var url = {!! json_encode(url('/')) !!}+'/outline/showmekanikal/'+id;
$('div.table-container-mekanikal').fadeOut();
$('div.table-container-mekanikal').load(url, function() {
$('div.table-container-mekanikal').fadeIn();
});
}
function deteksimekanik(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahmekanikal(id,idked);
}
}
function ubahmekanikal(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Mekanikal_"+id;
var iduraian = "#Uraian_Pekerjaan_Mekanikal_"+id;
var idhasil = "#Hasil_Standart_Mekanikal_"+id;
var idcacat = "#Ciri_Cacat_Mekanikal_"+id;
var idsaran = "#Saran_Cara_Mekanikal_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/ubahmekanikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian,
'idout':idked
},
success: function(response){
refreshTablemekanikal(idpro);
urutanemekanikal=0;
}
});
}
var urutaneelektrikal=0;
function TambahElektrikal(idpro){
var table = document.getElementById("tabelelektrikal");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showdataelektrikal/" + idpro, async: false}).responseJSON;
if (urutaneelektrikal==0) {
urutaneelektrikal = Number(jsondata.jml);
} 
var indexke = urutaneelektrikal+1;
var idne0="#Material_Elektrikal_"+indexke;
var idne="#Uraian_Pekerjaan_Elektrikal_"+indexke;
var idne1="#Hasil_Standart_Elektrikal_"+indexke;
var idne2="#Ciri_Cacat_Elektrikal_"+indexke;
var idne3="#Saran_Cara_Elektrikal_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_Elektrikal_'+indexke+'" id="Uraian_Pekerjaan_Elektrikal_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.style.textAlign='center';
cell1.innerHTML = indexke;
cell2.innerHTML = '<input type="text" class="form-control" class="form-control" id="Material_Elektrikal_'+indexke+'" name="Material_Elektrikal_'+indexke+'">';
cell3.innerHTML = strinner;
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Hasil_Standart_Elektrikal_'+indexke+'" name="Hasil_Standart_Elektrikal_'+indexke+'">';
cell5.innerHTML = '<input type="text" class="form-control" class="form-control" id="Ciri_Cacat_Elektrikal_'+indexke+'" name="Ciri_Cacat_Elektrikal_'+indexke+'">';
cell6.innerHTML = '<input type="text" class="form-control" class="form-control" id="Saran_Cara_Elektrikal_'+indexke+'" name="Saran_Cara_Elektrikal_'+indexke+'">';
$(idne).select2({});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanelektrikal(indexke);
}
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanelektrikal(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanelektrikal(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanelektrikal(indexke);
}
});
urutaneelektrikal+=1;
}
function simpanelektrikal(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Elektrikal_"+id;
var iduraian = "#Uraian_Pekerjaan_Elektrikal_"+id;
var idhasil = "#Hasil_Standart_Elektrikal_"+id;
var idcacat = "#Ciri_Cacat_Elektrikal_"+id;
var idsaran = "#Saran_Cara_Elektrikal_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/simpanelektrikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian
},
success: function(response){
refreshTableelektrikal(idpro);
urutaneelektrikal=0;
}
});
}
function refreshTableelektrikal(id) {
var url = {!! json_encode(url('/')) !!}+'/outline/showelektrikal/'+id;
$('div.table-container-elektrikal').fadeOut();
$('div.table-container-elektrikal').load(url, function() {
$('div.table-container-elektrikal').fadeIn();
});
}
function deteksielektrik(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahelektrikal(id,idked);
}
}
function ubahelektrikal(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Elektrikal_"+id;
var iduraian = "#Uraian_Pekerjaan_Elektrikal_"+id;
var idhasil = "#Hasil_Standart_Elektrikal_"+id;
var idcacat = "#Ciri_Cacat_Elektrikal_"+id;
var idsaran = "#Saran_Cara_Elektrikal_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/ubahelektrikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian,
'idout':idked
},
success: function(response){
refreshTableelektrikal(idpro);
urutaneelektrikal=0;
}
});
}
var urutaneplumbing=0;
function TambahPlumbing(idpro){
var table = document.getElementById("tabelplumbing");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showdataplumbing/" + idpro, async: false}).responseJSON;
if (urutaneplumbing==0) {
urutaneplumbing = Number(jsondata.jml);
} 
var indexke = urutaneplumbing+1;
var idne0="#Material_Plumbing_"+indexke;
var idne="#Uraian_Pekerjaan_Plumbing_"+indexke;
var idne1="#Hasil_Standart_Plumbing_"+indexke;
var idne2="#Ciri_Cacat_Plumbing_"+indexke;
var idne3="#Saran_Cara_Plumbing_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_Plumbing_'+indexke+'" id="Uraian_Pekerjaan_Plumbing_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.style.textAlign='center';
cell1.innerHTML = indexke;
cell2.innerHTML = '<input type="text" class="form-control" class="form-control" id="Material_Plumbing_'+indexke+'" name="Material_Plumbing_'+indexke+'">';
cell3.innerHTML = strinner;
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Hasil_Standart_Plumbing_'+indexke+'" name="Hasil_Standart_Plumbing_'+indexke+'">';
cell5.innerHTML = '<input type="text" class="form-control" class="form-control" id="Ciri_Cacat_Plumbing_'+indexke+'" name="Ciri_Cacat_Plumbing_'+indexke+'">';
cell6.innerHTML = '<input type="text" class="form-control" class="form-control" id="Saran_Cara_Plumbing_'+indexke+'" name="Saran_Cara_Plumbing_'+indexke+'">';
$(idne).select2({});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanplumbing(indexke);
}
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanplumbing(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanplumbing(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanplumbing(indexke);
}
});
urutaneplumbing+=1;
}
function simpanplumbing(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Plumbing_"+id;
var iduraian = "#Uraian_Pekerjaan_Plumbing_"+id;
var idhasil = "#Hasil_Standart_Plumbing_"+id;
var idcacat = "#Ciri_Cacat_Plumbing_"+id;
var idsaran = "#Saran_Cara_Plumbing_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/simpanplumbing',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material":material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian
},
success: function(response){
refreshTableplumbing(idpro);
urutaneplumbing=0;
}
});
}
function refreshTableplumbing(id) {
var url = {!! json_encode(url('/')) !!}+'/outline/showplumbing/'+id;
$('div.table-container-plumbing').fadeOut();
$('div.table-container-plumbing').load(url, function() {
$('div.table-container-plumbing').fadeIn();
});
}
function deteksiplumbing(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahplumbing(id,idked);
}
}
function ubahplumbing(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Plumbing_"+id;
var iduraian = "#Uraian_Pekerjaan_Plumbing_"+id;
var idhasil = "#Hasil_Standart_Plumbing_"+id;
var idcacat = "#Ciri_Cacat_Plumbing_"+id;
var idsaran = "#Saran_Cara_Plumbing_"+id;
var material = $(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/ubahplumbing',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material":material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian,
'idout':idked
},
success: function(response){
refreshTableplumbing(idpro);
urutaneplumbing=0;
}
});
}
var urutanelain=0;
function TambahLain(idpro){
var table = document.getElementById("tabellain");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showdatalain/" + idpro, async: false}).responseJSON;
if (urutanelain==0) {
urutanelain = Number(jsondata.jml);
} 
var indexke = urutanelain+1;
var idne0="#Material_Lain_"+indexke;
var idne="#Uraian_Pekerjaan_Lain_"+indexke;
var idne1="#Hasil_Standart_Lain_"+indexke;
var idne2="#Ciri_Cacat_Lain_"+indexke;
var idne3="#Saran_Cara_Lain_"+indexke;
var jsonrab = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/outline/showrab/" + idpro, async: false}).responseJSON;
var strinner ='<select name="Uraian_Pekerjaan_Lain_'+indexke+'" id="Uraian_Pekerjaan_Lain_'+indexke+'" class="select2 form-control">';
$.each(jsonrab, function(key, element) {
strinner +='<option value="'+element.id_rab_proyek+'">'+element.pekerjaan_rab_proyek+'</option>';
});
strinner +='</select>';                                                    
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.style.textAlign='center';
cell1.innerHTML = indexke;
cell2.innerHTML = '<input type="text" class="form-control" class="form-control" id="Material_Lain_'+indexke+'" name="Material_Lain_'+indexke+'">';
cell3.innerHTML = strinner;
cell4.innerHTML = '<input type="text" class="form-control" class="form-control" id="Hasil_Standart_Lain_'+indexke+'" name="Hasil_Standart_Lain_'+indexke+'">';
cell5.innerHTML = '<input type="text" class="form-control" class="form-control" id="Ciri_Cacat_Lain_'+indexke+'" name="Ciri_Cacat_Lain_'+indexke+'">';
cell6.innerHTML = '<input type="text" class="form-control" class="form-control" id="Saran_Cara_Lain_'+indexke+'" name="Saran_Cara_Lain_'+indexke+'">';
$(idne).select2({});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanlain(indexke);
}
});
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanlain(indexke);
}
});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanlain(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanlain(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanlain(indexke);
}
});
urutanelain+=1;
}
function simpanlain(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Lain_"+id;
var iduraian = "#Uraian_Pekerjaan_Lain_"+id;
var idhasil = "#Hasil_Standart_Lain_"+id;
var idcacat = "#Ciri_Cacat_Lain_"+id;
var idsaran = "#Saran_Cara_Lain_"+id;
var material =$(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/simpanlain',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian
},
success: function(response){
refreshTablelain(idpro);
urutanelain =0;
}
});
}
function refreshTablelain(id) {
var url = {!! json_encode(url('/')) !!}+'/outline/showlain/'+id;
$('div.table-container-lain').fadeOut();
$('div.table-container-lain').load(url, function() {
$('div.table-container-lain').fadeIn();
});
}
function deteksilain(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahlain(id,idked);
}
}
function ubahlain(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Lain_"+id;
var iduraian = "#Uraian_Pekerjaan_Lain_"+id;
var idhasil = "#Hasil_Standart_Lain_"+id;
var idcacat = "#Ciri_Cacat_Lain_"+id;
var idsaran = "#Saran_Cara_Lain_"+id;
var material =$(idmaterial).val();
var hasil = $(idhasil).val();
var uraian = $(iduraian).val();
var cacat = $(idcacat).val();
var saran = $(idsaran).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/outline/ubahlain',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"hasil": hasil,
"cacat": cacat,
'saran': saran,
'uraian':uraian,
'idout':idked
},
success: function(response){
refreshTablelain(idpro);
urutanelain=0;
}
});
}

function deteksisetstruk(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsetstruktur(id,idked);
}
}
function ubahsetstruktur(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idstatus = "#Status_Struktur_"+id;
var idtanggal = "#Tanggal_Struktur_"+id;
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari = $(idtanggal).val();
var tanggal = hari.split("/");
var tgl = tanggal[2] + '-'+tanggal[1]+'-'+tanggal[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/persetujuan/ubahstruktur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"tgl": tgl,
'status': statuse,
'idper':idked
},
success: function(response){
refreshTablesetstruktur(idpro);
urutanesetstruk=0;
}
});
}
function refreshTablesetstruktur(id) {
var url = {!! json_encode(url('/')) !!}+'/persetujuan/showstruktur/'+id;
$('div.table-container-setstruktur').fadeOut();
$('div.table-container-setstruktur').load(url, function() {
$('div.table-container-setstruktur').fadeIn();
});
}

function deteksisetarsi(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsetarsitektur(id,idked);
}
}
function ubahsetarsitektur(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idstatus = "#Status_Arsitektur_"+id;
var idtanggal = "#Tanggal_Arsitektur_"+id;
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari = $(idtanggal).val();
var tanggal = hari.split("/");
var tgl = tanggal[2] + '-'+tanggal[1]+'-'+tanggal[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/persetujuan/ubaharsitektur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"tgl": tgl,
'status': statuse,
'idper':idked
},
success: function(response){
refreshTablesetarsitektur(idpro);
urutanesetarsi=0;
}
});
}
function refreshTablesetarsitektur(id) {
var url = {!! json_encode(url('/')) !!}+'/persetujuan/showarsitektur/'+id;
$('div.table-container-setarsitektur').fadeOut();
$('div.table-container-setarsitektur').load(url, function() {
$('div.table-container-setarsitektur').fadeIn();
});
}

function deteksisetmekanik(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsetmekanikal(id,idked);
}
}
function ubahsetmekanikal(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Mekanikal_"+id;
var iduraian = "#Uraian_Pekerjaan_Mekanikal_"+id;
var idstatus = "#Status_Mekanikal_"+id;
var idtanggal = "#Tanggal_Mekanikal_"+id;
var idcatatan = "#Catatan_Mekanikal_"+id;
var material =$(idmaterial).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari = $(idtanggal).val();
var tanggal = hari.split("/");
var tgl = tanggal[2] + '-'+tanggal[1]+'-'+tanggal[0];
var uraian = $(iduraian).val();
var catatan = $(idcatatan).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/persetujuan/ubahmekanikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"tgl": tgl,
"catatan": catatan,
'status': statuse,
'uraian':uraian,
'idper':idked
},
success: function(response){
refreshTablesetmekanikal(idpro);
urutanesetmekanik=0;
}
});
}
function refreshTablesetmekanikal(id) {
var url = {!! json_encode(url('/')) !!}+'/persetujuan/showmekanikal/'+id;
$('div.table-container-setmekanikal').fadeOut();
$('div.table-container-setmekanikal').load(url, function() {
$('div.table-container-setmekanikal').fadeIn();
});
}

function deteksisetelektronik(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsetelektronikal(id,idked);
}
}
function ubahsetelektronikal(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Elektronikal_"+id;
var iduraian = "#Uraian_Pekerjaan_Elektronikal_"+id;
var idstatus = "#Status_Elektronikal_"+id;
var idtanggal = "#Tanggal_Elektronikal_"+id;
var idcatatan = "#Catatan_Elektronikal_"+id;
var material =$(idmaterial).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari = $(idtanggal).val();
var tanggal = hari.split("/");
var tgl = tanggal[2] + '-'+tanggal[1]+'-'+tanggal[0];
var uraian = $(iduraian).val();
var catatan = $(idcatatan).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/persetujuan/ubahelektrikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"tgl": tgl,
"catatan": catatan,
'status': statuse,
'uraian':uraian,
'idper':idked
},
success: function(response){
refreshTablesetelektrical(idpro);
urutanesetelktronik=0;
}
});
}
function refreshTablesetelektrical(id) {
var url = {!! json_encode(url('/')) !!}+'/persetujuan/showelektrikal/'+id;
$('div.table-container-setelektrikal').fadeOut();
$('div.table-container-setelektrikal').load(url, function() {
$('div.table-container-setelektrikal').fadeIn();
});
}

function deteksisetplumbing(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsetplumbing(id,idked);
}
}
function ubahsetplumbing(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Plumbing_"+id;
var iduraian = "#Uraian_Pekerjaan_Plumbing_"+id;
var idstatus = "#Status_Plumbing_"+id;
var idtanggal = "#Tanggal_Plumbing_"+id;
var idcatatan = "#Catatan_Plumbing_"+id;
var material =$(idmaterial).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari = $(idtanggal).val();
var tanggal = hari.split("/");
var tgl = tanggal[2] + '-'+tanggal[1]+'-'+tanggal[0];
var uraian = $(iduraian).val();
var catatan = $(idcatatan).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/persetujuan/ubahplumbing',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"tgl": tgl,
"catatan": catatan,
'status': statuse,
'uraian':uraian,
'idper':idked
},
success: function(response){
refreshTablesetplumbing(idpro);
urutanesetplumbing=0;
}
});
}
function refreshTablesetplumbing(id) {
var url = {!! json_encode(url('/')) !!}+'/persetujuan/showplumbing/'+id;
$('div.table-container-setplumbing').fadeOut();
$('div.table-container-setplumbing').load(url, function() {
$('div.table-container-setplumbing').fadeIn();
});
}

function deteksisetlain(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsetlain(id,idked);
}
}
function ubahsetlain(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idmaterial = "#Material_Lain_"+id;
var iduraian = "#Uraian_Pekerjaan_Lain_"+id;
var idstatus = "#Status_Lain_"+id;
var idtanggal = "#Tanggal_Lain_"+id;
var idcatatan = "#Catatan_Lain_"+id;
var material =$(idmaterial).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari = $(idtanggal).val();
var tanggal = hari.split("/");
var tgl = tanggal[2] + '-'+tanggal[1]+'-'+tanggal[0];
var uraian = $(iduraian).val();
var catatan = $(idcatatan).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/persetujuan/ubahlain',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"material": material,
"tgl": tgl,
"catatan": catatan,
'status': statuse,
'uraian':uraian,
'idper':idked
},
success: function(response){
refreshTablesetlain(idpro);
urutanesetlain=0;
}
});
}
function refreshTablesetlain(id) {
var url = {!! json_encode(url('/')) !!}+'/persetujuan/showlain/'+id;
$('div.table-container-setlain').fadeOut();
$('div.table-container-setlain').load(url, function() {
$('div.table-container-setlain').fadeIn();
});
}

var urutanehasilstruk=0;
function TambahHasilStruktur(idpro){
var table = document.getElementById("tabelhasilstruk");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teshasil/showdatastruktur/" + idpro, async: false}).responseJSON;
if (urutanehasilstruk==0) {
urutanehasilstruk = Number(jsondata.jml);
} 
var indexke = urutanehasilstruk+1;
var idne1="#Rencana_Hasil_Struktur_"+indexke;
var idne2="#Tanggal_Masuk_Struktur_"+indexke;
var idne3="#Tanggal_Hasil_Struktur_"+indexke;
var idne4="#Uraian_Hasil_Struktur_"+indexke;
var idne5="#Status_Hasil_Struktur_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.innerHTML = '<input type="text" class="form-control"  id="Rencana_Hasil_Struktur_'+indexke+'" name="Rencana_Hasil_Struktur_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Tanggal_Masuk_Struktur_'+indexke+'" name="Tanggal_Masuk_Struktur_'+indexke+'">';
cell3.innerHTML = '<input type="text" class="form-control" id="Tanggal_Hasil_Struktur_'+indexke+'" name="Tanggal_Hasil_Struktur_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control"  id="Uraian_Hasil_Struktur_'+indexke+'" name="Uraian_Hasil_Struktur_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Hasil_Struktur_'+indexke+'" name="Status_Hasil_Struktur_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk">';
cell6.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanhasilstruk(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanhasilstruk(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanhasilstruk(indexke);
}
});
$(idne4).keypress(function(e) {
if (e.which == '13') {
simpanhasilstruk(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne3).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne5).bootstrapSwitch();
urutanehasilstruk+=1;
}
function simpanhasilstruk(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Struktur_"+id;
var idtglmasuk = "#Tanggal_Masuk_Struktur_"+id;
var idtglhasil = "#Tanggal_Hasil_Struktur_"+id;
var iduraian = "#Uraian_Hasil_Struktur_"+id;
var idstatus = "#Status_Hasil_Struktur_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/simpanstruktur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian
},
success: function(response){
refreshTableHasilStruktur(idpro);
urutanehasilstruk =0;
}
});
}
function refreshTableHasilStruktur(id) {
var url = {!! json_encode(url('/')) !!}+'/teshasil/showstruktur/'+id;
$('div.table-container-hasilstruktur').fadeOut();
$('div.table-container-hasilstruktur').load(url, function() {
$('div.table-container-hasilstruktur').fadeIn();
});
}
function deteksihasilstruk(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahhasilstruk(id,idked);
}
}
function ubahhasilstruk(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Struktur_"+id;
var idtglmasuk = "#Tanggal_Masuk_Struktur_"+id;
var idtglhasil = "#Tanggal_Hasil_Struktur_"+id;
var iduraian = "#Uraian_Hasil_Struktur_"+id;
var idstatus = "#Status_Hasil_Struktur_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/ubahstruktur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian,
'idhasil':idked
},
success: function(response){
refreshTableHasilStruktur(idpro);
urutanehasilstruk =0;
}
});
}
var urutanehasilarsi=0;
function TambahHasilArsitektur(idpro){
var table = document.getElementById("tabelhasilarsi");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teshasil/showdataarsitektur/" + idpro, async: false}).responseJSON;
if (urutanehasilarsi==0) {
urutanehasilarsi = Number(jsondata.jml);
} 
var indexke = urutanehasilarsi+1;
var idne1="#Rencana_Hasil_Arsitektur_"+indexke;
var idne2="#Tanggal_Masuk_Arsitektur_"+indexke;
var idne3="#Tanggal_Hasil_Arsitektur_"+indexke;
var idne4="#Uraian_Hasil_Arsitektur_"+indexke;
var idne5="#Status_Hasil_Arsitektur_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.innerHTML = '<input type="text" class="form-control"  id="Rencana_Hasil_Arsitektur_'+indexke+'" name="Rencana_Hasil_Arsitektur_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Tanggal_Masuk_Arsitektur_'+indexke+'" name="Tanggal_Masuk_Arsitektur_'+indexke+'">';
cell3.innerHTML = '<input type="text" class="form-control" id="Tanggal_Hasil_Arsitektur_'+indexke+'" name="Tanggal_Hasil_Arsitektur_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control"  id="Uraian_Hasil_Arsitektur_'+indexke+'" name="Uraian_Hasil_Arsitektur_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Hasil_Arsitektur_'+indexke+'" name="Status_Hasil_Arsitektur_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk">';
cell6.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanhasilarsi(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanhasilarsi(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanhasilarsi(indexke);
}
});
$(idne4).keypress(function(e) {
if (e.which == '13') {
simpanhasilarsi(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne3).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne5).bootstrapSwitch();
urutanehasilarsi+=1;
}
function simpanhasilarsi(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Arsitektur_"+id;
var idtglmasuk = "#Tanggal_Masuk_Arsitektur_"+id;
var idtglhasil = "#Tanggal_Hasil_Arsitektur_"+id;
var iduraian = "#Uraian_Hasil_Arsitektur_"+id;
var idstatus = "#Status_Hasil_Arsitektur_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/simpanarsitektur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian
},
success: function(response){
refreshTableHasilArsitektur(idpro);
urutanehasilarsi =0;
}
});
}
function refreshTableHasilArsitektur(id) {
var url = {!! json_encode(url('/')) !!}+'/teshasil/showarsitektur/'+id;
$('div.table-container-hasilarsitektur').fadeOut();
$('div.table-container-hasilarsitektur').load(url, function() {
$('div.table-container-hasilarsitektur').fadeIn();
});
}
function deteksihasilarsi(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahhasilarsi(id,idked);
}
}
function ubahhasilarsi(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Arsitektur_"+id;
var idtglmasuk = "#Tanggal_Masuk_Arsitektur_"+id;
var idtglhasil = "#Tanggal_Hasil_Arsitektur_"+id;
var iduraian = "#Uraian_Hasil_Arsitektur_"+id;
var idstatus = "#Status_Hasil_Arsitektur_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/ubaharsitektur',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian,
'idhasil':idked
},
success: function(response){
refreshTableHasilArsitektur(idpro);
urutanehasilarsi =0;
}
});
}
var urutanehasilmekanik=0;
function TambahHasilMekanikal(idpro){
var table = document.getElementById("tabelhasilmekanik");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teshasil/showdatamekanikal/" + idpro, async: false}).responseJSON;
if (urutanehasilmekanik==0) {
urutanehasilmekanik = Number(jsondata.jml);
} 
var indexke = urutanehasilmekanik+1;
var idne1="#Rencana_Hasil_Mekanikal_"+indexke;
var idne2="#Tanggal_Masuk_Mekanikal_"+indexke;
var idne3="#Tanggal_Hasil_Mekanikal_"+indexke;
var idne4="#Uraian_Hasil_Mekanikal_"+indexke;
var idne5="#Status_Hasil_Mekanikal_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.innerHTML = '<input type="text" class="form-control"  id="Rencana_Hasil_Mekanikal_'+indexke+'" name="Rencana_Hasil_Mekanikal_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Tanggal_Masuk_Mekanikal_'+indexke+'" name="Tanggal_Masuk_Mekanikal_'+indexke+'">';
cell3.innerHTML = '<input type="text" class="form-control" id="Tanggal_Hasil_Mekanikal_'+indexke+'" name="Tanggal_Hasil_Mekanikal_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control"  id="Uraian_Hasil_Mekanikal_'+indexke+'" name="Uraian_Hasil_Mekanikal_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Hasil_Mekanikal_'+indexke+'" name="Status_Hasil_Mekanikal_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk">';
cell6.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanhasilmeknik(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanhasilmeknik(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanhasilmeknik(indexke);
}
});
$(idne4).keypress(function(e) {
if (e.which == '13') {
simpanhasilmeknik(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne3).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne5).bootstrapSwitch();
urutanehasilmekanik+=1;
}
function simpanhasilmeknik(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Mekanikal_"+id;
var idtglmasuk = "#Tanggal_Masuk_Mekanikal_"+id;
var idtglhasil = "#Tanggal_Hasil_Mekanikal_"+id;
var iduraian = "#Uraian_Hasil_Mekanikal_"+id;
var idstatus = "#Status_Hasil_Mekanikal_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/simpanmekanikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian
},
success: function(response){
refreshTableHasilMekanikal(idpro);
urutanehasilmekanik =0;
}
});
}
function refreshTableHasilMekanikal(id) {
var url = {!! json_encode(url('/')) !!}+'/teshasil/showmekanikal/'+id;
$('div.table-container-hasilmekanikal').fadeOut();
$('div.table-container-hasilmekanikal').load(url, function() {
$('div.table-container-hasilmekanikal').fadeIn();
});
}
function deteksihasilmekanik(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahhasilmekanik(id,idked);
}
}
function ubahhasilmekanik(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Mekanikal_"+id;
var idtglmasuk = "#Tanggal_Masuk_Mekanikal_"+id;
var idtglhasil = "#Tanggal_Hasil_Mekanikal_"+id;
var iduraian = "#Uraian_Hasil_Mekanikal_"+id;
var idstatus = "#Status_Hasil_Mekanikal_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/ubahmekanikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian,
'idhasil':idked
},
success: function(response){
refreshTableHasilMekanikal(idpro);
urutanehasilmekanik =0;
}
});
}
var urutanehasileletrik=0;
function TambahHasilElektrikal(idpro){
var table = document.getElementById("tabelhasilelektrik");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teshasil/showdataelektrikal/" + idpro, async: false}).responseJSON;
if (urutanehasileletrik==0) {
urutanehasileletrik = Number(jsondata.jml);
} 
var indexke = urutanehasileletrik+1;
var idne1="#Rencana_Hasil_Elektronikal_"+indexke;
var idne2="#Tanggal_Masuk_Elektronikal_"+indexke;
var idne3="#Tanggal_Hasil_Elektronikal_"+indexke;
var idne4="#Uraian_Hasil_Elektronikal_"+indexke;
var idne5="#Status_Hasil_Elektronikal_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.innerHTML = '<input type="text" class="form-control"  id="Rencana_Hasil_Elektronikal_'+indexke+'" name="Rencana_Hasil_Elektronikal_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Tanggal_Masuk_Elektronikal_'+indexke+'" name="Tanggal_Masuk_Elektronikal_'+indexke+'">';
cell3.innerHTML = '<input type="text" class="form-control" id="Tanggal_Hasil_Elektronikal_'+indexke+'" name="Tanggal_Hasil_Elektronikal_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control"  id="Uraian_Hasil_Elektronikal_'+indexke+'" name="Uraian_Hasil_Elektronikal_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Hasil_Elektronikal_'+indexke+'" name="Status_Hasil_Elektronikal_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk">';
cell6.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanhasilelektrik(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanhasilelektrik(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanhasilelektrik(indexke);
}
});
$(idne4).keypress(function(e) {
if (e.which == '13') {
simpanhasilelektrik(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne3).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne5).bootstrapSwitch();
urutanehasileletrik+=1;
}
function simpanhasilelektrik(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Elektronikal_"+id;
var idtglmasuk = "#Tanggal_Masuk_Elektronikal_"+id;
var idtglhasil = "#Tanggal_Hasil_Elektronikal_"+id;
var iduraian = "#Uraian_Hasil_Elektronikal_"+id;
var idstatus = "#Status_Hasil_Elektronikal_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/simpanelektrikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian
},
success: function(response){
refreshTableHasilELektrikal(idpro);
urutanehasileletrik =0;
}
});
}
function refreshTableHasilELektrikal(id) {
var url = {!! json_encode(url('/')) !!}+'/teshasil/showelektrikal/'+id;
$('div.table-container-hasilelektrikal').fadeOut();
$('div.table-container-hasilelektrikal').load(url, function() {
$('div.table-container-hasilelektrikal').fadeIn();
});
}
function deteksihasilelektrik(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahhasilelektrik(id,idked);
}
}
function ubahhasilelektrik(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Elektronikal_"+id;
var idtglmasuk = "#Tanggal_Masuk_Elektronikal_"+id;
var idtglhasil = "#Tanggal_Hasil_Elektronikal_"+id;
var iduraian = "#Uraian_Hasil_Elektronikal_"+id;
var idstatus = "#Status_Hasil_Elektronikal_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/ubahelektrikal',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian,
'idhasil':idked
},
success: function(response){
refreshTableHasilELektrikal(idpro);
urutanehasileletrik =0;
}
});
}
var urutanehasilplumbing=0;
function TambahHasilPlumbing(idpro){
var table = document.getElementById("tabelhasilplumbing");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teshasil/showdataplumbing/" + idpro, async: false}).responseJSON;
if (urutanehasilplumbing==0) {
urutanehasilplumbing = Number(jsondata.jml);
} 
var indexke = urutanehasilplumbing+1;
var idne1="#Rencana_Hasil_Plumbing_"+indexke;
var idne2="#Tanggal_Masuk_Plumbing_"+indexke;
var idne3="#Tanggal_Hasil_Plumbing_"+indexke;
var idne4="#Uraian_Hasil_Plumbing_"+indexke;
var idne5="#Status_Hasil_Plumbing_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.innerHTML = '<input type="text" class="form-control"  id="Rencana_Hasil_Plumbing_'+indexke+'" name="Rencana_Hasil_Plumbing_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Tanggal_Masuk_Plumbing_'+indexke+'" name="Tanggal_Masuk_Plumbing_'+indexke+'">';
cell3.innerHTML = '<input type="text" class="form-control" id="Tanggal_Hasil_Plumbing_'+indexke+'" name="Tanggal_Hasil_Plumbing_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control"  id="Uraian_Hasil_Plumbing_'+indexke+'" name="Uraian_Hasil_Plumbing_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Hasil_Plumbing_'+indexke+'" name="Status_Hasil_Plumbing_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk">';
cell6.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanhasilplumbing(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanhasilplumbing(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanhasilplumbing(indexke);
}
});
$(idne4).keypress(function(e) {
if (e.which == '13') {
simpanhasilplumbing(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne3).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne5).bootstrapSwitch();
urutanehasilplumbing+=1;
}
function simpanhasilplumbing(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Plumbing_"+id;
var idtglmasuk = "#Tanggal_Masuk_Plumbing_"+id;
var idtglhasil = "#Tanggal_Hasil_Plumbing_"+id;
var iduraian = "#Uraian_Hasil_Plumbing_"+id;
var idstatus = "#Status_Hasil_Plumbing_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/simpanplumbing',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian
},
success: function(response){
refreshTableHasilPlumbing(idpro);
urutanehasilplumbing =0;
}
});
}
function refreshTableHasilPlumbing(id) {
var url = {!! json_encode(url('/')) !!}+'/teshasil/showplumbing/'+id;
$('div.table-container-hasilplumbing').fadeOut();
$('div.table-container-hasilplumbing').load(url, function() {
$('div.table-container-hasilplumbing').fadeIn();
});
}
function deteksihasilplumbing(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahhasilplumbing(id,idked);
}
}
function ubahhasilplumbing(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Plumbing_"+id;
var idtglmasuk = "#Tanggal_Masuk_Plumbing_"+id;
var idtglhasil = "#Tanggal_Hasil_Plumbing_"+id;
var iduraian = "#Uraian_Hasil_Plumbing_"+id;
var idstatus = "#Status_Hasil_Plumbing_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/ubahplumbing',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian,
'idhasil':idked
},
success: function(response){
refreshTableHasilPlumbing(idpro);
urutanehasilplumbing =0;
}
});
}
var urutanehasillain=0;
function TambahHasilLain(idpro){
var table = document.getElementById("tabelhasillain");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teshasil/showdatalain/" + idpro, async: false}).responseJSON;
if (urutanehasillain==0) {
urutanehasillain = Number(jsondata.jml);
} 
var indexke = urutanehasillain+1;
var idne1="#Rencana_Hasil_Lain_"+indexke;
var idne2="#Tanggal_Masuk_Lain_"+indexke;
var idne3="#Tanggal_Hasil_Lain_"+indexke;
var idne4="#Uraian_Hasil_Lain_"+indexke;
var idne5="#Status_Hasil_Lain_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
cell1.innerHTML = '<input type="text" class="form-control"  id="Rencana_Hasil_Lain_'+indexke+'" name="Rencana_Hasil_Lain_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Tanggal_Masuk_Lain_'+indexke+'" name="Tanggal_Masuk_Lain_'+indexke+'">';
cell3.innerHTML = '<input type="text" class="form-control" id="Tanggal_Hasil_Lain_'+indexke+'" name="Tanggal_Hasil_Lain_'+indexke+'">';
cell4.innerHTML = '<input type="text" class="form-control"  id="Uraian_Hasil_Lain_'+indexke+'" name="Uraian_Hasil_Lain_'+indexke+'">';
cell5.innerHTML = '<input id="Status_Hasil_Lain_'+indexke+'" name="Status_Hasil_Lain_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk">';
cell6.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanhasillain(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanhasillain(indexke);
}
});
$(idne3).keypress(function(e) {
if (e.which == '13') {
simpanhasillain(indexke);
}
});
$(idne4).keypress(function(e) {
if (e.which == '13') {
simpanhasillain(indexke);
}
});
$(idne2).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne3).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne5).bootstrapSwitch();
urutanehasillain+=1;
}
function simpanhasillain(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Lain_"+id;
var idtglmasuk = "#Tanggal_Masuk_Lain_"+id;
var idtglhasil = "#Tanggal_Hasil_Lain_"+id;
var iduraian = "#Uraian_Hasil_Lain_"+id;
var idstatus = "#Status_Hasil_Lain_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/simpanlain',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian
},
success: function(response){
refreshTableHasilLain(idpro);
urutanehasillain =0;
}
});
}
function refreshTableHasilLain(id) {
var url = {!! json_encode(url('/')) !!}+'/teshasil/showlain/'+id;
$('div.table-container-hasillain').fadeOut();
$('div.table-container-hasillain').load(url, function() {
$('div.table-container-hasillain').fadeIn();
});
}
function deteksihasillain(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahhasillain(id,idked);
}
}
function ubahhasillain(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idrencana = "#Rencana_Hasil_Lain_"+id;
var idtglmasuk = "#Tanggal_Masuk_Lain_"+id;
var idtglhasil = "#Tanggal_Hasil_Lain_"+id;
var iduraian = "#Uraian_Hasil_Lain_"+id;
var idstatus = "#Status_Hasil_Lain_"+id;
var rencana = $(idrencana).val();
var uraian = $(iduraian).val();
var statuse = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
var hari1 = $(idtglmasuk).val();
var tanggal1 = hari1.split("/");
var tgl1 = tanggal1[2] + '-'+tanggal1[1]+'-'+tanggal1[0];
var hari2 = $(idtglhasil).val();
var tanggal2 = hari2.split("/");
var tgl2 = tanggal2[2] + '-'+tanggal2[1]+'-'+tanggal2[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/teshasil/ubahlain',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"rencana": rencana,
"tgl1": tgl1,
"tgl2": tgl2,
'statuse': statuse,
'uraian':uraian,
'idhasil':idked
},
success: function(response){
refreshTableHasilLain(idpro);
urutanehasillain =0;
}
});
}
function UnggahHasilUji(id,idpro){
$('#idhasil').val(id);
$('#idpaket').val(idpro);
$('#UnggahHasilUji').modal('show');
}
function LihatHasilUji(id,idpro){
var urlnya = {!! json_encode(url('/')) !!}+"/images/dokumentasi/"+idpro+"/rks/HASILUJI_"+idpro+"_"+id+".pdf";
document.getElementById('FramePDF').src = urlnya;
$('#LihatHasilUji').modal('show');
}
var urutanejaminan=0;
function TambahJaminan(idpro){
var table = document.getElementById("tabeljaminan");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/jaminan/showdata/" + idpro, async: false}).responseJSON;
if (urutanejaminan==0) {
urutanejaminan = Number(jsondata.jml);
} 
var indexke = urutanejaminan+1;
var idne1="#Uraian_Jaminan_"+indexke;
var idne2="#Keterangan_Jaminan_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
cell1.innerHTML = '<input type="text" class="form-control" id="Uraian_Jaminan_'+indexke+'" name="Uraian_Jaminan_'+indexke+'"/>';
cell2.innerHTML = '<input type="text" class="form-control" id="Keterangan_Jaminan_'+indexke+'" name="Keterangan_Jaminan_'+indexke+'">';
cell3.innerHTML = '';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanjaminan(indexke);
}
});
$(idne2).keypress(function(e) {
if (e.which == '13') {
simpanjaminan(indexke);
}
});
urutanejaminan+=1;
}
function simpanjaminan(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian = "#Uraian_Jaminan_"+id;
var idketerangan = "#Keterangan_Jaminan_"+id;
var keterangan = $(idketerangan).val();
var uraian = $(iduraian).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/jaminan/simpan',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"keterangan": keterangan,
'uraian':uraian
},
success: function(response){
refreshTableJaminan(idpro);
urutanejaminan =0;
}
});
}
function refreshTableJaminan(id) {
var url = {!! json_encode(url('/')) !!}+'/jaminan/showdetail/'+id;
$('div.table-container-jaminan').fadeOut();
$('div.table-container-jaminan').load(url, function() {
$('div.table-container-jaminan').fadeIn();
});
}
function deteksijaminan(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahjaminan(id,idked);
}
}
function ubahjaminan(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian = "#Uraian_Jaminan_"+id;
var idketerangan = "#Keterangan_Jaminan_"+id;
var keterangan = $(idketerangan).val();
var uraian = $(iduraian).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/jaminan/ubah',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"keterangan": keterangan,
'uraian':uraian,
'idgaransi':idked
},
success: function(response){
refreshTableJaminan(idpro);
urutanejaminan =0;
}
});
}
function UnggahGaransi(id,idpro){
$('#idgaransi').val(id);
$('#idpaket').val(idpro);
$('#UnggahGaransi').modal('show');
}
function LihatGaransi(id,idpro){
var urlnya = {!! json_encode(url('/')) !!}+"/images/dokumentasi/"+idpro+"/rks/GARANSI_"+idpro+"_"+id+".pdf";
document.getElementById('FramePDF').src = urlnya;
$('#LihatGaransi').modal('show');
}

var urutaneshop=0;
function TambahShopDrawing(idpro){
var table = document.getElementById("tabelshopdraw");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/shopdraw/showdata/" + idpro, async: false}).responseJSON;
if (urutaneshop==0) {
urutaneshop = Number(jsondata.jml);
} 
var indexke = urutaneshop+1;
var idne1="#Uraian_Shop_Draw_"+indexke;
var idne2="#Status_Shop_Draw_"+indexke;
var idne3="#Pelaksanaan_Shop_Draw_"+indexke;   
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
cell2.style.textAlign='center';
cell3.style.textAlign='center';
cell4.style.textAlign='center';
cell1.innerHTML = '<input type="text" class="form-control" id="Uraian_Shop_Draw_'+indexke+'" name="Uraian_Shop_Draw_'+indexke+'"/>';
cell2.innerHTML = '<a  class="btn btn-circle btn-sm green"> Upload<i class="fa fa-plus"></i></a>';
cell3.innerHTML = '<input id="Status_Shop_Draw_'+indexke+'" name="Status_Shop_Draw_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak">';
cell4.innerHTML = '<input id="Pelaksanaan_Shop_Draw_'+indexke+'" name="Pelaksanaan_Shop_Draw_'+indexke+'" type="checkbox" class="make-switch" data-size="small" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak">';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanshopdraw(indexke);
}
});
$(idne2).bootstrapSwitch();
$(idne3).bootstrapSwitch();
urutaneshop+=1;
}
function simpanshopdraw(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian = "#Uraian_Shop_Draw_"+id;
var idstatus = "#Status_Shop_Draw_"+id;
var idpel = "#Pelaksanaan_Shop_Draw_"+id;
var uraian = $(iduraian).val();
var statuse = 0;
var pelaksana = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
if ($(idpel).is(':checked')){ 
pelaksana =1;
} 
else { 
pelaksana=0;
}
$.ajax({
url: {!! json_encode(url('/')) !!}+'/shopdraw/simpan',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"statuse": statuse,
'uraian':uraian,
'pelaksana':pelaksana
},
success: function(response){
refreshTableShopDraw(idpro);
urutaneshop =0;
}
});
}
function refreshTableShopDraw(id) {
var url = {!! json_encode(url('/')) !!}+'/shopdraw/showdetail/'+id;
$('div.table-container-shop').fadeOut();
$('div.table-container-shop').load(url, function() {
$('div.table-container-shop').fadeIn();
});
}
function deteksishopdraw(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahshopdraw(id,idked);
}
}
function ubahshopdraw(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian = "#Uraian_Shop_Draw_"+id;
var idstatus = "#Status_Shop_Draw_"+id;
var idpel = "#Pelaksanaan_Shop_Draw_"+id;
var uraian = $(iduraian).val();
var statuse = 0;
var pelaksana = 0;
if ($(idstatus).is(':checked')){ 
statuse =1;
} 
else { 
statuse=0;
}
if ($(idpel).is(':checked')){ 
pelaksana =1;
} 
else { 
pelaksana=0;
}
$.ajax({
url: {!! json_encode(url('/')) !!}+'/shopdraw/ubah',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"statuse": statuse,
'uraian':uraian,
'pelaksana':pelaksana,
'idshop':idked
},
success: function(response){
refreshTableShopDraw(idpro);
urutaneshop =0;
}
});
}
function UnggahShopDraw(id,idpro){
$('#idshop').val(id);
$('#idpaket').val(idpro);
$('#UnggahShopDraw').modal('show');
}

var urutaneasbuilt=0;
function TambahAsBuiltDrawing(idpro){
var table = document.getElementById("tabelasbuiltdraw");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/asbuilt/showdata/" + idpro, async: false}).responseJSON;
if (urutaneasbuilt==0) {
urutaneasbuilt = Number(jsondata.jml);
} 
var indexke = urutaneasbuilt+1;
var idne1="#Uraian_Asbuilt_Draw_"+indexke;
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
cell2.style.textAlign='center';
cell3.style.textAlign='center';
cell1.innerHTML = '<input type="text" class="form-control" id="Uraian_Asbuilt_Draw_'+indexke+'" name="Uraian_Asbuilt_Draw_'+indexke+'"/>';
cell2.innerHTML = '<a  class="btn btn-circle btn-sm green"> Upload<i class="fa fa-plus"></i></a>';
cell3.innerHTML = '<a  class="btn btn-circle btn-sm green"> Upload<i class="fa fa-plus"></i></a>';
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpanasbuiltdraw(indexke);
}
});
urutaneasbuilt+=1;
}
function simpanasbuiltdraw(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian = "#Uraian_Asbuilt_Draw_"+id;
var uraian = $(iduraian).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/asbuilt/simpan',
type: 'post',
data: {
"_token": _token,
"id": idpro,
'uraian':uraian
},
success: function(response){
refreshTableAsBuiltDraw(idpro);
urutaneasbuilt =0;
}
});
}
function refreshTableAsBuiltDraw(id) {
var url = {!! json_encode(url('/')) !!}+'/asbuilt/showdetail/'+id;
$('div.table-container-asbuit').fadeOut();
$('div.table-container-asbuit').load(url, function() {
$('div.table-container-asbuit').fadeIn();
});
}
function deteksiasbuiltdraw(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahasbuiltdraw(id,idked);
}
}
function ubahasbuiltdraw(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian = "#Uraian_Asbuilt_Draw_"+id;
var uraian = $(iduraian).val();
$.ajax({
url: {!! json_encode(url('/')) !!}+'/asbuilt/ubah',
type: 'post',
data: {
"_token": _token,
"id": idpro,
'uraian':uraian,
'idshop':idked
},
success: function(response){
refreshTableAsBuiltDraw(idpro);
urutaneasbuilt =0;
}
});
}
function UnggahPDFDraw(id,idpro){
$('#idshop').val(id);
$('#idpaket').val(idpro);
$('#UnggahPDFDraw').modal('show');
}
function UnggahCADDraw(id,idpro){
$('#idshop').val(id);
$('#idpaket').val(idpro);
$('#UnggahCADDraw').modal('show');
}

var urutanesoppekerjaan=0;
function TambahSOPPekerjaan(idpro){
var table = document.getElementById("tabelsoppekerjaan");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/soppek/showdata/" + idpro, async: false}).responseJSON;
if (urutanesoppekerjaan==0) {
urutanesoppekerjaan = Number(jsondata.jml);
} 
var indexke = urutanesoppekerjaan+1;
var idne1="#Uraian_SOP_Pekerjaan_"+indexke;
var idne2="#Radio_Belum_"+indexke;
var idne3="#Radio_Progress_"+indexke;
var idne4="#Radio_Setuju_"+indexke;
var idne5="#Nomor_Shop_Draw_"+indexke;
var idne6="#Status_Shop_Draw_"+indexke;
var idne7="#Nomor_Izin_"+indexke;
var idne8="#Status_Izin_"+indexke;
var idne9="#Radio_On_Progess_"+indexke;
var idne10="#Radio_Finish_"+indexke;
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
var cell8 = row.insertCell(7);
var cell9 = row.insertCell(8);
cell2.style.textAlign='center';
cell3.style.textAlign='center';
var claseon = "'fa fa-thumbs-up'";
var claseoff = "'fa fa-thumbs-down'";
var str1 ="";
var str2 ="";
var str3="";
str1 = '<input type="text" name="Nomor_Shop_Draw_'+indexke+'" id="Nomor_Shop_Draw_'+indexke+'" class="form-control" placeholder="no.">';
str1 += '<input id="Status_Shop_Draw_'+indexke+'" name="Status_Shop_Draw_'+indexke+'" type="checkbox" class="make-switch" data-size="small"  data-on-color="success" data-off-color="danger" data-on-text="<i class='+claseon+'></i>" data-off-text="<i class='+claseoff+'></i>">'
str2 = '<input type="text" name="Nomor_Izin_'+indexke+'" id="Nomor_Izin_'+indexke+'" class="form-control" placeholder="no.">';
str2 += '<input id="Status_Izin_'+indexke+'" name="Status_Izin_'+indexke+'" type="checkbox" class="make-switch" data-size="small"  data-on-color="success" data-off-color="danger" data-on-text="<i class='+claseon+'></i>" data-off-text="<i class='+claseoff+'></i>">'
str3 = '<div class="btn-group btn-group-circle btn-group-sm btn-group-solid">';
str3 +='<button type="button" class="btn green-jungle"><i class="icon-cloud-download"></i></button>';               
str3 +='<button type="button" class="btn yellow-casablanca"><i class="icon-cloud-upload"></i></button></div>';
cell1.innerHTML = '<input type="text" class="form-control" id="Uraian_SOP_Pekerjaan_'+indexke+'" name="Uraian_SOP_Pekerjaan_'+indexke+'"/>';
cell2.innerHTML = '<input id="Radio_Belum_'+indexke+'" type="radio" name="Radio_Persetujuan_'+indexke+'" class="form-control" value="1" checked/>';
cell3.innerHTML = '<input id="Radio_Progress_'+indexke+'" type="radio" name="Radio_Persetujuan_'+indexke+'" class="form-control" value="2"/>';
cell4.innerHTML = '<input id="Radio_Setuju_'+indexke+'" type="radio" name="Radio_Persetujuan_'+indexke+'" class="form-control" value="3"/>';
cell5.innerHTML = str1;
cell6.innerHTML = str2;
cell7.innerHTML = str3;
cell8.innerHTML = '<input id="Radio_On_Progess_'+indexke+'" type="radio" name="Radio_Status_'+indexke+'" class="form-control" value="1" checked/>';
cell9.innerHTML = '<input id="Radio_Finish_'+indexke+'" type="radio" name="Radio_Status_'+indexke+'" class="form-control" value="2"/>';
$(idne6).bootstrapSwitch();
$(idne8).bootstrapSwitch();
$(idne1).keypress(function(e) {
if (e.which == '13') {
simpansoppekerjaan(indexke);
}
});
$(idne5).keypress(function(e) {
if (e.which == '13') {
simpansoppekerjaan(indexke);
}
});
$(idne7).keypress(function(e) {
if (e.which == '13') {
simpansoppekerjaan(indexke);
}
});
urutanesoppekerjaan+=1;
}
function simpansoppekerjaan(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian="#Uraian_SOP_Pekerjaan_"+id;
var belum="Radio_Belum_"+id;
var prog="Radio_Progress_"+id;
var setuju="Radio_Setuju_"+id;
var idnomorshop="#Nomor_Shop_Draw_"+id;
var idstatussop="#Status_Shop_Draw_"+id;
var idnomorizin="#Nomor_Izin_"+id;
var idstatusizin="#Status_Izin_"+id;
var onprog="Radio_On_Progess_"+id;
var finis="Radio_Finish_"+id;
var uraian = $(iduraian).val();
var noshop = $(idnomorshop).val();
var noisin = $(idnomorizin).val();
var status=0;
var onstatus=0;
var statusesop=0;
var statuseizin=0;
if ($(idstatussop).is(':checked')){ 
statusesop =1;
} 
else { 
statusesop=0;
}
if ($(idstatusizin).is(':checked')){ 
statuseizin =1;
} 
else { 
statuseizin=0;
}
if (document.getElementById(belum).checked) {
status = document.getElementById(belum).value;
}
if (document.getElementById(prog).checked) {
status = document.getElementById(prog).value;
}
if (document.getElementById(setuju).checked) {
status = document.getElementById(setuju).value;
}
if (document.getElementById(onprog).checked) {
onstatus = document.getElementById(onprog).value;
}
if (document.getElementById(finis).checked) {
onstatus = document.getElementById(finis).value;
}
$.ajax({
url: {!! json_encode(url('/')) !!}+'/soppek/simpan',
type: 'post',
data: {
"_token": _token,
"id": idpro,
'uraian':uraian,
'status':status,
'noshop':noshop,
'noisin':noisin,
'statusesop':statusesop,
'statuseizin':statuseizin,
'onstatus':onstatus
},
success: function(response){
refreshTableSOP(idpro);
urutanesoppekerjaan =0;
}
});
}
function refreshTableSOP(id) {
var url = {!! json_encode(url('/')) !!}+'/soppek/showdetail/'+id;
$('div.table-container-sop').fadeOut();
$('div.table-container-sop').load(url, function() {
$('div.table-container-sop').fadeIn();
});
}
function deteksisop(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahsop(id,idked);
}
}
function ubahsop(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var iduraian="#Uraian_SOP_Pekerjaan_"+id;
var belum="Radio_Belum_"+id;
var prog="Radio_Progress_"+id;
var setuju="Radio_Setuju_"+id;
var idnomorshop="#Nomor_Shop_Draw_"+id;
var idstatussop="#Status_Shop_Draw_"+id;
var idnomorizin="#Nomor_Izin_"+id;
var idstatusizin="#Status_Izin_"+id;
var onprog="Radio_On_Progess_"+id;
var finis="Radio_Finish_"+id;
var uraian = $(iduraian).val();
var noshop = $(idnomorshop).val();
var noisin = $(idnomorizin).val();
var status=0;
var onstatus=0;
var statusesop=0;
var statuseizin=0;
if ($(idstatussop).is(':checked')){ 
statusesop =1;
} 
else { 
statusesop=0;
}
if ($(idstatusizin).is(':checked')){ 
statuseizin =1;
} 
else { 
statuseizin=0;
}
if (document.getElementById(belum).checked) {
status = document.getElementById(belum).value;
}
if (document.getElementById(prog).checked) {
status = document.getElementById(prog).value;
}
if (document.getElementById(setuju).checked) {
status = document.getElementById(setuju).value;
}
if (document.getElementById(onprog).checked) {
onstatus = document.getElementById(onprog).value;
}
if (document.getElementById(finis).checked) {
onstatus = document.getElementById(finis).value;
}
$.ajax({
url: {!! json_encode(url('/')) !!}+'/soppek/ubah',
type: 'post',
data: {
"_token": _token,
"id": idpro,
'uraian':uraian,
'status':status,
'noshop':noshop,
'noisin':noisin,
'statusesop':statusesop,
'statuseizin':statuseizin,
'onstatus':onstatus,
'idshop':idked
},
success: function(response){
refreshTableSOP(idpro);
urutanesoppekerjaan =0;
}
});
}
function UnggahSOPPEkerjaan(id,idpro){
$('#idsop').val(id);
$('#idpaket').val(idpro);
$('#UnggahSOPPEkerjaan').modal('show');
}

function UnggahPDFDraw(id,idpro){
$('#idshop').val(id);
$('#idpaket').val(idpro);
$('#UnggahPDFDraw').modal('show');
}
function UnggahCADDraw(id,idpro){
$('#idshop').val(id);
$('#idpaket').val(idpro);
$('#UnggahCADDraw').modal('show');
}
function TambahDokumenRKS(idpro){
$('#idpaket').val(idpro);
$('#TambahDokumenRKS').modal('show');
}
$('#Tgl_Serah_Pertama_1,#Tgl_BAHP,#Tgl_Serah_Pertama_2,#Tgl_Serah_Pertama_3,#Tgl_Serah_Pertama_4,#Tgl_Serah_Pertama_5,#Tgl_Serah_Pertama_6').datepicker({
autoclose:true,
format:'dd MM yyyy',
formatSubmit : 'yyyy-mm-dd',
});
function BukaStatus(tipe,id,idpro){
$('#idpaket2').val(idpro);
$('#tipenya').val(tipe);
$('#idnya').val(id);
$('#BukaStatus').modal('show');
}
function BukaFoto(tipe,id,idpro){
$('#idpaket2').val(idpro);
$('#tipenya').val(tipe);
$('#idnya').val(id);
$('#BukaFoto').modal('show');
}
function BukaVideo(tipe,id,idpro){
$('#idpaket2').val(idpro);
$('#tipenya').val(tipe);
$('#idnya').val(id);
$('#BukaVideo').modal('show');
}
function BukaKualitas(tipe,id,idpro){
$('#idpaket2').val(idpro);
$('#tipenya').val(tipe);
$('#idnya').val(id);
$('#BukaKualitas').modal('show');
}
function BukaKunjungan(tipe,id,idpro){
$('#idpaket2').val(idpro);
$('#tipenya').val(tipe);
$('#idnya').val(id);
$('#BukaKunjungan').modal('show');
}
function readURL(input) {
if ( input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#blah')
.attr('src', e.target.result)
.width(200)
.height(200);
};
reader.readAsDataURL(input.files[0]);
} 
}
function simpankedatangan(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idnama = "#Nama_Material_"+id;
var iduraian = "#Uraian_Pekerjaan_"+id;
var idtgl1 = "#Tanggal_Kedatangan_"+id;
var idtgl2 = "#Tanggal_Pengiriman_"+id;
var pesan = "Status_Pesan_"+id;
var progress ="Status_Progress_"+id;
var datang = "Status_Datang_"+id;
var aprove = "Status_Approve_"+id;
var status=0;
var nama = $(idnama).val();
var uraian = $(iduraian).val();
var hari1 = $(idtgl1).val();
var hari2 = $(idtgl2).val();
var tglpertama = hari1.split("/");
var tglkedua = hari2.split("/");
var tgl1 = tglpertama[2] + '-'+tglpertama[1]+'-'+tglpertama[0];
var tgl2 = tglkedua[2] + '-'+tglkedua[1]+'-'+tglkedua[0];
if (document.getElementById(pesan).checked) {
status = document.getElementById(pesan).value;
}
if (document.getElementById(progress).checked) {
status = document.getElementById(progress).value;
}
if (document.getElementById(datang).checked) {
status = document.getElementById(datang).value;
}
if (document.getElementById(aprove).checked) {
status = document.getElementById(aprove).value;
}
$.ajax({
url: {!! json_encode(url('/')) !!}+'/jaked',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"tgl1": tgl1,
"tgl2": tgl2,
'material': nama,
'uraian':uraian,
'status':status
},
success: function(response){
window.location.href = {!! json_encode(url('/')) !!}+"/jaked/"+idpro;
}
});
}
function deteksi(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahkedatangan(id,idked);
}
}
function ubahkedatangan(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idnama = "#Nama_Material_"+id;
var iduraian = "#Uraian_Pekerjaan_"+id;
var idtgl1 = "#Tanggal_Kedatangan_"+id;
var idtgl2 = "#Tanggal_Pengiriman_"+id;
var pesan = "Status_Pesan_"+id;
var progress ="Status_Progress_"+id;
var datang = "Status_Datang_"+id;
var aprove = "Status_Approve_"+id;
var status=0;
var nama = $(idnama).val();
var uraian = $(iduraian).val();
var hari1 = $(idtgl1).val();
var hari2 = $(idtgl2).val();
var tglpertama = hari1.split("/");
var tglkedua = hari2.split("/");
var tgl1 = tglpertama[2] + '-'+tglpertama[1]+'-'+tglpertama[0];
var tgl2 = tglkedua[2] + '-'+tglkedua[1]+'-'+tglkedua[0];
if (document.getElementById(pesan).checked) {
status = document.getElementById(pesan).value;
}
if (document.getElementById(progress).checked) {
status = document.getElementById(progress).value;
}
if (document.getElementById(datang).checked) {
status = document.getElementById(datang).value;
}
if (document.getElementById(aprove).checked) {
status = document.getElementById(aprove).value;
}
$.ajax({
url: {!! json_encode(url('/')) !!}+'/jaked/ubah',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"idked":idked,
"tgl1": tgl1,
"tgl2": tgl2,
'material': nama,
'uraian':uraian,
'status':status
},
success: function(response){
window.location.href = {!! json_encode(url('/')) !!}+"/jaked/"+idpro;
}
});
}

var urutanerapat=0;
function TambahRapat(idpro){
var table = document.getElementById("tabelrapat");
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/rapat/showdata/" + idpro, async: false}).responseJSON;
if (urutanerapat==0) {
urutanerapat = Number(jsondata.jml);
} 
var indexke = urutanerapat+1;
var idne0 ="#Tanggal_Rapat_"+indexke;
var row = table.insertRow(-1);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
cell1.innerHTML = '<input type="text" class="form-control" class="form-control" id="Tanggal_Rapat_'+indexke+'" name="Tanggal_Rapat_'+indexke+'">';
cell2.innerHTML = '';  
$(idne0).datepicker({
autoclose:true,
format:'dd/mm/yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$(idne0).keypress(function(e) {
if (e.which == '13') {
simpanrapat(indexke);
}
});
urutanerapat+=1;
}
function simpanrapat(id) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idtgl = "#Tanggal_Rapat_"+id;
var hari = $(idtgl).val();
var tglhari = hari.split("/");
var tgl = tglhari[2] + '-'+tglhari[1]+'-'+tglhari[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/rapat',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"tgl": tgl
},
success: function(response){
refreshTableRapat(idpro);
urutanerapat=0;
}
});
}
function refreshTableRapat(id) {
var url = {!! json_encode(url('/')) !!}+'/rapat/showdetail/'+id;
$('div.table-container-rapat').fadeOut();
$('div.table-container-rapat').load(url, function() {
$('div.table-container-rapat').fadeIn();
});
}
function deteksirapat(e,id,idked) {
if(e.keyCode === 13){
e.preventDefault();
ubahrapat(id,idked);
}
}
function ubahrapat(id,idked) {
var _token = $('input[name="_token"]').val();
var idpro = $('#idpro').val();
var idtgl = "#Tanggal_Rapat_"+id;
var hari = $(idtgl).val();
var tglhari = hari.split("/");
var tgl = tglhari[2] + '-'+tglhari[1]+'-'+tglhari[0];
$.ajax({
url: {!! json_encode(url('/')) !!}+'/rapat/ubah',
type: 'post',
data: {
"_token": _token,
"id": idpro,
"idrap":idked,
"tgl": tgl
},
success: function(response){
refreshTableRapat(idpro);
urutanerapat=0;
}
});
}
function UnggahRapat(id,idpro){
$('#idrap').val(id);
$('#idpaket').val(idpro);
$('#UnggahRapat').modal('show');
}
function LihatRapat(id,idpro){
$('#idrap').val(id);
$('#idpaket').val(idpro);
var urlnya = {!! json_encode(url('/')) !!}+"/images/dokumentasi/"+idpro+"/pelaksanaan/RAPAT_"+idpro+"_"+id+".pdf";
document.getElementById('FramePDF').src = urlnya;
$('#LihatRapat').modal('show');
}



$('#email').keypress(function(e) {
if (e.which == '13') {
submitLogin();
}
});
$('#passwd').keypress(function(e) {
if (e.which == '13') {
submitLogin();
}
});
</script>
<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
var cekgrafik = document.getElementById("chartdivProgress");
if (typeof(cekgrafik) != 'undefined' && cekgrafik != null)
{
var id = $("#idyek").val();
var chartData = [];
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/progress/" + id +"/showgrafik" , async: false}).responseJSON;
var total =0;
var total1 =0;
var loop =1;
var tglawal,tgl;
$.each(jsondata, function(key, element) {
if (loop==1) {
tglawal = element.minggu;
tgl = tglawal.split("-");
tgl = tgl[0]+'-'+tgl[1]+'-1';
}
if ((element.total==0||element.total==null)&&(element.rencana!=0||element.rencana!=null)) {
total1 +=(element.rencana/element.kontrak) * 100;
chartData[loop] = { minggu: element.minggu, harga: null, harga1:total1};
}else if ((element.total!=0||element.total!=null)&&(element.rencana==0||element.rencana==null)) {
total += (element.total/element.kontrak) * 100;
chartData[loop] = { minggu: element.minggu, harga: total, harga1:null};
}else if ((element.total!=0||element.total!=null)&&(element.rencana!=0||element.rencana!=null)) {
total += (element.total/element.kontrak) * 100;
total1 +=(element.rencana/element.kontrak) * 100;
if (total1>100) {
total1=100;
}
chartData[loop] = { minggu: element.minggu, harga: total, harga1:total1};
}
loop+=1;
chartData[0] = { minggu: tgl, harga: 0, harga1:0};
});
var chart = AmCharts.makeChart("chartdivProgress", {
"type": "serial",
"theme": "light",
"dataProvider": chartData,
"mouseWheelZoomEnabled": true,
"graphs": [{
"id": "g1",
"valueField": "harga",
"balloon":{
"drop":true,
"adjustBorderColor":false,
"color":"#ffffff"
},
"bullet": "round",
"bulletBorderAlpha": 0,
"bulletColor": "#0000FF",
"bulletSize": 5,
"hideBulletsCount": 50,
"lineThickness": 2,
"title": "red line",
"useLineColorForBulletBorder": true,
"balloonText": "Realisasi [[harga]]%"
},{
"id": "g2",
"valueField": "harga1",
"balloon":{
"drop":true,
"adjustBorderColor":false,
"color":"#ffffff"
},
"bullet": "round",
"bulletBorderAlpha": 0,
"bulletColor": "#00FF00",
"bulletSize": 5,
"hideBulletsCount": 50,
"lineThickness": 2,
"title": "red line",
"useLineColorForBulletBorder": true,
"balloonText": "Rencana [[harga1]]%"
}],
"valueAxes": [{
"id": "ValueAxis-1",
"maximum": 100,
"minimum": 0,
"title": "Terpasang (%)"
},{
"id": "ValueAxis-2",
"maximum": 100,
"minimum": 0,
"title": "Terpasang (%)"
}],
"chartScrollbar": {
"autoGridCount": true,
"graph": "g1",
"scrollbarHeight": 40
},
"chartCursor": {
"selectWithoutZooming": true
},
"categoryField": "minggu",
"categoryAxis": {
"parseDates": true,
"minorGridEnabled": true
},
"listeners": [{
"event": "init",
"method": function(e) {
e.chart.removeListener(e.chart.chartScrollbar, "zoomed", e.chart.handleScrollbarZoom);
}
}]
});
}

</script>
<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
var gane =  document.getElementById('chartdivGant');
if (typeof(gane) != 'undefined' && gane != null)
{
var id = $("#idyek").val();
var chartData = [];
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/gantchart/" + id +"/showgrafik" , async: false}).responseJSON;
var total =0;
var loop =0;
$.each(jsondata, function(key, element) {
var segments =[];
var jml = 0;
$.each(element, function(kunci, value){
if (value =='[object Object]') {
var mulairencana;
var mulairealisasi;
var selesairencana;
var selesairealisasi;
var isirencana;
var isirealisasi;
var isreal =false;
var isrencana = false;
$.each(value, function(kun, lue){
if (kun=='start_realisasi') {
mulairealisasi=lue;
isreal=true;
} else if(kun=='end_realisasi'){
selesairealisasi=lue;
isreal=true;
} else if(kun=='realisasi'){
isirealisasi=lue;
isreal=true;
} else if(kun=='start_rencana'){
mulairencana=lue;
isrencana=true;
} else if(kun=='end_rencana'){
selesairencana=lue;
isrencana=true;
} else {
isirencana=lue;
isrencana=true;
}
});
if (isreal==true&&isrencana==true) {
segments[jml]={"start" : mulairealisasi,"end": selesairealisasi,"color": "#FFE4C4","alpha": 0.8,"task": "Realisasi", "value": isirealisasi };
jml+=1;
segments[jml]={"start" : mulairencana,"end": selesairencana,"color": "#46615e","alpha": 0.6,"task": "Rencana","value": isirencana };
} else if (isreal==true&&isrencana==false){
segments[jml]={"start" : mulairealisasi,"end": selesairealisasi,"color": "#FFE4C4","alpha": 0.8,"task": "Realisasi", "value": isirealisasi };
} else if (isreal==false&&isrencana==true){
segments[jml]={"start" : mulairencana,"end": selesairencana,"color": "#46615e","alpha": 0.6,"task": "Rencana","value": isirencana };
}
jml+=1;
}
});
chartData[loop] = {
"category": element.item,
"segments": segments
};
loop+=1;
});
console.log(chartData);
var chart = AmCharts.makeChart( "chartdivGant", {
"type": "gantt",
"theme": "light",
"marginRight": 10,
"period": "MM", 
"dataDateFormat": "YYYY-MM-DD",
"columnWidth": 1,
"valueAxis": {
"type": "date"
},
"brightnessStep": 1,
"graph": {
"fillAlphas": 1,
"alphaField": "alpha",
"lineColor": "#000",
"lineThickness": 1,
"balloonText": "<b>[task]</b>: [[open]] -- [[close]]",
"balloonFunction": function (graphDataItem, graph) {
var item = graph.segmentData;
if (item.start == item.end) {
return "Data kosong<br>" + item.task;
}
return "<b>" + 
item.task + "</b>:<br />"  +
item.start +  " s/d "+
item.end + "<br /><b>Terpasang :" +
item.value +"</b>";
}
},
"rotate": true,
"categoryField": "category",
"segmentsField": "segments",
"colorField": "color",
"startDateField": "start",
"endDateField": "end",
"durationField": "duration",
"dataProvider": chartData,
"valueScrollbar": {
"autoGridCount": true
},
"chartCursor": {
"cursorColor": "#55bb76",
"valueBalloonsEnabled": false,
"cursorAlpha": 0,
"valueLineAlpha": 0.5,
"valueLineBalloonEnabled": true,
"valueLineEnabled": true,
"zoomable": false,
"valueZoomable": true
},
"export": {
"enabled": true
}
} );
}

function TambahRealisasi(id){
$('#idpaket').val(id);
$('#TambahRealisasi').modal('show');
}

function EditRealisasi(id,idreal){
$.get({!! json_encode(url('/')) !!}+"/pengadaan/showdata/" + id , function(data) {    
$('#idpaketubah').val(id);
$('#idreal').val(idreal);
$('#uraian_ubah').val(data.uraian);
$('#nominal_ubah').val(data.nomimal);
$('#retensi_ubah').val(data.retensi);
$('#EditRealisasi').modal('show');
});
}
</script>
<script type="text/javascript">
var counter = 0;
var limit = 4;
function TambahAdendum(id){
var jsondata = $.ajax({type: "GET", url: "../status/showadendum/" + id, async: false}).responseJSON;
counter = jsondata.jml;
if (counter == limit)  {
alert("Anda sudah mencapai batas penambahan adendum, yaitu : " + (counter) + " adendum");
} else {
$('#idpaket1').val(id);
$('#TambahAdendum').modal('show');
}
}
</script>
</body>
</html>