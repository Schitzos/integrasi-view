@extends('layouts.master2')
@section('title','From Pengendalian')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_proyek}}
                        <small>Formulir Pengendalian Kontruksi</small>
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
                                            <div class="col-md-12">
                                                @if(Auth::user()->tipe==0)
                                                    <a class="btn green meadow" onclick="TambahSOP({{$data->id_proyek}});">Upload SOP</a>
                                                @else
                                                    <a class="btn green meadow" onclick="UnduhSOP({{$data->id_proyek}});">Download SOP</a>
                                                @endif
                                                <a href="{{ URL::to('/pengendalian/unduh/'.$data->id_proyek) }}" class="btn green meadow">Unduh Form Pengendalian Kontruksi</a>
                                            </div>
                                        </div>
                                        <br/>
                                        <br/>
                                        <div class="row">
                                            <div class="cbp-item graphic col-md-12">
                                                <div class="cbp-caption">
                                                    <div class="cbp-caption-defaultWrap">
                                                        <?php $path1 = 'images/dokumentasi/'.$data->id_proyek.'/pelaksanaan/SOPPEKERJAAN_'.$data->id_proyek.'.xls'; ?>
                                                        <?php $path2 = 'images/dokumentasi/'.$data->id_proyek.'/pelaksanaan/SOPPEKERJAAN_'.$data->id_proyek.'.xlsx'; ?>
                                                        @if(File::exists($path1))
                                                                <iframe src="http://view.officeapps.live.com/op/view.aspx?src=simultipro.com/images/dokumentasi/{{$data->id_proyek}}/pelaksanaan/SOPPEKERJAAN_{{$data->id_proyek}}.xls" alt="" height="600px" width="100%"></iframe>
                                                        @else
                                                            @if(File::exists($path2))
                                                                <iframe src="http://view.officeapps.live.com/op/view.aspx?src=simultipro.com/images/dokumentasi/{{$data->id_proyek}}/pelaksanaan/SOPPEKERJAAN_{{$data->id_proyek}}.xlsx" alt="" height="600px" width="100%"></iframe>
                                                            @else
                                                                <iframe src="{{ asset('/images/dokumentasi/'.$data->id_proyek.'/pelaksanaan/SOPPEKERJAAN_'.$data->id_proyek.'.pdf')}}" alt="" height="600px" width="100%"></iframe>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">SOP Pekerjaan
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
<div class="modal fade" id="TambahSOP" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('pengendalian') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idproyek" id="idproyek">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah SOP Pekerjaan</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Nama_File" class="col-md-4 control-label" >Nama File</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Nama_File" id="Nama_File"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gambar1" class="col-md-4 control-label" >Berkas File</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="gambar1" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="gambar1" type='file' onchange="readURL(this);" />
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