<table class="table table-bordered table-hover" id="tabelrapat">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;">Tanggal Rapat</th>
            <th style="text-align:center;vertical-align:middle;">Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($rapat as $r)
            <tr>
                <td style="text-align:left;">
                <input type="text" class="form-control"  id="Tanggal_Rapat_{{$i}}" name="Tanggal_Rapat_{{$i}}" value="{{date('d/m/Y',strtotime($r->tgl_rapat))}}" onkeypress="deteksirapat(event,{{$i}},{{$r->id_rapat}});">
                </td>
                <td style="text-align:center;">
                    <?php $path1 = 'images/dokumentasi/'.$r->id_paket.'/pelaksanaan/RAPAT_'.$r->id_paket.'_'.$r->id_rapat.'.pdf'; ?>
                    <a title="Unggah Dokumentasi Rapat PDF" onclick="UnggahRapat({{$r->id_rapat}},{{$r->id_paket}});" class="btn btn-xs red-intense"><i class="fa fa-upload"></i></a>
                    @if(File::exists($path1))
                    <a title="Unduh Dokumentasi Rapat PDF" href="{{ URL::to('/rapat/unduh/'.$r->id_rapat) }}" class="btn btn-xs green-meadow"><i class="fa fa-download"></i></a>
                    <a title="Lihat Dokumentasi Rapat PDF" onclick="LihatRapat({{$r->id_rapat}},{{$r->id_paket}});" class="btn btn-xs blue-sharp"><i class="fa fa-search"></i></a>
                    @endif
                </td>
            </tr>
            <?php $i++;?>
        @endforeach
    </tbody>
</table>