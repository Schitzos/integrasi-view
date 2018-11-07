@extends('layouts.master2')
@section('title','Dokumen  RKS')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Dokumen RKS</small>
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
                                                <a class="btn blue-madison" onclick="TambahDokumenRKS({{$data->id_paket}});"><i class="fa fa-file-word-o"></i> Unggah Dokumen</a>
                                            </div>
                                        </div>
                                        <br/>
                                        <br/>
                                        <?php $i=1;?>
                                        @foreach($dokrks as $d)
                                            <div class="row">
                                                <div class="cbp-item graphic col-md-12">
                                                    <div class="cbp-caption">
                                                        <div class="cbp-caption-defaultWrap">
                                                        <?php $tipe = explode('.', $d->lokasi_dok_rks);?>
                                                            @if($tipe[1]=='doc'||$tipe[1]=='docx')
                                                                <iframe src="http://view.officeapps.live.com/op/view.aspx?src=http://118.97.232.142/images/dokumentasi/{{ $data->id_paket}}/rks/{{ $d->lokasi_dok_rks}}" alt="" height="600px" width="100%"></iframe>
                                                            @else
                                                                <iframe src="{{ asset('/images/dokumentasi/'.$data->id_paket.'/rks/'.$d->lokasi_dok_rks)}}" alt="" height="600px" width="100%"></iframe>
                                                            @endif
                                                        </div>
                                                        <div class="cbp-caption-activeWrap">
                                                            <div class="cbp-l-caption-alignCenter">
                                                                <div class="cbp-l-caption-body">
                                                                    <a href="{{ URL::to('/dokrks/downloadfile/'.$d->id_dok_rks) }}" class="fancybox cbp-lightbox cbp-l-caption-buttonRight btn blue-sharp uppercase" data-title="{{$d->nama_dok_rks}}" rel="gallery{{$i}}" data-fancybox-type="iframe">Download</a>
                                                                    <a href="{{ URL::to('/dokrks/hapus/' . $d->id_dok_rks) }}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase" data-title="{{$d->nama_dok_rks}}">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$d->nama_dok_rks}}
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
<div class="modal fade bs-modal-lg" id="TambahDokumenRKS" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('dokrks') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Dokumen RKS</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="filepdf" class="col-md-4 control-label" >Nama</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input class="form-control"  id="Nama_Dokumen" name="Nama_Dokumen" type='text'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="filepdf" class="col-md-4 control-label" >Berkas PDF/Word</label>
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