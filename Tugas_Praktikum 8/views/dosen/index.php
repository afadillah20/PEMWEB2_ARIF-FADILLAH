  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">data dosen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Daftar Data Dosen</h2>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIDN</th>
                    <th>Nama Siswa</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Prodi Kode</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    foreach($list_dosen as $row){

                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row->nidn?></td>
                        <td><?=$row->nama?></td>
                        <td><?=$row->gender?></td>
                        <td><?=$row->tmp_lahir?></td>
                        <td><?=$row->tgl_lahir?></td>
                        <td><?=$row->pendidikan_terakhir?></td>
                        <td><?=$row->prodi_kode?></td>
                        <td>
                          <a href="view?id=<?=$row->nidn?>">view</a> | 
                          <a href="edit?id=<?=$row->nidn?>">edit</a> | 
                          <a href="delete?id=<?=$row->nidn?>"onclick="if(!confirm('Anda yakin Hapus Mahasiswa Dengan NIM : <?=$row->nidn?>?')) {return false}">delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                    }
                ?>
            </tbody>

        </table>
        <br>
        <a class="btn btn-primary" href="<?php echo base_url('index.php/form/dosen')?>" role="button">Tambahkan Dosen</a>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->