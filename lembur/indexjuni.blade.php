@extends('layouts.app')
@section('title','Lembur Juni')
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12" align="right">
            <a  class="btn blue-sharp btn-outline" data-container="body" href="{{ URL::to('/lembur/juni/create') }}">
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
                        <i class="icon-calendar font-dark"></i>
                        <span class="caption-subject bold uppercase">Juni</span>
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
                                @if(date("m",strtotime( $dt->tgl_cetak_lembur))==1)
                                    {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Januari {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==2)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Februari {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==3)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Maret {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==4)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} April {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==5)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Mei {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==6)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Juni {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==7)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Juli {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==8)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Agustus {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==9)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} September {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==10)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Oktober {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==11)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} November {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @elseif(date('m',strtotime($dt->tgl_cetak_lembur))==12)
                                  {{ date('d',strtotime($dt->tgl_cetak_lembur)) }} Desember {{ date('Y',strtotime($dt->tgl_cetak_lembur)) }}
                                @endif
                                </td>
                                <td style="text-align:center;">
                                    <a class="btn tooltips btn-xs blue-sharp btn-outline" data-container="body" data-placement="top" data-original-title="Cetak Surat Perintah &amp; Hasil Lembur" href="{{ URL::to('lembur/juni/' . $dt->kd_lembur .'/cetak') }}" target="_blank">
                                    <i class="fa fa-print"></i>
                                    </a>&nbsp;&nbsp;
                                    <a class="btn tooltips btn-xs green-meadow btn-outline" data-container="body" data-placement="top" data-original-title="Cetak Uang &amp; Absensi Lembur" href="{{ URL::to('lembur/juni/' . $dt->kd_lembur .'/cetakmiring') }}" target="_blank">
                                    <i class="fa fa-print"></i>
                                    </a>&nbsp;&nbsp;
                                    <a class="btn tooltips btn-xs yellow-saffron btn-outline" data-container="body" data-placement="top" data-original-title="Ubah Lembur" data-toggle="modal" href="{{ URL::to('lembur/juni/' . $dt->kd_lembur .'/edit') }}">
                                    <i class="fa fa-edit"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="{{ URL::to('/lembur/juni/delete/'.$dt->kd_lembur) }}" class="btn red-intense btn-xs btn-outline" data-placement="left" data-singleton="true" data-original-title="Hapus Lembur ?" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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