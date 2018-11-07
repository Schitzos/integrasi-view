@extends('layouts.master2')
@section('title','Dok Kualitas Kinerja')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Foto Kualitas Kinerja</small>
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
                                            <span class="caption-subject font-green-steel uppercase bold">Kualitas Kinerja</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                    @if(Auth::user()->status_pass==0)
                                                        <a class="btn blue-sharp" onclick="BukaKualitas({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});">
                                                            <i class="fa fa-plus"></i>Tambah Pekerjaan
                                                        </a>
                                                    @else
                                                        <a class="btn blue-sharp" onclick="TambahKatKualitas({{$data->id_paket}});">
                                                            <i class="fa fa-plus"></i>Tambah Pekerjaan
                                                        </a>
                                                    @endif
                                                @else
                                                    @if(Auth::user()->tipe==0)
                                                        <a class="btn blue-sharp" onclick="TambahKatKualitas({{$data->id_paket}});">
                                                            <i class="fa fa-plus"></i>Tambah Pekerjaan
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
                                                        <li class="active"><a href="#tab{{$i}}" data-toggle="tab"> {{$k->nama_kategori_kualitas}}</a>                                     
                                                        </li>
                                                    @else
                                                        <li><a href="#tab{{$i}}" data-toggle="tab"> {{$k->nama_kategori_kualitas}}</a>
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
                                                                                <a class="btn blue-sharp" onclick="BukaKualitas({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @else
                                                                                <a class="btn blue-sharp" onclick="TambahKualitas({{$k->id_kategori_kualitas}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @endif
                                                                        @else
                                                                            @if(Auth::user()->tipe==0)
                                                                                <a class="btn blue-sharp" onclick="TambahKualitas({{$k->id_kategori_kualitas}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    @foreach($kualitas as $s)
                                                                        @if($k->id_kategori_kualitas==$s->id_kategori_kualitas)
                                                                            <div class="cbp-item graphic">
                                                                                <div class="cbp-caption">
                                                                                    <div class="cbp-caption-defaultWrap">
                                                                                        <img src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/kualitas/'.$s->lokasi_kualitas)}}" alt="" height="250px" width="250px"> </div>
                                                                                    <div class="cbp-caption-activeWrap">
                                                                                        <div class="cbp-l-caption-alignCenter">
                                                                                            <div class="cbp-l-caption-body">
                                                                                                <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/kualitas/'.$s->lokasi_kualitas)}}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$s->nama_kualitas}}" rel="gallery{{$i}}" data-fancybox-type="image">Perbesar</a>
                                                                                                @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                    @if(Auth::user()->status_pass==0)
                                                                                                        <a  onclick="BukaKualitas({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kualitas}}">Hapus</a>
                                                                                                    @else
                                                                                                        <a href="{{ URL::to('/kualitas/delete/' . $s->id_kualitas) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kualitas}}">Hapus</a>
                                                                                                    @endif
                                                                                                @else
                                                                                                    @if(Auth::user()->tipe==0)
                                                                                                        <a href="{{ URL::to('/kualitas/delete/' . $s->id_kualitas) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kualitas}}">Hapus</a>
                                                                                                    @endif
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$s->nama_kualitas}}</div>
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
                                                                                <a class="btn blue-sharp" onclick="BukaKualitas({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @else
                                                                                <a class="btn blue-sharp" onclick="TambahKualitas({{$k->id_kategori_kualitas}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @endif
                                                                        @else
                                                                            @if(Auth::user()->tipe==0)
                                                                                <a class="btn blue-sharp" onclick="TambahKualitas({{$k->id_kategori_kualitas}},{{$data->id_paket}});"><i class="fa fa-camera"></i>&nbsp;&nbsp;Tambah Foto</a>
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    @foreach($kualitas as $s)
                                                                        @if($k->id_kategori_kualitas==$s->id_kategori_kualitas)
                                                                            <div class="cbp-item graphic">
                                                                                <div class="cbp-caption">
                                                                                    <div class="cbp-caption-defaultWrap">
                                                                                        <img src="{{asset('/images/dokumentasi/'.$data->id_paket.'/kualitas/'.$s->lokasi_kualitas)}}" height="250px" width="250px" alt=""> </div>
                                                                                    <div class="cbp-caption-activeWrap">
                                                                                        <div class="cbp-l-caption-alignCenter">
                                                                                            <div class="cbp-l-caption-body">
                                                                                                <a href="{{ asset('/images/dokumentasi/'.$data->id_paket.'/kualitas/'.$s->lokasi_kualitas)}}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$s->nama_kualitas}}" rel="gallery{{$i}}" data-fancybox-type="image">Perbesar</a>
                                                                                                @if(Auth::user()->tipe==5||Auth::user()->tipe==6)
                                                                                                    @if(Auth::user()->status_pass==0)
                                                                                                        <a  onclick="BukaKualitas({{Auth::user()->tipe}},{{Auth::user()->id}},{{$data->id_paket}});" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kualitas}}">Hapus</a>
                                                                                                    @else
                                                                                                        <a href="{{ URL::to('/kualitas/delete/' . $s->id_kualitas) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kualitas}}">Hapus</a>
                                                                                                    @endif
                                                                                                @else
                                                                                                    @if(Auth::user()->tipe==0)
                                                                                                        <a href="{{ URL::to('/kualitas/delete/' . $s->id_kualitas) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$s->nama_kualitas}}">Hapus</a>
                                                                                                    @endif
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$s->nama_kualitas}}</div>
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
                <form action="{{ url('kualitas/kategori') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idpaket" id="idpaket">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Pekerjaan</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Pekerjaan" class="col-md-4 control-label" >Nama Pekerjaan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="Nama_Pekerjaan" id="Nama_Pekerjaan"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Keterangan_Pekerjaaan" class="col-md-4 control-label" >Keterangan</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="Keterangan_Pekerjaaan" name="Keterangan_Pekerjaaan"></textarea> 
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
    <div class="modal fade bs-modal-lg" id="TambahKualitas" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('kualitas') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
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
                                    <img id="blah"  alt="Dokumentasi Kualitas Kinerja" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"/>
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
    <div class="modal fade " id="BukaKualitas" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <form action="{{ url('/kualitas/buka') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
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
               