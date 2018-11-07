<table class="table table-bordered table-hover" id="tabelsoppekerjaan">
    <thead>
        <tr>
            <th rowspan="2" style="text-align:center;vertical-align:middle;"> Uraian Pekerjaan </th>
            <th colspan="3" style="text-align:center;vertical-align:middle;"> Persetujuan Material </th>
            <th rowspan="2" style="text-align:center;vertical-align:middle;"> Shop Drawing </th>
            <th rowspan="2" style="text-align:center;vertical-align:middle;"> Izin Pelaksanaan </th>
            <th rowspan="2" style="text-align:center;vertical-align:middle;"> Dokumen </th>
            <th colspan="2" style="text-align:center;vertical-align:middle;"> Status </th>
        </tr>
        <tr>
            <th  style="text-align:center;vertical-align:middle;">Belum</th>
            <th  style="text-align:center;vertical-align:middle;">Progres</th>
            <th style="text-align:center;vertical-align:middle;">Disetujui</th>
            <th  style="text-align:center;vertical-align:middle;">On Progres</th>
            <th  style="text-align:center;vertical-align:middle;">Finish</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($soppekerjaan as $s)            
            <tr>
                <td><input type="text" id="Uraian_SOP_Pekerjaan_{{$i}}" name="Uraian_SOP_Pekerjaan_{{$i}}" class="form-control" onkeypress="deteksisop(event,{{$i}},{{$s->id_sop_pekerjaan}});" value="{{$s->uraian_sop_pekerjaan}}" /></td>
                <td>
                @if($s->persetujuan_spo_pekerjaan==1)
                    <input id="Radio_Belum_{{$i}}" type="radio" name="Radio_Persetujuan_{{$i}}" value="1" class="form-control"  checked onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @else
                    <input id="Radio_Belum_{{$i}}" type="radio" name="Radio_Persetujuan_{{$i}}" value="1" class="form-control"  onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @endif
                </td>
                <td> 
                @if($s->persetujuan_spo_pekerjaan==2)
                    <input id="Radio_Progress_{{$i}}" type="radio" name="Radio_Persetujuan_{{$i}}" value="2" class="form-control"  checked onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @else
                    <input id="Radio_Progress_{{$i}}" type="radio" name="Radio_Persetujuan_{{$i}}" value="2" class="form-control"  onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @endif
                </td>
                <td> 
                @if($s->persetujuan_spo_pekerjaan==3)
                    <input id="Radio_Setuju_{{$i}}" type="radio" name="Radio_Persetujuan_{{$i}}" value="3" class="form-control" checked onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @else
                    <input id="Radio_Setuju_{{$i}}" type="radio" name="Radio_Persetujuan_{{$i}}" value="3" class="form-control"  onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @endif
                </td>
                <td> <input type="text" name="Nomor_Shop_Draw_{{$i}}" id="Nomor_Shop_Draw_{{$i}}" class="form-control" placeholder="no." value="{{$s->no_shop_sop_pekerjaan}}"> 
                @if($s->status_shop_sop_pekerjaan==1)
                    <input id="Status_Shop_Draw_{{$i}}" name="Status_Shop_Draw_{{$i}}" type="checkbox" class="make-switch" data-size="small"  data-on-color="success" data-off-color="danger" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>" checked onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});">
                @else
                    <input id="Status_Shop_Draw_{{$i}}" name="Status_Shop_Draw_{{$i}}" type="checkbox" class="make-switch" data-size="small"  data-on-color="success" data-off-color="danger" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>" onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});">
                @endif
                </td>
                <td> 
                <input type="text" class="form-control"  id="Nomor_Izin_{{$i}}" name="Nomor_Izin_{{$i}}" value="{{$s->no_izin_sop_pekerjaan}}" onkeypress="" placeholder="no.">
                @if($s->status_izin_sop_pekerjaan==1)
                    <input id="Status_Izin_{{$i}}" name="Status_Izin_{{$i}}" type="checkbox" checked class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>" checked>
                @else
                    <input id="Status_Izin_{{$i}}" name="Status_Izin_{{$i}}" type="checkbox" checked class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>">
                @endif
                </td>
                <td>


                    <center>
                <div class="btn-group btn-group-circle btn-group-sm btn-group-solid">
                    <a type="button" class="btn green-jungle" href="{{ URL::to('/soppek/unduh/'.$s->id_sop_pekerjaan) }}"><i class="icon-cloud-download"></i></a>
                    <a type="button" class="btn yellow-casablanca" onclick="UnggahSOPPEkerjaan({{$s->id_paket}},{{$s->id_sop_pekerjaan}});"><i class="icon-cloud-upload"></i></a>
                </div>
                </center>
                </td>
                <td>
                @if($s->status_sop_pekerjaan==1)
                    <input id="Radio_On_Progess_{{$i}}" type="radio" name="Radio_Status_{{$i}}" value="1" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" checked onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});" checked/>
                @else
                    <input id="Radio_On_Progess_{{$i}}" type="radio" name="Radio_Status_{{$i}}" value="1" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});"/>
                @endif
                </td>
                <td>
                @if($s->status_sop_pekerjaan==2)
                    <input id="Radio_Finish_{{$i}}" type="radio" name="Radio_Status_{{$i}}" value="2" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});" checked/>
                @else
                    <input id="Radio_Finish_{{$i}}" type="radio" name="Radio_Status_{{$i}}" value="2" class="form-control" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" onchange="ubahsop({{$i}},{{$s->id_sop_pekerjaan}});" />
                @endif
                </td>
            </tr>
            <?php $i++;?>
        @endforeach
    </tbody>
</table>