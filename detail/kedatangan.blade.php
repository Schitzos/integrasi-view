@extends('layouts.master2')
@section('title','Jadwal Kedatangan Material')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>{{$data->nama_paket}}
                        <small>Jadwal Kedatangan Material Penting</small>
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
                                            <div class="col-md-12">
                                                <h3 align="center"><b>TABEL JADWAL KEDATANGAN MATERIAL PENTING</b></h3>
                                                <a onclick="TambahKedatangan({{$data->id_paket}});" class="btn green-meadow"><i class="fa fa-plus-square"></i> Tambah</a>
                                                <br/>
                                                <br/>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="idpro" id="idpro" value="{{$data->id_paket}}">
                                                    <table class="myTable" id="tabelkedatangan">
                                                        <thead>
                                                            <tr>
                                                                <th rowspan="2" style="text-align:center;vertical-align:middle;">NAMA MATERIAL</th>
                                                                <th rowspan="2" style="text-align:center;vertical-align:middle;">URAIAN PEKERJAAN</th>
                                                                <th rowspan="2" style="text-align:center;vertical-align:middle;">TANGGAL RENCANA KEDATANGAN</th>
                                                                <th rowspan="2" style="text-align:center;vertical-align:middle;">TANGGAL RENCANA PENGIRIMAN</th>
                                                                <th colspan="4" style="text-align:center;vertical-align:middle;">STATUS BARANG</th>
                                                                <th rowspan="2" style="text-align:center;vertical-align:middle;">UPLOD/DOWNLOAD DOKUMEN</th>
                                                            </tr>
                                                            <tr>
                                                                <th  style="text-align:center;vertical-align:middle;">PESAN</th>
                                                                <th  style="text-align:center;vertical-align:middle;">ON PROGRESS</th>
                                                                <th style="text-align:center;vertical-align:middle;">TELAH DATANG</th>
                                                                <th  style="text-align:center;vertical-align:middle;">APPROVE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i=1;?> 
                                                            @foreach($kedatangan as $k)
                                                            <tr>
                                                                <td style="text-align:center;">
                                                                    <input type="text" class="form-control" id="Nama_Material_{{$i}}" name="Nama_Material_{{$i}}" value="{{$k->nama_material}}" onkeypress="deteksi(event,{{$i}},{{$k->id_kedatangan}})" />
                                                                </td>
                                                                <td style="text-align:left;">
                                                                    <select name="Uraian_Pekerjaan_{{$i}}" id="Uraian_Pekerjaan_{{$i}}" class="select2 form-control" onchange="ubahkedatangan({{$i}},{{$k->id_kedatangan}});" width="200px">
                                                                        @foreach($rabpaket as $r)
                                                                            @if($r->id_rab_paket==$k->id_rab_paket)
                                                                                <option value="{{$r->id_rab_paket}}" selected>{{$r->pekerjaan_rab_paket}}</option>
                                                                            @else
                                                                                <option value="{{$r->id_rab_paket}}">{{$r->pekerjaan_rab_paket}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td style="text-align:center;">
                                                                    <input type="text" class="form-control"  id="Tanggal_Kedatangan_{{$i}}" name="Tanggal_Kedatangan_{{$i}}" value="{{date('d/m/Y',strtotime($k->tgl_rencana_kedatangan))}}" onkeypress="deteksi(event,{{$i}},{{$k->id_kedatangan}});">
                                                                </td>
                                                                <td style="text-align:center;">
                                                                    <input type="text" class="form-control"  id="Tanggal_Pengiriman_{{$i}}" name="Tanggal_Pengiriman_{{$i}}" value="{{date('d/m/Y',strtotime($k->tgl_rencana_pengiriman))}}" onkeypress="deteksi(event,{{$i}},{{$k->id_kedatangan}});">
                                                                </td>                            
                                                                <td style="text-align:center;">
                                                                    @if($k->status_kedatangan==1)
                                                                        <input id="Status_Pesan_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="1" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" checked onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @else
                                                                        <input id="Status_Pesan_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="1" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align:center;">
                                                                    @if($k->status_kedatangan==2)
                                                                        <input id="Status_Progress_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="2" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" checked onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @else
                                                                        <input id="Status_Progress_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="2" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align:center;">
                                                                    @if($k->status_kedatangan==3)
                                                                        <input id="Status_Datang_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="3" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" checked onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @else
                                                                        <input id="Status_Datang_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="3" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align:center;">
                                                                    @if($k->status_kedatangan==4)
                                                                        <input id="Status_Approve_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="4" class="form-control"  checked onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @else
                                                                        <input id="Status_Approve_{{$i}}" type="radio" name="Status_Barang_{{$i}}" value="4" class="form-control"  onclick="ubahkedatangan({{$i}},{{$k->id_kedatangan}});"/>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align:center;">
                                                                <?php $path1 = 'images/dokumentasi/'.$data->id_paket.'/laporan/KEDATANGAN_'.$data->id_paket.'_'.$k->id_kedatangan.'.pdf'; ?>
                                                                    @if(File::exists($path1))
                                                                    <a title="Download Bukti" onclick="UnduhKedatangan({{$k->id_kedatangan}});" class="btn green-meadow"><i class="fa fa-download"></i></a>
                                                                    @endif
                                                                    <a title="Upload Bukti PDF" onclick="UnggahKedatangan({{$k->id_kedatangan}},{{$data->id_paket}});" class="btn red-intense"><i class="fa fa-upload"></i></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<div class="modal fade bs-modal-lg" id="UnggahKedatangan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('jaked/unggah') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="idjaked" id="idjaked">
                <input type="hidden" name="idpaket" id="idpaket">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Unggah Bukti Kedatangan</h4>
                </div>
                <div class="modal-body form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="filepdf" class="col-md-4 control-label" >Berkas PDF</label>
                                <div class="col-md-8">
                                    <div class="text-center mbl">
                                        <input id="filepdf" class="filestyle" data-buttonName="btn btn-small btn-flat grey-gallery" data-buttonText="&nbsp;Pilih Berkas" name="filepdf" type='file'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn red-intense" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn blue-sharp">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection