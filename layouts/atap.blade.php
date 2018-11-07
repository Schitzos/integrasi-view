@extends('master')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Daftar Analisa Atap</h3>
          </div>

          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        {{-- bahan --}}
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Analisa Atap</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Sumber</th>
                      <th>Nama Item Pekerjaan</th>
                      <th>Satuan</th>
                      <th>Nama Item</th>
                      <th>Volume Item</th>
                      <th>Jenis Tukang</th>
                      <th>Jumlah Tukang</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>SNI....</td>
                      <td>Rabat Beton</td>
                      <td>m3</td>
                      <td>
                        Pasir
                        <br>
                        Semen
                      </td>
                      <td>
                        128 m3
                        <br>
                        18 m3
                      </td>
                      <td>
                        Tukang Batu
                        <br>
                        Pembantu Tukang Batu
                      </td>
                      <td>
                        0.6 hari
                        <br>
                        0.5 hari
                      </td>
                      <td>
                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                      </td>
                    </tr>
                    <tr>
                      <td>SNI....</td>
                      <td>Rabat Beton</td>
                      <td>m3</td>
                      <td>
                        Pasir
                        <br>
                        Semen
                      </td>
                      <td>
                        128 m3
                        <br>
                        18 m3
                      </td>
                      <td>
                        Tukang Batu
                        <br>
                        Pembantu Tukang Batu
                      </td>
                      <td>
                        0.6 hari
                        <br>
                        0.5 hari
                      </td>
                      <td>
                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        {{-- /bahan --}}
      </div>
    </div>
    <!-- /page content -->

@endsection
