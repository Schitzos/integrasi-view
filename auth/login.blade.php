<!DOCTYPE html>
<![if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]>
<![if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]>
<![if !IE]> <html lang="en"> <!<![endif]>
    <head>
        <meta charset="utf-8" />
        <title>INTEGRASI | LOGIN</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Sistem Infomasi Manajemen Multi Proyek" name="description" />
        <meta content="Agus" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{asset('/images/avatar/logo.png')}}"/> 
        </head>
    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="{{ URL::to('/home') }}">
    <img src="{{ asset('/admin/layout/img/tes2.png') }}" alt=""/>
    </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ url('/login') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h3 class="form-title">Masuk Untuk Melanjutkan</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Masukkan username dan password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="nip_pegawai" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" /> Ingat saya
                        <span></span>
                    </label>
                    <button type="submit" class="btn green pull-right"> Masuk </button>
                </div>
                <div class="forget-password">
                    <h4>Lupa password ?</h4>
                    <p> jangan kawatir, tekan
                        <a href="javascript:;" id="forget-password"> disini </a> untuk mereset password Anda. </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3>Lupa password ?</h3>
                <p> Masukkan alamat e-mail Anda dibawah ini untuk mereset password. </p>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn red btn-outline"> Kembali </button>
                    <button type="submit" class="btn green pull-right"> Kirim </button>
                </div>
            </form>
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> {{date('Y')}} &copy; Kabupaten Gresik - Sistem Infomasi Multiproyek. </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src="{{ asset('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{ asset('/assets/global/plugins/excanvas.min.js')}}"></script> 
<script src="{{ asset('/assets/global/plugins/ie8.fix.min.js')}}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('/assets/pages/scripts/login-4.js')}}" type="text/javascript"></script>
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
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>