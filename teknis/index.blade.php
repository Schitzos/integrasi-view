@extends('layouts.app')
@section('title','Honor Pelaksana Teknis')
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12" align="right">
            <a  class="btn blue-sharp btn-outline" data-container="body" href="{{ URL::to('/teknis/create') }}">
                <i class="fa fa-plus-square"></i>&nbsp;Tambah
            </a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-envelope font-dark"></i>
                        <span class="caption-subject bold uppercase">Honor Pelaksana Teknis</span>
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="lembur">
                        <thead>
                            <tr>
                                <th style="text-align:center;">No</th>
                                <th style="text-align:center;">PPTK</th>
                                <th style="text-align:center;">Kegiatan</th>
                                <th style="text-align:center;">Tanggal Cetak</th>
                                <th style="text-align:center;">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach($data as $dt)
                            <tr>
                                <td style="text-align:center;">{{$i}}</td>
                                <td style="text-align:left;">{{$dt->nama_pegawai}}</td>
                                <td style="text-align:left;">{{$dt->uraian_kegiatan}}</td>
                                <td style="text-align:center;">
                                @if(date("m",strtotime( $dt->tgl_cetak_honor))==1)
                                    {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Januari {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==2)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Februari {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==3)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Maret {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==4)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} April {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==5)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Mei {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==6)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Juni {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==7)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Juli {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==8)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Agustus {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==9)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} September {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==10)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Oktober {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==11)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} November {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_honor))==12)
                                  {{ date('d',strtotime($dt->tgl_cetak_honor)) }} Desember {{ date('Y',strtotime($dt->tgl_cetak_honor)) }}
                                @endif
                                </td>
                                <td style="text-align:center;">
                                    <a class="btn tooltips btn-xs blue-sharp btn-outline" data-container="body" data-placement="top" data-original-title="Cetak Honor" href="{{ URL::to('teknis/' . $dt->kd_honor .'/cetak') }}" target="_blank">
                                    <i class="fa fa-print"></i>
                                    </a>
                                    <a class="btn tooltips btn-xs yellow-saffron btn-outline" data-container="body" data-placement="top" data-original-title="Ubah Honor" data-toggle="modal" href="{{ URL::to('teknis/' . $dt->kd_honor .'/edit') }}">
                                    <i class="fa fa-edit"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="{{ URL::to('/teknis/delete/'.$dt->kd_honor) }}" class="btn red-intense btn-xs btn-outline" data-placement="left" data-singleton="true" data-original-title="Hapus Honor ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
                                    <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection