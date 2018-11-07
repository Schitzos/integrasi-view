@extends('layouts.master')
@section('content')
<div class="page-container">
<div class="page-content-wrapper">
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Pesan
                    <small>Portal Pesan</small>
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
                <div class="inbox">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inbox-sidebar">
                                <a href="javascript:;" onclick="TulisPesan();" class="btn red compose-btn btn-block">
                                    <i class="fa fa-edit"></i> Tulis Pesan </a>
                                <ul class="inbox-nav">
                                    <li class="{{ Request::is( 'pesan*') ? 'active' : '' }}">
                                        <a href="{{URL::to('/pesan')}} data-type="inbox" data-title="Inbox"> Kotak Masuk
                                        </a>
                                    </li>
                                    <li class="{{ Request::is( '/pesan/outbox*') ? 'active' : '' }}">
                                        <a href="{{URL::to('pesan/outbox')}}" data-type="inbox" data-title="Inbox"> Kotak Keluar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="inbox-body">
                                <div class="inbox-header">
                                    <h1 class="pull-left">Kotak Masuk</h1>
                                </div>
                                <div class="inbox-content"> 
                                    <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;"> No </th>
                                                <th style="text-align: center;"> Pengirim </th>
                                                <th style="text-align: center;"> Judul </th>
                                                <th style="text-align: center;"> Tindakan </th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;?>
                                            <tr>
                                            @foreach($pesan as $ps)
                                                <td style="text-align: center;">{{$no}}</td>
                                                <td style="text-align: center;">{{$ps->id_pengirim}}</td>
                                                <td style="text-align: left;">{{$ps->judul}}</td>
                                                <td style="text-align: right;"></td>
                                            </tr>
                                            <?php $no++;?>
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
<div class="modal fade bs-modal-lg" id="TulisPesan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('pesan/store') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idproyek" id="idproyek">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Tulis Pesan</h4>
                    </div>
                    <div class="modal-body form">
                    <br>
                        <div class="row">
                        <div class="col-md-12">
                            
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Foto" class="col-md-4 control-label" >Paket Pekerjaan</label>
                                    <div class="col-md-8">
                                        <select class="select2 form-control" id="Cara_Bayar" name="idproyek">
                                        @if(Auth::user()->tipe==6)
                                        @elseif(Auth::user()->tipe==6)
                                        @else
                                            @foreach($paket as $p)
                                                <option value="{{$p->id_proyek}}">{{$p->nama_proyek}}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Foto" class="col-md-4 control-label" >Stakeholder</label>                                   
                                    <div class="col-md-8">
                                    @if(Auth::user()->tipe==6)
                                        <select class="select2 form-control" name="admin">
                                            <option value="">Tujuan</option>
                                            <option value="1">PPK</option>
                                            <option value="5">Kontraktor</option>
                                            <option value="15">PPK & Kontraktor</option>
                                        </select>
                                    @elseif(Auth::user()->tipe==5)
                                        <select class="select2 form-control" name="admin">
                                            <option value="">Tujuan</option>
                                            <option value="1">PPK</option>
                                            <option value="6">Konsultan</option>
                                            <option value="16">PPK & Konsultan</option>
                                        </select>
                                    @else
                                        <select class="select2 form-control" name="admin">
                                            <option value="">Tujuan</option>
                                            <option value="6">Konsultan</option>
                                            <option value="5">Kontraktor</option>
                                            <option value="56">Konsultan & Kontraktor</option>
                                        </select>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nama_Foto" class="col-md-4 control-label" >Judul Pesan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="judul" id="Nama_Foto" placeholder="Judul Pesan"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Nama_Foto" class="col-md-2 control-label" >Isi Pesan</label>
                                    <div class="col-md-10">
                                        <textarea cols="100%" name="isi" placeholder="Isi Pesan">
                                            
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn red-intense" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn blue-sharp">Kirim</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
</div>
<script>
    function TulisPesan(){
    // $('#idproyek').val(id);
    $('#TulisPesan').modal('show');
    }
</script>
@endsection