  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">data mahasiswa</li>
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
          <h2 class="card-title">Detail Data Mahasiswa</h2>

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
            <table class="table table-stiped">
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

            <!-- <a href="<?php echo base_url('praktikum7/create');?>">Menuju Form</a> -->
            </div>

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