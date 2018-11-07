<table class="table table-bordered table-hover" id="tabeljaminan">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;">Uraian</th>
            <th style="text-align:center;vertical-align:middle;">Keterangan</th>
            <th style="text-align:center;vertical-align:middle;">Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($jaminan as $j)            
            <tr>
                <td style="text-align:left;"><input type="text" class="form-control"  id="Uraian_Jaminan_{{$i}}" name="Uraian_Jaminan_{{$i}}" value="{{$j->uraian_garansi}}" onkeypress="deteksijaminan(event,{{$i}},{{$j->id_garansi}});">
                </td>
                <td style="text-align:left;">
                <input type="text" class="form-control"  id="Keterangan_Jaminan_{{$i}}" name="Keterangan_Jaminan_{{$i}}" value="{{$j->keterangan_garansi}}" onkeypress="deteksijaminan(event,{{$i}},{{$j->id_garansi}});">
                </td>
                <td style="text-align:left;">
                    <?php $path1 = 'images/dokumentasi/'.$j->id_paket.'/rks/GARANSI_'.$j->id_paket.'_'.$j->id_garansi.'.pdf'; ?>
                    <a title="Unggah Bukti PDF" onclick="UnggahGaransi({{$j->id_garansi}},{{$j->id_paket}});" class="btn btn-xs red-intense"><i class="fa fa-upload"></i></a>
                    @if(File::exists($path1))
                    <a title="Unduh Bukti PDF" href="{{ URL::to('/jaminan/unduh/'.$j->id_garansi) }}" class="btn btn-xs green-meadow"><i class="fa fa-download"></i></a>
                    <a title="Lihat Bukti PDF" onclick="LihatGaransi({{$j->id_garansi}},{{$j->id_paket}});" class="btn btn-xs blue-sharp"><i class="fa fa-search"></i></a>
                    @endif
                </td>
            </tr>
            <?php $i++;?>
        @endforeach
    </tbody>
</table>