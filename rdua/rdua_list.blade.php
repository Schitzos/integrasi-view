@extends('layouts.master')
@section('title','R-2')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>R-2
                    <small>Rencana Keuangan</small>
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
                                        <div class="caption caption-md" style="float: right">
                                            <a class="btn yellow-crusta" data-container="body" href="{{ URL::to('/rduatiga/cetaknya') }}">
                                            <i class="fa fa-print"></i>&nbsp;Cetak
                                            </a>
                                        </div>
                                        {{-- <div class="caption caption-md">
                                            <a  class="btn blue-madison" data-container="body" href="{{ URL::to('/rdua/create') }}">
                                            <i class="fa fa-plus-square"></i>&nbsp;Tambah R-2
                                            </a>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover order-column" id="r2_tabel">
                                            <thead>
                                                <tr>
                                                    <th style="display: none;">ID</th>
                                                    <th>No<i class="fa sort"></i></th>
                                                    <th>Kegiatan<i class="fa sort"></i></th>
                                                    <th>Januari (%)<i class="fa sort"></i></th>
                                                    <th>Februari (%)<i class="fa sort"></i></th>
                                                    <th>Maret (%)<i class="fa sort"></i></th>
                                                    <th>April (%)<i class="fa sort"></i></th>
                                                    <th>Mei (%)<i class="fa sort"></i></th>
                                                    <th>Juni (%)<i class="fa sort"></i></th>
                                                    <th>Juli (%)<i class="fa sort"></i></th>
                                                    <th>Agustus (%)<i class="fa sort"></i></th>
                                                    <th>September (%)<i class="fa sort"></i></th>
                                                    <th>Oktober (%)<i class="fa sort"></i></th>
                                                    <th>November (%)<i class="fa sort"></i></th>
                                                    <th>Desember (%)<i class="fa sort"></i></th>
                                                    <th>Sisa (%)<i class="fa sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody id="R2Body">
                                                @php
                                                    $i =1;    
                                                @endphp
                                                @foreach ($data as $dt)
                                                <tr>
                                                    <td style="display: none;">{{ $dt->id_kegiatan}}</td>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $dt->nama_kegiatan }}</td>
                                                    <td style="text-align: center">{{ $dt->Januari }}</td>
                                                    <td style="text-align: center">{{ $dt->Februari }}</td>
                                                    <td style="text-align: center">{{ $dt->Maret }}</td>
                                                    <td style="text-align: center">{{ $dt->April }}</td>
                                                    <td style="text-align: center">{{ $dt->Mei }}</td>
                                                    <td style="text-align: center">{{ $dt->Juni }}</td>
                                                    <td style="text-align: center">{{ $dt->Juli }}</td>
                                                    <td style="text-align: center">{{ $dt->Agustus }}</td>
                                                    <td style="text-align: center">{{ $dt->September }}</td>
                                                    <td style="text-align: center">{{ $dt->Oktober }}</td>
                                                    <td style="text-align: center">{{ $dt->November }}</td>
                                                    <td style="text-align: center">{{ $dt->Desember }}</td>
                                                    <td style="text-align: center">{{ $dt->sisa }}</td>
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
</div>
@endsection