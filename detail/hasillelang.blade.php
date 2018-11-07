@extends('layouts.master2')
@section('title','Hasil Lelang')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>Hasil Lelang
                        <small>Hasil Klarifikasi & Negosiasi</small>
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
                                <div class="portlet light ">
                                    <div class="portlet-body">
                                        <ul class="nav nav-pills">
                                            <li class="active">
                                                <a href="#tab_bahp" data-toggle="tab"> BAHP </a>
                                            </li>
                                            <li>
                                                <a href="#tab_nego" data-toggle="tab"> RAB Klarifikasi & Negosiasi </a>
                                            </li>
                                            <li>
                                                <a href="#tab_penawaran" data-toggle="tab"> RAB Penawaran </a>
                                            </li>
                                            <li>
                                                <a href="#tab_hps" data-toggle="tab"> HPS </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="tab_bahp">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if(Auth::user()->tipe==0)
                                                            <a class="btn green meadow" onclick="TambahBAHP({{$data->id_paket}});">Upload BAHP</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br/>
                                                <?php $i=1;?>
                                                @foreach($bahp as $b)
                                                    <div class="row">
                                                        <div class="cbp-item graphic col-md-12">
                                                            <div class="cbp-caption">
                                                                <div class="cbp-caption-defaultWrap">
                                                                <?php $tipe = explode('.', $b->lokasi_bahp);?>
                                                                    @if($tipe[1]=='xls'||$tipe[1]=='xlsx')
                                                                        <iframe src="http://view.officeapps.live.com/op/view.aspx?src=simultipro.com/images/dokumentasi/{{$data->id_paket}}/rab/{{$b->lokasi_bahp}}" alt="" height="600px" width="100%"></iframe>
                                                                    @else                                                                    
                                                                        <iframe src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/rab/'.$b->lokasi_bahp)}}" alt="" height="600px" width="100%"></iframe>
                                                                    @endif
                                                                </div>
                                                                <div class="cbp-caption-activeWrap">
                                                                    <div class="cbp-l-caption-alignCenter">
                                                                        <div class="cbp-l-caption-body">
                                                                            <a href="{{ URL::to('/hasillelang/'.$b->id_bahp.'/bahp') }}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$b->nama_bahp}}" rel="gallery{{$i}}" data-fancybox-type="iframe">Download</a>
                                                                            <a href="{{ URL::to('/hasillelang/bahp/' . $b->id_bahp) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$b->nama_bahp}}">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$b->nama_bahp}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $i++;?>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="tab_nego">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if(Auth::user()->tipe==0)
                                                            <a class="btn green meadow" onclick="TambahNego({{$data->id_paket}});">Upload Klarifikasi &amp; Negosiasi</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br/>
                                                <?php $i=1;?>
                                                @foreach($klarifikasi as $k)
                                                    <div class="row">
                                                        <div class="cbp-item graphic col-md-12">
                                                            <div class="cbp-caption">
                                                                <div class="cbp-caption-defaultWrap">
                                                                <?php $tipe = explode('.', $k->lokasi_klarifikasi);?>
                                                                    @if($tipe[1]=='xls'||$tipe[1]=='xlsx')
                                                                        <iframe src="http://view.officeapps.live.com/op/view.aspx?src=simultipro.com/images/dokumentasi/{{$data->id_paket}}/rab/{{$k->lokasi_klarifikasi}}" alt="" height="600px" width="100%"></iframe>
                                                                    @else
                                                                        <iframe src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/rab/'.$k->lokasi_klarifikasi)}}" alt="" height="600px" width="100%"></iframe>
                                                                    @endif
                                                                </div>
                                                                <div class="cbp-caption-activeWrap">
                                                                    <div class="cbp-l-caption-alignCenter">
                                                                        <div class="cbp-l-caption-body">
                                                                            <a href="{{ URL::to('/hasillelang/'.$k->id_klarifikasi.'/nego') }}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$k->nama_klarifikasi}}" rel="gallery{{$i}}" data-fancybox-type="iframe">Download</a>
                                                                            <a href="{{ URL::to('/hasillelang/nego/' . $k->id_klarifikasi) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$k->nama_klarifikasi}}">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$k->nama_klarifikasi}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $i++;?>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="tab_penawaran">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if(Auth::user()->tipe==0)
                                                            <a class="btn green meadow" onclick="TambahPenawaran({{$data->id_paket}});">Upload RAB Penawaran</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br/>
                                                <?php $i=1;?>
                                                @foreach($penawaran as $p)
                                                    <div class="row">
                                                        <div class="cbp-item graphic col-md-12">
                                                            <div class="cbp-caption">
                                                                <div class="cbp-caption-defaultWrap">
                                                                <?php $tipe = explode('.', $p->lokasi_penawaran);?>
                                                                    @if($tipe[1]=='xls'||$tipe[1]=='xlsx')
                                                                        <iframe src="http://view.officeapps.live.com/op/view.aspx?src=simultipro.com/images/dokumentasi/{{$data->id_paket}}/rab/{{$p->lokasi_penawaran}}" alt="" height="600px" width="100%"></iframe>
                                                                    @else
                                                                        <iframe src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/rab/'.$p->lokasi_penawaran)}}" alt="" height="600px" width="100%"></iframe>
                                                                    @endif
                                                                </div>
                                                                <div class="cbp-caption-activeWrap">
                                                                    <div class="cbp-l-caption-alignCenter">
                                                                        <div class="cbp-l-caption-body">
                                                                            <a href="{{ URL::to('/hasillelang/'.$p->id_penawaran.'/tawar') }}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$p->nama_penawaran}}" rel="gallery{{$i}}" data-fancybox-type="iframe">Download</a>
                                                                            <a href="{{ URL::to('/hasillelang/tawar/' . $p->id_penawaran) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$p->nama_penawaran}}">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$p->nama_penawaran}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $i++;?>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="tab_hps">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if(Auth::user()->tipe==0)
                                                            <a class="btn green meadow" onclick="TambahHPS({{$data->id_paket}});">Upload HPS</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <br/>
                                                <?php $i=1;?>
                                                @foreach($hps as $h)
                                                    <div class="row">
                                                        <div class="cbp-item graphic col-md-12">
                                                            <div class="cbp-caption">
                                                                <div class="cbp-caption-defaultWrap">
                                                                <?php $tipe = explode('.', $h->lokasi_hps);?>
                                                                    @if($tipe[1]=='xls'||$tipe[1]=='xlsx')
                                                                        <iframe src="http://view.officeapps.live.com/op/view.aspx?src=simultipro.com/images/dokumentasi/{{$data->id_paket}}/rab/{{$h->lokasi_hps}}" alt="" height="600px" width="100%"></iframe>
                                                                    @else
                                                                        <iframe src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/rab/'.$h->lokasi_hps)}}" alt="" height="600px" width="100%"></iframe>
                                                                    @endif
                                                                </div>
                                                                <div class="cbp-caption-activeWrap">
                                                                    <div class="cbp-l-caption-alignCenter">
                                                                        <div class="cbp-l-caption-body">
                                                                            <a href="{{ URL::to('/hasillelang/'.$h->id_hps.'/hps') }}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$h->nama_hps}}" rel="gallery{{$i}}" data-fancybox-type="iframe">Download</a>
                                                                            <a href="{{ URL::to('/hasillelang/hps/' . $h->id_hps) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$h->nama_hps}}">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$h->nama_hps}}
                                                            </div>
                                                        </div>
                                                    </div>
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
<div class="modal fade bs-modal-lg" id="TambahBAHP" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('hasillelang/bhap') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah BAHP</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nama_File" class="col-md-4 control-label" >Nama File</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Nama_File" id="Nama_File"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Tgl_BAHP" class="col-md-4 control-label" >Tgl BAHP</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Tgl_BAHP" id="Tgl_BAHP"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PDFBHAP" class="col-md-4 control-label" >Berkas File</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="PDFBHAP" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="PDFBHAP" type='file' onchange="readURL(this);" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blah" class="col-md-4 control-label" >File</label>
                                <div class="col-md-8">
                                <iframe id="blah"  alt="Hasil BAHP" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"></iframe>
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
<div class="modal fade bs-modal-lg" id="TambahNego" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('hasillelang/nego') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaketnego" id="idpaketnego">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Klarifikasi &amp; Negosiasi</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nama_File" class="col-md-4 control-label" >Nama File</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Nama_File" id="Nama_File"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PDFNEGOSIASI" class="col-md-4 control-label" >Berkas File</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="PDFNEGOSIASI" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="PDFNEGOSIASI" type='file' onchange="readURL(this);" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blah" class="col-md-4 control-label" >File</label>
                                <div class="col-md-8">
                                <iframe id="blah"  alt="Hasil BAHP" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"></iframe>
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
<div class="modal fade bs-modal-lg" id="TambahPenawaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('hasillelang/tawar') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpakettawar" id="idpakettawar">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Penawaran</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nama_File" class="col-md-4 control-label" >Nama File</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Nama_File" id="Nama_File"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PDFPENAWARAN" class="col-md-4 control-label" >Berkas File</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="PDFPENAWARAN" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="PDFPENAWARAN" type='file' onchange="readURL(this);" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blah" class="col-md-4 control-label" >File</label>
                                <div class="col-md-8">
                                <iframe id="blah"  alt="Hasil BAHP" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"></iframe>
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
<div class="modal fade bs-modal-lg" id="TambahHPS" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('hasillelang/hps') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpakethps" id="idpakethps">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah HPS</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nama_File" class="col-md-4 control-label" >Nama File</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Nama_File" id="Nama_File"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PDFHPS" class="col-md-4 control-label" >Berkas File</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="PDFHPS" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="PDFHPS" type='file' onchange="readURL(this);" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blah" class="col-md-4 control-label" >File</label>
                                <div class="col-md-8">
                                <iframe id="blah"  alt="Hasil BAHP" width="200" height="200" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"></iframe>
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