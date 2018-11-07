@extends('layouts.master2')
@section('title','Gantt Chart')
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
                    <small>Gantt Chart RAB</small>
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
                            <div class="portlet light ">
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label style="text-align: center;">Keterangan Gambar : </label>
                                            </div>
                                            <div class="col-md-10">
                                                <label style="background-color: #90a09e;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <label >Rencana</label>
                                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <label style="background-color: #ffe9d0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <label >Realisasi</label>
                                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <label style="background-color: #e9d8be;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <label >Overlapping Rencana Dengan Realisasi</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" id="idyek" name="idyek" value="{{$data->id_paket}}"></input>
                                            <div id="chartdivGant"></div>
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
</div>
@endsection