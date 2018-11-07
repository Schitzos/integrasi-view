@extends('layouts.master')
@section('title','P-1')
@section ('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>P-1
                        <small>Daftar P-1</small>
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
                                        <div class="caption caption-md"></div>
                                        <div class="actions">
                                            <div class="btn-group"></div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Bindang-P1" class="control-label col-lg-3">Bidang</label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2" id="Bidang-P1" name="Bidang-P1" style="width: 100%;">
                                                            @if($bidange=="")
                                                                <option value="0" selected>Semua Bidang</option>
                                                                @foreach($bidang as $b)
                                                                    <option value="{{$b->id_bidang}}">{{$b->nama_bidang}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="0">Semua Bidang</option>
                                                                @foreach($bidang as $b)
                                                                    @if($bidange==$b->id_bidang)
                                                                        <option value="{{$b->id_bidang}}" selected>{{$b->nama_bidang}}</option>
                                                                    @else
                                                                        <option value="{{$b->id_bidang}}" >{{$b->nama_bidang}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Kegiatan-P1" class="control-label col-lg-3">Kegiatan</label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2" id="Kegiatan-P1" name="Kegiatan-P1" style="width: 100%;">
                                                        @if($kegiatanne=="")
                                                            <option value="0" selected>Semua Kegiatan</option>
                                                            @foreach($kegiatan as $k)
                                                                <option value="{{$k->id_kegiatan}}">{{$k->nama_kegiatan}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="0">Semua Kegiatan</option>
                                                            @foreach($kegiatan as $k)
                                                                @if($kegiatanne==$k->id_kegiatan)
                                                                    <option value="{{$k->id_kegiatan}}" selected>{{$k->nama_kegiatan}}</option>
                                                                @else
                                                                    <option value="{{$k->id_kegiatan}}" >{{$k->nama_kegiatan}}</option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Kegiatan-P1" class="control-label col-lg-3">Bulan</label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2" id="Bulan-P1" name="Bulan-P1" style="width: 100%;">
                                                            @if($bulane=="")
                                                                <option value="0" selected>Semua Bulan</option>
                                                                @foreach($bulan as $b)
                                                                    <option value="{{$b->kode_bulan}}">{{$b->nama_bulan}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="0">Semua Bulan</option>
                                                                @foreach($bulan as $b)
                                                                    @if($bulane==$b->kode_bulan)
                                                                        <option value="{{$b->kode_bulan}}" selected>{{$b->nama_bulan}}</option>
                                                                    @else
                                                                        <option value="{{$b->kode_bulan}}">{{$b->nama_bulan}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <header><h4 style="text-align:center;">P-1</h4></header>        
                                            </div>        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <header><h4 style="text-align:center;">{{$judule}}</h4></header>        
                                            </div>        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12" style="overflow-x:scroll;">
                                                <table class="table table-bordered sortableTable responsive-table" style="font-size: 0.7em;" id="p1_table">
                                                    <thead>
                                                        <tr>
                                                        <th style="text-align: center;">Kode</th>
                                                        <th style="text-align: center;">Program | Kegiatan | Paket</th>
                                                        <th style="text-align: center;">Pagu</th>
                                                        <th style="text-align: center;">Sisa Anggaran</th>
                                                        <th style="text-align: center;">Nilai Kontrak</th>
                                                        <th style="text-align: center;">Tgl Mulai</th>
                                                        <th style="text-align: center;">Tgl Selesai</th>
                                                        <th style="text-align: center;">Penyedia Jasa</th>
                                                        <th style="text-align: center;">Nomor Kontrak</th>
                                                        <th style="text-align: center;">Progress Fisik (%)</th>
                                                        <th style="text-align: center;">Progress Keuangan (Rp)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $i=1; @endphp
                                                        @foreach($program as $pr)
                                                            <tr>
                                                                <td style="text-align: left;">{{$pr->id_program}}</td>
                                                                <td>{{$pr->nama_program}}</td>
                                                                <td style="text-align: right;">{{ number_format($pr->pagu,2,",",".")}}</td>
                                                                <td style="text-align: right;">{{ number_format($pr->pagu-($pr->nilai_kontrak+$pr->progres_keuangan),2,",",".")}}</td>
                                                                <td style="text-align: right;">{{ number_format($pr->nilai_kontrak,2,",",".")}}</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            @foreach($datkeg as $dk)
                                                                @if($pr->id_program==$dk->id_program)
                                                                    <tr>
                                                                        <td style="text-align: left;">{{$dk->id_kegiatan}}</td>
                                                                        <td>{{$dk->nama_kegiatan}}</td>
                                                                        <td style="text-align: right;">{{ number_format($dk->pagu,2,",",".")}}</td>
                                                                        <td style="text-align: right;">{{ number_format($dk->pagu-($dk->nilai_kontrak+$dk->progres_keuangan),2,",",".")}}</td>
                                                                        <td style="text-align: right;">{{ number_format($dk->nilai_kontrak,2,",",".")}}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    @php $k=1; @endphp
                                                                    @foreach($paket as $p)
                                                                        @if($dk->id_kegiatan==$p->id_kegiatan)
                                                                            <tr>
                                                                                <td style="text-align: center;">
                                                                                {{$p->rekening}}
                                                                                </td>
                                                                                <td>{{ $p->uraian}}</td>
                                                                                <td style="text-align: right;">{{ number_format($p->pagu,2,",",".")}}</td>
                                                                                <td style="text-align: right;">{{ number_format($p->pagu-($p->nilai_kontrak+$p->progres_keuangan),2,",",".")}}</td>
                                                                                <td style="text-align: right;">{{ number_format($p->nilai_kontrak,2,",",".")}}</td>
                                                                                <td style="text-align: left;">
                                                                                    @if($p->mulai!=null||$p->mulai!='')
                                                                                        {{ date('d F Y',strtotime($p->mulai))}}
                                                                                    @else - 
                                                                                    @endif
                                                                                </td>
                                                                                <td style="text-align: left;">
                                                                                    @if($p->selesai!=null||$p->selesai!='')
                                                                                        {{ date('d F Y',strtotime($p->selesai)) }}
                                                                                    @else - 
                                                                                    @endif
                                                                                </td>
                                                                                <td style="text-align: left;">{{ $p->nama_konsultan.' '.$p->nama_kontraktor}}</td>
                                                                                <td style="text-align: left;">{{$p->nomor_kontrak}}</td>
                                                                                <td style="text-align: center;">{{$p->progres_fisik}}</td>
                                                                                <td style="text-align: right;">{{ number_format($p->progres_keuangan,2,",",".")}}</td>
                                                                            </tr>
                                                                            @php$i++;$k++;@endphp
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
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
    </div>
</div>
@endsection
