@extends('layouts.master2')
@section('title','Profil Pengguna')
@section('content') 
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="text-center mbl">
                            @if ($profil->avatar != null)
                                <img src="{{ URL::to('/') }}/images/avatar/{{ $profil->avatar }}"
                                         style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"
                                         height="150px" width="150px"
                                         class="img-circle"/>
                            @else
                                <img src="{{ URL::to('/') }}/images/avatar/default.png"
                                         style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"
                                         height="150px" width="150px"
                                         class="img-circle"/>
                            @endif
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                                <tbody>
                                <tr style="color:#747F8C;">
                                    <td width="50%">Nama</td>
                                    <td>{{ $profil->username }}</td>
                                </tr>
                                <tr style="color:#747F8C;">
                                    <td width="50%">Email</td>
                                    <td>{{ $profil->email}}</td>
                                </tr>
                                <tr style="color:#747F8C;">
                                    <td width="50%">Ditambahkan Pada</td>
                                    <td> {{date("d F Y",strtotime($profil->created_at))}}</td>
                                </tr>
                                </tbody>
                    </table>
                    <table class="table" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align:center;color:#747F8C;border:1px solid #747F8C;">Hak Akses</th>
                            </tr>
                        </thead>
                        @if(Auth::user()->tipe==0)
                          <?php  $str="Administrator"; ?>
                        @elseif(Auth::user()->tipe==1)
                            <?php  $str="PPK"; ?>
                        @elseif(Auth::user()->tipe==2)
                            <?php  $str="PPTK"; ?>
                        @elseif(Auth::user()->tipe==3)
                            <?php  $str="Kondinator"; ?>
                        @elseif(Auth::user()->tipe==4)
                            <?php  $str="PPHP"; ?>
                        @elseif(Auth::user()->tipe==5)
                            <?php  $str="Kontraktor"; ?>
                        @elseif(Auth::user()->tipe==6)
                            <?php  $str="Konsultan"; ?>
                        @endif
                        <tr style="color:#747F8C;">        
                                <td style="text-align:left;border:1px solid #747F8C;">{{$str}}</td>        
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-8">
                    <div class="portlet box default">
                        <div class="portlet-body form">
                            <form action="{{ url('profil') }}" role="form" method="POST" class="form-horizontal" enctype="multipart/form-profil">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="idpro" value="{{$data->id_proyek}}">
                                <input type="hidden" name="iduser" value="{{$profil->id}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username" class="control-label col-md-4" style="color:#747F8C;">Nama</label>
                                                <div class="col-md-8">
                                                    <input style="color:#747F8C;" type="text" name="username"  id="username" class="form-control" value="{{$profil->username}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email" class="control-label col-md-4" style="color:#747F8C;">Email/Username</label>
                                                <div class="col-md-8">
                                                    <input style="color:#747F8C;" type="text" name="email"  id="email" type="email" class="form-control"  value="{{$profil->email}}"/>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password" class="control-label col-md-4" style="color:#747F8C;">Password</label>
                                                <div class="col-md-8">
                                                    <input style="color:#747F8C;" name="password"   id="password" type="password"  class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password_confirmation" class="control-label col-md-4" style="color:#747F8C;">Konfirmasi</label>
                                                <div class="col-md-8">
                                                    <input style="color:#747F8C;" name="password_confirmation" id="password_confirmation" type="password" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="gambar1" class="col-md-4 control-label" style="color:#747F8C;">Avatar</label>
                                                <div class="col-md-8">
                                                    <div class="text-center mbl">
                                                        <input id="gambar1" class="filestyle waves-effect waves-light" profil-buttonName="btn btn-primary" profil-buttonText="&nbsp;Pilih Berkas" name="gambar1" type='file' onchange="readURL(this);" />
                                                    </div>
                                                    <span class="help-block" style="color:#747F8C;">Kosongkan berkas avatar, bila tidak ingin merubah foto avatar</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="blah" class="col-md-4 control-label" style="color:#747F8C;">Foto Avatar</label>
                                                <div class="col-md-8">
                                                    @if($profil->avatar != null||$profil->avatar != 'default.png')
                                                        <img id="blah" src="{{ URL::to('/') }}/images/avatar/{{ $profil->avatar }}" 
                                                             alt="Foto Karyawan" width="186" height="186" 
                                                             style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"/>
                                                    @else
                                                        <img id="blah" src="{{ URL::to('/') }}/images/karyawan/default.png" 
                                                             alt="Foto Karyawan" width="186" height="186" 
                                                             style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);"/>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row" align="right">
                                        <div class="col-md-12">                                    
                                            <button type="submit" class="btn blue-madison btn-primary waves-effect waves-light">
                                                <i class="fa fa-hdd-o"></i>&nbsp;Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection