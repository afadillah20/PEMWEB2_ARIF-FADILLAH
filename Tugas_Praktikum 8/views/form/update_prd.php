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
        <?php
                $hidden = ['idedit'=>$prdedit->kode];
            ?>

            <div class="contaner-fluid">
                <?php echo form_open('prodi/save','',$hidden);?>

                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">KODE</label> 
                        <div class="col-8">
                        <input id="kode" name="kode" value="<?=$prdedit->kode?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Prodi</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" value="<?=$prdedit->nama?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kaprodi" class="col-4 col-form-label">Ketua Prodi</label> 
                        <div class="col-8">
                        <input id="kaprodi" name="kaprodi" value="<?=$prdedit->kaprodi?>" type="text" class="form-control">
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