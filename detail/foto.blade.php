@extends('layouts.master2')
@section('title','Dok Foto')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Foto Progress Lapangan</small>
                    </h1>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="page-content-inner">
                    <div class="mt-content-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart font-dark hide"></i>
                                            <span class="caption-subject font-green-steel uppercase bold">Foto Progres Lapangan</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <ul class="nav nav-tabs tabs-left">
                                                    <?php $i=1;?>
                                                    @foreach($jadwal as $j)
                                                        @if($i==1)
                                                            <li class="active"><a href="#tab{{$i}}" data-toggle="tab"> Minggu {{$i}} <br>
                                                            <?php $tglawal="";
                                                            if (date("m",strtotime($data->tgl_mulai))==1) {
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Januari ';
                                                            } elseif (date("m",strtotime($data->tgl_mulai))==2){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Februari ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==3){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Maret ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==4){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' April ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==5){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Mei ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==6){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Juni ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==7){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Juli ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==8){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Agustus ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==9){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' September ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==10){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Oktober ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==11){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' November ';
                                                            }elseif (date("m",strtotime($data->tgl_mulai))==12){
                                                                $tglawal = date('d',strtotime($data->tgl_mulai)).' Desember ';
                                                            }
                                                            $tglawal2="";
                                                            if (date("m",strtotime($j->minggu_jadwal))==1) {
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Januari '.date('Y',strtotime($j->minggu_jadwal));
                                                            } elseif (date("m",strtotime($j->minggu_jadwal))==2){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Februari '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==3){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Maret '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==4){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' April '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==5){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Mei '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==6){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Juni '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==7){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Juli '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==8){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Agustus '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==9){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' September '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==10){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Oktober '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==11){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' November '.date('Y',strtotime($j->minggu_jadwal));
                                                            }elseif (date("m",strtotime($j->minggu_jadwal))==12){
                                                                $tglawal2 = date('d',strtotime($j->minggu_jadwal)).' Desember '.date('Y',strtotime($j->minggu_jadwal));
                                                            }
                                                            $tgllawas = explode(' ',$tglawal2); 
                                                            $tgl1 = $tgllawas[0]-1;
                                                            ?> 
                                                                <small>{{$tglawal}} - {{$tgl1.' '.$tgllawas[1] .' '.$tgllawas[2]}}</small></a>
                                                            </li>
                                                            
                                                        @else
                                                            <li><a href="#tab{{$i}}" data-toggle="tab"> Minggu {{$i}} <br>
                                                            <?php $tglawal3="";
                                                                if (date("m",strtotime($j->minggu_jadwal))==1) {
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Januari '.date('Y',strtotime($j->minggu_jadwal));
                                                                } elseif (date("m",strtotime($j->minggu_jadwal))==2){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Februari '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==3){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Maret '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==4){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' April '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==5){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Mei '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==6){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Juni '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==7){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Juli '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==8){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Agustus '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==9){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' September '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==10){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Oktober '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==11){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' November '.date('Y',strtotime($j->minggu_jadwal));
                                                                }elseif (date("m",strtotime($j->minggu_jadwal))==12){
                                                                    $tglawal3 = date('d',strtotime($j->minggu_jadwal)).' Desember '.date('Y',strtotime($j->minggu_jadwal));
                                                                }  
                                                                $tgl1 = $tgllawas[0] +6;
                                                                 if ($tgl1>=32) {
                                                                     $tgl1=1;
                                                                     if ($tgllawas[1]=='Januari') {
                                                                         $tgl2='Februari';
                                                                     } elseif ($tgllawas[1]=='Februari') {
                                                                         $tgl2='Maret';
                                                                     } elseif ($tgllawas[1]=='Maret') {
                                                                         $tgl2='April';
                                                                     } elseif ($tgllawas[1]=='April') {
                                                                         $tgl2='Mei';
                                                                     } elseif ($tgllawas[1]=='Mei') {
                                                                         $tgl2='Juni';
                                                                     } elseif ($tgllawas[1]=='Juni') {
                                                                         $tgl2='Juli';
                                                                     }elseif ($tgllawas[1]=='Juli') {
                                                                         $tgl2='Agustus';
                                                                     }elseif ($tgllawas[1]=='Agustus') {
                                                                         $tgl2='September';
                                                                     }elseif ($tgllawas[1]=='September') {
                                                                         $tgl2='Oktober';
                                                                     }elseif ($tgllawas[1]=='Oktober') {
                                                                         $tgl2='November';
                                                                     }elseif ($tgllawas[1]=='November') {
                                                                         $tgl2='Desember';
                                                                     }elseif ($tgllawas[1]=='Desember') {
                                                                         $tgl2='Januari';
                                                                     }
                                                                 }else{
                                                                    $tgl2 = $tgllawas[1];
                                                                 }
                                                                 $tgl3 = $tgllawas[2];
                                                                 ?>
                                                            <small>{{$tgllawas[0].' '.$tgllawas[1]}} - {{$tgl1.' '.$tgl2.' '.$tgl3}}</small></a>
                                                        </li>
                                                        <?php $tgllawas = explode(' ',$tglawal3); ?>
                                                        @endif
                                                        <?php $i++;?>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <div class="tab-content">                                                                
                                                    <?php $i=1;?>
                                                    @foreach($jadwal as $j)
                                                        @if($i==1)
                                                            <div class="tab-pane active" id="tab{{$i}}">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                        @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                            @if(Auth::user()->status_pass==0)
                                                                                <a class="btn blue-sharp" onclick="BukaFoto({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @else
                                                                                <a class="btn blue-sharp" onclick="TambahFoto({{$j->id_jadwal}},{{$data->id_paket}},{{$j->ke_jadwal}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @endif
                                                                        @else
                                                                            @if(Auth::user()->tipe==0)
                                                                                <a class="btn blue-sharp" onclick="TambahFoto({{$j->id_jadwal}},{{$data->id_paket}},{{$j->ke_jadwal}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @endif
                                                                        @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        {{-- <div class="portfolio-content portfolio-1">
                                                                            <div id="js-grid-juicy-projects" class="cbp">
                                                                         --}}@foreach($foto as $f)
                                                                                @if($j->id_jadwal==$f->id_jadwal)
                                                                                    <div class="cbp-item graphic">
                                                                                        <div class="cbp-caption">
                                                                                            <div class="cbp-caption-defaultWrap">
                                                                                                <img src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/foto/Minggu_Ke_'.$i.'/'.$f->lokasi_foto)}}" alt="" height="250px" width="250px"> </div>
                                                                                            <div class="cbp-caption-activeWrap">
                                                                                                <div class="cbp-l-caption-alignCenter">
                                                                                                    <div class="cbp-l-caption-body">
                                                                                                        <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/foto/Minggu_Ke_'.$i.'/'.$f->lokasi_foto)}}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$f->nama_foto}}" rel="gallery{{$i}}" data-fancybox-type="image">Perbesar</a>
                                                                                                        @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                            @if(Auth::user()->status_pass==0)
                                                                                                                <a onclick="BukaFoto({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$f->nama_foto}}">Hapus</a>
                                                                                                            @else
                                                                                                                <a href="{{ URL::to('/foto/delete/' . $f->id_foto) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$f->nama_foto}}">Hapus</a>
                                                                                                            @endif
                                                                                                        @else
                                                                                                            @if(Auth::user()->tipe==0)
                                                                                                                <a href="{{ URL::to('/foto/delete/' . $f->id_foto) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$f->nama_foto}}">Hapus</a>
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$f->nama_foto}}</div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                            {{-- </div>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="tab-pane fade" id="tab{{$i}}">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                @if(Auth::user()->status_pass==0)
                                                                                    <a class="btn blue-sharp" onclick="BukaFoto({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                                @else
                                                                                    <a class="btn blue-sharp" onclick="TambahFoto({{$j->id_jadwal}},{{$data->id_paket}},{{$j->ke_jadwal}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                                @endif
                                                                            @else
                                                                                @if(Auth::user()->tipe==0)
                                                                                    <a class="btn blue-sharp" onclick="TambahFoto({{$j->id_jadwal}},{{$data->id_paket}},{{$j->ke_jadwal}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        @foreach($foto as $f)
                                                                            @if($j->id_jadwal==$f->id_jadwal)
                                                                                <div class="cbp-item graphic">
                                                                                    <div class="cbp-caption">
                                                                                        <div class="cbp-caption-defaultWrap">
                                                                                            <img src="{{asset('/images/dokumentasi/'.$data->id_paket.'/foto/Minggu_Ke_'.$i.'/'.$f->lokasi_foto)}}" height="250px" width="250px" alt=""> </div>
                                                                                        <div class="cbp-caption-activeWrap">
                                                                                            <div class="cbp-l-caption-alignCenter">
                                                                                                <div class="cbp-l-caption-body">
                                                                                                    <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/foto/Minggu_Ke_'.$i.'/'.$f->lokasi_foto)}}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$f->nama_foto}}" rel="gallery{{$i}}" data-fancybox-type="image">Perbesar</a>
                                                                                                    @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                        @if(Auth::user()->status_pass==0)
                                                                                                            <a onclick="BukaFoto({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$f->nama_foto}}">Hapus</a>
                                                                                                        @else
                                                                                                            <a href="{{ URL::to('/foto/delete/' . $f->id_foto) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$f->nama_foto}}">Hapus</a>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        @if(Auth::user()->tipe==0)
                                                                                                            <a href="{{ URL::to('/foto/delete/' . $f->id_foto) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$f->nama_foto}}">Hapus</a>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$f->nama_foto}}</div>
                                                                                </div>  
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    <?php $i++;?>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-modal-lg" id="TambahFoto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('foto') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idjadwal" id="idjadwal">
                    <input type="hidden" name="idpaket" id="idpaket">
                    <input type="hidden" name="jadwalke" id="jadwalke">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Foto</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Foto" class="col-md-4 control-label" >Nama Foto</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="Nama_Foto" id="Nama_Foto" placeholder="Nama Foto Pekerjaan"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gambar1" class="col-md-4 control-label" >Berkas Foto</label>
                                    <div class="col-md-8">
                                        <div class="text-center mbl">
                                            <input id="gambar1" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="gambar1" type='file' onchange="readURL(this);" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="blah" class="col-md-4 control-label" >Foto</label>
                                    <div class="col-md-8">
                                    <img id="blah"  alt="Foto Progres" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn red-intense" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn blue-sharp">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <div class="modal fade " id="BukaFoto" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <form action="{{ url('/foto/buka') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idpaket2" id="idpaket2">
                    <input type="hidden" name="tipenya" id="tipenya">
                    <input type="hidden" name="idnya" id="idnya">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Buka Kunci</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            @if(Auth::user()->tipe==5)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Passnya" class="col-md-4 control-label">Password Konsultan</label>
                                        <div class="col-md-6">
                                            <input  type="password" id="Passnya" name="Passnya" class="form-control" value="{{ old('Passnya') }}">
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Passnya" class="col-md-4 control-label">Password Kontraktor</label>
                                        <div class="col-md-6">
                                            <input  type="password" id="Passnya" name="Passnya" class="form-control" value="{{ old('Passnya') }}">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn red-intense" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn blue-sharp">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection