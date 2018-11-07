@extends('layouts.app')
@section('title', 'Tambah Honor Teknis')
@section('content')
<div class="page-content">
    <form action="{{ url('teknis') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" id="JmlPegawai" name="JmlPegawai" value="0"/>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title"><div class="caption"><i class="icon-film font-dark"></i>Kegiatan &amp; Rekening</div></div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">                                   
                                        <label for="Kegiatan" class="control-label col-md-2" style="color:#555555;">Kegiatan</label>
                                        <div class="col-md-10">
                                            <select id="Kegiatan" name="Kegiatan" class="select2 form-control">
                                                <option value="">Pilih Kegiatan</option>
                                                @foreach($kegiatan as $k)                                        
                                                    <option value="{{$k->kd_kegiatan}}">{{$k->uraian_kegiatan}}</option>
                                                @endforeach                                                  
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">                                   
                                        <label for="Rekening" class="control-label col-md-2" style="color:#555555;">Rekening</label>
                                        <div class="col-md-10">
                                            <select id="Rekening" name="Rekening" class="select2 form-control">
                                                <option value="">Pilih Rekening</option>
                                                @foreach($rekeknig as $r)                                        
                                                    <option value="{{$r->kd_rekening}}">{{$r->nama_rekening}} ({{$r->kurung_rekening}})</option>
                                                @endforeach                                                     
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="Tgl_Teknis" class="control-label col-md-2" style="color:#555555;">Tanggal</label>
                                        <div class="col-md-6">
                                            <input type="text" id="Tgl_Teknis" name="Tgl_Teknis" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title"><div class="caption"><i class="icon-user font-dark"></i>Pegawai &amp; Uang Honor</div>
                        <a  class="btn blue-sharp btn-outline pull-right" data-container="body" onClick="tambahteknis('DinamikInput');">
                            <i class="fa fa-plus-square"></i>&nbsp;Tambah Pegawai
                        </a>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body" id="DinamikInput"></div>
                    </div>
                    <div class="form-actions">
                            <div class="row" align="center">
                                <div class="col-md-12">                                    
                                    <button type="submit" class="btn blue-sharp">
                                        <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                    </button>
                                    <a class="btn red-intense" href="{{ URL::to('/teknis') }}">
                                        <i class="fa fa-times"></i>&nbsp;Batal
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection