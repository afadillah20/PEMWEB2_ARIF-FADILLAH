  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h2 class="card-title">Input Data Siswa</h2>

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

            <div class="contaner-fluid">

                <form action="<?php echo base_url('index.php/dosen/save');?>" method="post">
                    <div class="form-group row">
                        <label for="nidn" class="col-4 col-form-label">NIDN</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                            </div> 
                            <input id="nidn" name="nidn" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">NAMA</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Gender</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                            <label for="gender_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                            <label for="gender_1" class="custom-control-label">Perempuan</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                        <div class="col-8">
                        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                        <div class="col-8">
                        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="pendidikan_terakhir" class="col-4 col-form-label">Pendidikan Terakhir</label> 
                        <div class="col-8">
                        <input id="pendidikan_terakhir" name="pendidikan_terakhir" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">PRODI</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="prodi_kode" id="prodi_0" type="radio" class="custom-control-input" value="TI"> 
                            <label for="prodi_0" class="custom-control-label">TI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="prodi_kode" id="prodi_1" type="radio" class="custom-control-input" value="SI"> 
                            <label for="prodi_1" class="custom-control-label">SI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="prodi_kode" id="prodi_2" type="radio" class="custom-control-input" value="BD"> 
                            <label for="prodi_2" class="custom-control-label">BD</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>

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