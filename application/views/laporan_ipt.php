<table style="width: 100%; border:1px solid; border-collapse: collapse; font-size:11px;">
    <thead>
        <tr>
            <th style="border:1px solid">No.</th>
            <th style="border:1px solid">No. SK</th>
            <th style="border:1px solid">Nama Pemegang</th>
            <th style="border:1px solid">Alamat</th>
            <th style="border:1px solid">Luas IPT (m2)</th>
            <th style="border:1px solid">Kelurahan</th>
            <th style="border:1px solid">Kecamatan</th>
            <th style="border:1px solid">Status IPT</th>
        </tr>
        <tr>
            <th style="border:1px solid">1</th>
            <th style="border:1px solid">2</th>
            <th style="border:1px solid">3</th>
            <th style="border:1px solid">4</th>
            <th style="border:1px solid">5</th>
            <th style="border:1px solid">6</th>
            <th style="border:1px solid">7</th>
            <th style="border:1px solid">8</th>
        </tr>
    </thead>
    <tbody>
        <?php $x=1; $register=""; foreach ($ipt as $key) {
        
        if($key->register != $register) {
            echo "<tr><td colspan='17' style='height: 20px; background-color: #FEF6EB;'><b>".$key->register." - ".$key->alas_hak."</b></td></tr>";
            $register=$key->register;
        }

        ?>
        
        <tr>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $x++;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->no_sk;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->pemegang;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->alamat;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->luas_tanah;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->kelurahan;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->kecamatan;?></td>
            <td style="border:1px solid; text-align: center; vertical-align: middle;"><?php echo $key->status;?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>