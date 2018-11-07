<table class="table table-bordered table-hover" id="tabelasbuiltdraw">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;">Uraian Gambar</th>
            <th style="text-align:center;vertical-align:middle;">Gambar PDF</th>
            <th style="text-align:center;vertical-align:middle;">Gambar CAD</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($asdraw as $s)            
            <tr>
                <td style="text-align:left;"><input type="text" class="form-control"  id="Uraian_Asbuilt_Draw_{{$i}}" name="Uraian_Asbuilt_Draw_{{$i}}" value="{{$s->uraian_asbuilt_draw}}" onkeypress="deteksiasbuiltdraw(event,{{$i}},{{$s->id_asbuilt_draw}});">
                </td>
                <td style="text-align:center;">
                <a onclick="UnggahPDFDraw({{$s->id_asbuilt_draw}},{{$s->id_paket}});" class="btn btn-circle btn-sm green"> Upload<i class="fa fa-plus"></i></a>
                </td>
                <td style="text-align:center;">
                <a onclick="UnggahCADDraw({{$s->id_asbuilt_draw}},{{$s->id_paket}});" class="btn btn-circle btn-sm green"> Upload<i class="fa fa-plus"></i></a>
                </td>
            </tr>
            <?php $i++;?>
        @endforeach
    </tbody>
</table>