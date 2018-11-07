@extends('layouts.master2')
@section('title','Hasil Test')
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
                    <small>Rencana &amp; Hasil Tes Kualitas</small>
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
                            <div class="portlet light">
                            <div class="portlet-body">
                                <div class="row">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="idpro" id="idpro" value="{{$data->id_paket}}">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <ul class="nav nav-tabs tabs-left">
                                            <li class="active"><a href="#struktur" data-toggle="tab"> Struktur </a></li>
                                            <li><a href="#arsitektur" data-toggle="tab"> Arsitektur </a></li>
                                            <li><a href="#mekanikal" data-toggle="tab"> Mekanikal </a></li>
                                            <li><a href="#elektrikal" data-toggle="tab"> Elektrikal & Elektronik </a></li>
                                            <li><a href="#plumbing" data-toggle="tab"> Plumbing </a></li>
                                            <li><a href="#lain" data-toggle="tab"> Lain-Lain </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="struktur">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-check font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Struktur</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahHasilStruktur({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-hasilstruktur">
                                                            @include('include.tabelhasilstruk')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="arsitektur">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-check font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Arsitektur</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahHasilArsitektur({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-hasilarsitektur">
                                                            @include('include.tabelhasilarsi')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="mekanikal">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-check font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Mekanikal</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahHasilMekanikal({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-hasilmekanikal">
                                                            @include('include.tabelhasilmekanik')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="elektrikal">
                                                <div class="portlet light portlet-fit">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-check font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Elektrikal & Elektronik</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahHasilElektrikal({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-hasilelektrikal">
                                                            @include('include.tabelhasilelektrik')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="plumbing">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-check font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Plumbing</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahHasilPlumbing({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-hasilplumbing">
                                                            @include('include.tabelhasilplumbing')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="lain">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-check font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Lain-Lain</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahHasilLain({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-hasillain">
                                                            @include('include.tabelhasillain')
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
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<div class="modal fade bs-modal-lg" id="UnggahHasilUji" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('teshasil/unggah') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idhasil" id="idhasil">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Bukti Hasil Tes</h4>
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
<div class="modal fade bs-modal-lg" id="LihatHasilUji" tabindex="-1" role="dialog" aria-hidden="true">
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