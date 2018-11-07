@extends('layouts.master')
@section('title','Jadwal Pengisian')
@section ('content')
<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box" style="min-height: 67vh;">
                        <header>
                            <h5>Jadwal Pengisian</h5>
                        </header>
                        <div id="div-2" class="body">
                            <form class="form-horizontal" action="{{ URL::to('jadwal') }}" role="form" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" id="jadwalid" name="jadwalid" value="{{$data->id_jadwal}}"/>
                                <input type="hidden" id="tutup" name="tutup" value="{{$data->tutup}}"/>
                                <div class="form-group" style="text-align: center;">
                                    @if($data->tutup==0)
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-times"></i>&nbsp;&nbsp;Tutup</button>
                                    @else
                                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Buka</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
