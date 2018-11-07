@extends('layouts.master')
@section('title','Kegiatan')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
<div class="page-head">
<div class="container">
<div class="page-title">
<h1>DPA
<small>Daftar DPA</small>
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
<div class="portlet light">
<div class="portlet-title">
<div class="caption caption-md">
<i class="icon-bar-chart font-dark hide"></i>
<button class="btn green-meadow" onclick="UploadDPA();"><i class="fa fa-file"></i>&nbsp;Upload DPA</button>
<a href="{{ URL::to('/kegiatan/hapusdpa/'.$kegiatan->id_kegiatan) }}" class="btn red-intense">
    <i class="fa fa-trash"></i>&nbsp;Reset
    </a>
<a href="{{ URL::to('/kegiatan') }}" class="btn red-intense">
    <i class="fa fa-angle-double-left"></i>&nbsp;Kembali
    </a>
</div>
<div class="actions">
<div class="btn-group">
</div>
</div>
</div>
<div class="portlet-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="id_program" class="control-label col-md-2">Kode Program</label>
                <div class="col-md-8">                                            
                    <input type="text" id="id_program" name="id_program" class="form-control" value="{{ $kegiatan->id_program }}" readonly/>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nama_program" class="control-label col-md-2">Nama Program</label>
                <div class="col-md-8">                                            
                    <input type="text" id="nama_program" name="nama_program" class="form-control" value="{{ $kegiatan->nama_program }}" readonly/>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="id_kegiatan" class="control-label col-md-2">Kode Kegiatan</label>
                <div class="col-md-8">                                            
                    <input type="text" id="id_kegiatan" name="id_kegiatan" class="form-control" value="{{ $kegiatan->id_kegiatan }}" readonly/>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nama_kegiatan" class="control-label col-md-2">Nama Kegiatan</label>
                <div class="col-md-8">                                            
                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" readonly/>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <input type="hidden" id="_token" value="{{ csrf_token() }}">
<table class="table table-striped table-bordered table-hover order-column">
<thead>
<tr>                                                            
<th style="text-align:center;">No</th>
<th style="text-align:center;">Rekening</th>
<th style="text-align:center;">Uraian</th>
<th style="text-align:center;">Volume</th>
<th style="text-align:center;">Nilai</th>
<th style="text-align:center;">Tindakan</th>
</tr>
</thead>
<tbody id="DPABody">
    @php
        $i=1;
    @endphp
    @foreach ($data as $dt)
    <tr>
        <td  style="text-align:center;vertical-align:middle;">{{ $i }}
            <input type="hidden" id="iddpa_{{ $i }}" value="{{ $dt->id_dpa }}"/>
        </td>
        <td  style="text-align:left;vertical-align:middle;">{{ $dt->rekening }}</td>
        <td  style="text-align:left;vertical-align:middle;">{{ $dt->uraian }}</td>
        <td  style="text-align:left;vertical-align:middle;">{{ $dt->volume }}</td>
        <td  style="text-align:right;vertical-align:middle;">{{ number_format($dt->nilai,2,",",".") }}</td>
        <td  style="text-align:center;vertical-align:middle;width:100px">??????</td>
    </tr>
    @php
        $i++;
    @endphp
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
<div class="modal fade bs-modal-lg" id="UploadDPA" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('kegiatan/unggahdpa') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idkegiatan" id="idkegiatan" value="{{ $kegiatan->id_kegiatan }}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Unggah DPA</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fileexcel1" class="col-md-4 control-label" >Berkas Excel</label>
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
</div>
</div>
@endsection