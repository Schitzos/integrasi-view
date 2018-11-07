@extends('layouts.master')
@section('title','Honor Rapat')
@section('content')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>Honor
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
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <button class="btn blue-madison" onclick="TambahRapat();"><i class="fa fa-plus-square"></i>&nbsp;Tambah Rapat</button>
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
                                                    <th>Kegiatan<i class="fa sort"></i></th>
                                                    <th>Acara<i class="fa sort"></i></th>
                                                    <th>Peserta<i class="fa sort"></i></th>
                                                    <th>Tanggal<i class="fa sort"></i></th>
                                                    <th>Jam<i class="fa sort"></i></th>
                                                    <th>Tindakan<i class="fa sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i =1;    
                                                @endphp
                                                @foreach ($data as $dt)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $dt->nama_kegiatan }}</td>
                                                    <td>{{ $dt->acara }}</td>
                                                    <td>{{ $dt->jumlah }}</td>
                                                    <td>{{ $dt->tgl_honor }}</td>
                                                    <td>{{ $dt->jam_mulai }} - {{ $dt->jam_selesai }}</td>
                                                    <td style="text-align: center">
                                                        <a href="{{ url('/honorrapat/cetak_list1/'.$dt->id_hr.'/'.$dt->id_kegiatan) }}" class="btn tooltips yellow-crusta btn-xs" title="Cetak Form"  ><i class="fa fa-print"></i></a>
                                                        <a href="{{ url('/honorrapat/cetak_list2/'.$dt->id_hr.'/'.$dt->id_kegiatan) }}" class="btn tooltips yellow-crusta btn-xs" title="Cetak Honor"  ><i class="fa fa-print"></i></a>
                                                        <a href="{{ url('listrapat/'.$dt->id_hr) }}" class="btn tooltips green btn-xs" title="List"  ><i class="fa fa-list"></i></a>
                                                        <a class="btn tooltips green-jungle btn-xs" title="Ubah Rapat" onclick="EditRapat({{ $dt->id_hr }});" ><i class="fa fa-edit"></i></a>
                                                        <a href="{{ URL::to('/honorrapat/delete/' . $dt->id_hr) }}" class="btn red-mint btn-xs" data-placement="left" data-singleton="true" data-original-title="Hapus Honor rapat" data-toggle="confirmation" data-btn-ok-label="Ya" data-btn-cancel-label="Tidak"  data-popout="true">
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
<div class="modal fade" id="TambahRapat" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 class="modal-title"  align="center">Tambah Rapat</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('honorrapat/add_hr/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Nama_Jabatan" class="control-label col-md-4">Kegiatan</label>
                                    <div class="col-md-8">
                                        <select style="color:#009dc7;" id="r_keg" name="r_keg" class="select2 form-control" required>
                                            <option style="color:#009dc7;" value="">Pilih Kegiatan</option>
                                            @foreach($kegiatan as $keg)                                     
                                            <option style="color:#009dc7;" value="{{ $keg->id_kegiatan }}">{{ $keg->nama_kegiatan }}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="r_acara" class="control-label col-md-4">Acara</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" id="r_acara" name="r_acara" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Keterangan_Jabatan" class="control-label col-md-4">Tanggal Rapat</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" type="text" id="r_tgl" name="r_tgl" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Keterangan_Jabatan" class="control-label col-md-4">Tempat</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" id="r_tempat" name="r_tempat" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Jam" class="control-label col-md-4">Jam</label>
                                    <div class="col-md-3">
                                        <input style="color:#009dc7;" id="r_jam_mulai" name="r_jam_mulai" class="form-control" placeholder="Mulai" required/>
                                    </div>
                                    <label class="control-label col-md-1">s/d</label>
                                    <div class="col-md-3">
                                        <input style="color:#009dc7;" id="r_jam_selesai" name="r_jam_selesai" class="form-control" placeholder="Selesai" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Jam" class="control-label col-md-4">Jumlah Peserta</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" id="r_jml_peserta" name="r_jml_peserta" class="form-control" required/>
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

<div class="modal fade" id="UbahRapat" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3 class="modal-title"  align="center">Ubah Rapat</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('honorrapat/update_hr/') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="idhr" id="idhr">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Nama_Jabatan" class="control-label col-md-4">Kegiatan</label>
                                    <div class="col-md-8">
                                        <select style="color:#009dc7;" id="er_keg" name="er_keg" class=" form-control" required>
                                            @foreach($kegiatan as $keg)                                     
                                            <option style="color:#009dc7;" value="{{ $keg->id_kegiatan }}">{{ $keg->nama_kegiatan }}</option> 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="r_acara" class="control-label col-md-4">Acara</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" id="er_acara" name="er_acara" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Keterangan_Jabatan" class="control-label col-md-4">Tanggal Rapat</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" type="text" id="er_tgl" name="er_tgl" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Keterangan_Jabatan" class="control-label col-md-4">Tempat</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" id="er_tempat" name="er_tempat" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Jam" class="control-label col-md-4">Jam</label>
                                    <div class="col-md-3">
                                        <input style="color:#009dc7;" id="er_jam_mulai" name="er_jam_mulai" class="form-control" placeholder="Mulai" required/>
                                    </div>
                                    <label class="control-label col-md-1">s/d</label>
                                    <div class="col-md-3">
                                        <input style="color:#009dc7;" id="er_jam_selesai" name="er_jam_selesai" class="form-control" placeholder="Selesai" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Jam" class="control-label col-md-4">Jumlah Peserta</label>
                                    <div class="col-md-8">
                                        <input style="color:#009dc7;" id="er_jml_peserta" name="er_jml_peserta" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
