@extends('layouts.master2')
@section('title','SOP Pekerjaan')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>SOP Pekerjaan</small>
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
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="idpro" id="idpro" value="{{$data->id_paket}}">
                            <div class="portlet light">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="portlet light portlet-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-check font-dark"></i>
                                                <span class="caption-subject font-dark bold uppercase">SOP Pekerjaan</span>
                                            </div>
                                            <div class="actions">
                                                <a align="right" onclick="TambahSOPPekerjaan({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-container-sop">
                                                @include('include.tabelsoppekerjaan')
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
    </div>
<div class="modal fade bs-modal-lg" id="UnggahSOPPEkerjaan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('soppek/unggah') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idsop" id="idsop">
                    <input type="hidden" name="idpaket" id="idpaket">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Unggah PDF</h4>
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
</div>
@endsection