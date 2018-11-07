@extends('layouts.master2')
@section('title','Realisasi Keuangan')
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
                    <small>Realisasi Keuangan</small>
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
                                    <div class="portlet light portlet-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-wallet font-dark"></i>
                                                <span class="caption-subject font-dark bold uppercase">Realisasi Keuangan</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn blue-sharp" onclick="TambahRealisasi({{$data->id_paket}});"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Tambah</a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">

                                            <div class="table-scrollable">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th> Uraian Realisasi Penggunaan Dana </th>
                                                            <th> Nominal </th>
                                                            <th> Retensi </th>
                                                            <th> Jumlah Pembayaran Dikurangi Retensi </th>
                                                            <th> Dokumen </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach( $realisasi as $real)
                                                    <?php 
                                                        $persen = ($real->retensi/100) * $real->nominal;
                                                        $kurang = $real->nominal - $persen;
                                                    ?>
                                                        <tr>
                                                            
                                                            <td> {{$real->uraian}} </td>
                                                            <td> Rp. {{ number_format($real->nominal,2,",",".")}} </td>
                                                            <td> {{$real->retensi}}%</td>
                                                            <td> Rp. {{ number_format($kurang,2,",",".")}} </td>
                                                            <td> 
                                                            <center>
                                                            <div class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                                                                <button type="button" class="btn green-jungle"><i class="icon-cloud-download"></i></button>
                                                                <button type="button" class="btn yellow-casablanca"><i class="icon-cloud-upload"></i></button>
                                                                <button type="button" class="btn grey-gallery" onclick="EditRealisasi({{$data->id_paket}},{{$real->id_uang_realisasi}});"><i class="icon-pencil"></i></button>
                                                            </div>
                                                            </center>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
<div class="modal fade bs-modal-lg" id="TambahRealisasi" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('realisasi') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idpaket" id="idpaket">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tambah Pencairan</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uraian" class="col-md-4 control-label" >Uraian</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nominal" class="col-md-4 control-label" >Nominal</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Nominal">
                                        <input type="hidden" name="nom" id="nom"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="retensi" class="col-md-4 control-label" >Retensi</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="retensi" id="retensi" placeholder="Retensi"> 
                                        <input type="hidden" name="ret" id="ret"/>
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
</div>
<div class="modal fade bs-modal-lg" id="EditRealisasi" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('realisasi/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idpaketubah" id="idpaketubah">
                    <input type="hidden" name="idreal" id="idreal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit Pencairan</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uraian_ubah" class="col-md-4 control-label" >Uraian</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="uraian_ubah" id="uraian_ubah"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nominal" class="col-md-4 control-label" >Nominal</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nominal_ubah" id="nominal_ubah">
                                        <input type="hidden" name="nom_ubah" id="nom_ubah"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="retensi" class="col-md-4 control-label" >Retensi</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="retensi_ubah" id="retensi_ubah">
                                        <input type="hidden" name="ret_ubah" id="ret_ubah"/>
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
</div>
@endsection