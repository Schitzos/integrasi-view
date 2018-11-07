<table class="myTable" id="tabelarsitektur">
    <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle;">No</th>
            <th style="text-align:center;vertical-align:middle;">Material</th>
            <th style="text-align:center;vertical-align:middle;">Uraian Pekerjaan</th>
            <th style="text-align:center;vertical-align:middle;">Hasil Standar Pengujian</th>
            <th style="text-align:center;vertical-align:middle;">Ciri-ciri Cacat Pekerjaan</th>
            <th style="text-align:center;vertical-align:middle;">Saran Cara Perbaikan</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1;?> 
        @foreach($outline as $o)
        @if($o->tipe_outline==1)
        <tr>
            <td style="text-align:center;">{{$i}}</td>
            <td style="text-align:left;">
                <input type="text" class="form-control"  id="Material_Arsitektur_{{$i}}" name="Material_Arsitektur_{{$i}}" value="{{$o->material_outline}}" onkeypress="deteksiarsitek(event,{{$i}},{{$o->id_outline}});">
            </td>
            <td style="text-align:left;">
                <select name="Uraian_Pekerjaan_Arsitektur_{{$i}}" id="Uraian_Pekerjaan_Arsitektur_{{$i}}" class="select2 form-control" onchange="ubahstruktur({{$i}},{{$o->id_outline}});" width="200px">
                    @foreach($rabpaket as $r)
                        @if($r->id_rab_paket==$o->id_rab_paket)
                            <option value="{{$r->id_rab_paket}}" selected>{{$r->pekerjaan_rab_paket}}</option>
                        @else
                            <option value="{{$r->id_rab_paket}}">{{$r->pekerjaan_rab_paket}}</option>
                        @endif
                    @endforeach
                </select>
            </td>
            <td style="text-align:left;">
                <input type="text" class="form-control"  id="Hasil_Standart_Arsitektur_{{$i}}" name="Hasil_Standart_Arsitektur_{{$i}}" value="{{$o->hasil_uji}}" onkeypress="deteksiarsitek(event,{{$i}},{{$o->id_outline}});">
            </td>
            <td style="text-align:left;">
                <input type="text" class="form-control"  id="Ciri_Cacat_Arsitektur_{{$i}}" name="Ciri_Cacat_Arsitektur_{{$i}}" value="{{$o->ciri_cacat}}" onkeypress="deteksiarsitek(event,{{$i}},{{$o->id_outline}});">
            </td>
            <td style="text-align:left;">
                <input type="text" class="form-control"  id="Saran_Cara_Arsitektur_{{$i}}" name="Saran_Cara_Arsitektur_{{$i}}" value="{{$o->saran_cara_perbaikan}}" onkeypress="deteksiarsitek(event,{{$i}},{{$o->id_outline}});">
            </td>
        </tr>
        <?php $i++;?> 
        @endif                                                    
        @endforeach
    </tbody>
</table>