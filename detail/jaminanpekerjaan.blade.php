@extends('layouts.master2')
@section('title','Jaminan Pekerjaan')
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
                <h1>Jaminan
                    <small>Jaminan Pelaksanaan</small>
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
                            <div class="portlet box blue">
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="portlet light portlet-fit ">
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th> Uraian </th>
                                                            <th> Nominal </th>
                                                            <th> Tanggal Mulai Berlaku </th>
                                                            <th> Tanggal Jatuh Tempo </th>
                                                            <th> Dokumen </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Jaminan Pelaksanaan </td>
                                                            <td>  </td>
                                                            <td> 
                                                                <center><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></center> 
                                                            </td>
                                                            <td> 
                                                                <center><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></center>
                                                            </td>
                                                            <td> 
                                                            <center>
                                                            <div class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                                                                <button type="button" class="btn green-jungle"><i class="icon-cloud-download"></i></button>
                                                                <button type="button" class="btn yellow-casablanca"><i class="icon-cloud-upload"></i></button>
                                                                <button type="button" class="btn grey-gallery" data-toggle="modal" href="#preview"><i class="icon-eye"></i></button>
                                                            </div>
                                                            </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Jaminan Uang Muka </td>
                                                            <td> Rp. 15.000.000,- </td>
                                                            <td> 
                                                                <center><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></center> 
                                                            </td>
                                                            <td> 
                                                                <center><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></center>
                                                            </td>
                                                            <td>
                                                            <center>
                                                            <div class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                                                                <button type="button" class="btn green-jungle"><i class="icon-cloud-download"></i></button>
                                                                <button type="button" class="btn yellow-casablanca"><i class="icon-cloud-upload"></i></button>
                                                                <button type="button" class="btn grey-gallery" data-toggle="modal" href="#preview"><i class="icon-eye"></i></button>
                                                            </div>
                                                            </center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Jaminan Pemeliharaan </td>
                                                            <td> Rp. 15.000.000,- </td>
                                                            <td> 
                                                                <center><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></center> 
                                                            </td>
                                                            <td> 
                                                                <center><button class="btn default" type="button"><i class="fa fa-calendar"></i></button></center>
                                                            </td>
                                                            <td>
                                                            <center>
                                                            <div class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                                                                <button type="button" class="btn green-jungle"><i class="icon-cloud-download"></i></button>
                                                                <button type="button" class="btn yellow-casablanca"><i class="icon-cloud-upload"></i></button>
                                                                <button type="button" class="btn grey-gallery" data-toggle="modal" href="#preview"><i class="icon-eye"></i></button>
                                                            </div>
                                                            </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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