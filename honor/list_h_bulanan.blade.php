@extends('layouts.master')
@section('title','List Honor BULANAN')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>List Honor
                    <small>BULANAN</small>
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
                                        <div class="caption caption-md">
                                            <button style="float: left" class="btn blue-sharp" onclick="Tambah_h_bulanan_list();">
                                                <i class="fa fa-hdd-o"></i>&nbsp;Tambah
                                            </button>&nbsp;&nbsp;&nbsp;
                                            <a href="{{ url('/honor/bulanan') }}" style="float: right" class="btn red">
                                                <i class="glyphicon glyphicon-circle-arrow-left"></i>&nbsp;Kembali
                                            </a><br><br>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover order-column">
                                            <thead>
                                                <tr>
                                                    <th>No<i class="fa sort"></i></th>
                                                    <th>Nama Pegawai<i class="fa sort"></i></th>
                                                    <th>Honor<i class="fa sort"></i></th>
                                                    <th>Aksi<i class="fa sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i =1;    
                                                @endphp
                                                @foreach ($data as $dt)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $dt->nama_pegawai }}</td>
                                                    <td>{{ number_format($dt->honor,2,",",".") }}</td>
                                                    <td style="text-align: center;">
                                                        <a class="btn tooltips green-jungle btn-xs" title="Ubah" onclick="EditListBULANAN({{ $dt->id_l_bulanan }});" ><i class="fa fa-edit"></i></a>
                                                        <a href="{{ URL::to('/honor/bulanan/list/delete/' . $dt->id_l_bulanan. '/' . $idnya->id_bulanan) }}" class="btn red-mint btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
                                                        <i class="fa fa-trash-o"></i>
                                                        </a>
                                                    </td>
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
<div class="modal fade" id="tambah_list_h_bulanan" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 class="modal-title" align="center">Tambah Pegawai</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('honor/bulanan/list/add_list_bulanan/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="idHbulanan" value="{{ $idnya->id_bulanan }}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pegawai" class="control-label col-md-4">Pegawai</label>
                                    <div class="col-md-8">
                                        <select style="color:#009dc7;" id="nip_peg" name="nip_peg" class=" form-control" required>
                                            <option style="color:#009dc7;" value="">Pilih Pegawai</option>
                                            @foreach($pegawai as $peg)                                     
                                            <option style="color:#009dc7;" value="{{ $peg->nip_pegawai }}">{{ $peg->nama_pegawai }}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="bulanan_hnr" class="control-label col-md-4">Honor</label>
                                    <div class="col-md-8">
                                        <input type="text" id="nilai_bulanan_hnr" name="nilai_bulanan_hnr" data-a-sign="Rp." onkeyup="formatUangBULANAN();" class="form-control autonumber"/>
                                        <input type="hidden" id="nil_bulanan_hnr" name="nil_bulanan_hnr"/>
                                        {{-- <input style="color:#009dc7;" id="bulanan_hnr" name="bulanan_hnr" class="form-control" required/> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row" align="center">
                            <div class="col-md-12">                                    
                                <button type="submit" class="btn blue-sharp">
                                <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                </button>
                                <button type="button" class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit_list_h_bulanan" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 class="modal-title" align="center">Edit Pegawai</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('honor/bulanan/list/update_list_bulanan/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="idBULANAN" name="idBULANAN">
                    <input type="hidden" name="hnr_idHbulanan" value="{{ $idnya->id_bulanan }}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pegawai" class="control-label col-md-4">Pegawai</label>
                                    <div class="col-md-8">
                                        <select style="color:#009dc7;" id="hnr_nip_peg" name="hnr_nip_peg" class="form-control" required>
                                            @foreach($pegawai as $peg)                                     
                                            <option style="color:#009dc7;" value="{{ $peg->nip_pegawai }}">{{ $peg->nama_pegawai }}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="bulanan_hnr" class="control-label col-md-4">Honor</label>
                                    <div class="col-md-8">
                                        <input type="text" id="hnr_nilai_bulanan_hnr" name="hnr_nilai_bulanan_hnr" data-a-sign="Rp." onkeyup="formatUangeditBULANAN();" class="form-control autonumber"/>
                                        <input type="hidden" id="hnr_nil_bulanan_hnr" name="hnr_nil_bulanan_hnr"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row" align="center">
                            <div class="col-md-12">                                    
                                <button type="submit" class="btn blue-sharp">
                                <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                </button>
                                <button type="button" class="btn red-intense" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Batal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection