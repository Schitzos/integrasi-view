@extends('layouts.master2')
@section('title','Outline Spek')
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
                    <small>Outline Spesifikasi</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
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
                                            <li class="active"><a href="#struktur" data-toggle="tab"> Struktur</a>
                                            </li>
                                            <li><a href="#arsitektur" data-toggle="tab"> Arsitektur </a>
                                            </li>
                                            <li><a href="#mekanikal" data-toggle="tab"> Mekanikal </a>
                                            </li>
                                            <li><a href="#elektrikal" data-toggle="tab"> Elektrikal & Elektronik </a>
                                            </li>
                                            <li><a href="#plumbing" data-toggle="tab"> Plumbing </a>
                                            </li>
                                            <li><a href="#lain" data-toggle="tab"> Lain-Lain </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="struktur">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-book-open font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Struktur</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahStruktur({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>                                                       
                                                    </div>
                                                    <div class="portlet-body">                                                    
                                                        <div class="table-container-struktur">
                                                            @include('include.tabelstruktur')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="arsitektur">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-book-open font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Arsitektur</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahArsitektur({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-arsitektur">
                                                            @include('include.tabelarsitektur')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="mekanikal">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-book-open font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Mekanikal</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahMekanikal({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-mekanikal">
                                                            @include('include.tabelmekanikal')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="elektrikal">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-book-open font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Elektrikal & Elektronik</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahElektrikal({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-elektrikal">
                                                            @include('include.tabelelektrikal')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="plumbing">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-book-open font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Plumbing</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahPlumbing({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-plumbing">
                                                            @include('include.tabelplumbing')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="lain">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-book-open font-dark"></i>
                                                            <span class="caption-subject font-dark bold uppercase">Lain-Lain</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a align="right" onclick="TambahLain({{$data->id_paket}});" class="btn blue-sharp"><i class="fa fa-plus-square"></i> Tambah</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-container-lain">
                                                            @include('include.tabellain')
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
</div>
@endsection