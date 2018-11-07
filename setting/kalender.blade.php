@extends('layouts.master2')
@section('title','Jadwal Saya')
@section('content')
    <div class="page-container">      
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <div class="container">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Kalender
                            <small>Kalender Saya</small>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit  calendar">
                                    <div class="portlet-title">
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12">
                                                <input type="hidden" id="idtipe" value="{{Auth::user()->tipe}}"/>
                                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                                <h5 class="event-form-title margin-bottom-20">Geser Nama Paket ke kalender Untuk menambah jadwal rapat</h5>
                                                <div id="external-events">
                                                    <div id="event_box" class="margin-bottom-10"></div>
                                                    <hr class="visible-xs" /> 
                                                </div>
                                                {{-- <input type="checkbox" class="group-checkable" id="drop-remove"  visible="false" checked="true" /> --}}
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <div id="calendar" class="has-toolbar"> </div>
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
        </div>
        <div class="modal fade" id="TambahRapat" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h3 class="modal-title"  align="center">Tambah Rapat</h3>
                    </div>
                    <div class="modal-body">
                        <form action="" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="viewnya" id="viewnya" value="1">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Lokasi_Rapat" class="control-label col-md-4">Lokasi</label>
                                            <div class="col-md-8">
                                                <input type="text" id="Lokasi_Rapat" name="Lokasi_Rapat" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Jam_Mulai" class="control-label col-md-4">Jam Mulai</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <input type="text" id="Jam_Mulai" name="Jam_Mulai" class="form-control timepicker timepicker-24">
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-clock-o"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row" align="center">
                                    <div class="col-md-12">                                    
                                        <button type="button"  class="btn blue-sharp" id="btn-simpan" data-dismiss="modal">
                                        <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                        </button>
                                        <button id="btn-batal" type="button" class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="DetailRapat" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h3 class="modal-title"  align="center">Detail Rapat</h3>
                    </div>
                    <div class="modal-body">
                        <form action="" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Tgl_Rapat_Detail" class="control-label col-md-4" >Tanggal</label>
                                            <div class="col-md-8">
                                                <input  type="text" id="Tgl_Rapat_Detail" name="Tgl_Rapat_Detail" class="form-control" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Lokasi_Rapat_Detail" class="control-label col-md-4" >Lokasi</label>
                                            <div class="col-md-8">
                                                <input  type="text" id="Lokasi_Rapat_Detail" name="Lokasi_Rapat_Detail" class="form-control" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Jam_Rapat_Detail" class="control-label col-md-4" >Jam</label>
                                            <div class="col-md-8">
                                                <input  type="text" id="Jam_Rapat_Detail" name="Jam_Rapat_Detail" class="form-control" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row" align="center">
                                    <div class="col-md-12">                                    
                                        <button type="button" class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection