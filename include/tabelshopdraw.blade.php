<table class="table table-bordered table-hover" id="tabelshopdraw">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;">Uraian Gambar</th>
            <th style="text-align:center;vertical-align:middle;">Gambar Kerja</th>
            <th style="text-align:center;vertical-align:middle;">Status Persetujuan</th>
            <th style="text-align:center;vertical-align:middle;">Dilaksanakan Dilapangan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($shopdraw as $s)            
            <tr>
                <td style="text-align:left;"><input type="text" class="form-control"  id="Uraian_Shop_Draw_{{$i}}" name="Uraian_Shop_Draw_{{$i}}" value="{{$s->uraian_shop_draw}}" onkeypress="deteksishopdraw(event,{{$i}},{{$s->id_shop_draw}});">
                </td>
                <td style="text-align:center;">
                <a onclick="UnggahShopDraw({{$s->id_shop_draw}},{{$s->id_paket}});" class="btn btn-circle btn-sm green"> Upload<i class="fa fa-plus"></i></a>
                </td>
                <td style="text-align: center;">
                    @if($s->status_shop_draw==1)
                        <input id="Status_Shop_Draw_{{$i}}" name="Status_Shop_Draw_{{$i}}" type="checkbox" checked class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="ubahshopdraw({{$i}},{{$s->id_shop_draw}});">
                    @else
                        <input id="Status_Shop_Draw_{{$i}}" name="Status_Shop_Draw_{{$i}}" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="ubahshopdraw({{$i}},{{$s->id_shop_draw}});">
                    @endif
                </td>
                <td style="text-align: center;">
                    @if($s->pelaksanaan_shop_draw==1)
                        <input id="Pelaksanaan_Shop_Draw_{{$i}}" name="Pelaksanaan_Shop_Draw_{{$i}}" type="checkbox" checked class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="ubahshopdraw({{$i}},{{$s->id_shop_draw}});">
                    @else
                        <input id="Pelaksanaan_Shop_Draw_{{$i}}" name="Pelaksanaan_Shop_Draw_{{$i}}" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Ya" data-off-text="Tidak" onchange="ubahshopdraw({{$i}},{{$s->id_shop_draw}});">
                    @endif
                </td>
            </tr>
            <?php $i++;?>
        @endforeach
    </tbody>
</table>