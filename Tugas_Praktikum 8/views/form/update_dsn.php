  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORM UPDATE MAHASISWA</h1>
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
            <?php
                $hidden = ['idedit'=>$dsnedit->nidn];
            ?>

            <div class="contaner-fluid">
                <?php echo form_open('dosen/save','',$hidden);?>
                <!-- <form action="" method="post"> -->
                    <div class="form-group row">
                        <label for="nidn" class="col-4 col-form-label">NIDN</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                            </div> 
                            <input id="nidn" name="nidn"
                            value="<?=$dsnedit->nidn?>" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">NAMA</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" value="<?=$dsnedit->nama?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Gender</label> 
                        <div class="col-8">
                            <?php
                                $checked_l = ($dsnedit->gender=="L")?"checked":"";
                                $checked_p = ($dsnedit->gender=="P")?"checked":"";
                            ?>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?=$checked_l?>> 
                            <label for="gender_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?=$checked_p?>> 
                            <label for="gender_1" class="custom-control-label">Perempuan</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                        <div class="col-8">
                        <input id="tmp_lahir" name="tmp_lahir" value="<?=$dsnedit->tmp_lahir?>" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                        <div class="col-8">
                        <input id="tgl_lahir" name="tgl_lahir" value="<?=$dsnedit->tgl_lahir?>" type="date" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="pendidikan_terakhir" class="col-4 col-form-label">Pendidikan Terakhir</label> 
                        <div class="col-8">
                        <input id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?=$dsnedit->pendidikan_terakhir?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">PRODI</label> 
                        <div class="col-8">
                            <?php
                                $checked_1 = ($dsnedit->prodi_kode=="TI")?"checked":"";
                                $checked_2 = ($dsnedit->prodi_kode=="SI")?"checked":"";
                                $checked_3 = ($dsnedit->prodi_kode=="BD")?"checked":"";
                            ?>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="prodi_kode" id="prodi_0" type="radio" class="custom-control-input" value="TI" <?=$checked_1?>> 
                            <label for="prodi_0" class="custom-control-label">TI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="prodi_kode" id="prodi_1" type="radio" class="custom-control-input" value="SI" <?=$checked_2?>> 
                            <label for="prodi_1" class="custom-control-label">SI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="prodi_kode" id="prodi_2" type="radio" class="custom-control-input" value="BD" <?=$checked_3?>> 
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