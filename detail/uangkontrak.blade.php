@extends('layouts.master2')
@section('title','Uang Kontrak')
@section('content')
<div class="page-container">
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <!-- BEGIN PAGE HEAD-->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Nilai Kontrak</small>
                    </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="mt-content-body">
                    <div class="row">
                    	<!-- PROGRAM & KEGIATAN -->
                        <div class="col-md-12 col-sm-12">
                            <div class="portlet light">
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;"> No </th>
                                                <th style="text-align: center;"> Uraian </th>
                                                <th style="text-align: center;"> Nominal Kontrak </th>
                                                <th style="text-align: center;"> Nomor Kontrak </th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1;?>
                                            <tr>
                                                <td style="text-align: center;">{{$i}}</td>
                                                <td style="text-align: left;">Kontrak</td>
                                                <td style="text-align: right;">{{number_format($data->nilai_paket,2,",",".")}}</td>
                                                <td style="text-align: left;">{{$data->nomor_kontrak}}</td>
                                            </tr>
                                            <?php $no=$i+1;?>
                                            @foreach($adendum as $a)
                                            <tr>
                                                <td style="text-align: center;">{{$no}}</td>
                                                <td style="text-align: left;">Addendum {{$i}}</td>
                                                <td style="text-align: right;">{{number_format($a->nilai_kontrak_adendum,2,",",".")}}</td>
                                                <td style="text-align: left;">{{$a->no_kontrak_adendum}}</td>
                                            </tr>
                                            <?php $i++;$no++;?>
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
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
</div>
@endsection