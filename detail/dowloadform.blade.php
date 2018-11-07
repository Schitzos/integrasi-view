@extends('layouts.master2')
@section('title','RAB')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Dowload Form</small>
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
                                        <h4 align="center">SOP</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <a href="{{ URL::to('/pengendalian/unduh/'.$data->id_paket) }}" class="btn green-meadow"><i class="fa fa-file-excel-o"></i> Unduh Form Pengendalian Kontruksi</a>                                                
                                            </div>
                                        </div>
                                        <hr/>
                                        <h4 align="center">Form Progress</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a class="btn green-meadow" href="{{URL::to('isian/form/'.$data->id_paket)}}"><i class="fa fa-file-excel-o"></i> Unduh Isian Progress Mingguan</a>
                                            </div>
                                        </div>
                                        <hr/>
                                        <h4 align="center">Form Laporan Harian</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="idpro" id="idpro" value="{{$data->id_paket}}"></input>
                                                <a href="{{URL::to('lapharian/unduh/'.$data->id_paket)}}" class="btn green-meadow"><i class="fa fa-file-excel-o"></i> Unduh Form Laporan Harian</a>
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
<div class="modal fade bs-modal-lg" id="TambahJenis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('isian/jenis') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket1" id="idpaket1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Isian Realisasi</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fileexcel1" class="col-md-4 control-label" >Berkas Form</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="fileexcel1" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="fileexcel1" type='file'/>
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
        <!-- /.modal-content -->
    </div>
</div>
<div class="modal fade bs-modal-lg" id="TambahRencana" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('isian/rencana') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket2" id="idpaket2">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Isian Rencana</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fileexcel2" class="col-md-4 control-label" >Berkas Form</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="fileexcel2" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="fileexcel2" type='file'/>
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