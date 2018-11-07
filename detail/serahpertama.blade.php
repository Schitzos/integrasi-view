@extends('layouts.master2')
@section('title','Serah Terima Pertama')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Serah Terima Pertaman</small>
                    </h1>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="page-content-inner">
                    <div class="mt-content-body">
                        @if(Auth::user()->tipe==0)
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light ">
                                    <div class="portlet-body">
                                    <form action="{{url('/pertama')}}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                                    <input type="hidden" id="idpaket" name="idpaket" value="{{$data->id_paket}}"></input>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Tgl_Serah_Pertama_1" class="control-label col-md-4" >Tgl Serah Terima 1</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Tgl_Serah_Pertama_1" name="Tgl_Serah_Pertama_1" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Tgl_Serah_Pertama_2" class="control-label col-md-4" >Tgl Serah Terima 2</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Tgl_Serah_Pertama_2" name="Tgl_Serah_Pertama_2" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Tgl_Serah_Pertama_3" class="control-label col-md-4" >Tgl Serah Terima 3</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Tgl_Serah_Pertama_3" name="Tgl_Serah_Pertama_3" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Tgl_Serah_Pertama_4" class="control-label col-md-4" >Tgl Serah Terima 4</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Tgl_Serah_Pertama_4" name="Tgl_Serah_Pertama_4" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Tgl_Serah_Pertama_5" class="control-label col-md-4" >Tgl Serah Terima 5</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Tgl_Serah_Pertama_5" name="Tgl_Serah_Pertama_5" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Tgl_Serah_Pertama_6" class="control-label col-md-4" >Tgl Serah Terima 6</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Tgl_Serah_Pertama_6" name="Tgl_Serah_Pertama_6" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nomor_Serah_Terima_1" class="control-label col-md-4" >No Serah Terima 1</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Nomor_Serah_Terima_1" name="Nomor_Serah_Terima_1" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nomor_Serah_Terima_2" class="control-label col-md-4" >No Serah Terima 2</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Nomor_Serah_Terima_2" name="Nomor_Serah_Terima_2" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nomor_Serah_Terima_3" class="control-label col-md-4" >No Serah Terima 3</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Nomor_Serah_Terima_3" name="Nomor_Serah_Terima_3" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nomor_Serah_Terima_4" class="control-label col-md-4" >No Serah Terima 4</label>
                                                        <div class="col-md-8">
                                                            <input  type="text" id="Nomor_Serah_Terima_4" name="Nomor_Serah_Terima_4" class="form-control" >
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row" align="center">
                                                <div class="col-md-12"> 
                                                    <input type="submit" name="filtertgl" formtarget='_blank' value="Cetak PDF" class="btn btn-flat red-intense"/>                              
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row" align="center">
                            <div class="col-md-12"> 
                                <a class="btn red-intense" onclick="TambahSerah({{$data->id_paket}});"><i class="fa fa-file-pdf-o"></i> Unggah Serah Terima</a>
                                <a class="btn blue-sharp" href="{{URL::to('/pertama/downloadfile/'.$data->id_paket )}}"><i class="fa fa-file-pdf-o"></i> Unduh Serah Terima</a>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<div class="modal fade bs-modal-lg" id="TambahSerah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('pertama/uplod') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idpaket" id="idpaket" value="{{$data->id_paket}}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Serah Terima Petama</h4>
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