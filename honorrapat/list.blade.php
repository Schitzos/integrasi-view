@extends('layouts.master')
@section('title','List Honor Rapat')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>List Honor
                    <small>Rapat</small>
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
                                    <form action="{{ url('honorrapat/list/list_simpan/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="jmlData" value="{{ $jumlah }}">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <button style="float: right" type="submit" class="btn blue-sharp">
                                                <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                            </button><br><br>
                                        </div>
                                        {{-- <div class="actions">
                                            <div class="btn-group">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover order-column">
                                            <thead>
                                                <tr>
                                                    <th>No<i class="fa sort"></i></th>
                                                    <th>Golongan<i class="fa sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i =1;    
                                                @endphp
                                                @foreach ($data as $dt)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                            <input type="hidden" name="idpeserta{{ $i }}" value="{{ $dt->id_peserta }}">
                                                            <select style="color:#009dc7;" name="gol{{ $i }}" class="select2 form-control" required>
                                                                <option style="color:#009dc7;" value="">Pilih Golongan</option>
                                                                @foreach($golongan as $gol)                                     
                                                                <option style="color:#009dc7;" value="{{ $gol->id_golongan }}" @if($dt->golongan == $gol->id_golongan) selected @endif>{{ $gol->nama_golongan }}</option> 
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @php
                                                    $i++;
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    </form>
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
@section('skrip')

@endsection