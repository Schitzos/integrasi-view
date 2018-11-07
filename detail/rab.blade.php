@extends('layouts.master2')
@section('title','RAB')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>RAB</small>
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
                                            <div class="col-md-2">
                                                <a class="btn green meadow" onclick="TambahKontrakRAB({{$data->id_paket}});">Unggah RAB Kontrak</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="btn green meadow" onclick="TambahRAB({{$data->id_paket}});">Unggah Volume RAB</a>
                                            </div>
                                            {{--  <div class="col-md-4" align="right">
                                                <a class="btn green meadow" onclick="TambahJenis({{$data->id_paket}});">Unggah Progres RAB</a>
                                            </div>
                                            <div class="col-md-4" align="right">
                                                <a class="btn green meadow" onclick="TambahRencana({{$data->id_paket}});">Unggah Rencana RAB</a>
                                            </div>  --}}
                                        </div>
                                        <br/>
                                        <br/>
                                        <div class="row">
                                            <div class="cbp-item graphic col-md-12">
                                                <div class="cbp-caption">
                                                    <div class="cbp-caption-defaultWrap">
                                                        <?php $path1 = 'images/dokumentasi/'.$data->id_paket.'/rab/RABKONTRAK_'.$data->id_paket.'.xls'; ?>                                                       
                                                        @if(File::exists($path1))
                                                                <iframe src="https://view.officeapps.live.com/op/view.aspx?src=http://118.97.232.142/public/dokumentasi/{{  $data->id_paket }}/rab/RABKONTRAK_{{ $data->id_paket }}.xls" alt="" height="600px" width="100%"></iframe>
                                                        @else
                                                                <iframe src="https://view.officeapps.live.com/op/view.aspx?src=http://118.97.232.142/public/images/dokumentasi/{{ $data->id_paket}}/rab/RABKONTRAK_{{ $data->id_paket}}.xlsx" alt="" height="600px" width="100%"></iframe>
                                                        @endif
                                                        {{-- @if(File::exists($path1))
                                                                <iframe src="https://docs.google.com/a/118.97.232.142:1996/public/viewer?url=http://118.97.232.142:1996/public/images/dokumentasi/{{$data->id_paket}}/rab/RABKONTRAK_{{$data->id_paket}}.xls" alt="" height="600px" width="100%"></iframe>
                                                        @else
                                                                <iframe src="https://docs.google.com/a/118.97.232.142:1996/public/viewer?url=http://118.97.232.142:1996/public/images/dokumentasi/{{$data->id_paket}}/rab/RABKONTRAK_{{$data->id_paket}}.xlsx" alt="" height="600px" width="100%"></iframe>
                                                        @endif --}}
                                                    </div>
                                                </div>
                                                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">RAB Kontrak
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
<div class="modal fade bs-modal-lg" id="TambahKontrakRAB" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('rab/kontrak') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket0" id="idpaket0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah RAB Kontrak</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fileexcel0" class="col-md-4 control-label" >Berkas Kontrak</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="fileexcel0" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="fileexcel0" type='file'/>
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
<div class="modal fade bs-modal-lg" id="TambahRAB" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('rab') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah RAB</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fileexcel" class="col-md-4 control-label" >Berkas RAB</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="fileexcel" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="fileexcel" type='file'/>
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
<div class="modal fade bs-modal-lg" id="TambahJenis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('isian/jenis') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket1" id="idpaket1">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Form</h4>
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
                    <h4 class="modal-title">Unggah Rencana</h4>
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