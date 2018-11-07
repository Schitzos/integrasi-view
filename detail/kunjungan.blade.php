@extends('layouts.master2')
@section('title','Dok Kunjungan')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
    <div class="page-head">
        <div class="container">
            <div class="page-title">
                <h1>{{$data->nama_paket}}
                    <small>Foto Kunjungan Proyek</small>
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
                                        <span class="caption-subject font-green-steel uppercase bold">Kunjungan</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                @if(Auth::user()->status_pass==0)
                                                    <a class="btn blue-sharp" onclick="BukaKunjungan({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});">
                                                        <i class="fa fa-plus"></i>Tambah Kunjungan
                                                    </a>
                                                @else
                                                    <a class="btn blue-sharp" onclick="TambahKatKunjungan({{$data->id_paket}});">
                                                        <i class="fa fa-plus"></i>Tambah Kunjungan
                                                    </a>
                                                @endif
                                            @else
                                                @if(Auth::user()->tipe==0)
                                                    <a class="btn blue-sharp" onclick="TambahKatKunjungan({{$data->id_paket}});">
                                                        <i class="fa fa-plus"></i>Tambah Kunjungan
                                                    </a>
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
                                                    <li class="active"><a href="#tab{{$i}}" data-toggle="tab"> {{$k->nama_kategori_kunjungan}}<br>
                                                    <?php $tglawal="";
                                                    if (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==1) {
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Januari '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    } elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==2){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Februari '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==3){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Maret '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==4){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' April '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==5){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Mei '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==6){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Juni '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==7){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Juli '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==8){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Agustus '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==9){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' September '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==10){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Oktober '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==11){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' November '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==12){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Desember '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    } ?>
                                                        <small>{{$tglawal}}</small></a>                                   
                                                    </li>
                                                @else
                                                    <li><a href="#tab{{$i}}" data-toggle="tab"> {{$k->nama_kategori_kunjungan}} <br>
                                                    <?php $tglawal="";
                                                    if (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==1) {
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Januari '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    } elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==2){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Februari '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==3){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Maret '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==4){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' April '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==5){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Mei '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==6){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Juni '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==7){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Juli '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==8){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Agustus '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==9){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' September '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==10){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Oktober '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==11){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' November '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
                                                    }elseif (date("m",strtotime($k->tgl_simpan_kategori_kunjungan))==12){
                                                        $tglawal = date('d',strtotime($k->tgl_simpan_kategori_kunjungan)).' Desember '.date('Y',strtotime($k->tgl_simpan_kategori_kunjungan));
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
                                                                            <a class="btn blue-sharp" onclick="BukaKunjungan({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                        @else
                                                                            <a class="btn blue-sharp" onclick="TambahKunjungan({{$k->id_kategori_kunjungan}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                        @endif
                                                                    @else
                                                                        @if(Auth::user()->tipe==0)
                                                                            <a class="btn blue-sharp" onclick="TambahKunjungan({{$k->id_kategori_kunjungan}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                @foreach($kunjungan as $s)
                                                                    @if($k->id_kategori_kunjungan==$s->id_kategori_kunjungan)
                                                                        <div class="cbp-item graphic">
                                                                            <div class="cbp-caption">
                                                                                <div class="cbp-caption-defaultWrap">
                                                                                    <img src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/kunjungan/'.$s->lokasi_kunjungan)}}" alt="" height="250px" width="250px"> </div>
                                                                                <div class="cbp-caption-activeWrap">
                                                                                    <div class="cbp-l-caption-alignCenter">
                                                                                        <div class="cbp-l-caption-body">
                                                                                            <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/kunjungan/'.$s->lokasi_kunjungan)}}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$s->nama_kunjungan}}" rel="gallery{{$i}}" data-fancybox-type="image">Perbesar</a>
                                                                                            @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                @if(Auth::user()->status_pass==0)
                                                                                                    <a onclick="BukaKunjungan({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kunjungan}}">Hapus</a>
                                                                                                @else
                                                                                                    <a href="{{ URL::to('/kunjungan/delete/' . $s->id_kunjungan) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kunjungan}}">Hapus</a>
                                                                                                @endif
                                                                                            @else
                                                                                                @if(Auth::user()->tipe==0)
                                                                                                    <a href="{{ URL::to('/kunjungan/delete/' . $s->id_kunjungan) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kunjungan}}">Hapus</a>
                                                                                                @endif
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$s->nama_kunjungan}}</div>
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
                                                                            <a class="btn blue-sharp" onclick="BukaKunjungan({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                        @else
                                                                            <a class="btn blue-sharp" onclick="TambahKunjungan({{$k->id_kategori_kunjungan}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                        @endif
                                                                    @else
                                                                        @if(Auth::user()->tipe==0)
                                                                            <a class="btn blue-sharp" onclick="TambahKunjungan({{$k->id_kategori_kunjungan}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                @foreach($kunjungan as $s)
                                                                    @if($k->id_kategori_kunjungan==$s->id_kategori_kunjungan)
                                                                        <div class="cbp-item graphic">
                                                                            <div class="cbp-caption">
                                                                                <div class="cbp-caption-defaultWrap">
                                                                                    <img src="{{asset('/images/dokumentasi/'.$data->id_paket.'/kunjungan/'.$s->lokasi_kunjungan)}}" height="250px" width="250px" alt=""> </div>
                                                                                <div class="cbp-caption-activeWrap">
                                                                                    <div class="cbp-l-caption-alignCenter">
                                                                                        <div class="cbp-l-caption-body">
                                                                                            <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/kunjungan/'.$s->lokasi_kunjungan)}}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$s->nama_kunjungan}}" rel="gallery{{$i}}" data-fancybox-type="image">Perbesar</a>
                                                                                            @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                @if(Auth::user()->status_pass==0)
                                                                                                    <a onclick="BukaKunjungan({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kunjungan}}">Hapus</a>
                                                                                                @else
                                                                                                    <a href="{{ URL::to('/kunjungan/delete/' . $s->id_kunjungan) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kunjungan}}">Hapus</a>
                                                                                                @endif
                                                                                            @else
                                                                                                @if(Auth::user()->tipe==0)
                                                                                                    <a href="{{ URL::to('/kunjungan/delete/' . $s->id_kunjungan) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kunjungan}}">Hapus</a>
                                                                                                @endif
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$s->nama_kunjungan}}</div>
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
<div class="modal fade bs-modal-lg" id="TambahKategori" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('kunjungan/kategori') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Kunjungan</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nama_Kunjungan" class="col-md-4 control-label" >Nama Kunjungan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Nama_Kunjungan" id="Nama_Kunjungan"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Tanggal_Kunjungan" class="col-md-4 control-label" >Tgl Kunjungan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Tanggal_Kunjungan" id="Tanggal_Kunjungan"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Keterangan_Kunjungan" class="col-md-4 control-label" >Keterangan</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="Keterangan_Kunjungan" name="Keterangan_Kunjungan"></textarea> 
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
<div class="modal fade bs-modal-lg" id="TambahKunjungan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('kunjungan') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket1" id="idpaket1">
                <input type="hidden" name="idkategori" id="idkategori">
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
                                    <input type="text" class="form-control" name="Nama_Foto" id="Nama_Foto"> 
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
                                <img id="blah"  alt="Dokumentasi Kunjungan" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"/>
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
<div class="modal fade " id="BukaKunjungan" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <form action="{{ url('/kunjungan/buka') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
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
               