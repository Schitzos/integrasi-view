<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>INTEGRASI | @yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Sistem Informasi Integrasi" name="description" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="DPKP" name="author" />
<link href="https://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans|IBM+Plex+Mono" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/css/daterangepicker.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/ion.rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/ion.rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/jquery-multi-select/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/apps/css/inbox.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/assets/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/layouts/layout3/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/>
<style>
body {
font-family: "Merriweather Sans", sans-serif;
color:#009dc7;
}

h6,
h5,
h4,
h3,
h2,
h1 {
font-family: "Merriweather", serif;
text-shadow: 4px 4px 4px #aaa;
color: #009dc7;
}
.fc-day-grid-event > .fc-content {
white-space: nowrap;
}
.fc-month-view span.fc-title{
white-space: normal;
}
#chartdivPerforma {
width: 100px;
height: 100px;
}
#chartdivProgress {
width: 100%;
height: 500px;
}
#chartdivPerforma {
width: 100%;
height: 500px;
}
#grafdiv {
width: 100%;
height: 500px;
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
<div class="page-logo">
<a href="{{URL::to('/home')}}">
<img src="{{ asset('/admin/layout/img/tes1.png')}}" alt="logo" class="logo-default" height="30px;">
</a>
</div>
<a href="javascript:;" class="menu-toggler"></a>
<div class="top-menu">
<ul class="nav navbar-nav pull-right">

<li class="dropdown dropdown-user dropdown-dark">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<img alt="" class="img-circle" src="{{ asset('/images/avatar/'.Auth::user()->avatar)}}">
<span class="username username-hide-mobile">{{Auth::user()->nama_pegawai}}</span>
</a>
<ul class="dropdown-menu dropdown-menu-default">
<li>
<a href="{{URL::to('/profilmaster')}}">
<i class="icon-user"></i> Profil </a>
</li>
<li class="{{ Request::is( 'lender*') ? 'active' : '' }}">
<a href="{{ URL::to('/lender/'.Auth::user()->tipe) }}">
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
<a href="{{  route('logout') }}"  onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="icon-power"></i> Keluar </a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>

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
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'home*') ? 'active' : '' }}">
<a href="{{ URL::to('/home') }}"><i class="icon-list"></i> Dashboard
<span class="arrow"></span>
</a>
</li>
@if(Auth::user()->admin==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'bidang*') ? 'active' : '' }} 
{{ Request::is( 'seksi*') ? 'active' : '' }} {{ Request::is( 'jabut*') ? 'active' : '' }} 
{{ Request::is( 'jabatan*') ? 'active' : '' }} {{ Request::is( 'golongan*') ? 'active' : '' }} 
{{ Request::is( 'pegawai*') ? 'active' : '' }} {{ Request::is( 'pengguna*') ? 'active' : '' }} 
{{ Request::is( 'program*') ? 'active' : '' }} {{ Request::is( 'kegiatan*') ? 'active' : '' }} 
{{ Request::is('libur*') ? 'active' : '' }} {{ Request::is('maskon*') ? 'active' : '' }}
{{ Request::is('sultan*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-grid"></i> Master
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'jabatan*') ? 'active' : '' }}">
<a href="{{ URL::to('/jabatan') }}" class="nav-link  "> Jabatan Dinas</a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'jabut*') ? 'active' : '' }}">
<a href="{{ URL::to('/jabut') }}" class="nav-link  "> Jabatan Sistem</a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'golongan*') ? 'active' : '' }}">
<a href="{{ URL::to('/golongan') }}" class="nav-link  "> Golongan </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'bidang*') ? 'active' : '' }}">
<a href="{{ URL::to('/bidang') }}" class="nav-link  "> Bidang </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'seksi*') ? 'active' : '' }}">
<a href="{{ URL::to('/seksi') }}" class="nav-link  "> Seksi </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'pegawai*') ? 'active' : '' }}">
<a href="{{ URL::to('/pegawai') }}" class="nav-link  "> Pegawai </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'program*') ? 'active' : '' }}">
<a href="{{ URL::to('/program') }}" class="nav-link  "> Program </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'kegiatan*') ? 'active' : '' }}">
<a href="{{ URL::to('/kegiatan') }}" class="nav-link  "> Kegiatan </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'kecamatan*') ? 'active' : '' }}">
<a href="{{ URL::to('/kecamatan') }}" class="nav-link  "> Kecamatan </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'desa*') ? 'active' : '' }}">
<a href="{{ URL::to('/desa') }}" class="nav-link  "> Desa </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'maskon*') ? 'active' : '' }}">
<a href="{{ URL::to('/maskon') }}" class="nav-link  "> Kontraktor </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'sultan*') ? 'active' : '' }}">
<a href="{{ URL::to('/sultan') }}" class="nav-link  "> Konsultan </a>
</li>
<li aria-haspopup="true" class="{{ Request::is('libur*') ? 'active' : '' }}">
<a href="{{ URL::to('/libur') }}" class="nav-link  "> Hari Libur </a>
</li>
<li aria-haspopup="true" class="{{ Request::is('rekening*') ? 'active' : '' }}">
<a href="{{ URL::to('/rekening') }}" class="nav-link  "> Rekening </a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->ppk==1||Auth::user()->ppbj==1||Auth::user()->koordinator==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is('paket*') ? 'active' : '' }}">
<a href="{{ URL::to('/paket') }}">
<i class="fa fa-list"></i><span class="arrow">&nbsp;Paket</span>
</a>
</li>
@endif
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->ppk==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is('psatu*') ? 'active' : '' }} {{ Request::is('rdua*') ? 'active' : '' }} {{ Request::is('rtiga*') ? 'active' : '' }} {{ Request::is('pempat*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-note"></i> Pelaporan
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'psatu*') ? 'active' : '' }}">
@if(Auth::user()->admin==1)
<a href="{{ URL::to('/psatu/0/0/0/filter') }}">P-1</a>
@else
<a href="{{ URL::to('/psatu/'.Auth::user()->id_bidang.'/0/0/filter') }}">P-1</a>
@endif
</li>
<li aria-haspopup="true" class="{{ Request::is( 'rdua*') ? 'active' : '' }}">
<a href="{{ URL::to('/rdua') }}" class="nav-link  "> R2 </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'rtiga*') ? 'active' : '' }}">
<a href="{{ URL::to('/rtiga') }}" class="nav-link  "> R3 </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'pempat*') ? 'active' : '' }}">
<a href="{{ URL::to('/pempat/0/0') }}" class="nav-link  "> P4 </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'grafik_p4*') ? 'active' : '' }}">
<a href="{{ URL::to('/grafik_p4') }}" class="nav-link  "> GRAFIK </a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->spj==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'dalam*') ? 'active' : '' }} {{ Request::is( 'luar*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-plane"></i> Perjalanan Dinas
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'dalam*') ? 'active' : '' }}">
<a href="{{ URL::to('/dalam') }}" class="nav-link  "> Dalam Daerah </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'luar*') ? 'active' : '' }}">
<a href="{{ URL::to('/luar') }}" class="nav-link  "> Luar Daerah </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'bawean*') ? 'active' : '' }}">
<a href="{{ URL::to('/bawean') }}" class="nav-link  "> Bawean </a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->spj==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'atk*') ? 'active' : '' }} {{ Request::is( 'mamin*') ? 'active' : '' }} {{ Request::is( 'pengadaan*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="icon-note"></i> ATK/MAMIN/Penggandaan
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'atk*') ? 'active' : '' }}">
<a href="{{ URL::to('/atk') }}" class="nav-link  "> Alat Tulis Kantor </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'mamin*') ? 'active' : '' }}">
<a href="{{ URL::to('/mamin') }}" class="nav-link  "> Makanan dan Minuman </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'pengadaan*') ? 'active' : '' }}">
<a href="{{ URL::to('/pengadaan') }}" class="nav-link  "> Penggandaan </a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->admin==1||Auth::user()->pptk==1||Auth::user()->spj==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'honorrapat*') ? 'active' : '' }} {{ Request::is( 'honor/pphp*') ? 'active' : '' }} {{ Request::is( 'honor/ppb*') ? 'active' : '' }} {{ Request::is( 'honor/timteknis*') ? 'active' : '' }} {{ Request::is( 'honor/bulanan*') ? 'active' : '' }}">
<a href="javascript:;"> <i class="glyphicon glyphicon-usd"></i> Honor
<span class="arrow"></span>
</a>
<ul class="dropdown-menu pull-left">
<li aria-haspopup="true" class="{{ Request::is( 'honor/pphp*') ? 'active' : '' }}">
<a href="{{ URL::to('/honor/pphp') }}" class="nav-link  "> PPHP </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'honor/ppb*') ? 'active' : '' }}">
<a href="{{ URL::to('/honor/ppb') }}" class="nav-link  "> PPBJ </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'honor/timteknis*') ? 'active' : '' }}">
<a href="{{ URL::to('/honor/timteknis') }}" class="nav-link  "> TIM TEKNIS </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'honor/bulanan*') ? 'active' : '' }}">
<a href="{{ URL::to('/honor/bulanan') }}" class="nav-link  "> BULANAN </a>
</li>
<li aria-haspopup="true" class="{{ Request::is( 'honorrapat*') ? 'active' : '' }}">
<a href="{{ URL::to('/honorrapat') }}" class="nav-link  "> Rapat </a>
</li>
</ul>
</li>
@endif
@if(Auth::user()->admin==1||Auth::user()->ppk==1||Auth::user()->pptk==1||Auth::user()->spj==1||Auth::user()->bendahara==1)
<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'kendali*') ? 'active' : '' }} {{ Request::is( 'kendali_bendahara*') ? 'active' : '' }}">
    <a href="javascript:;"> <i class="icon-check"></i> Kendali
    <span class="arrow"></span>
    </a>
    <ul class="dropdown-menu pull-left">
    <li aria-haspopup="true" class="{{ Request::is( 'kendali*') ? 'active' : '' }}">
    <a href="{{ URL::to('/kendali/0/0/0') }}" class="nav-link  "> Kendali PPKeu </a>
    </li>
    <li aria-haspopup="true" class="{{ Request::is( 'kendali_bendahara*') ? 'active' : '' }}">
    <a href="{{ URL::to('/kendali_bendahara/0/0/0') }}" class="nav-link  "> Kendali Bendahara </a>
    </li>
    </ul>
