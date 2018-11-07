@extends('layouts.master')
@section('title','R-3')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>R-3
                    <small>Rencana Fisik</small>
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
                                        <table class="table table-striped table-bordered table-hover order-column" id="r3_tabel">
                                            <thead>
                                                <tr>
                                                    <th>No<i class="fa sort"></i></th>
                                                    <th>Kegiatan<i class="fa sort"></i></th>
                                                    <th id="col-1" val="1">Januari (%)<i class="fa sort"></i></th>
                                                    <th id="col-2" val="2">Februari (%)<i class="fa sort"></i></th>
                                                    <th id="col-3" val="3">Maret (%)<i class="fa sort"></i></th>
                                                    <th id="col-4" val="4">April (%)<i class="fa sort"></i></th>
                                                    <th id="col-5" val="5">Mei (%)<i class="fa sort"></i></th>
                                                    <th id="col-6" val="6">Juni (%)<i class="fa sort"></i></th>
                                                    <th id="col-7" val="7">Juli (%)<i class="fa sort"></i></th>
                                                    <th id="col-8" val="8">Agustus (%)<i class="fa sort"></i></th>
                                                    <th id="col-9" val="9">September (%)<i class="fa sort"></i></th>
                                                    <th id="col-10" val="10">Oktober (%)<i class="fa sort"></i></th>
                                                    <th id="col-11" val="11">November (%)<i class="fa sort"></i></th>
                                                    <th id="col-12" val="12">Desember (%)<i class="fa sort"></i></th>
                                                    <th>Sisa (%)<i class="fa sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody id="R3Body">
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
                                                </form>
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