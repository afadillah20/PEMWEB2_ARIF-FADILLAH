<div class="col-md-12">
<h3>Daftar Mahasiswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
        <th>NO</th><th>NIM</th><th>Nama</th><th>Gender</th><th>Tempat Lahir</th><th>Tanggal Lahir</th>
        <th>IPK</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        ?>
        <tr>
        <td><?=$nomor?></td>
        <td><?=$nim?></td>
        <td><?=$nama?></td>
        <td><?=$gender?></td>
        <td><?=$tmp_lahir?></td>
        <td><?=$tgl_lahir?></td>
        <td><?=$ipk?></td>
        </tr>
    </tbody>
</table>

<!-- <a href="<?php echo base_url('mahasiswa/create');?>">Menuju Form</a> -->
</div>