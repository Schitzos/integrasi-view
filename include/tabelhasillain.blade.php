<table class="table table-bordered table-hover" id="tabelhasillain">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;">Rencana Uji</th>
            <th style="text-align:center;vertical-align:middle;">Tgl Masuk Uji</th>
            <th style="text-align:center;vertical-align:middle;">Tgl Hasil Uji</th>
            <th style="text-align:center;vertical-align:middle;">Uraian Hasil Uji</th>
            <th style="text-align:center;vertical-align:middle;">Kalitas Akhir</th>
            <th style="text-align:center;vertical-align:middle;">Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1?>
        @foreach($hasiltes as $h)
            @if($h->tipe_hasil_test==5)
            <tr>
                <td style="text-align:left;"><input type="text" class="form-control"  id="Rencana_Hasil_Lain_{{$i}}" name="Rencana_Hasil_Lain_{{$i}}" value="{{$h->rencana_hasil_test}}" onkeypress="deteksihasillain(event,{{$i}},{{$h->id_hasil_test}});">
                </td>
                <td style="text-align:left;">
                <input type="text" class="form-control"  id="Tanggal_Masuk_Lain_{{$i}}" name="Tanggal_Masuk_Lain_{{$i}}" value="{{date('d/m/Y',strtotime($h->tgl_masuk_hasil_test))}}" onkeypress="deteksihasillain(event,{{$i}},{{$h->id_hasil_test}});">
                </td>
                <td style="text-align:left;">
                <input type="text" class="form-control"  id="Tanggal_Hasil_Lain_{{$i}}" name="Tanggal_Hasil_Lain_{{$i}}" value="{{date('d/m/Y',strtotime($h->tgl_hasil_test))}}" onkeypress="deteksihasillain(event,{{$i}},{{$h->id_hasil_test}});">
                </td>
                <td style="text-align:left;"><input type="text" class="form-control"  id="Uraian_Hasil_Lain_{{$i}}" name="Uraian_Hasil_Lain_{{$i}}" value="{{$h->uraian_hasil_test}}" onkeypress="deteksihasillain(event,{{$i}},{{$h->id_hasil_test}});">
                </td>                
                <td style="text-align: center;">
                    @if($h->kualitas_hasil_test==1)
                        <input id="Status_Hasil_Lain_{{$i}}" name="Status_Hasil_Lain_{{$i}}" type="checkbox" checked class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk" onchange="ubahhasillain({{$i}},{{$h->id_hasil_test}});">
                    @else
                        <input id="Status_Hasil_Lain_{{$i}}" name="Status_Hasil_Lain_{{$i}}" type="checkbox" class="make-switch" data-size="small" data-label-icon="fa fa-youtube" data-on-color="success" data-off-color="danger" data-on-text="Baik" data-off-text="Buruk" onchange="ubahhasillain({{$i}},{{$h->id_hasil_test}});">
                    @endif
                </td>
                <td style="text-align:left;">
                    <?php $path1 = 'images/dokumentasi/'.$h->id_paket.'/rks/HASILUJI_'.$h->id_paket.'_'.$h->id_hasil_test.'.pdf'; ?>
                    <a title="Unggah Bukti PDF" onclick="UnggahHasilUji({{$h->id_hasil_test}},{{$h->id_paket}});" class="btn btn-xs red-intense"><i class="fa fa-upload"></i></a>
                    @if(File::exists($path1))
                    <a title="Unduh Bukti PDF" href="{{ URL::to('/teshasil/unduh/'.$h->id_hasil_test) }}" class="btn btn-xs green-meadow"><i class="fa fa-download"></i></a>
                    <a title="Lihat Bukti PDF" onclick="LihatHasilUji({{$h->id_hasil_test}},{{$h->id_paket}});" class="btn btn-xs blue-sharp"><i class="fa fa-search"></i></a>
                    @endif
                </td>
            </tr>
            <?php $i++;?>
            @endif
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
    for (var i = 0; i < 300; i++) {
        var idtglmas = "#Tanggal_Masuk_Lain_"+i;
        var idtglhas = "#Tanggal_Hasil_Lain_"+i;
        var idstat = "#Status_Hasil_Lain_"+i;
    
        $(idtglmas).datepicker({
        autoclose:true,
        format:'dd/mm/yyyy',
        formatSubmit : 'yyyy-mm-dd',
        });
        $(idtglhas).datepicker({
        autoclose:true,
        format:'dd/mm/yyyy',
        formatSubmit : 'yyyy-mm-dd',
        });
        $(idstat).bootstrapSwitch();
    }
</script>