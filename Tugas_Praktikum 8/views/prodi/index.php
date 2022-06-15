  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Prodi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">data prodi</li>
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
          <h2 class="card-title">Daftar Data Prodi</h2>

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
                    <th>KODE</th>
                    <th>Nama Prodi</th>
                    <th>Ketua Prodi</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    foreach($list_prodi as $row){

                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row->kode?></td>
                        <td><?=$row->nama?></td>
                        <td><?=$row->kaprodi?></td>
                        <td> 
                          <a href="edit?id=<?=$row->kode?>">edit</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>

        </table>
        <br>
        <a class="btn btn-primary" href="<?php echo base_url('index.php/form/prodi')?>" role="button">Tambahkan Prodi</a>
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