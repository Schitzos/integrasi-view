<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8" />
    <title>INTEGRASI | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Integrasi" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="DPUTR Gresik" name="author" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
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
    <img src="{{ asset('/admin/layout/img/logo.png')}}" alt="logo" class="logo-default">
    </a>
    </div>
    <a href="javascript:;" class="menu-toggler"></a>
    <div class="top-menu">
    <ul class="nav navbar-nav pull-right">
    <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
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
    </li>
    <li class="droddown dropdown-separator">
    <span class="separator"></span>
    </li>
    <li class="dropdown dropdown-user dropdown-dark">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
    <img alt="" class="img-circle" src="{{ asset('/images/avatar/'.Auth::user()->avatar)}}">
    <span class="username username-hide-mobile">{{Auth::user()->nama}}</span>
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
            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'home*') ? 'active' : '' }}">
                <a href="{{ URL::to('/home') }}"><i class="icon-grid"></i> Dashboard
                    <span class="arrow"></span>
                </a>
            </li>
            @if(Auth::user()->tipe==0||Auth::user()->tipe==1||Auth::user()->tipe==2||Auth::user()->tipe==3||Auth::user()->tipe==4)
            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is( 'bidang*') ? 'active' : '' }} {{ Request::is( 'seksi*') ? 'active' : '' }} {{ Request::is( 'jabatan*') ? 'active' : '' }} {{ Request::is( 'golongan*') ? 'active' : '' }} {{ Request::is( 'pegawai*') ? 'active' : '' }} {{ Request::is( 'pengguna*') ? 'active' : '' }} {{ Request::is( 'program*') ? 'active' : '' }} {{ Request::is( 'kegiatan*') ? 'active' : '' }} {{ Request::is( 'kecamatan*') ? 'active' : '' }} {{ Request::is( 'desa*') ? 'active' : '' }} {{ Request::is( 'maskon*') ? 'active' : '' }} {{ Request::is( 'sultan*') ? 'active' : '' }}">
                <a href="javascript:;"> <i class="icon-users"></i> Master
                    <span class="arrow"></span>
                </a>
                <ul class="dropdown-menu pull-left">
                    <li aria-haspopup="true" class="{{ Request::is( 'jabatan*') ? 'active' : '' }}">
                        <a href="{{ URL::to('/jabatan') }}" class="nav-link  "> Jabatan </a>
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
                    <li aria-haspopup="true" class="{{ Request::is( 'pengguna*') ? 'active' : '' }}">
                        <a href="{{ URL::to('/pengguna') }}" class="nav-link  "> Pengguna </a>
                    </li>
                </ul>
            </li>
            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                <a href="javascript:;"> <i class="icon-list"></i> Paket
                    <span class="arrow"></span>
                </a>
                <ul class="dropdown-menu pull-left">
                    
                </ul>
            </li>
            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown {{ Request::is('psatu*') ? 'active' : '' }}">
                @if(Auth::user()->id_akses==0)
                    <a href="{{ URL::to('/psatu/0/0/filter') }}">
                      <i class="fa fa-list"></i><span class="arrow">&nbsp;P-1</span>
                    </a>
                @else
                    <a href="{{ URL::to('/psatu/'.Auth::user()->id_bidang.'/0/filter') }}">
                      <i class="fa fa-list"></i><span class="arrow">&nbsp;P-1</span>
                    </a>
                @endif
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
    <a target="_blank" href="http://gresikkab.go.id">DPU Kabupaten Gresik</a>
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
    <script src="{{asset('/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}"></script>
    <script src="{{asset('/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/assets/apps/scripts/calendar.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/pages/scripts/ui-confirmations.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/pages/scripts/table-datatables-scroller.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/pages/scripts/components-select2.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/pages/scripts/form-wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
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
        var chartData = [];
    var jsondata = $.ajax({type: "GET", url: "home/showperforma/" + id  , async: false}).responseJSON;
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
    });
    var jml = $("#jmlpro").val();
    for (var i = 1; i <= jml; i++) {
        var idnya1 = '#idpro_'+i;
        var idnya2 = '#range_'+i;
        var id = $(idnya1).val();
        var jsondata = $.ajax({type: "GET", url: "home/showslider/" + id  , async: false}).responseJSON;
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
    $.get("kecamatan/showdata/" + id , function(data) {
    $('#idkecamatan').val(data.id_kecamatan);
    $('#Nama_Kecamatan_Ubah').val(data.nama_kecamatan);
    });
    $('#UbahKecamatan').modal('show');
    }
    function TambahDesa(){
    $('#TambahDesa').modal('show');
    }
    function UbahDesa(id){
    $.get("desa/showdata/" + id , function(data) {
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
    $.get("jabatan/showdata/" + id , function(data) {
    $('#idjabatan').val(data.id_jabatan);
    $('#Nama_Jabatan_Ubah').val(data.nama_jabatan);
    $('#Keterangan_Jabatan_Ubah').val(data.keterangan_jabatan);
    });
    $('#UbahJabatan').modal('show');
    }
    function TambahGolongan(){
    $('#TambahGolongan').modal('show');
    }
    function UbahGolongan(id){
    $.get("golongan/showdata/" + id , function(data) {
    $('#idgolongan').val(data.id_golongan);
    $('#Nama_Golongan_Ubah').val(data.nama_golongan);
    $('#Pangkat_Golongan_Ubah').val(data.pangkat);
    });
    $('#UbahGolongan').modal('show');
    }
    function TambahPegawai(){
    $('#TambahPegawai').modal('show');
    }
    function UbahPegawai(id){
    $.get("pegawai/showdata/" + id , function(data) {
    $('#idpegawai').val(data.nip_pegawai);
    $('#Bidang_Ubah').val(data.id_bidang).change();
    $('#Jabatan_Ubah').val(data.id_jabatan).change();
    $('#Golongan_Ubah').val(data.id_golongan).change();
    $('#NIP_Pegawai_Ubah').val(data.nip_pegawai);
    $('#Nama_Pegawai_Ubah').val(data.nama_pegawai);
    $('#Jabatan_Instansi_Ubah').val(data.jabatan_instansi);
    });
    $('#UbahPegawai').modal('show');
    }
    function TambahKontraktor(){
    $('#TambahKontraktor').modal('show');
    }
    function UbahKontraktor(id){
    $.get("maskon/showdata/" + id , function(data) {
    $('#idkontraktor').val(data.id_kontraktor);
    $('#Nama_Kontraktor_Ubah').val(data.nama_kontraktor);
    $('#Telp_Kontraktor_Ubah').val(data.telp_kontraktor);
    $('#Alamat_Kontraktor_Ubah').val(data.alamat_kontraktor);
    $('#PM_Ubah').val(data.pm_kontraktor);
    $('#SKA_PM_Ubah').val(data.ska_pm_kontraktor);
    $('#Telp_PM_Ubah').val(data.telp_pm_kontraktor);
    $('#Keterangan_PM_Ubah').val(data.keterangan_pm_kontraktor);
    $('#SM_Ubah').val(data.sm_kontraktor);
    $('#SKA_SM_Ubah').val(data.ska_sm_kontraktor);
    $('#Telp_SM_Ubah').val(data.telp_sm_kontraktor);
    $('#Keterangan_SM_Ubah').val(data.keterangan_sm_kontraktor);
    $('#Pelaksana_Ubah').val(data.pelaksana_kontraktor);
    $('#SKA_Pelaksana_Ubah').val(data.ska_pelaksana_kontraktor);
    $('#Telp_Pelaksana_Ubah').val(data.telp_pelaksana_kontraktor);
    $('#Keterangan_Pelaksana_Ubah').val(data.keterangan_pelaksana_kontraktor);
    $('#Direktur_Ubah').val(data.direktur_kontraktor);
    $('#SKA_Direktur_Ubah').val(data.ska_direktur_kontraktor);
    $('#Telp_Direktur_Ubah').val(data.telp_direktur_kontraktor);
    $('#Keterangan_Direktur_Ubah').val(data.keterangan_direktur_kontraktor);
    });
    $('#UbahKontraktor').modal('show');
    }
    
    function TambahKonsultan(){
    $('#TambahKonsultan').modal('show');
    }
    function UbahKonsultan(id){
    $.get("sultan/showdata/" + id , function(data) {
    $('#idkonsultan').val(data.id_konsultan);
    $('#Nama_Konsultan_Ubah').val(data.nama_konsultan);
    $('#Telp_Konsultan_Ubah').val(data.telp_konsultan);
    $('#Alamat_Konsultan_Ubah').val(data.alamat_konsultan);
    $('#PM_Ubah').val(data.pm_konsultan);
    $('#SKA_PM_Ubah').val(data.ska_pm_konsultan);
    $('#Telp_PM_Ubah').val(data.telp_pm_konsultan);
    $('#Keterangan_PM_Ubah').val(data.keterangan_pm_konsultan);
    $('#SM_Ubah').val(data.sm_konsultan);
    $('#SKA_SM_Ubah').val(data.ska_sm_konsultan);
    $('#Telp_SM_Ubah').val(data.telp_sm_konsultan);
    $('#Keterangan_SM_Ubah').val(data.keterangan_sm_konsultan);
    $('#Pelaksana_Ubah').val(data.pelaksana_konsultan);
    $('#SKA_Pelaksana_Ubah').val(data.ska_pelaksana_konsultan);
    $('#Telp_Pelaksana_Ubah').val(data.telp_pelaksana_konsultan);
    $('#Keterangan_Pelaksana_Ubah').val(data.keterangan_pelaksana_konsultan);
    $('#Direktur_Ubah').val(data.direktur_konsultan);
    $('#SKA_Direktur_Ubah').val(data.ska_direktur_konsultan);
    $('#Telp_Direktur_Ubah').val(data.telp_direktur_konsultan);
    $('#Keterangan_Direktur_Ubah').val(data.keterangan_direktur_konsultan);
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
    function TambahKegiatan(){
    $('#TambahKegiatan').modal('show');
    }
    $('#Program').change(function () {
        $.get("kegiatan/showprogram/" + $(this).val() , function(data) {
            $('#id_kegiatan').val(data.id_program);
        });
    });
    $("#Bidang").change(function() {
        $.get("kegiatan/showppk/" + $(this).val() , function(data) {
            $('#PPK').empty();
            $('#PPK').append("<option value=''>Pilih PPK</option>");
            $.each(data, function(key, element) {
                $('#PPK').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
            });
        });
        $.get("kegiatan/showpptk/" + $(this).val() , function(data) {
            $('#PPTK').empty();
            $('#PPTK').append("<option value=''>Pilih PPTK</option>");
            $.each(data, function(key, element) {
                $('#PPTK').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
            });
        });
    });
    function UbahKegiatan(id){
    $.get("kegiatan/showdata/" + id , function(data) {
    $('#idkegiatan').val(data.id_kegiatan);
    $('#Bidang_Ubah').val(data.id_bidang).change();
    $('#Program_Ubah').val(data.id_program).change();
    $('#PPK_Ubah').val(data.ppk).change();
    $('#PPTK_Ubah').val(data.pptk).change();
    $('#Kode_Kegiatan').val(data.id_kegiatan);
    $('#Nama_Kegiatan_Ubah').val(data.nama_kegiatan);
    });
    $('#UbahKegiatan').modal('show');
    }
    $("#Bidang_Ubah").change(function() {
        $.get("kegiatan/showppk/" + $(this).val() , function(data) {
            $('#PPK_Ubah').empty();
            $('#PPK_Ubah').append("<option value=''>Pilih PPK</option>");
            $.each(data, function(key, element) {
                $('#PPK_Ubah').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
            });
        });
        $.get("kegiatan/showpptk/" + $(this).val() , function(data) {
            $('#PPTK_Ubah').empty();
            $('#PPTK_Ubah').append("<option value=''>Pilih PPTK</option>");
            $.each(data, function(key, element) {
                $('#PPTK_Ubah').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
            });
        });
    });
    $('#Program_Paket').change(function () {
        $.get("../home/showkegiatan/" + $(this).val() , function(data) {
            $('#Kegiatan_Paket').empty();
            $('#Kegiatan_Paket').append("<option value=''>Pilih Kegiatan</option>");
            $.each(data, function(key, element) {
                $('#Kegiatan_Paket').append("<option value='" + element.id_kegiatan + "'>" + element.nama_kegiatan + "</option>");
            });
        });
    });
    $('#Kegiatan_Paket').change(function () {
        $.get("../home/showkordinator/" + $(this).val() , function(data) {
            $('#Kordinator_Paket').empty();
            $('#Kordinator_Paket').append("<option value=''>Pilih Kordinator</option>");
            $.each(data, function(key, element) {
                $('#Kordinator_Paket').append("<option value='" + element.nip_pegawai + "'>" + element.nama_pegawai + "</option>");
            });
        });
    });
    $('#Kecamatan_Paket').change(function () {
        $.get("../home/showdesa/" + $(this).val() , function(data) {
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
    var jsondata = $.ajax({type: "GET", url: "home/showgrafik/" + id  , async: false}).responseJSON;
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
    var jsondata = $.ajax({type: "GET", url: "home/showperforma/" + id  , async: false}).responseJSON;
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
        var id =  "#idproyek"+i;
        var idnya = $(id).val();
        var chartData = [];
        var jsondata = $.ajax({type: "GET", url: "home/showmini/" + idnya , async: false}).responseJSON;
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
    </body>
    </html>