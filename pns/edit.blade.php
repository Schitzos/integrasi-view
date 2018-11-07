@extends('layouts.app')
@section('title', 'Ubah Honor Non PNS')
@section('content')
<div class="page-content">
    <form action="{{ url('pns/update') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" id="IdHonor" name="IdHonor" value="{{$data->kd_honor}}"/>
        <input type="hidden" id="conternya" name="conternya" value="0"/>
        <input type="hidden" id="JmlPegawai" name="JmlPegawai" value="{{$jmlpegawai->jml}}"/>
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
                                                    @if($data->kd_kegiatan==$k->kd_kegiatan)                                      
                                                        <option value="{{$k->kd_kegiatan}}" selected>{{$k->uraian_kegiatan}}</option>
                                                    @else
                                                        <option value="{{$k->kd_kegiatan}}">{{$k->uraian_kegiatan}}</option>
                                                    @endif
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
                                                @foreach($rekening as $r)
                                                    @if($data->kd_rekening==$r->kd_rekening)                                       
                                                        <option value="{{$r->kd_rekening}}" selected>{{$r->nama_rekening}} ({{$r->kurung_rekening}})</option>
                                                    @else
                                                        <option value="{{$r->kd_rekening}}">{{$r->nama_rekening}} ({{$r->kurung_rekening}})</option>
                                                    @endif
                                                @endforeach                                                     
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="Tgl_PNS" class="control-label col-md-2" style="color:#555555;">Tanggal</label>
                                        <div class="col-md-6">
                                            <input type="text" id="Tgl_PNS" name="Tgl_PNS" class="form-control" value="{{date('d F Y',strtotime($data->tgl_cetak_honor))}}" />
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
                        <a  class="btn blue-sharp btn-outline pull-right" data-container="body" onClick="tambahteknisubah('DinamikInputEdit');">
                            <i class="fa fa-plus-square"></i>&nbsp;Tambah Pegawai
                        </a>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body" id="DinamikInputEdit"></div>
                        <div class="form-actions">
                            <div class="row" align="center">
                                <div class="col-md-12">                                    
                                    <button type="submit" class="btn blue-sharp">
                                        <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                    </button>
                                    <a class="btn red-intense" href="{{ URL::to('/pns') }}">
                                        <i class="fa fa-times"></i>&nbsp;Batal
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection