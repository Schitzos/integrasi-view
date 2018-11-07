@extends('layouts.master2')
@section('title','Gambar Perencanaan')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Gambar Perencanaan</small>
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a class="btn red-intense" onclick="TambahGambar({{$data->id_paket}});"><i class="fa fa-file-pdf-o"></i> Unggah Gambar Perencanaan PDF</a>
                                            </div>
                                        </div>
                                        <br/>
                                        <br/>
                                        <?php $i=1;?>
                                        @foreach($gambar as $g)
                                            <div class="row">
                                                <div class="cbp-item graphic col-md-12">
                                                    <div class="cbp-caption">
                                                        <div class="cbp-caption-defaultWrap">
                                                            <iframe src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/rks/'.$g->lokasi_gambar)}}" alt="" height="600px" width="100%"></iframe>
                                                        </div>
                                                        <div class="cbp-caption-activeWrap">
                                                            <div class="cbp-l-caption-alignCenter">
                                                                <div class="cbp-l-caption-body">
                                                                    <a href="{{ URL::to('/perencanaan/downloadfile/'.$g->id_gambar) }}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$g->nama_gambar}}" rel="gallery{{$i}}" data-fancybox-type="iframe">Unduh</a>
                                                                    <a href="{{ URL::to('/perencanaan/hapus/' . $g->id_gambar) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$g->nama_gambar}}">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$g->nama_gambar}}
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
<div class="modal fade bs-modal-lg" id="TambahGambar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('perencanaan') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Gambar Perencanaan</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="filepdf" class="col-md-4 control-label" >Nama Gambar</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input class="form-control"  id="Nama_Gambar" name="Nama_Gambar" type='text'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="filepdf" class="col-md-4 control-label" >Berkas PDF</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="filepdf" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="filepdf" type='file'/>
                                    </div>
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