<table class="table table-bordered table-hover" id="tabelsetstruk">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;"> Material </th>
            <th style="text-align:center;vertical-align:middle;"> Uraian Pekerjaan </th>
            <th style="text-align:center;vertical-align:middle;"> Status </th>
            <th style="text-align:center;vertical-align:middle;"> Tanggal Persetujuan </th>
            <th style="text-align:center;vertical-align:middle;"> Tindakan </th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($persetujuan as $p)
            @if($p->tipe_outline==0)
            <tr>
                <td style="text-align:left;">{{$p->material_outline}}</td>
                <td style="text-align:left;">{{$p->pekerjaan_rab_paket}}</td>
                <td style="text-align: center;">
                    @if($p->status_outline==1)
                        <input id="Status_Struktur_{{$i}}" name="Status_Struktur_{{$i}}" type="checkbox" checked class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Disetujui" data-off-text="Ditolak" onchange="ubahsetstruktur({{$i}},{{$p->id_outline}});">
                    @else
                        <input id="Status_Struktur_{{$i}}" name="Status_Struktur_{{$i}}" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Disetujui" data-off-text="Ditolak" onchange="ubahsetstruktur({{$i}},{{$p->id_outline}});">
                    @endif
                </td>
                <td style="text-align:left;">
                <input type="text" class="form-control"  id="Tanggal_Struktur_{{$i}}" name="Tanggal_Struktur_{{$i}}" value="{{date('d/m/Y',strtotime($p->tgl_outline))}}" onkeypress="deteksisetstruk(event,{{$i}},{{$p->id_outline}});">
                </td>
                <td style="text-align:left;">
                    <?php $path1 = 'images/dokumentasi/'.$p->id_paket.'/rks/PERSETUJUAN_'.$p->id_paket.'_'.$p->id_outline.'.pdf'; ?>
                    <a title="Unggah Bukti PDF" onclick="UnggahPersetujuan({{$p->id_outline}},{{$p->id_paket}},0);" class="btn btn-xs red-intense"><i class="fa fa-upload"></i></a>
                    @if(File::exists($path1))
                    <a title="Unduh Bukti PDF" href="{{ URL::to('/persetujuan/unduh/'.$p->id_outline) }}" class="btn btn-xs green-meadow"><i class="fa fa-download"></i></a>
                    <a title="Lihat Bukti PDF" onclick="LihatPersetujuan({{$p->id_outline}},{{$p->id_paket}});" class="btn btn-xs blue-sharp"><i class="fa fa-search"></i></a>
                    @endif
                </td>
            </tr>
            <?php $i++;?>
            @endif
        @endforeach
    </tbody>
</table>