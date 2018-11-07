@extends('layouts.master2')
@section('title','Permasalahan Terkini')
@section('content')
<div class="page-container">
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <!-- BEGIN PAGE HEAD-->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>{{$data->nama_paket}}
                    <small>Permasalahan Terkini &amp; Hasil Rapat</small>
                </h1>
            </div>
        </div>
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="mt-content-body">
                    <div class="row">
                    	<!-- PROGRAM & KEGIATAN -->
                        <div class="col-md-12 col-sm-12">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="idpro" id="idpro" value="{{$data->id_paket}}">
                            <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-book font-dark"></i>
                                    <span class="caption-subject font-dark bold uppercase">Permasalahan Terkini &amp; Hasil Rapat</span>
                                </div>
                                <div class="actions">
                                    <a align="right" onclick="TambahRapat({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-container-rapat">
                                    @include('include.tabelrapat')
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<div class="modal fade bs-modal-lg" id="UnggahRapat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('rapat/unggah') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idrap" id="idrap">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Dokumen Hasil Rapat</h4>
                </div>
                <div class="modal-body form">
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
<div class="modal fade bs-modal-lg" id="LihatRapat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <iframe id="FramePDF"  height="500" width="100%" style="border:none;"></iframe>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12" align="center">
                    <button class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>Tutup</button>
                </div>
            </div>
            <br/>
        </div>
    </div>
</div>
</div>
@endsection
