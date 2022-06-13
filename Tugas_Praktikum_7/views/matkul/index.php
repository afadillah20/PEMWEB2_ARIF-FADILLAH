<div class="col-md-12">
<h3>Daftar Matakuliah</h3>
<table border="1" width="100%">
    <thead>
        <tr>
        <th>NO</th><th>Nama</th><th>SKS</th><th>Semester</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_mtkl as $mtkl){
        ?>
        <tr>
        <td><?=$nomor?></td>
        <td><?=$mtkl->nama?></td>
        <td><?=$mtkl->sks?></td>
        <td><?=$mtkl->semester?></td>
        </tr>
        <?php
        $nomor++;
        }
        ?>
    </tbody>
</table>
</div>