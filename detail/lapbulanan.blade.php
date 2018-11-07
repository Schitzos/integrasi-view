@extends('layouts.master2')
@section('title','Laporan BUlanan')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Laporan Bulanan</small>
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Bulan" class="control-label col-md-4">Pilih Bulan</label>
                                                    <div class="col-md-5"> 
                                                        <select name="Bulan" id="Bulan" class="select2 form-control">
                                                            <option value="0">Semua</option>
                                                            <?php $i=1;?>
                                                            @foreach($jadwal as $j)
                                                                @if($j->bulan==1)
                                                                    <option value="{{$j->bulan}}">Januari (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==2)
                                                                    <option value="{{$j->bulan}}">Februari (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==3)
                                                                    <option value="{{$j->bulan}}">Maret (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==4)
                                                                    <option value="{{$j->bulan}}">April (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==5)
                                                                    <option value="{{$j->bulan}}">Mei (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==6)
                                                                    <option value="{{$j->bulan}}">Juni (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==7)
                                                                    <option value="{{$j->bulan}}">Juli (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==8)
                                                                    <option value="{{$j->bulan}}">Agustus (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==9)
                                                                    <option value="{{$j->bulan}}">September (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==10)
                                                                    <option value="{{$j->bulan}}">Oktober (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==11)
                                                                    <option value="{{$j->bulan}}">November (Bulan Ke - {{$i}})</option>
                                                                @elseif($j->bulan==12)
                                                                    <option value="{{$j->bulan}}">Desember (Bulan Ke - {{$i}})</option>
                                                                @endif
                                                            <?php $i++;?>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <input type="hidden" name="idpro" id="idpro" value="{{$data->id_paket}}"></input>
                                                    <a class="btn green meadow" onclick="UnduhBulanan();">Unduh Laporan Bulanan</a> 
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
    </div>
</div>
@endsection