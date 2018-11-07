@extends('layouts.master2')
@section('title','Dok Video')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Video Progress Lapangan</small>
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
                                            <span class="caption-subject font-green-steel uppercase bold">Video Progres Lapangan</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                            @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                @if(Auth::user()->status_pass==0)
                                                    <a class="btn blue-sharp" onclick="BukaVideo({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-plus"></i>Tambah Kategori</a>
                                                @else
                                                    <a class="btn blue-sharp" onclick="TambahKatVideo({{$data->id_paket}});"><i class="fa fa-plus"></i>Tambah Kategori</a>
                                                @endif
                                            @else
                                                @if(Auth::user()->tipe==0)
                                                    <a class="btn blue-sharp" onclick="TambahKatVideo({{$data->id_paket}});"><i class="fa fa-plus"></i>Tambah Kategori</a>
                                                @endif
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <ul class="nav nav-tabs tabs-left">
                                                    <?php $i=1;?>
                                                    @foreach($kategori as $k)
                                                        @if($i==1)
                                                            <li class="active"><a href="#tab{{$i}}" data-toggle="tab"> {{$k->nama_kategori_video}} <br>
                                                            <?php $tglawal="";
                                                            if (date("m",strtotime($k->tgl_simpan_kategori_video))==1) {
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Januari '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            } elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==2){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Februari '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==3){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Maret '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==4){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' April '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==5){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Mei '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==6){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Juni '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==7){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Juli '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==8){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Agustus '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==9){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' September '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==10){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Oktober '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==11){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' November '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==12){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Desember '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            } ?>
                                                                <small>{{$tglawal}}</small></a>
                                                            </li>
                                                        @else
                                                            <li><a href="#tab{{$i}}" data-toggle="tab"> {{$k->nama_kategori_video}} <br>
                                                            <?php $tglawal="";
                                                            if (date("m",strtotime($k->tgl_simpan_kategori_video))==1) {
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Januari '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            } elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==2){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Februari '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==3){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Maret '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==4){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' April '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==5){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Mei '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==6){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Juni '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==7){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Juli '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==8){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Agustus '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==9){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' September '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==10){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Oktober '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==11){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' November '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            }elseif (date("m",strtotime($k->tgl_simpan_kategori_video))==12){
                                                                $tglawal = date('d',strtotime($k->tgl_simpan_kategori_video)).' Desember '.date('Y',strtotime($k->tgl_simpan_kategori_video));
                                                            } ?>
                                                                <small>{{$tglawal}}</small></a>
                                                            </li>
                                                        @endif
                                                    <?php $i++;?>
                                                    @endforeach                                            
                                                </ul>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <div class="tab-content">
                                                    <?php $i=1;?>
                                                    @foreach($kategori as $k)
                                                        @if($i==1)
                                                            <div class="tab-pane active" id="tab{{$i}}">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                @if(Auth::user()->status_pass==0)
                                                                                    <a class="btn blue-sharp" onclick="BukaVideo({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});">
                                                                                        <i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Video
                                                                                    </a>
                                                                                @else
                                                                                    <a class="btn blue-sharp" onclick="TambahVideo({{$k->id_kategori_video}},{{$data->id_paket}});">
                                                                                        <i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Video
                                                                                    </a>
                                                                                @endif
                                                                            @else
                                                                                @if(Auth::user()->tipe==0)
                                                                                    <a class="btn blue-sharp" onclick="TambahVideo({{$k->id_kategori_video}},{{$data->id_paket}});">
                                                                                            <i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Video
                                                                                    </a>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        @foreach($video as $v)
                                                                            @if($k->id_kategori_video==$v->id_kategori_video)
                                                                                <div class="cbp-item graphic">
                                                                                    <div class="cbp-caption">
                                                                                        <div class="cbp-caption-defaultWrap">
                                                                                            <video width="250" height="250" controls>
                                                                                                <source src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/video/'.$v->lokasi_video)}}" type="video/mp4;video/mkv">
                                                                                            </video>
                                                                                        </div>
                                                                                        <div class="cbp-caption-activeWrap">
                                                                                            <div class="cbp-l-caption-alignCenter">
                                                                                                <div class="cbp-l-caption-body">
                                                                                                    <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/video/'.$v->lokasi_video)}}" class="fancybox-video cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$v->nama_video}}" rel="video{{$i}}" data-fancybox-type="iframe">Putar Video</a>
                                                                                                    @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                        @if(Auth::user()->status_pass==0)
                                                                                                            <a  onclick="BukaVideo({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class=" cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$v->nama_video}}">Hapus</a>
                                                                                                        @else
                                                                                                            <a href="{{ URL::to('/video/delete/' . $v->id_video) }}" class=" cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$v->nama_video}}">Hapus</a>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        @if(Auth::user()->tipe==0)
                                                                                                            <a href="{{ URL::to('/video/delete/' . $v->id_video) }}" class=" cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$v->nama_video}}">Hapus</a>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$v->nama_video}}</div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
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
                                                                                    <a class="btn blue-sharp" onclick="BukaVideo({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});">
                                                                                        <i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Video
                                                                                    </a>
                                                                                @else
                                                                                    <a class="btn blue-sharp" onclick="TambahVideo({{$k->id_kategori_video}},{{$data->id_paket}});">
                                                                                        <i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Video
                                                                                    </a>
                                                                                @endif
                                                                            @else
                                                                                @if(Auth::user()->tipe==0)
                                                                                    <a class="btn blue-sharp" onclick="TambahVideo({{$k->id_kategori_video}},{{$data->id_paket}});">
                                                                                            <i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Video
                                                                                    </a>
                                                                                @endif
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        @foreach($video as $v)
                                                                            @if($k->id_kategori_video==$v->id_kategori_video)
                                                                                <div class="cbp-item graphic">
                                                                                    <div class="cbp-caption">
                                                                                        <div class="cbp-caption-defaultWrap">
                                                                                            <video width="250" height="250" controls>
                                                                                            <source src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/video/'.$v->lokasi_video)}}" type="video/mp4;video/mkv">
                                                                                        </video>
                                                                                        </div>
                                                                                        <div class="cbp-caption-activeWrap">
                                                                                            <div class="cbp-l-caption-alignCenter">
                                                                                                <div class="cbp-l-caption-body">
                                                                                                    <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/video/'.$v->lokasi_video)}}" class="fancybox-video cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$v->nama_video}}" rel="video{{$i}}" data-fancybox-type="iframe">Putar Video</a>
                                                                                                    @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                        @if(Auth::user()->status_pass==0)
                                                                                                            <a  onclick="BukaVideo({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class=" cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$v->nama_video}}">Hapus</a>
                                                                                                        @else
                                                                                                            <a href="{{ URL::to('/video/delete/' . $v->id_video) }}" class=" cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$v->nama_video}}">Hapus</a>
                                                                                                        @endif
                                                                                                    @else
                                                                                                        @if(Auth::user()->tipe==0)
                                                                                                            <a href="{{ URL::to('/video/delete/' . $v->id_video) }}" class=" cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$v->nama_video}}">Hapus</a>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$v->nama_video}}</div>
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
    <div class="modal fade" id="BukaVideo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ url('video/buka') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
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
    <div class="modal fade bs-modal-lg" id="TambahKategori" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('video/kategori') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idpaket" id="idpaket">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Kategori Video</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Kategori" class="col-md-4 control-label" >Nama Kategori</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="Nama_Kategori" id="Nama_Kategori"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Keterangan_Kategori" class="col-md-4 control-label" >Keterangan</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="Keterangan_Kategori" name="Keterangan_Kategori"></textarea> 
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
        </div>
    </div>
    <div class="modal fade bs-modal-lg" id="TambahVideo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('video') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idpaket1" id="idpaket1">
                    <input type="hidden" name="idkategori" id="idkategori">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Video</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Video" class="col-md-4 control-label" >Nama Video</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="Nama_Video" id="Nama_Video"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gambar1" class="col-md-4 control-label" >Berkas Video</label>
                                    <div class="col-md-8">
                                        <div class="text-center mbl">
                                            <input id="gambar1" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="gambar1" type='file' onchange="readURL(this);" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="blah" class="col-md-4 control-label" >Video</label>
                                    <div class="col-md-8">
                                        <video id="blah" width="200" height="200" controls>
                                            <source src="" type="video/mp4;video/mkv;video/3gp">
                                        </video>
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
        </div>
    </div>
</div>
@endsection
               