</li>
@endif
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
<div class="container"> {{ date('Y') }} &copy; INTEGRASI By
<a target="_blank" href="http://gresikkab.go.id">DPKP Kabupaten Gresik</a>
</div>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
</div>
</div>
<script src="{{asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/scripts/jquery.daterangepicker.min.js') }}" type="text/javascript" ></script>
<script src="{{asset('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/ion.rangeslider/js/ion.rangeSlider.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js') }}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/amcharts/amcharts/serial.js') }}"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="{{asset('/assets/global/plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>
<script src="{{asset('/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/apps/scripts/calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/ui-confirmations.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/table-datatables-scroller.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/components-select2.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/form-wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/TableEdit/jquery.tabledit.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/datatables/jquery.dataTables.bootstrap.min.js') }}"></script>
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
<script>
jQuery(document).ready(function() {
$('#Uang_Harian_Golongan,#Uang_Harian_Golongan_Ubah,#Uang_Lembur_Golongan,#Uang_Lembur_Golongan_Ubah,#Uang_Makan_Golongan,#Uang_Makan_Golongan_Ubah').autoNumeric('init');
$('#Uang_Harian_Golongan').change(function () {
$('#UangHarian').val($('#Uang_Harian_Golongan').autoNumeric('get'));
});
$('#Uang_Harian_Golongan_Ubah').change(function () {
$('#UangHarianUbah').val($('#Uang_Harian_Golongan_Ubah').autoNumeric('get'));
});
$('#Uang_Lembur_Golongan').change(function () {
$('#UangLembur').val($('#Uang_Lembur_Golongan').autoNumeric('get'));
});
$('#Uang_Lembur_Golongan_Ubah').change(function () {
$('#UangLemburUbah').val($('#Uang_Lembur_Golongan_Ubah').autoNumeric('get'));
});
$('#Uang_Makan_Golongan').change(function () {
$('#UangMakan').val($('#Uang_Makan_Golongan').autoNumeric('get'));
});
$('#Uang_Makan_Golongan_Ubah').change(function () {
$('#UangMakanUbah').val($('#Uang_Makan_Golongan_Ubah').autoNumeric('get'));
});

$('#Pagu_Paket,#Pagu_Paket_Ubah,#Pagu_Nonpaket,#Pagu_Nonpaket_Ubah').autoNumeric('init');
$('#Pagu_Paket').change(function () {
$('#PaguPaket').val($('#Pagu_Paket').autoNumeric('get'));
});
$('#Pagu_Paket_Ubah').change(function () {
$('#PaguPaket_Ubah').val($('#Pagu_Paket_Ubah').autoNumeric('get'));
});
$('#Pagu_Nonpaket').change(function () {
$('#PaguNonpaket').val($('#Pagu_Nonpaket').autoNumeric('get'));
});
$('#Pagu_Nonpaket_Ubah').change(function () {
$('#PaguNonpaket_Ubah').val($('#Pagu_Nonpaket_Ubah').autoNumeric('get'));
});
});
</script>
<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
jQuery(document).ready(function() {
$("#Cara_Bayar").change(function () {
var selectedValue = $(this).val();
if (selectedValue==1) {
tambahinput('dynamicInput');
} else {
hapusinput('dynamicInput');
}
});
var divperforma =  document.getElementById('chartdivPerforma1');
if (typeof(divperforma) != 'undefined' && divperforma != null)
{
var chartData = [];
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/paket/showperforma/" + id  , async: false}).responseJSON;
var loop=0;
var total =0;
$.each(jsondata, function(key, element) {
if (element.rencana_jadwal==0||element.rencana_jadwal==null) {
chartData[loop] = { minggu: element.minggu_jadwal, performa: null};
}else{
total = element.realisasi_jadwal - element.rencana_jadwal;
chartData[loop] = { minggu: element.minggu_jadwal, performa: total};
}
loop+=1;
});
var chart = AmCharts.makeChart("chartdivPerforma1", {
"type": "serial",
"theme": "light",
"dataProvider": chartData,
"mouseWheelZoomEnabled": true,
"graphs": [{
"id": "g1",
"valueField": "performa",
"balloon":{
"drop":true,
"adjustBorderColor":false,
"color":"#ffffff"
},
"bullet": "round",
"bulletBorderAlpha": 1,
"bulletColor": "#FFFFFF",
"bulletSize": 5,
"hideBulletsCount": 50,
"lineThickness": 2,
"title": "red line",
"useLineColorForBulletBorder": true,
"balloonText": "[[performa]]"
}],
"valueAxes": [{
"id": "ValueAxis-1",
"maximum": 50,
"minimum": -50,
"title": "Prosentase (%)"
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
});
var jml = $("#jmlpro").val();
for (var i = 1; i <= jml; i++) {
var idnya1 = '#idpro_'+i;
var idnya2 = '#range_'+i;
var id = $(idnya1).val();
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/paket/showslider/" + id  , async: false}).responseJSON;
$(idnya2).ionRangeSlider({
min: 1,
max: jsondata.max,
from: jsondata.sekarang,
from_fixed: true
});
}
function TambahKecamatan(){
$('#TambahKecamatan').modal('show');
}
function UbahKecamatan(id){
$.get({!! json_encode(url('/')) !!}+"/kecamatan/showdata/" + id , function(data) {
$('#idkecamatan').val(data.id_kecamatan);
$('#Nama_Kecamatan_Ubah').val(data.nama_kecamatan);
});
$('#UbahKecamatan').modal('show');
}
function TambahDesa(){
$('#TambahDesa').modal('show');
}
function UbahDesa(id){
$.get({!! json_encode(url('/')) !!}+"/desa/showdata/" + id , function(data) {
$('#iddesa').val(data.id_desa);
$('#Kecamatan_Ubah').val(data.id_kecamatan).change();
$('#Nama_Desa_Ubah').val(data.nama_desa);
});
$('#UbahDesa').modal('show');
}

function TambahJabatan(){
$('#TambahJabatan').modal('show');
}
function UbahJabatan(id){
$.get({!! json_encode(url('/')) !!}+"/jabatan/showdata/" + id , function(data) {
$('#idjabatan').val(data.id_jabatan);
$('#Nama_Jabatan_Ubah').val(data.nama_jabatan);
$('#Keterangan_Jabatan_Ubah').val(data.keterangan_jabatan);
});
$('#UbahJabatan').modal('show');
}

function TambahJabatanUser(){
$('#TambahJabatan').modal('show');
}
function UbahJabatanUser(id){
$.get({!! json_encode(url('/')) !!}+"/jabut/showdata/" + id , function(data) {
$('#idjabatan').val(data.id_jabatan_user);
$('#Nama_Jabatan_Ubah').val(data.nama_jabatan_user);
$('#Keterangan_Jabatan_Ubah').val(data.keterangan_jabatan_user);
});
$('#UbahJabatan').modal('show');
}

function TambahGolongan(){
$('#TambahGolongan').modal('show');
}
function UbahGolongan(id){
$.get({!! json_encode(url('/')) !!}+"/golongan/showdata/" + id , function(data) {
$('#idgolongan').val(data.id_golongan);
$('#Nama_Golongan_Ubah').val(data.nama_golongan);
$('#Pangkat_Golongan_Ubah').val(data.pangkat);
$('#Pajak_Golongan_Ubah').val(data.pajak);
$('#Uang_Harian_Golongan_Ubah').val(data.uang_harian);
$('#Uang_Lembur_Golongan_Ubah').val(data.uang_lembur);
$('#Uang_Makan_Golongan_Ubah').val(data.uang_makan);
});
$('#UbahGolongan').modal('show');
}
function TambahBidang(){
$('#TambahBidang').modal('show');
}
function UbahBidang(id){
$.get({!! json_encode(url('/')) !!}+"/bidang/showdata/" + id , function(data) {
$('#idbidang').val(data.id_bidang);
$('#Nama_Bidang_Ubah').val(data.nama_bidang);
});
$('#UbahBidang').modal('show');
}
function TambahSeksi(){
$('#TambahSeksi').modal('show');
}
function UbahSeksi(id){
$.get({!! json_encode(url('/')) !!}+"/seksi/showdata/" + id , function(data) {
$('#idseksi').val(data.id_seksi);
$('#Nama_Seksi_Ubah').val(data.nama_seksi);
$('#Nama_Bidang_Ubah').val(data.id_bidang).change();
});
$('#UbahSeksi').modal('show');
}
function TambahPegawai(){
$('#TambahPegawai').modal('show');
}
function UbahPegawai(id){
$.get({!! json_encode(url('/')) !!}+"/pegawai/showdata/" + id , function(data) {
$('#idpegawai').val(data.nip_pegawai);
$('#Jabdin_Ubah').val(data.id_jabatan).change();
$('#Bidang-Pegawai_Ubah').val(data.id_bidang).change();
$('#Seksi-Pegawai_Ubah').val(data.id_seksi).change();
$('#Golongan_Ubah').val(data.id_golongan).change();
$('#NIP_Pegawai_Ubah').val(data.nip_pegawai);
$('#Nama_Pegawai_Ubah').val(data.nama_pegawai);
if(data.admin==1){
$('#Chk-Admin_Ubah').prop('checked', true).change();
}else{
$('#Chk-Admin_Ubah').prop('checked', false).change();
}
if(data.ppk==1){
$('#Chk-PPK_Ubah').prop('checked', true).change();
}else{
$('#Chk-PPK_Ubah').prop('checked', false).change();
}
if(data.pptk==1){
$('#Chk-PPTK_Ubah').prop('checked', true).change();
}else{
$('#Chk-PPTK_Ubah').prop('checked', false).change();
}
if(data.ppbj==1){
$('#Chk-PPBJ_Ubah').prop('checked', true).change();
}else{
$('#Chk-PPBJ_Ubah').prop('checked', false).change();
}
if(data.pphp==1){
$('#Chk-PPHP_Ubah').prop('checked', true).change();
}else{
$('#Chk-PPHP_Ubah').prop('checked', false).change();
}
if(data.bendahara==1){
$('#Chk-Bendahara_Ubah').prop('checked', true).change();
}else{
$('#Chk-Bendahara_Ubah').prop('checked', false).change();
}
if(data.spj==1){
$('#Chk-SPJ_Ubah').prop('checked', true).change();
}else{
$('#Chk-SPJ_Ubah').prop('checked', false).change();
}
if(data.koordinator==1){
$('#Chk-Kor_Ubah').prop('checked', true).change();
}else{
$('#Chk-Kor_Ubah').prop('checked', false).change();
}
if(data.p1==1){
$('#Chk-P1_Ubah').prop('checked', true).change();
}else{
$('#Chk-P1_Ubah').prop('checked', false).change();
}
$('#ckadminubah').val(data.admin);
$('#ckppkubah').val(data.ppk);
$('#ckpptkubah').val(data.pptk);
$('#ckppbjubah').val(data.ppbj);
$('#ckpphpubah').val(data.pphp);
$('#ckbendaubah').val(data.bendahara);
$('#ckkorubah').val(data.koordinator);
$('#ckp1ubah').val(data.p1);
});
$('#UbahPegawai').modal('show');
}
function JabatanSistem(){
if ($('#Chk-Admin').is(':checked')){ 
$('#ckadmin').val(1);
} 
else { 
$('#ckadmin').val(0);
}
if ($('#Chk-PPK').is(':checked')){ 
$('#ckppk').val(1);
} 
else { 
$('#ckppk').val(0);
}
if ($('#Chk-PPTK').is(':checked')){ 
$('#ckpptk').val(1);
} 
else { 
$('#ckpptk').val(0);
}
if ($('#Chk-PPBJ').is(':checked')){ 
$('#ckppbj').val(1);
} 
else { 
$('#ckppbj').val(0);
}
if ($('#Chk-PPHP').is(':checked')){ 
$('#ckpphp').val(1);
} 
else { 
$('#ckpphp').val(0);
}
if ($('#Chk-Bendahara').is(':checked')){ 
$('#ckbenda').val(1);
} 
else { 
$('#ckbenda').val(0);
}
if ($('#Chk-SPJ').is(':checked')){ 
$('#ckspj').val(1);
} 
else { 
$('#ckspj').val(0);
}
if ($('#Chk-Kor').is(':checked')){ 
$('#ckkor').val(1);
} 
else { 
$('#ckkor').val(0);
}
if ($('#Chk-P1').is(':checked')){ 
$('#ckp1').val(1);
} 
else { 
$('#ckp1').val(0);
}
}
function JabatanSistemUbah(){
if ($('#Chk-Admin_Ubah').is(':checked')){ 
$('#ckadminubah').val(1);
} 
else { 
$('#ckadminubah').val(0);
}
if ($('#Chk-PPK_Ubah').is(':checked')){ 
$('#ckppkubah').val(1);
} 
else { 
$('#ckppkubah').val(0);
}
if ($('#Chk-PPTK_Ubah').is(':checked')){ 
$('#ckpptkubah').val(1);
} 
else { 
$('#ckpptkubah').val(0);
}
if ($('#Chk-PPBJ_Ubah').is(':checked')){ 
$('#ckppbjubah').val(1);
} 
else { 
$('#ckppbjubah').val(0);
}
if ($('#Chk-PPHP_Ubah').is(':checked')){ 
$('#ckpphpubah').val(1);
} 
else { 
$('#ckpphpubah').val(0);
}
if ($('#Chk-Bendahara_Ubah').is(':checked')){ 
$('#ckbendaubah').val(1);
} 
else { 
$('#ckbendaubah').val(0);
}
if ($('#Chk-SPJ_Ubah').is(':checked')){ 
$('#ckspjubah').val(1);
} 
else { 
$('#ckspjubah').val(0);
}
if ($('#Chk-Kor_Ubah').is(':checked')){ 
$('#ckkorubah').val(1);
} 
else { 
$('#ckkorubah').val(0);
}
if ($('#Chk-P1_Ubah').is(':checked')){ 
$('#ckp1ubah').val(1);
} 
else { 
$('#ckp1ubah').val(0);
}
}
function TambahKontraktor(){
$('#TambahKontraktor').modal('show');
}
function UbahKontraktor(id){
$.get({!! json_encode(url('/')) !!}+"/maskon/showdata/" + id , function(data) {
$('#idkontraktor').val(data.id_kontraktor);
$('#Nama_Kontraktor_Ubah').val(data.nama_kontraktor);
$('#Telp_Kontraktor_Ubah').val(data.telp_kontraktor);
$('#Alamat_Kontraktor_Ubah').val(data.alamat_kontraktor);
$('#Direktur_Ubah').val(data.direktur_kontraktor);
});
$('#UbahKontraktor').modal('show');
}

function TambahKonsultan(){
$('#TambahKonsultan').modal('show');
}
function UbahKonsultan(id){
$.get({!! json_encode(url('/')) !!}+"/sultan/showdata/" + id , function(data) {
$('#idkonsultan').val(data.id_konsultan);
$('#Nama_Konsultan_Ubah').val(data.nama_konsultan);
$('#Telp_Konsultan_Ubah').val(data.telp_konsultan);
$('#Alamat_Konsultan_Ubah').val(data.alamat_konsultan);
$('#Direktur_Ubah').val(data.direktur_konsultan);
});
$('#UbahKonsultan').modal('show');
}

function TambahProgram(){
$('#TambahProgram').modal('show');
}
function UbahProgram(id){
$.get("program/showdata/" + id , function(data) {
$('#idprogram').val(data.id_program);
$('#Kode_Program').val(data.id_program);
$('#Nama_Program_Ubah').val(data.nama_program);
});
$('#UbahProgram').modal('show');
}
function UploadDPA(){
$('#UploadDPA').modal('show');
}
function TambahKegiatan(){
$('#TambahKegiatan').modal('show');
}
$('#Program').change(function () {
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showprogram/" + $(this).val() , function(data) {
$('#id_kegiatan').val(data.id_program);
});
});
$('#Bidang-P1').change(function() {
var idnya1 = $(this).val();
var idnya2 = $('#Kegiatan-P1').val();
var idnya3 = $('#Bulan-P1').val();
window.location.href = {!! json_encode(url('/')) !!}+"/psatu/"+idnya1+"/"+idnya2+"/"+idnya3+"/filter";
});
$('#Kegiatan-P1').change(function() {
var idnya1 = $('#Bidang-P1').val();
var idnya2 = $(this).val();
var idnya3 = $('#Bulan-P1').val();
window.location.href = {!! json_encode(url('/')) !!}+"/psatu/"+idnya1+"/"+idnya2+"/"+idnya3+"/filter";
});
$('#Bulan-P1').change(function() {
var idnya1 = $('#Bidang-P1').val();
var idnya2 = $('#Kegiatan-P1').val();
var idnya3 = $(this).val();
window.location.href = {!! json_encode(url('/')) !!}+"/psatu/"+idnya1+"/"+idnya2+"/"+idnya3+"/filter";
});
$('#Bidang-P4').change(function() {
var idnya1 = $(this).val();
var idnya2 = $('#Bulan-P4').val();
window.location.href = {!! json_encode(url('/')) !!}+"/pempat/"+idnya1+"/"+idnya2;
});
$('#Bulan-P4').change(function() {
var idnya1 = $('#Bidang-P4').val();
var idnya2 = $(this).val();
window.location.href = {!! json_encode(url('/')) !!}+"/pempat/"+idnya1+"/"+idnya2;
});
$('#Bidang-Kendali').change(function() {
var idnya1 = $(this).val();
if($(this).val()==0){
var idnya2 = 0;
var idnya3 = 0;
}else{
var idnya2 = $('#Kegiatan-Kendali').val();
var idnya3 = $('#Bulan-Kendali').val();
}

window.location.href = {!! json_encode(url('/')) !!}+"/kendali/"+idnya1+"/"+idnya2+"/"+idnya3;
});
$('#Kegiatan-Kendali').change(function() {
var idnya1 = $('#Bidang-Kendali').val();
var idnya2 = $(this).val();
var idnya3 = $('#Bulan-Kendali').val();
window.location.href = {!! json_encode(url('/')) !!}+"/kendali/"+idnya1+"/"+idnya2+"/"+idnya3;
});
$('#Bulan-Kendali').change(function() {
var idnya1 = $('#Bidang-Kendali').val();
var idnya2 = $('#Kegiatan-Kendali').val();
var idnya3 = $(this).val();
window.location.href = {!! json_encode(url('/')) !!}+"/kendali/"+idnya1+"/"+idnya2+"/"+idnya3;
});
$("#Bidang").change(function() {
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showppk/" + $(this).val() , function(data) {
$('#PPK').empty();
$('#PPK').append("<option value=''>Pilih PPK</option>");
$.each(data, function(key, element) {
$('#PPK').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showpptk/" + $(this).val() , function(data) {
$('#PPTK').empty();
$('#PPTK').append("<option value=''>Pilih PPTK</option>");
$.each(data, function(key, element) {
$('#PPTK').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
});
$("#Jabdin").change(function() {
$.get({!! json_encode(url('/')) !!}+"/pegawai/showbidang/" + $(this).val() , function(data) {
$('#Bidang-Pegawai').empty();
$('#Bidang-Pegawai').append("<option value=''>Pilih Bidang</option>");
$.each(data, function(key, element) {
$('#Bidang-Pegawai').append("<option value='" + element.id_bidang + "'>" + element.nama_bidang + "</option>");
});
});
var namane = $("#Jabdin option:selected").text();
var x = document.getElementById("bipeg");
var y = document.getElementById("sekpeg");
if (namane === "Pilih Jabatan") {
x.style.display = "none";
y.style.display = "none";
$('#Bidang-Pegawai').empty();
$('#Bidang-Pegawai').append("<option value=''>Pilih Bidang</option>");
$('#Seksi-Pegawai').empty();
$('#Seksi-Pegawai').append("<option value=''>Pilih Seksi</option>");
}else if (namane === "Kepala Dinas") {
x.style.display = "none";
y.style.display = "none";
$('#Bidang-Pegawai').empty();
$('#Bidang-Pegawai').append("<option value=''>Pilih Bidang</option>");
$('#Seksi-Pegawai').empty();
$('#Seksi-Pegawai').append("<option value=''>Pilih Seksi</option>");
}else if (namane === "Kepala Bidang") {
x.style.display = "block";
y.style.display = "none";
$('#Seksi-Pegawai').empty();
$('#Seksi-Pegawai').append("<option value=''>Pilih Seksi</option>");
} else {
x.style.display = "block";
y.style.display = "block";
}
});
$("#Bidang-Pegawai").change(function() {
$.get({!! json_encode(url('/')) !!}+"/pegawai/showseksi/" + $(this).val() , function(data) {
$('#Seksi-Pegawai').empty();
$('#Seksi-Pegawai').append("<option value=''>Pilih Seksi</option>");
$.each(data, function(key, element) {
$('#Seksi-Pegawai').append("<option value='" + element.id_seksi + "'>" + element.nama_seksi + "</option>");
});
});
});
$("#Jabdin_Ubah").change(function() {
$.get({!! json_encode(url('/')) !!}+"/pegawai/showbidang/" + $(this).val() , function(data) {
$('#Bidang-Pegawai_Ubah').empty();
$('#Bidang-Pegawai_Ubah').append("<option value=''>Pilih Bidang</option>");
$.each(data, function(key, element) {
$('#Bidang-Pegawai_Ubah').append("<option value='" + element.id_bidang + "'>" + element.nama_bidang + "</option>");
});
});
var namane = $("#Jabdin_Ubah option:selected").text();
var x = document.getElementById("bipegubah");
var y = document.getElementById("sekpegubah");
if (namane === "Pilih Jabatan") {
x.style.display = "none";
y.style.display = "none";
}else if (namane === "Kepala Dinas") {
x.style.display = "none";
y.style.display = "none";
}else if (namane === "Kepala Bidang") {
x.style.display = "block";
y.style.display = "none";
} else {
x.style.display = "block";
y.style.display = "block";
}
});
$("#Bidang-Pegawai_Ubah").change(function() {
$.get({!! json_encode(url('/')) !!}+"/pegawai/showseksi/" + $(this).val() , function(data) {
$('#Seksi-Pegawai_Ubah').empty();
$('#Seksi-Pegawai_Ubah').append("<option value=''>Pilih Seksi</option>");
$.each(data, function(key, element) {
$('#Seksi-Pegawai_Ubah').append("<option value='" + element.id_seksi + "'>" + element.nama_seksi + "</option>");
});
});
});
function UbahKegiatan(id){
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showdata/" + id , function(data) {
$('#idkegiatan').val(data.id_kegiatan);
$('#Seksi_Ubah').val(data.id_seksi).change();
$('#Program_Ubah').val(data.id_program).change();
$('#PPK_Ubah').val(data.ppk).change();
$('#PPTK_Ubah').val(data.pptk).change();
$('#PPBJ_Ubah').val(data.ppbj).change();
$('#Kode_Kegiatan_Ubah').val(data.id_kegiatan);
$('#Nama_Kegiatan_Ubah').val(data.nama_kegiatan);
$('#Pagu_Paket_Ubah').val(data.pagu_paket);
$('#Pagu_Nonpaket_Ubah').val(data.pagu_non_paket);
});
$('#UbahKegiatan').modal('show');
}
$("#Bidang_Ubah").change(function() {
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showppk/" + $(this).val() , function(data) {
$('#PPK_Ubah').empty();
$('#PPK_Ubah').append("<option value=''>Pilih PPK</option>");
$.each(data, function(key, element) {
$('#PPK_Ubah').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showpptk/" + $(this).val() , function(data) {
$('#PPTK_Ubah').empty();
$('#PPTK_Ubah').append("<option value=''>Pilih PPTK</option>");
$.each(data, function(key, element) {
$('#PPTK_Ubah').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
});
$('#Program_Paket').change(function () {
$.get({!! json_encode(url('/')) !!}+"/paket/showkegiatan/" + $(this).val() , function(data) {
$('#Kegiatan_Paket').empty();
$('#Kegiatan_Paket').append("<option value=''>Pilih Kegiatan</option>");
$.each(data, function(key, element) {
$('#Kegiatan_Paket').append("<option value='" + element.id_kegiatan + "'>" + element.nama_kegiatan + "</option>");
});
});
});
$('#Kegiatan_Paket').change(function () {
$.get({!! json_encode(url('/')) !!}+"/paket/showdpa/" + $(this).val() , function(data) {
$('#DPA_Paket').empty();
$('#DPA_Paket').append("<option value=''>Pilih Paket</option>");
$.each(data, function(key, element) {
$('#DPA_Paket').append("<option value='" + element.id_dpa + "'>" + element.uraian + "</option>");
});
});
});
$('#DPA_Paket').change(function () {
$.get({!! json_encode(url('/')) !!}+"/paket/showkordinator/" + $(this).val() , function(data) {
$('#Kordinator_Paket').empty();
$('#Kordinator_Paket').append("<option value=''>Pilih Kordinator</option>");
$.each(data, function(key, element) {
$('#Kordinator_Paket').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
});
$('#Kecamatan_Paket').change(function () {
$.get({!! json_encode(url('/')) !!}+"/paket/showdesa/" + $(this).val() , function(data) {
$('#Desa_Paket').empty();
$('#Desa_Paket').append("<option value=''>Pilih Desa</option>");
$.each(data, function(key, element) {
$('#Desa_Paket').append("<option value='" + element.id_desa + "'>" + element.nama_desa + "</option>");
});
});
});
function TampilProgress(id) {
LoadChartProgress(id);
$('#grafikprogres').modal('show').on('shown.bs.modal', function () {
var chart = $(this).data('chart');
if (chart) {
chart.invalidateSize()
}
else {
$(this).data('chart', LoadChartProgress(id));
}
});  
}
function LoadChartProgress(id){
var chartData = [];
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/paket/showgrafik/" + id  , async: false}).responseJSON;
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
chartData[loop] = { minggu: element.minggu, harga: total, harga1:total1};
}else if ((element.total!=0||element.total!=null)&&(element.rencana==0||element.rencana==null)) {
total += (element.total/element.kontrak) * 100;
chartData[loop] = { minggu: element.minggu, harga: total, harga1:total1};
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
function TampilPerforma(id) {
LoadChartPerforma(id);
$('#grafikperforma').modal('show').on('shown.bs.modal', function () {
var chart = $(this).data('chart');
if (chart) {
chart.invalidateSize()
}
else {
$(this).data('chart', LoadChartPerforma(id));
}
});
}
function LoadChartPerforma(id){
var chartData = [];
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/paket/showperforma/" + id  , async: false}).responseJSON;
var loop=0;
var total =0;
$.each(jsondata, function(key, element) {
if (element.rencana_jadwal==0||element.rencana_jadwal==null) {
total = element.realisasi_jadwal;
chartData[loop] = { minggu: element.minggu_jadwal, performa: total};
}else{
total = element.realisasi_jadwal - element.rencana_jadwal;
chartData[loop] = { minggu: element.minggu_jadwal, performa: total};
}
loop+=1;
});
var chart = AmCharts.makeChart("chartdivPerforma", {
"type": "serial",
"theme": "light",
"dataProvider": chartData,
"mouseWheelZoomEnabled": true,
"graphs": [{
"id": "g1",
"valueField": "performa",
"balloon":{
"drop":true,
"adjustBorderColor":false,
"color":"#ffffff"
},
"bullet": "round",
"bulletBorderAlpha": 1,
"bulletColor": "#FFFFFF",
"bulletSize": 5,
"hideBulletsCount": 50,
"lineThickness": 2,
"title": "red line",
"useLineColorForBulletBorder": true,
"balloonText": "[[performa]]"
}],
"valueAxes": [{
"id": "ValueAxis-1",
"title": "Prosentase (%)"
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
function tambahinput(divName){
var newdiv = document.createElement('div');
newdiv.className = "row"; 
var strhasil = '<div class="col-md-6" <div class="form-group">';
strhasil+='<label for="Jml_Bayar" class="col-md-4 control-label">Jumlah Termin<span class="required">';
strhasil+=' * </span></label><div class="col-md-8">';
strhasil+='<select class="select2 form-control" id="Jml_Bayar" name="Jml_Bayar">';
strhasil+='<option value="1">1</option>';
strhasil+='<option value="2">2</option>';
strhasil+='<option value="3">3</option>';
strhasil+='<option value="4">4</option>';
strhasil+='<option value="5">5</option>';
strhasil+='<option value="6">6</option>';
strhasil+='</select></div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$('#Jml_Bayar').select2({});
}
function hapusinput(element1) {
var cara = $('#Cara_Bayar').val();
if (cara==1) {
$('#dynamicInput').children().last().remove();
} 
}
</script>
<script type="text/javascript">
var jmlpro = $('#jmlpro').val();
for (var i = 1; i <= jmlpro; i++) {
var id =  "#idpaket"+i;
var idnya = $(id).val();
var chartData = [];
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/paket/showmini/" + idnya , async: false}).responseJSON;
var loop=0;
var total =0;
$.each(jsondata, function(key, element) {
if (element.realisasi_jadwal==0||element.realisasi_jadwal==null) {
chartData[loop] = { minggu: element.ke_jadwal, performa: total};
}else{
total = element.realisasi_jadwal - element.rencana_jadwal;
chartData[loop] = { minggu: element.ke_jadwal, performa: total};
}
loop+=1;
});
var divnya = "chartdivmini_"+i;
var chartnya = "chart"+i;
chartnya = AmCharts.makeChart( divnya, {
"type": "serial",
"dataProvider": chartData,
"categoryField": "minggu",
"autoMargins": false,
"marginLeft": 0,
"marginRight": 5,
"marginTop": 0,
"marginBottom": 0,
"graphs": [ {
"valueField": "performa",
"showBalloon": false,
"lineColor": "#ffbf63",
"negativeLineColor": "#289eaf"
} ],
"valueAxes": [ {
"gridAlpha": 0,
"axisAlpha": 0,
"guides": [ {
"value": 0,
"lineAlpha": 0.1
} ]
} ],
"categoryAxis": {
"gridAlpha": 0,
"axisAlpha": 0,
"startOnAxis": true
}
});
}
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
$(".select2, .select2-multiple").select2({
width: null
});
$('#Paja').maxlength({
limitReachedClass: "label label-danger",
});
$("#Uang_Hari,#Paja,#Jumlah,#Jumlah_Ubah,#Uang_Hari_Ubah,#Paja_Ubah,#Nominal_Lumsum").autoNumeric('init');
$('#Uang_Hari').change(function () {
$('#Uang_Harian').val($('#Uang_Hari').autoNumeric('get'));
});
$('#Paja').change(function () {
$('#Pajak').val($('#Paja').autoNumeric('get'));
});
$('#Uang_Hari_Ubah').change(function () {
$('#Uang_Harian_Ubah').val($('#Uang_Hari_Ubah').autoNumeric('get'));
});
$('#Paja_Ubah').change(function () {
$('#Pajak_Ubah').val($('#Paja_Ubah').autoNumeric('get'));
});
$('#Paja_Ubah').change(function () {
$('#Pajak_Ubah').val($('#Paja_Ubah').autoNumeric('get'));
});
$('#Jumlah').change(function () {
$('#Jml').val($('#Jumlah').autoNumeric('get'));
});
$('#Jumlah_Ubah').change(function () {
$('#Jml_Ubah').val($('#Jumlah_Ubah').autoNumeric('get'));
});
$('#Nominal_Lumsum').change(function () {
$('#No_Sum').val($('#Nominal_Lumsum').autoNumeric('get'));
});
$('#Tahun_Anggaran,#Tahun_Anggaran_Ubah').datepicker({
autoclose:true,
format:'yyyy',
formatSubmit : 'yyyy',
viewMode: "years", 
minViewMode: "years"
});
$('#Tanggal_ATK,#Tanggal_ATK_Ubah,#Tanggal_Mamin,#Tanggal_Mamin_Ubah,#Tgl_Mulai,#Tgl_Selesai,#Tanggal_Pengadaan,#Tanggal_Pengadaan_Ubah,#Tgl_Teknis,#Tgl_PNS,#Tgl_Rapat,#Tgl_Libur,#Tgl_Libur_Ubah,#tgl_sp').datepicker({
autoclose:true,
format:'dd MM yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$("#Nomor_Surat").inputmask("999/999/999-99/9999", {
autoUnmask: true
});
$("#Pengikut").multiSelect();
$("#Pengikut").change(function () {
var selectedValue = $(this).val();
tambahinputspj('dynamicInput',selectedValue)
});
$("#Pengikut_Ubah").multiSelect();
$("#Pengikut_Ubah").change(function () {
var selectedValue = $(this).val();
tambahinputspjubah('dynamicInputUbah',selectedValue,$('#idperjalanan').val());
});
$("#Bidang-SPJ").change(function() {
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showpptk/" + $(this).val() , function(data) {
$('#PPTK').empty();
$('#PPTK').append("<option value='a'>Pilih PPTK</option>");
$.each(data, function(key, element) {
$('#PPTK').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
});
$("#Bidang-SPJ_Ubah").change(function() {
$.get({!! json_encode(url('/')) !!}+"/kegiatan/showpptk/" + $(this).val() , function(data) {
$('#PPTK_Ubah').empty();
$('#PPTK_Ubah').append("<option value='a'>Pilih PPTK</option>");
$.each(data, function(key, element) {
$('#PPTK_Ubah').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
});
});
});
var tgljalan = $('#Tgl_Perjalanan');
if (tgljalan.length>0) {
$('#Tgl_Perjalanan').dateRangePicker({
autoClose: true,
separator: ' s/d ',
selectForward: true
}).bind('datepicker-change',function(event,obj){
var tgl = $(this).val();
var hari = tgl.split(' s/d ');
var oneDay = 24*60*60*1000;
var firstDate = new Date(hari[0]);
var secondDate = new Date(hari[1]);
var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay))); 
$('#Hari_Transport').val(diffDays+1);
});
}
var adaperjalanan = document.getElementById("dynamicInputUbah");
if (adaperjalanan!=null) {
ubahperjalanan(0);
}
var adalembur = document.getElementById("DinamikInputUbah");
if (adalembur!=null) {
ubahlembur();
}
var adahonor = document.getElementById("DinamikInputEdit");
if (adahonor!=null) {
ubahteknis();
}
});
function ubahperjalanan(ikut) {
var id = $('#idperjalanan').val();
if($('#dynamicInputUbah').is(':visible')){
var nip = [];
var loop=0;
if (ikut==0) {
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/dalam/showpengikut/" + id, async: false}).responseJSON;
$.each(jsondata, function(key, element) {
nip[loop]=element.nip_pengikut
loop+=1;
});
$("#Pengikut_Ubah").val(nip);
$("#Pengikut_Ubah").multiSelect("refresh");
tambahinputspjubah('dynamicInputUbah',nip,id);
} else{

}
} 
}

var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
function tambahlibur(){
$('#tambahlibur').modal('show');
}
function ubahlibur(id){
$.get({!! json_encode(url('/')) !!}+"/libur/showdata/" + id , function(data) {
var d = new Date(data.tgl_libur);
var hari ='';
if (d.getDate() <=9) {
hari = '0' + d.getDate();
} else{
hari = d.getDate();
}
var tgl = hari+' '+ monthNames[d.getMonth()]+' '+d.getFullYear();
$('#idlibur').val(data.id_libur);
$('#Tgl_Libur_Ubah').val(tgl);
$('#Keterangan_Libur_Ubah').val(data.keterangan_libur);
});
$('#ubahlibur').modal('show');
}

function tambahRekening(){
    var type= "add";
    getAllTindakan(type);
    $('#tambahRekening').modal('show');
}

function ubahRekening(id){
    var type= "edit";
    getAllTindakan(type);
    $.ajax({
        url: {!! json_encode(url('/')) !!}+"/rekening/showdata/" + id,
        async:false,
    })
    .success(function( data ) {
        $('#id_rekening').val(data.id_rekening);
        $('#nomor_rekening_edit').val(data.nomor_rekening);
    })
    .done(function( data ) {
        $('#tindakan_edit').val(data.id_tipe_paket);
        $('#ubahRekening').modal('show');
    });
}

function getAllTindakan(type){
    var option ='<option value=""> -- Pilih Tindakan --</option>';

    $.ajax({
        url: {!! json_encode(url('/')) !!}+"/rekening/getTindakan/",
        async:false,
    })
    .success(function( data ) {
        $.each(data, function( index, value ) {
            option += '<option value="'+value.id_tipe_paket+'">'+value.nama_tipe+'</option>';
        });
        if(type=='add'){
            $('#tindakan').html(option);
        }
        else{
            $('#tindakan_edit').html(option);
        }
    })
}


function tambahatk(){
$('#tambahatk').modal('show');
}
function tambahhonorrapat(){
$('#tambahhonorrapat').modal('show');
}
function ubahatk(id){
$.get({!! json_encode(url('/')) !!}+"/atk/showdata/" + id , function(data) {
var d = new Date(data.tanggal_atk);
var hari ='';
if (d.getDate() <=9) {
hari = '0' + d.getDate();
} else{
hari = d.getDate();
}
var tgl = hari+' '+ monthNames[d.getMonth()]+' '+d.getFullYear();
$('#idatk').val(data.id_atk);
$('#Jumlah_Ubah').val(data.nilai_atk);
$('#Jml_Ubah').val(data.nilai_atk);
$('#Untuk_Ubah').val(data.uraian_atk);
$('#Kegiatan_Ubah').val(data.id_dpa).change();
$('#Tanggal_ATK_Ubah').val(tgl);
});
$('#ubahatk').modal('show');
}
function tambahmamin(){
$('#tambahmamin').modal('show');
}
function ubahmamin(id){
$.get({!! json_encode(url('/')) !!}+"/mamin/showdata/" + id , function(data) {
var d = new Date(data.tanggal_mamin);
var hari ='';
if (d.getDate() <=9) {
hari = '0' + d.getDate();
} else{
hari = d.getDate();
}
var tgl = hari+' '+ monthNames[d.getMonth()]+' '+d.getFullYear();
$('#idmamin').val(data.id_mamin);
$('#Jumlah_Ubah').val(data.nilai_mamin);
$('#Jml_Ubah').val(data.nilai_atk);
$('#Untuk_Ubah').val(data.uraian_mamin);
$('#Kegiatan_Ubah').val(data.id_dpa).change();
$('#Tanggal_Mamin_Ubah').val(tgl);
});
$('#ubahmamin').modal('show');
}
function tambahpengadaan(){
$('#tambahpengadaan').modal('show');
}
function ubahpengadaan(id){
$.get({!! json_encode(url('/')) !!}+"/pengadaan/showdata/" + id , function(data) {
var d = new Date(data.tanggal_pengadaan);
var hari ='';
if (d.getDate() <=9) {
hari = '0' + d.getDate();
} else{
hari = d.getDate();
}
var tgl = hari+' '+ monthNames[d.getMonth()]+' '+d.getFullYear();
$('#idpengadaan').val(data.id_pengadaan);
$('#Jumlah_Ubah').val(data.nilai_pengadaan);
$('#Jml_Ubah').val(data.nilai_pengadaan);
$('#Untuk_Ubah').val(data.uraian_pengadaan);
$('#Kegiatan_Ubah').val(data.id_dpa).change();
$('#Tanggal_Pengadaan_Ubah').val(tgl).change();
});
$('#ubahpengadaan').modal('show');
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
$('#Pegawai').change(function () {
$.get({!! json_encode(url('/')) !!}+"/pengguna/showdata/" + $(this).val() , function(data) {
$('#Nama_User').val(data.nama_pegawai);
});
});
$('#Pegawai_Ubah').change(function () {
$.get({!! json_encode(url('/')) !!}+"/pengguna/showdata/" + $(this).val() , function(data) {
$('#Nama_User').val(data.nama_pegawai);
});
});
var counter=1;
function tambahinputspj(divName,ikut){
var divnya = document.getElementById(divName);
while (divnya.firstChild) {
divnya.removeChild(divnya.firstChild);
}
for (var i = 0; i < ikut.length; i++) {
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/dalam/showdata/" + ikut[i], async: false}).responseJSON;
var namanip = 'Nip_Pegawai_'+i;
var namarinci = 'Rincian_Harian_'+i;
var namaorang = 'Orang_Harian_'+i;
var namanominal = 'Nominal_Harian_'+i;
var idnominal = '#Nominal_Harian_'+i;
var namanohar = 'No_Harian_'+i;
var idnohar = '#No_Harian_'+i;
var newdiv = document.createElement('div');
newdiv.className = "row"; 
var strhasil = '<div class="col-md-4"><div class="form-group">';
strhasil+= '<label for="'+namarinci+'" class="control-label col-md-4" style="color:#555555;">Pegawai</label>';
strhasil+= '<div class="col-md-8"><input type="text" id="'+namarinci+'"  name="'+namarinci+'" class="form-control" value="'+jsondata.nama_pegawai+'" readonly/>';
strhasil+= '<input type="hidden" id="'+namanip+'" name="'+namanip+'" value="'+jsondata.nip_pegawai+'"/>';
strhasil+= '</div></div></div>';
strhasil+= '<div class="col-md-4"><div class="form-group">';
strhasil+= '<label for="'+namaorang+'" class="control-label col-md-4" style="color:#555555;">Golongan</label>';
strhasil+= '<div class="col-md-8"><input type="text" id="'+namaorang+'"  name="'+namaorang+'" class="form-control" value="'+jsondata.nama_golongan+'" readonly/>';
strhasil+= '</div></div></div>';
strhasil+= '<div class="col-md-4"><div class="form-group">';
strhasil+= '<label for="'+namanominal+'" class="control-label col-md-4" style="color:#555555;">Uang Harian</label>';
strhasil+= '<div class="col-md-8"><input type="text" id="'+namanominal+'"  name="'+namanominal+'" data-a-sign="Rp " class="form-control autonumber" value="'+jsondata.uang_harian+'"/>';
strhasil+= '<input type="hidden" id="'+namanohar+'"  name="'+namanohar+'" value="'+jsondata.uang_harian+'"/>';
strhasil+= '</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$('#jmladen').val(counter);
counter++;
// $(idnominal).autoNumeric('init');
// $(idnominal).change(function () {
//     $(idnohar).val($(idnominal).autoNumeric('get'));
// });
}
$("#Nominal_Harian_0,#Nominal_Harian_1,#Nominal_Harian_2,#Nominal_Harian_3,#Nominal_Harian_4,#Nominal_Harian_5").autoNumeric('init');
$('#Nominal_Harian_0').change(function () {
$('#No_Harian_0').val($('#Nominal_Harian_0').autoNumeric('get'));
});
$('#Nominal_Harian_1').change(function () {
$('#No_Harian_1').val($('#Nominal_Harian_1').autoNumeric('get'));
});
$('#Nominal_Harian_2').change(function () {
$('#No_Harian_2').val($('#Nominal_Harian_2').autoNumeric('get'));
});
$('#Nominal_Harian_3').change(function () {
$('#No_Harian_3').val($('#Nominal_Harian_3').autoNumeric('get'));
});
$('#Nominal_Harian_4').change(function () {
$('#No_Harian_4').val($('#Nominal_Harian_4').autoNumeric('get'));
});
$('#Nominal_Harian_5').change(function () {
$('#No_Harian_5').val($('#Nominal_Harian_5').autoNumeric('get'));
});
}
function tambahinputspjubah(divName,ikut,id){
var divnya = document.getElementById(divName);
while (divnya.firstChild) {
divnya.removeChild(divnya.firstChild);
}
for (var i = 0; i < ikut.length; i++) {
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/dalam/showdataubah/" + id+"/"+ikut[i], async: false}).responseJSON;
var namanip = 'Nip_Pegawai_'+i;
var namarinci = 'Rincian_Harian_'+i;
var namaorang = 'Orang_Harian_'+i;
var namanominal = 'Nominal_Harian_'+i;
var idnominal = '#Nominal_Harian_'+i;
var namanohar = 'No_Harian_'+i;
var idnohar = '#No_Harian_'+i;
var newdiv = document.createElement('div');
newdiv.className = "row"; 
var strhasil = '<div class="col-md-4"><div class="form-group">';
strhasil+= '<label for="'+namarinci+'" class="control-label col-md-4" style="color:#555555;">Pegawai</label>';
strhasil+= '<div class="col-md-8"><input type="text" id="'+namarinci+'"  name="'+namarinci+'" class="form-control" value="'+jsondata.nama_pegawai+'" readonly/>';
strhasil+= '<input type="hidden" id="'+namanip+'" name="'+namanip+'" value="'+jsondata.nip_pegawai+'"/>';
strhasil+= '</div></div></div>';
strhasil+= '<div class="col-md-4"><div class="form-group">';
strhasil+= '<label for="'+namaorang+'" class="control-label col-md-4" style="color:#555555;">Golongan</label>';
strhasil+= '<div class="col-md-8"><input type="text" id="'+namaorang+'"  name="'+namaorang+'" class="form-control" value="'+jsondata.nama_golongan+'" readonly/>';
strhasil+= '</div></div></div>';
strhasil+= '<div class="col-md-4"><div class="form-group">';
strhasil+= '<label for="'+namanominal+'" class="control-label col-md-4" style="color:#555555;">Uang Harian</label>';
strhasil+= '<div class="col-md-8"><input type="text" id="'+namanominal+'"  name="'+namanominal+'" data-a-sign="Rp " class="form-control autonumber" value="'+jsondata.uang_harian_pengikut+'"/>';
strhasil+= '<input type="hidden" id="'+namanohar+'"  name="'+namanohar+'" value="'+jsondata.uang_harian_pengikut+'"/>';
strhasil+= '</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$('#jmladen').val(counter);
counter++;
}
$("#Nominal_Harian_0,#Nominal_Harian_1,#Nominal_Harian_2,#Nominal_Harian_3,#Nominal_Harian_4,#Nominal_Harian_5").autoNumeric('init');
$('#Nominal_Harian_0').change(function () {
$('#No_Harian_0').val($('#Nominal_Harian_0').autoNumeric('get'));
});
$('#Nominal_Harian_1').change(function () {
$('#No_Harian_1').val($('#Nominal_Harian_1').autoNumeric('get'));
});
$('#Nominal_Harian_2').change(function () {
$('#No_Harian_2').val($('#Nominal_Harian_2').autoNumeric('get'));
});
$('#Nominal_Harian_3').change(function () {
$('#No_Harian_3').val($('#Nominal_Harian_3').autoNumeric('get'));
});
$('#Nominal_Harian_4').change(function () {
$('#No_Harian_4').val($('#Nominal_Harian_4').autoNumeric('get'));
});
$('#Nominal_Harian_5').change(function () {
$('#No_Harian_5').val($('#Nominal_Harian_5').autoNumeric('get'));
});
}
var counter=1;
var limit=5;
function tambahlembur(divName,bulan){
$('#JmlPegawai').val(counter);
if (counter-1 == limit)  {
alert("Anda sudah mencapai batas penambahan pegawai, yaitu : " + (counter-1) + " pegawai");
} else {
var tahun = "{{ date('Y')}}";
var bul = 0;
if (bulan=='januari') {
bul=1;
} else if (bulan=='februari'){
bul=2;
} else if (bulan=='maret'){
bul=3;
} else if (bulan=='april'){
bul=4;
} else if (bulan=='mei'){
bul=5;
} else if (bulan=='juni'){
bul=6;
} else if (bulan=='juli'){
bul=7;
} else if (bulan=='agustus'){
bul=8;
} else if (bulan=='september'){
bul=9;
} else if (bulan=='oktober'){
bul=10;
} else if (bulan=='november'){
bul=11;
} else if (bulan=='desember'){
bul=12;
}
var jmlhari = new Date(tahun, bul, 0).getDate();
var s = tahun +"-"+bul+"-01";
var sekarang = new Date(s);
var hariawal = new Date(sekarang.getFullYear(),sekarang.getMonth(), 1);
var tgl1 =  tahun +"-"+bul+"-01";
var hariakhir = new Date(sekarang.getFullYear(),sekarang.getMonth(), jmlhari);
var tgl2 =  tahun +"-"+bul+"-"+jmlhari;
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showpegawai/"+tgl1+"/"+tgl2, async: false}).responseJSON;
var tgllembur = 'Tgl_Lembur_'+counter;
var idnya = '#Tgl_Lembur_'+counter;
var nip = 'Pegawai_'+counter;
var idnya1 = '#Pegawai_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Tgl_"+counter;
var divid = newdiv.id;
var strhasil = '<div class="col-md-6"><div class="form-group">';                                
strhasil += '<label for="'+nip+'" class="control-label col-md-2" style="color:#555555;">Pengawai</label>';
strhasil += '<div class="col-md-10">';
strhasil += '<select id="'+nip+'" name="'+nip+'" class="select2 form-control">';
strhasil += '<option value="a">Pilih Pegawai</option>';
$.each(jsondata, function(key, element) {
strhasil += '<option value="'+element.nip_pegawai+'">'+element.nama_pegawai+'</option>';
});                          
strhasil +='</select></div></div></div>';
strhasil += '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+tgllembur+'" class="control-label col-md-2" style="color:#555555;">Absensi</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+tgllembur+'"  name="'+tgllembur+'" class="form-control"/>';
strhasil +='</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$(idnya).datepicker({
format:'dd MM yyyy',
multidate: true,
startDate: hariawal,
minDate:hariawal,
endDate: hariakhir,
maxDate: hariakhir,
todayHighlight:true,
language:'id',
formatSubmit : 'yyyy-mm-dd',
});
$(idnya1).select2({});
tambahnip(divName,bulan,idnya1,divid)
}
}
function tambahnip(divName,bulan,id,divid){
var jabatan = 'Jabatan_'+counter;
var pekerjaan = 'Pekerjaan_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Jab_"+counter;
var divid1 = newdiv.id;
var strhasil = '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+jabatan+'" class="control-label col-md-2" style="color:#555555;">Jabatan</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+jabatan+'"  name="'+jabatan+'" class="form-control"/>';
strhasil +='</div></div></div>';
strhasil += '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+pekerjaan+'" class="control-label col-md-2" style="color:#555555;">Pekerjaan</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+pekerjaan+'"  name="'+pekerjaan+'" class="form-control"/>';
strhasil +='</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
tambavolume(divName,bulan,id,divid,divid1);
}
function tambavolume (divName,bulan,id,divid,divid1) {
var volume = 'Volume_'+counter;
var uangmakan =  'Uang_Makan_'+counter;
var uangmak =  'Uang_Mak_'+counter;
var uanglembur =  'Uang_Lembur_'+counter;
var uanglembu =  'Uang_Lembu_'+counter;
var idnya1 = '#Uang_Makan_'+counter;
var idnya2 = '#Uang_Mak_'+counter;
var idnya3 = '#Uang_Lembur_'+counter;
var idnya4 = '#Uang_Lembu_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Vol_"+counter;
var divid2 = newdiv.id;
var strhasil ='<div class="col-md-2"><div class="form-group">';
strhasil +='<label for="'+volume+'" class="control-label col-md-6" style="color:#555555;">Jam</label>';
strhasil +='<div class="col-md-6"><input type="text" id="'+volume+'"  name="'+volume+'" class="form-control"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-4"><div class="form-group">';
strhasil +='<label for="'+uangmakan+'" class="control-label col-md-4" style="color:#555555;">Uang Makan</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+uangmakan+'"  name="'+uangmakan+'" data-a-sign="Rp."  class="form-control autonumber"/>';
strhasil +='<input type="hidden" id="'+uangmak+'"  name="'+uangmak+'" class="form-control"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<label for="'+uanglembur+'" class="control-label col-md-4" style="color:#555555;">Lembur</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+uanglembur+'"  name="'+uanglembur+'" data-a-sign="Rp."  class="form-control autonumber"/>';
strhasil +='<input type="hidden" id="'+uanglembu+'"  name="'+uanglembu+'" class="form-control"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<a class="btn btn-sm red-intense" onclick="hapuspegawai('+divid+','+divid1+','+divid2+')">Hapus</a></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$(idnya1).autoNumeric('init');
$(idnya1).change(function () {
$(idnya2).val($(idnya1).autoNumeric('get'));
});
$(idnya3).autoNumeric('init');
$(idnya3).change(function () {
$(idnya4).val($(idnya3).autoNumeric('get'));
});
$(id).change(function () {
$.get({!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showgolongan/" + $(this).val() , function(data) {
$(idnya1).val(data.uang_makan);
$(idnya2).val(data.uang_makan);
$(idnya3).val(data.uang_lembur);
$(idnya4).val(data.uang_lembur);
});
});
counter++;
}
function hapuspegawai(element1,element2,element3) {
element1.parentNode.removeChild(element1);
element2.parentNode.removeChild(element2);
element3.parentNode.removeChild(element3);
counter-=1;
}
function ubahlembur() {
var id = $('#IdLembur').val();
var bulan = $('#IdBulan').val();
var datanya = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showdetail/" + id, async: false}).responseJSON;
var loop = 1;
$.each(datanya, function(key, isi) {
var tahun = "{{ date('Y') }}";
var bul = 0;
if (bulan=='januari') {
bul=1;
} else if (bulan=='februari'){
bul=2;
} else if (bulan=='maret'){
bul=3;
} else if (bulan=='april'){
bul=4;
} else if (bulan=='mei'){
bul=5;
} else if (bulan=='juni'){
bul=6;
} else if (bulan=='juli'){
bul=7;
} else if (bulan=='agustus'){
bul=8;
} else if (bulan=='september'){
bul=9;
} else if (bulan=='oktober'){
bul=10;
} else if (bulan=='november'){
bul=11;
} else if (bulan=='desember'){
bul=12;
}
var jmlhari = new Date(tahun, bul, 0).getDate();
var s = tahun +"-"+bul+"-01";
var sekarang = new Date(s);
var hariawal = new Date(sekarang.getFullYear(),sekarang.getMonth(), 1);
var tgl1 =  tahun +"-"+bul+"-01";
var hariakhir = new Date(sekarang.getFullYear(),sekarang.getMonth(), jmlhari);
var tgl2 =  tahun +"-"+bul+"-"+jmlhari;
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showpegawai/"+tgl1+"/"+tgl2, async: false}).responseJSON;
var dataabsen = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showabsensi/"+id, async: false}).responseJSON;
var tgllembur = 'Tgl_Lembur_'+loop;
var idnya = '#Tgl_Lembur_'+loop;
var nip = 'Pegawai_'+loop;
var idnya1 = '#Pegawai_'+loop;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Tgl_"+loop;
var divid = newdiv.id;
var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
"Juli", "Agustus", "September", "Oktober", "November", "Desember"
];
var urutan = 0;
var absene = [];
$.each(dataabsen, function(key, element) {
if (isi.nip_pegawai==element.nip_pegawai) {
var d = new Date(element.tgl_absensi);
absene[urutan] = d.getDate()+' '+monthNames[d.getMonth()]+' '+d.getFullYear();
urutan++;
}
});  
var strhasil = '<div class="col-md-6"><div class="form-group">';                                
strhasil += '<label for="'+nip+'" class="control-label col-md-2" style="color:#555555;">Pengawai</label>';
strhasil += '<div class="col-md-10">';
strhasil += '<select id="'+nip+'" name="'+nip+'" class="select2 form-control">';
strhasil += '<option value="a">Pilih Pegawai</option>';
$.each(jsondata, function(key, element) {
if (isi.nip_pegawai==element.nip_pegawai) {
strhasil += '<option value="'+element.nip_pegawai+'" selected>'+element.nama_pegawai+'</option>';
} else{
strhasil += '<option value="'+element.nip_pegawai+'">'+element.nama_pegawai+'</option>';   
}
});                          
strhasil +='</select></div></div></div>';
strhasil += '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+tgllembur+'" class="control-label col-md-2" style="color:#555555;">Absensi</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+tgllembur+'"  name="'+tgllembur+'" class="form-control" value="'+absene+'"/>';
strhasil +='</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById('DinamikInputUbah').appendChild(newdiv);
$(idnya).datepicker({
format:'dd MM yyyy',
multidate: true,
startDate: hariawal,
minDate:hariawal,
endDate: hariakhir,
maxDate:hariakhir,
todayHighlight:true,
language:'id',
formatSubmit : 'yyyy-mm-dd',
});
$(idnya1).select2({});
var jabatan = 'Jabatan_'+loop;
var pekerjaan = 'Pekerjaan_'+loop;
var newdiv1 = document.createElement('div');
newdiv1.className = "row";
newdiv1.id = "Jab_"+loop;
var divid1 = newdiv1.id;
var strhasil1 = '<div class="col-md-6"><div class="form-group">';
strhasil1 +='<label for="'+jabatan+'" class="control-label col-md-2" style="color:#555555;">Jabatan</label>';
strhasil1 +='<div class="col-md-10"><input type="text" id="'+jabatan+'"  name="'+jabatan+'" class="form-control" value="'+isi.jabatan+'"/>';
strhasil1 +='</div></div></div>';
strhasil1 += '<div class="col-md-6"><div class="form-group">';
strhasil1 +='<label for="'+pekerjaan+'" class="control-label col-md-2" style="color:#555555;">Pekerjaan</label>';
strhasil1 +='<div class="col-md-10"><input type="text" id="'+pekerjaan+'"  name="'+pekerjaan+'" class="form-control" value="'+isi.pekerjaan+'"/>';
strhasil1 +='</div></div></div>';
newdiv1.innerHTML = strhasil1;
document.getElementById('DinamikInputUbah').appendChild(newdiv1);
var iddetail = 'Id_Detail'+loop;
var volume = 'Volume_'+loop;
var uangmakan =  'Uang_Makan_'+loop;
var uangmak =  'Uang_Mak_'+loop;
var uanglembur =  'Uang_Lembur_'+loop;
var uanglembu =  'Uang_Lembu_'+loop;
var idnya1 = '#Uang_Makan_'+loop;
var idnya2 = '#Uang_Mak_'+loop;
var idnya3 = '#Uang_Lembur_'+loop;
var idnya4 = '#Uang_Lembu_'+loop;
var newdiv2 = document.createElement('div');
newdiv2.className = "row";
newdiv2.id = "Vol_"+loop;
var divid2 = newdiv2.id;
var strhasil ='<div class="col-md-2"><div class="form-group">';
strhasil +='<label for="'+volume+'" class="control-label col-md-6" style="color:#555555;">Jam</label>';
strhasil +='<div class="col-md-6"><input type="text" id="'+volume+'"  name="'+volume+'" class="form-control" value="'+isi.volume+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-4"><div class="form-group">';
strhasil +='<label for="'+uangmakan+'" class="control-label col-md-4" style="color:#555555;">Uang Makan</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+uangmakan+'"  name="'+uangmakan+'" data-a-sign="Rp."  class="form-control autonumber" value="'+isi.uang_makan_lembur+'"/>';
strhasil +='<input type="hidden" id="'+uangmak+'"  name="'+uangmak+'" class="form-control" value="'+isi.uang_makan_lembur+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<label for="'+uanglembur+'" class="control-label col-md-4" style="color:#555555;">Lembur</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+uanglembur+'"  name="'+uanglembur+'" data-a-sign="Rp."  class="form-control autonumber" value="'+isi.uang_lembur_lembur+'"/>';
strhasil +='<input type="hidden" id="'+uanglembu+'"  name="'+uanglembu+'" value="'+isi.uang_lembur_lembur+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<input type="hidden" id="'+iddetail+'"  name="'+iddetail+'" value="'+isi.kd_pegawai_lembur+'"/>';
var peg = "'"+isi.nip_pegawai+"'";
var bln = "'"+bulan+"'";
strhasil +='<a class="btn btn-sm red-intense" onclick="hapuslembur('+bln+','+divid+','+divid1+','+divid2+','+isi.kd_lembur+','+peg+')">Hapus</a></div></div>';
newdiv2.innerHTML = strhasil;
document.getElementById('DinamikInputUbah').appendChild(newdiv2);
$(idnya1).autoNumeric('init');
$(idnya1).change(function () {
$(idnya2).val($(idnya1).autoNumeric('get'));
});
$(idnya3).autoNumeric('init');
$(idnya3).change(function () {
$(idnya4).val($(idnya3).autoNumeric('get'));
});
$(id).change(function () {
$.get({!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showgolongan/" + $(this).val() , function(data) {
$(idnya1).val(data.uang_makan);
$(idnya2).val(data.uang_makan);
$(idnya3).val(data.uang_lembur);
$(idnya4).val(data.uang_lembur);
});
});
loop++;
});
}
function hapuslembur(bln,element1,element2,element3,id,nip) {
element1.parentNode.removeChild(element1);
element2.parentNode.removeChild(element2);
element3.parentNode.removeChild(element3);
$.get({!! json_encode(url('/')) !!}+"/lembur/"+bln+"/deletepegawai/" + id +"/"+nip, function(data) {
window.location.href = {!! json_encode(url('/')) !!}+'/lembur/'+bln+'/'+id+'/edit';
});
}
function tambahlemburubah(divName,bulan){
var index = $('#conternya').val();
if (index==0) {
counter = Number($('#JmlPegawai').val())+1;
$('#JmlPegawai').val(counter);
} else{
$('#JmlPegawai').val(counter);
}
if (counter-1 == limit)  {
alert("Anda sudah mencapai batas penambahan pegawai, yaitu : " + (counter-1) + " pegawai");
} else {
var tahun = "{{ date('Y') }}";
var bul = '';
if (bulan=='januari') {
bul='01';
} else if (bulan=='februari'){
bul='02';
} else if (bulan=='maret'){
bul='03';
} else if (bulan=='april'){
bul='04';
} else if (bulan=='mei'){
bul='05';
} else if (bulan=='juni'){
bul='06';
} else if (bulan=='juli'){
bul='07';
} else if (bulan=='agustus'){
bul='08';
} else if (bulan=='september'){
bul='09';
} else if (bulan=='oktober'){
bul='10';
} else if (bulan=='november'){
bul='11';
} else if (bulan=='desember'){
bul='12';
}
function daysInMonth(m, y){
return(m===2?y&3||!(y%25)&&y&15?28:29:30+(5546>>m&1));
}
var jmlhari = daysInMonth(bul, tahun);
var s = tahun +"-"+bul+"-01";
var sekarang = new Date(s);
var hariawal = new Date(sekarang.getFullYear(),sekarang.getMonth(), 1);
var tgl1 =  tahun +"-"+bul+"-01";
var hariakhir = new Date(sekarang.getFullYear(),sekarang.getMonth(), jmlhari);
var tgl2 =  tahun +"-"+bul+"-"+jmlhari;
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showpegawai/"+tgl1+"/"+tgl2, async: false}).responseJSON;
var tgllembur = 'Tgl_Lembur_'+counter;
var idnya = '#Tgl_Lembur_'+counter;
var nip = 'Pegawai_'+counter;
var idnya1 = '#Pegawai_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Tgl_"+counter;
var divid = newdiv.id;
var strhasil = '<div class="col-md-6"><div class="form-group">';                                
strhasil += '<label for="'+nip+'" class="control-label col-md-2" style="color:#555555;">Pengawai</label>';
strhasil += '<div class="col-md-10">';
strhasil += '<select id="'+nip+'" name="'+nip+'" class="select2 form-control">';
strhasil += '<option value="a">Pilih Pegawai</option>';
$.each(jsondata, function(key, element) {
strhasil += '<option value="'+element.nip_pegawai+'">'+element.nama_pegawai+'</option>';
});                          
strhasil +='</select></div></div></div>';
strhasil += '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+tgllembur+'" class="control-label col-md-2" style="color:#555555;">Absensi</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+tgllembur+'"  name="'+tgllembur+'" class="form-control"/>';
strhasil +='</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$(idnya).datepicker({
format:'dd MM yyyy',
multidate: true,
startDate: hariawal,
endDate: hariakhir,
todayHighlight:true,
language:'id',
formatSubmit : 'yyyy-mm-dd',
});
$(idnya1).select2({});
tambahnipubah(divName,bulan,idnya1,divid)
}
}
function tambahnipubah(divName,bulan,id,divid){
var jabatan = 'Jabatan_'+counter;
var pekerjaan = 'Pekerjaan_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Jab_"+counter;
var divid1 = newdiv.id;
var strhasil = '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+jabatan+'" class="control-label col-md-2" style="color:#555555;">Jabatan</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+jabatan+'"  name="'+jabatan+'" class="form-control"/>';
strhasil +='</div></div></div>';
strhasil += '<div class="col-md-6"><div class="form-group">';
strhasil +='<label for="'+pekerjaan+'" class="control-label col-md-2" style="color:#555555;">Pekerjaan</label>';
strhasil +='<div class="col-md-10"><input type="text" id="'+pekerjaan+'"  name="'+pekerjaan+'" class="form-control"/>';
strhasil +='</div></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
tambavolumeubah(divName,bulan,id,divid,divid1);
}
function tambavolumeubah(divName,bulan,id,divid,divid1) {
var volume = 'Volume_'+counter;
var uangmakan =  'Uang_Makan_'+counter;
var uangmak =  'Uang_Mak_'+counter;
var uanglembur =  'Uang_Lembur_'+counter;
var uanglembu =  'Uang_Lembu_'+counter;
var idnya1 = '#Uang_Makan_'+counter;
var idnya2 = '#Uang_Mak_'+counter;
var idnya3 = '#Uang_Lembur_'+counter;
var idnya4 = '#Uang_Lembu_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Vol_"+counter;
var divid2 = newdiv.id;
var strhasil ='<div class="col-md-2"><div class="form-group">';
strhasil +='<label for="'+volume+'" class="control-label col-md-6" style="color:#555555;">Jam</label>';
strhasil +='<div class="col-md-6"><input type="text" id="'+volume+'"  name="'+volume+'" class="form-control"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-4"><div class="form-group">';
strhasil +='<label for="'+uangmakan+'" class="control-label col-md-4" style="color:#555555;">Uang Makan</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+uangmakan+'"  name="'+uangmakan+'" data-a-sign="Rp."  class="form-control autonumber"/>';
strhasil +='<input type="hidden" id="'+uangmak+'"  name="'+uangmak+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<label for="'+uanglembur+'" class="control-label col-md-4" style="color:#555555;">Lembur</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+uanglembur+'"  name="'+uanglembur+'" data-a-sign="Rp."  class="form-control autonumber"/>';
strhasil +='<input type="hidden" id="'+uanglembu+'"  name="'+uanglembu+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<a class="btn btn-sm red-intense" onclick="hapuspegawai('+divid+','+divid1+','+divid2+')">Hapus</a></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$(idnya1).autoNumeric('init');
$(idnya1).change(function () {
$(idnya2).val($(idnya1).autoNumeric('get'));
});
$(idnya3).autoNumeric('init');
$(idnya3).change(function () {
$(idnya4).val($(idnya3).autoNumeric('get'));
});
$(id).change(function () {
$.get({!! json_encode(url('/')) !!}+"/lembur/"+bulan+"/showgolongan/" + $(this).val() , function(data) {
$(idnya1).val(data.uang_makan);
$(idnya2).val(data.uang_makan);
$(idnya3).val(data.uang_lembur);
$(idnya4).val(data.uang_lembur);
});
});
counter++;
$('#conternya').val(counter);
}
function tambahteknis(divName){
$('#JmlPegawai').val(counter);
if (counter-1 == limit)  {
alert("Anda sudah mencapai batas penambahan pegawai, yaitu : " + (counter-1) + " pegawai");
} else {
var kdkegiatan = $('#Kegiatan').val();
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teknis/showpegawai/"+kdkegiatan, async: false}).responseJSON;
var nip = 'Pegawai_'+counter;
var honor = 'Honor_'+counter;
var hon = 'Hon_'+counter;
var idnya1 = '#Pegawai_'+counter;
var idnya2 = '#Honor_'+counter;
var idnya3 = '#Hon_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Peg_"+counter;
var divid = newdiv.id;
var strhasil = '<div class="col-md-6"><div class="form-group">';                                
strhasil += '<label for="'+nip+'" class="control-label col-md-2" style="color:#555555;">Pengawai</label>';
strhasil += '<div class="col-md-10">';
strhasil += '<select id="'+nip+'" name="'+nip+'" class="select2 form-control">';
strhasil += '<option value="a">Pilih Pegawai</option>';
$.each(jsondata, function(key, element) {
strhasil += '<option value="'+element.nip_pegawai+'">'+element.nama_pegawai+'</option>';
});                          
strhasil +='</select></div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<label for="'+honor+'" class="control-label col-md-4" style="color:#555555;">Honor</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+honor+'"  name="'+honor+'" data-a-sign="Rp."  class="form-control autonumber"/>';
strhasil +='<input type="hidden" id="'+hon+'"  name="'+hon+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<a class="btn btn-sm red-intense" onclick="hapusteknispegawai('+divid+')">Hapus</a></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$(idnya1).select2({});
$(idnya2).autoNumeric('init');
$(idnya2).change(function () {
$(idnya3).val($(idnya2).autoNumeric('get'));
});
counter+=1;
}
}
function ubahteknis() {
var id = $('#IdHonor').val();
var kdkegiatan = $('#Kegiatan').val();
var datanya = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teknis/showdetail/" + id, async: false}).responseJSON;
var loop = 1;
$.each(datanya, function(key, isi) {
var nip = 'Pegawai_'+loop;
var honor = 'Honor_'+loop;
var hon = 'Hon_'+loop;
var idnya1 = '#Pegawai_'+loop;
var idnya2 = '#Honor_'+loop;
var idnya3 = '#Hon_'+loop;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Peg_"+loop;
var divid = newdiv.id;
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teknis/showpegawai/" + kdkegiatan, async: false}).responseJSON;
var strhasil = '<div class="col-md-6"><div class="form-group">';                                
strhasil += '<label for="'+nip+'" class="control-label col-md-2" style="color:#555555;">Pengawai</label>';
strhasil += '<div class="col-md-10">';
strhasil += '<select id="'+nip+'" name="'+nip+'" class="select2 form-control">';
strhasil += '<option value="a">Pilih Pegawai</option>';
$.each(jsondata, function(key, element) {
if (isi.nip_pegawai==element.nip_pegawai) {
strhasil += '<option value="'+element.nip_pegawai+'" selected>'+element.nama_pegawai+'</option>';
} else{
strhasil += '<option value="'+element.nip_pegawai+'">'+element.nama_pegawai+'</option>';   
}
});                          
strhasil +='</select></div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<label for="'+honor+'" class="control-label col-md-4" style="color:#555555;">Honor</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+honor+'"  name="'+honor+'" data-a-sign="Rp."  class="form-control autonumber" value="'+isi.uang_honor+'"/>';
strhasil +='<input type="hidden" id="'+hon+'"  name="'+hon+'" value="'+isi.uang_honor+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<a class="btn btn-sm red-intense" onclick="hapusteknispegawai('+divid+')">Hapus</a></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById('DinamikInputEdit').appendChild(newdiv);
$(idnya1).select2({});
$(idnya2).autoNumeric('init');
$(idnya2).change(function () {
$(idnya3).val($(idnya2).autoNumeric('get'));
});
loop++;
});
}
function tambahteknisubah(divName){
var index = $('#conternya').val();
if (index==0) {
counter = Number($('#JmlPegawai').val())+1;
$('#JmlPegawai').val(counter);
} else{
$('#JmlPegawai').val(counter);
}
if (counter-1 == limit)  {
alert("Anda sudah mencapai batas penambahan pegawai, yaitu : " + (counter-1) + " pegawai");
} else {
var kdkegiatan = $('#Kegiatan').val();
var jsondata = $.ajax({type: "GET", url: {!! json_encode(url('/')) !!}+"/teknis/showpegawai/"+kdkegiatan, async: false}).responseJSON;
var nip = 'Pegawai_'+counter;
var honor = 'Honor_'+counter;
var hon = 'Hon_'+counter;
var idnya1 = '#Pegawai_'+counter;
var idnya2 = '#Honor_'+counter;
var idnya3 = '#Hon_'+counter;
var newdiv = document.createElement('div');
newdiv.className = "row";
newdiv.id = "Peg_"+counter;
var divid = newdiv.id;
var strhasil = '<div class="col-md-6"><div class="form-group">';                                
strhasil += '<label for="'+nip+'" class="control-label col-md-2" style="color:#555555;">Pengawai</label>';
strhasil += '<div class="col-md-10">';
strhasil += '<select id="'+nip+'" name="'+nip+'" class="select2 form-control">';
strhasil += '<option value="a">Pilih Pegawai</option>';
$.each(jsondata, function(key, element) {
strhasil += '<option value="'+element.nip_pegawai+'">'+element.nama_pegawai+'</option>';
});                          
strhasil +='</select></div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<label for="'+honor+'" class="control-label col-md-4" style="color:#555555;">Honor</label>';
strhasil +='<div class="col-md-8"><input type="text" id="'+honor+'"  name="'+honor+'" data-a-sign="Rp."  class="form-control autonumber"/>';
strhasil +='<input type="hidden" id="'+hon+'"  name="'+hon+'"/>';
strhasil +='</div></div></div>';
strhasil +='<div class="col-md-3"><div class="form-group">';
strhasil +='<a class="btn btn-sm red-intense" onclick="hapusteknispegawai('+divid+')">Hapus</a></div></div>';
newdiv.innerHTML = strhasil;
document.getElementById(divName).appendChild(newdiv);
$(idnya1).select2({});
$(idnya2).autoNumeric('init');
$(idnya2).change(function () {
$(idnya3).val($(idnya2).autoNumeric('get'));
});
counter+=1;
}
}
function hapusteknispegawai(element1) {
element1.parentNode.removeChild(element1);
counter-=1;
}
</script>
<script>
var r2tab =  document.getElementById('r2_tabel');
var r3tab =  document.getElementById('r3_tabel');
if (typeof(r2tab) != 'undefined' && r2tab != null)
{
refreshr2();
}
function refreshr2() {
$('#r2_tabel').Tabledit({
type: "POST",
url: 'rdua_update',
rowIdentifier: 'data-id',
editButton: false,
deleteButton: false,
restoreButton: false,
columns: {
identifier: [0, 'id'],
editable: [[3, 'bulan1'], [4, 'bulan2'], [5, 'bulan3'], [6, 'bulan4'], [7, 'bulan5'], [8, 'bulan6'], 
[9, 'bulan7'], [10, 'bulan8'], [11, 'bulan9'], [12, 'bulan10'], [13, 'bulan11'],[14, 'bulan12'], ]
},    
onSuccess: function(data, textStatus, jqXHR) {
document.getElementById('R2Body').innerHTML = '';
var	rows = '';
var i=1;
$.each( data, function( key, value ) {
rows += '<tr>';
rows += '<td style="display: none;">'+value.id_kegiatan+'</td>';
rows += '<td>'+i+'</td>';
rows += '<td>'+value.nama_kegiatan+'</td>';
rows += '<td style="text-align: center">'+value.Januari+'</td>';
rows += '<td style="text-align: center">'+value.Februari+'</td>';
rows += '<td style="text-align: center">'+value.Maret+'</td>';
rows += '<td style="text-align: center">'+value.April+'</td>';
rows += '<td style="text-align: center">'+value.Mei+'</td>';
rows += '<td style="text-align: center">'+value.Juni+'</td>';
rows += '<td style="text-align: center">'+value.Juli+'</td>';
rows += '<td style="text-align: center">'+value.Agustus+'</td>';
rows += '<td style="text-align: center">'+value.September+'</td>';
rows += '<td style="text-align: center">'+value.Oktober+'</td>';
rows += '<td style="text-align: center">'+value.November+'</td>';
rows += '<td style="text-align: center">'+value.Desember+'</td>';
rows += '<td style="text-align: center">'+value.sisa+'</td>';
rows += '</tr>';
i+=1;
});
document.getElementById('R2Body').innerHTML = rows;
refreshr2();
},
onFail: function(jqXHR, textStatus, errorThrown) {
console.log(jqXHR);
console.log('erro r failed');
console.log(errorThrown);
}
});
}
if (typeof(r3tab) != 'undefined' && r3tab != null)
{
refreshr3();
}
function refreshr3() {
$('#r3_tabel').Tabledit({
type: "POST",
url: 'rtiga_update',
rowIdentifier: 'data-id',
editButton: false,
deleteButton: false,
restoreButton: false,
columns: {
identifier: [0, 'id'],
editable: [[3, 'bulan1'], [4, 'bulan2'], [5, 'bulan3'], [6, 'bulan4'], [7, 'bulan5'],
[8, 'bulan6'], [9, 'bulan7'], [10, 'bulan8'], [11, 'bulan9'], [12, 'bulan10'], [13, 'bulan11'],
[14, 'bulan12'], ]

},    
onSuccess: function(data, textStatus, jqXHR) {
document.getElementById('R3Body').innerHTML = '';
var	rows = '';
var i=1;
$.each( data, function( key, value ) {
rows += '<tr>';
rows += '<td style="display: none;">'+value.id_kegiatan+'</td>';
rows += '<td>'+i+'</td>';
rows += '<td>'+value.nama_kegiatan+'</td>';
rows += '<td style="text-align: center">'+value.Januari+'</td>';
rows += '<td style="text-align: center">'+value.Februari+'</td>';
rows += '<td style="text-align: center">'+value.Maret+'</td>';
rows += '<td style="text-align: center">'+value.April+'</td>';
rows += '<td style="text-align: center">'+value.Mei+'</td>';
rows += '<td style="text-align: center">'+value.Juni+'</td>';
rows += '<td style="text-align: center">'+value.Juli+'</td>';
rows += '<td style="text-align: center">'+value.Agustus+'</td>';
rows += '<td style="text-align: center">'+value.September+'</td>';
rows += '<td style="text-align: center">'+value.Oktober+'</td>';
rows += '<td style="text-align: center">'+value.November+'</td>';
rows += '<td style="text-align: center">'+value.Desember+'</td>';
rows += '<td style="text-align: center">'+value.sisa+'</td>';
rows += '</tr>';
i+=1;
});
document.getElementById('R3Body').innerHTML = rows;
refreshr3();
},
onFail: function(jqXHR, textStatus, errorThrown) {
console.log(jqXHR);
console.log('erro r failed');
console.log(errorThrown);
}
});
} 
</script>
<script>
function TambahRapat(){
$('#TambahRapat').modal('show');
}
function EditRapat(id){
$.get({!! json_encode(url('/')) !!}+"/edit_h_rapat/" + id , function(data) {
$('#idhr').val(data.id_hr)
$('#er_keg').val(data.id_kegiatan);
$('#er_acara').val(data.acara)
$('#er_tgl').val(data.tgl_honor)
$('#er_tempat').val(data.tempat)
$('#er_jam_mulai').val(data.jam_mulai)
$('#er_jam_selesai').val(data.jam_selesai)
});
$('#UbahRapat').modal('show');
}
$('#r_tgl,#er_tgl').datepicker({
autoclose:true,
format:'dd MM yyyy',
formatSubmit : 'yyyy-mm-dd',
});
$('#r_jam_selesai,#r_jam_mulai,#er_jam_mulai,#er_jam_selesai').timepicker({
showMeridian: false    
});
</script>
<script type="text/javascript">
function Tambah_pphp_kegiatan(){
$('#tambah_H_pphp').modal('show');
}
function pilihbulanPPHP(idkeg, idpphp){
$('#idkegiatan1').val(idkeg)
$('#idPPHP').val(idpphp)
$('#kd_honor').val(1)
$('#change_bulanPPHP').modal('show');
}
function EditHPphp(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/honor/pphp/edit_h_pphp/" + id , function(data) {
$('#idhnrPphp').val(data.id_pphp)
$('#pphp_eh_keg').val(data.id_kegiatan.toString())
});
$('#edit_H_pphp').modal('show');
});
}
function Tambah_bulanan_kegiatan(){
$('#tambah_H_bulanan').modal('show');
}
function pilihbulanBULANAN(idkeg, idbulanan){
$('#idkegiatan1').val(idkeg)
$('#idBULANAN').val(idbulanan)
$('#kd_honor').val(4)
$('#change_bulanBULANAN').modal('show');
}
function EditHBulanan(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/honor/bulanan/edit_h_bulanan/" + id , function(data) {
$('#idhnrBulanan').val(data.id_bulanan)
$('#bulanan_eh_keg').val(data.id_kegiatan.toString())
});
$('#edit_H_bulanan').modal('show');
});
}
function Tambah_ppb_kegiatan(){
$('#tambah_H_ppb').modal('show');
}
function pilihbulanPPB(idkeg, idppb){
$('#idkegiatan1').val(idkeg)
$('#idPPB').val(idppb)
$('#kd_honor').val(2)
$('#change_bulanPPB').modal('show');
}
function EditHppb(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/honor/ppb/edit_h_ppb/" + id , function(data) {
$('#idhnrPpb').val(data.id_ppb)
$('#ppb_eh_keg').val(data.id_kegiatan.toString())
});
$('#edit_H_ppb').modal('show');
});
}
function Tambah_h_pphp_list(){
$('#nilai_pphp_hnr').autoNumeric('init');
$('#tambah_list_h_pphp').modal('show');
}
function formatUangPPHP(){
$('#nil_pphp_hnr').val($('#nilai_pphp_hnr').autoNumeric('get'));
}
function formatUangeditPPHP(){
$('#hnr_nil_pphp_hnr').val($('#hnr_nilai_pphp_hnr').autoNumeric('get'));
}
</script>
<script>
function EditListPPHP(id){
$(document).ready(function($) {
$.get({!! json_encode(url('/')) !!}+"/edit_hnr_PPHP/" + id , function(data) {
$('#idPPHP').val(data.id_l_pphp)
$('#hnr_nip_peg').val(data.nip_pegawai)
$('#hnr_nilai_pphp_hnr').val(Number(data.honor))
$('#hnr_nil_pphp_hnr').val(Number(data.honor))
});
$('#edit_list_h_pphp').modal('show');
$('#hnr_nilai_pphp_hnr').autoNumeric('init');
});
}
function Tambah_timteknis_kegiatan(){
$('#tambah_H_timteknis').modal('show');
}
function pilihbulanTIMTEKNIS(idkeg, idtimteknis){
$('#idkegiatan1').val(idkeg)
$('#idTIMTEKNIS').val(idtimteknis)
$('#kd_honor').val(3)
$('#change_bulanTIMTEKNIS').modal('show');
}
function EditHtimteknis(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/honor/timteknis/edit_h_timteknis/" + id , function(data) {
$('#idhnrTimteknis').val(data.id_timteknis)
$('#timteknis_eh_keg').val(data.id_kegiatan.toString())
});
$('#edit_H_timteknis').modal('show');
});
}
function Tambah_h_timteknis_list(){
$('#nilai_timteknis_hnr').autoNumeric('init');
$('#tambah_list_h_timteknis').modal('show');
}
function formatUangTIM(){
$('#nil_timteknis_hnr').val($('#nilai_timteknis_hnr').autoNumeric('get'));
}
function formatUangeditTIM(){
$('#hnr_nil_timteknis_hnr').val($('#hnr_nilai_timteknis_hnr').autoNumeric('get'));
}
</script>
<script>
function EditListTIMTEKNIS(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/edit_hnr_TIMTEKNIS/" + id , function(data) {
$('#idTIMTEKNIS').val(data.id_l_timteknis)
$('#hnr_nip_peg').val(data.nip_pegawai)
$('#hnr_nilai_timteknis_hnr').val(Number(data.honor))
$('#hnr_nil_timteknis_hnr').val(Number(data.honor))
});
$('#edit_list_h_timteknis').modal('show');
$('#hnr_nilai_timteknis_hnr').autoNumeric('init');
});
}
function Tambah_h_bulanan_list(){
$('#nilai_bulanan_hnr').autoNumeric('init');
$('#tambah_list_h_bulanan').modal('show');
}
function formatUangBULANAN(){
$('#nil_bulanan_hnr').val($('#nilai_bulanan_hnr').autoNumeric('get'));
}
function formatUangeditBULANAN(){
$('#hnr_nil_bulanan_hnr').val($('#hnr_nilai_bulanan_hnr').autoNumeric('get'));
}
</script>
<script>
function EditListBULANAN(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/edit_hnr_BULANAN/" + id , function(data) {
$('#idBULANAN').val(data.id_l_bulanan)
$('#hnr_nip_peg').val(data.nip_pegawai.toString())
$('#hnr_nilai_bulanan_hnr').val(Number(data.honor))
$('#hnr_nil_bulanan_hnr').val(Number(data.honor))
});
$('#edit_list_h_bulanan').modal('show');
$('#hnr_nilai_bulanan_hnr').autoNumeric('init');
});
}
function Tambah_h_ppb_list(){
$('#nilai_ppb_hnr').autoNumeric('init');
$('#tambah_list_h_ppb').modal('show');
}
function formatUangPPB(){
$('#nil_ppb_hnr').val($('#nilai_ppb_hnr').autoNumeric('get'));
}
function formatUangeditPPB(){
$('#hnr_nil_ppb_hnr').val($('#hnr_nilai_ppb_hnr').autoNumeric('get'));
}
</script>
<script>
function EditListPPB(id){
$(document).ready(function ($) {
$.get({!! json_encode(url('/')) !!}+"/edit_hnr_PPB/" + id , function(data) {
$('#idPPB').val(data.id_l_ppb)
$('#hnr_nip_peg').val(data.nip_pegawai)
$('#hnr_nilai_ppb_hnr').val(Number(data.honor))
$('#hnr_nil_ppb_hnr').val(Number(data.honor))
});
$('#edit_list_h_ppb').modal('show');
$('#hnr_nilai_ppb_hnr').autoNumeric('init');
});
}
</script>
<script>
$('#sel_keg').change(function () {
if($('#sel_keg').val()=='a'){
$('#grafdiv').empty();
$('#grafdiv').append('<div style="text-align: center"><b>Silahkan Pilih Kegiatan</b></div>');
}else{
$('#grafdiv').empty();
var datar2 = $.ajax({type: "GET", url: "data_grafik_r2/" + $(this).val(), async: false}).responseJSON;
var datar3 = $.ajax({type: "GET", url: "data_grafik_r3/" + $(this).val(), async: false}).responseJSON;
var label = [];
var r2 = [];
var loop =0;
var loop2 =0;
var r3 = [];
$.each(datar2,function(index, dt2){
label[loop] = dt2.nama_bulan;
r2[loop]= dt2.nilai;
loop+=1;
});
$.each(datar3,function(index, dt3){
r3[loop2]= dt3.nilai;
loop2+=1;
});
var chart = AmCharts.makeChart("grafdiv", {
"type": "serial",
"theme": "light",
"marginTop":0,
"marginRight": 80,
"dataProvider": [{
"year": label[0],
"value": eval(r2[0]),
"r3": eval(r3[0])
}, {
"year": label[1],
"value":eval(r2[1])+eval(r2[0]),
"r3": eval(r3[1])+eval(r3[0])
}, {
"year": label[2],
"value": eval(r2[2])+eval(r2[0])+eval(r2[1]),
"r3": eval(r3[2])+eval(r3[0])+eval(r3[1])
}, {
"year": label[3],
"value":eval(r2[3])+eval(r2[0])+eval(r2[1])+eval(r2[2]),
"r3": eval(r3[3])+eval(r3[0])+eval(r3[1])+eval(r3[2])
}, {
"year": label[4],
"value": eval(r2[4])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3]),
"r3": eval(r3[4])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])
}, {
"year": label[5],
"value": eval(r2[5])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4]),
"r3": eval(r3[5])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])
}, {
"year": label[6],
"value": eval(r2[6])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4])+eval(r2[5]),
"r3": eval(r3[6])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])+eval(r3[5])
}, {
"year": label[7],
"value": eval(r2[7])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4])+eval(r2[5])+eval(r2[6]),
"r3": eval(r3[7])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])+eval(r3[5])+eval(r3[6])
}, {
"year": label[8],
"value": eval(r2[8])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4])+eval(r2[5])+eval(r2[6])+eval(r2[7]),
"r3": eval(r3[8])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])+eval(r3[5])+eval(r3[6])+eval(r3[7])
},{
"year": label[9],
"value": eval(r2[9])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4])+eval(r2[5])+eval(r2[6])+eval(r2[7])+eval(r2[8]),
"r3": eval(r3[9])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])+eval(r3[5])+eval(r3[6])+eval(r3[7])+eval(r3[8])
},{
"year": label[10],
"value": eval(r2[10])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4])+eval(r2[5])+eval(r2[6])+eval(r2[7])+eval(r2[8])+eval(r2[9]),
"r3": eval(r3[10])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])+eval(r3[5])+eval(r3[6])+eval(r3[7])+eval(r3[8])+eval(r3[9])
},{
"year": label[11],
"value": eval(r2[11])+eval(r2[0])+eval(r2[1])+eval(r2[2])+eval(r2[3])+eval(r2[4])+eval(r2[5])+eval(r2[6])+eval(r2[7])+eval(r2[8])+eval(r2[9])+eval(r2[10]),
"r3": eval(r3[11])+eval(r3[0])+eval(r3[1])+eval(r3[2])+eval(r3[3])+eval(r3[4])+eval(r3[5])+eval(r3[6])+eval(r3[7])+eval(r3[8])+eval(r3[9])+eval(r3[10])
}],
"graphs": [{
"id":"g1",
"balloonText": "<b>R2</b>-[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
"bullet": "round",
"bulletSize": 12,
"lineColor": "#d1655d",
"lineThickness": 3,
"negativeLineColor": "#637bb6",
"type": "smoothedLine",
"valueField": "value"
},{
"id":"g2",
"balloonText": "<b>R3</b>-[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
"bullet": "round",
"bulletSize": 12,
"lineColor": "#00BCD4",
"lineThickness": 3,
"negativeLineColor": "#F57F17",
"type": "smoothedLine",
"valueField": "r3"
}],
"chartScrollbar": [{
"graph":"g1",
"gridAlpha":0,
"color":"#888888",
"scrollbarHeight":55,
"backgroundAlpha":0,
"selectedBackgroundAlpha":0.1,
"selectedBackgroundColor":"#888888",
"graphFillAlpha":0,
"autoGridCount":true,
"selectedGraphFillAlpha":0,
"graphLineAlpha":0.2,
"graphLineColor":"#c2c2c2",
"selectedGraphLineColor":"#888888",
"selectedGraphLineAlpha":2

},{
"graph":"g2",
"gridAlpha":0,
"color":"#EEFF41",
"scrollbarHeight":55,
"backgroundAlpha":0,
"selectedBackgroundAlpha":0.1,
"selectedBackgroundColor":"00BCD4",
"graphFillAlpha":0,
"autoGridCount":true,
"selectedGraphFillAlpha":0,
"graphLineAlpha":0.2,
"graphLineColor":"#00E676",
"selectedGraphLineColor":"#9C27B0",
"selectedGraphLineAlpha":1

}],
"chartCursor": {
"cursorAlpha": 0,
"valueLineEnabled":true,
"valueLineBalloonEnabled":true,
"valueLineAlpha":0.5,
"fullWidth":true
},
"categoryField": "year",
"categoryAxis": {
"gridPosition": "start"
},"export": {
"enabled": true
}
});
chart.addListener("rendered", zoomChart);
if(chart.zoomChart){
chart.zoomChart();
}
function zoomChart(){
chart.zoomToIndexes(Math.round(chart.dataProvider.length * 0.4), Math.round(chart.dataProvider.length * 0.55));
}
}
});
$(document).ready(function() {
$('#sel_keg').val('a');
$('#grafdiv').append('<div style="text-align: center"><b>Silahkan Pilih Kegiatan</b></div>');
});
</script>
<script type="text/javascript">
jQuery(function($) {
var myTable = 
$('#p1_table').DataTable( {
bAutoWidth: false,
"aoColumns": [
{ "bSortable": false },
null, null,null, null, null,null, null, null,null,
{ "bSortable": false }
],
"aaSorting": [],
select: {
style: 'multi'
}
} );
})
</script>
<script>
function TambahKendali(idkeg,idtab,rute){
$('#idkegiatan').val(idkeg);
$('#idtabel').val(idtab);
$('#routene').val(rute);
$('#TambahKendali').modal('show');
}
function SetujuKendali(idken,idkeg){
$('#idkegiatan').val(idkeg);
$('#idkendali').val(idken);
$('#SetujuKendali').modal('show');
}
</script>
<script>
$(document).ready(function() {
$('#hpsAko').hide();
$("#akoharga1").autoNumeric('init');
$('#akoharga1').change(function () {
$('#hargaAko1').val($('#akoharga1').autoNumeric('get'));
});
var nodes = $('#jmlAko').val();
for (var index = 1; index <= nodes; index++) {
$('#akoharga'+index).autoNumeric('init');
$('#akoharga'+index).change(function () {
$('#hargaAko'+index).val($('#akoharga'+index).autoNumeric('get'));
});
}
});
function tambahAko(){
var nodes = $('#jmlAko').val();
var idnya = eval(nodes) + 1;
var inpAko = '<div class="form-group" id="sesiAko'+idnya+'">'+
'<div class="col-md-4">'+
'<label for="akojumlah'+idnya+'" class="control-label col-md-2" style="color:#555555;">Jumlah</label>'+
'<div class="col-md-10">'+
'<input type="text" id="akojumlah'+idnya+'"  name="akojumlah'+idnya+'" class="form-control"/>'+
'</div>'+
'</div>'+
'<div class="col-md-4">'+
'<label for="akoharga'+idnya+'" class="control-label col-md-2" style="color:#555555;">Harga</label>'+
'<div class="col-md-10">'+
'<input type="text" id="akoharga'+idnya+'"  name="akoharga'+idnya+'" data-a-sign="Rp " class="form-control autonumber"/>'+
'<input type="hidden" id="hargaAko'+idnya+'" name="hargaAko'+idnya+'"/>'+
'</div>'+
'</div>'+
'<div class="col-md-4">'+
'<label for="akohari'+idnya+'" class="control-label col-md-2" style="color:#555555;">Hari</label>'+
'<div class="col-md-10">'+
'<input type="text" id="akohari'+idnya+'"  name="akohari'+idnya+'" class="form-control"/>'+
'</div>'+
'</div>'+
'</div>';

$('#bodinya').append(inpAko);
$("#akoharga"+idnya).autoNumeric('init');
$("#akoharga"+idnya).change(function () {
$("#hargaAko"+idnya).val($("#akoharga"+idnya).autoNumeric('get'));
});
$('#jmlAko').val(idnya);
$('#hpsAko').show();
}
function hapusAko(){
var a = $('#jmlAko').val();
$('#sesiAko'+a).remove();
$('#jmlAko').val(eval(a)-1);
if($('#jmlAko').val() == 1){
$('#hpsAko').hide();
}
}
</script>
<script>
$(".paketane").change(function() {
    var ids = $(this).attr("id");
    var arr = ids.split("_");
    var paket = $(this).val();
    var idnya = '#iddpa_'+ arr[1];
    var iddpa = $(idnya).val();
    var _token = $('#_token').val();
    $.ajax({
        url: {!! json_encode(url('/')) !!}+'/kegiatan/paket',
        type: 'post',
        data: {
                "_token": _token,
                "id": iddpa,
                "paket": paket
        },
        success: function(data){
            console.log(url);
            document.getElementById('DPABody').innerHTML = '';
            var	rows = '';
            var i=1;
            $.each( data, function( key, value ) {
            rows += '<tr>';
            rows += '<td style="text-align:center;">'+i+'<input type="hidden" id="iddpa_'+i+'" value="'+value.id_dpa+'"/></td>';
            rows += '<td style="text-align:left;">'+value.rekening+'</td>';
            rows += '<td style="text-align: left">'+value.uraian+'</td>';
            rows += '<td style="text-align: right">'+value.volume+'</td>';
            rows += '<td style="text-align: right">'+value.nilai+'</td>';
            rows += '<td style="text-align: center">';
            rows += '<select class="paketane select2me" id="Paket-DPA_'+i+'">';
            if(value.paket==1){
                rows +='<option value="1" selected>Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPHP</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==2){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" selected>Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPHP</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==3){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" selected>Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPHP</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==4){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" selected>ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPHP</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==5){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" selected>Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPHP</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==6){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" selected>Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPHP</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==7){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" selected>Honor PPHP</option>';
                rows +='<option value="8" >Honor PPBJ</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==8){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" selected>Honor PPBJ</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==9){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPBJ</option>';
                rows +='<option value="9" selected>Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<optio
                n value="11" >Honor Rapat</option>';
            }else if(value.paket==10){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPBJ</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" selected>Honor Bulanan</option>';
                rows +='<option value="11" >Honor Rapat</option>';
            }else if(value.paket==11){
                rows +='<option value="1" >Paket</option>';
                rows +='<option value="2" >Perjalanan Dinas Dalam Daerah</option>';
                rows +='<option value="3" >Perjalanan Dinas Luar Daerah</option>';
                rows +='<option value="4" >ATK</option>';
                rows +='<option value="5" >Mamin</option>';
                rows +='<option value="6" >Penggandaan</option>';
                rows +='<option value="7" >Honor PPHP</option>';
                rows +='<option value="8" >Honor PPBJ</option>';
                rows +='<option value="9" >Honor Timteknis</option>';
                rows +='<option value="10" >Honor Bulanan</option>';
                rows +='<option value="11" selected>Honor Rapat</option>';
            }
            rows +='</select>'
            rows +='</td>';
            rows +='</tr>';
            i+=1;
            });
            document.getElementById('DPABody').innerHTML = rows;  
        }
    });
});     
</script>
@yield('js')
</body>
</html>