<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .atas_tabel {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
      }
      .bawah_tabel {
          margin-top: 20px;
          display: flex;
          justify-content: space-between;
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">WEB02</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Review PHP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PHP5 OOP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Submit</button>
                </form>
              </li>
            </ul>
            
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
              </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </ul> 
        </div>
      </nav>
    <div class="container-fluid" style="display:flex; margin-top:10px;">
      <p>Show</p>
      <div class="dropdown">
				 <select name="" id="">
           <option value="">5</option>
         </select>
         
      </div>
    </div>
    <div class="container-fluid">

        <?php
          require_once "class_mahasiswa.php";

          $mhs1 = new Mahasiswa("0001", "Arif", 2020, "Teknik Informatika", 2.3);
          $mhs2 = new Mahasiswa("0002", "Heru", 2019, "Teknik Informatika", 2.7);
          $mhs3 = new Mahasiswa("0003", "Jarwo", 2021, "Sistem Informasi", 3.1);
          $mhs4 = new Mahasiswa("0004", "Yandri", 2019, "Sistem Informasi", 3.8);
        ?>
      <table class="table table-striped table-hover table-bordered">
      <thead>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>PRODI</th>
        <th>TAHUN ANGKATAN</th>
        <th>IPK</th>
        <th>PREDIKAT</th>
      </thead>
      <tr>
        <td class="no">1</td>
        <?= $mhs1->cetak()?>
        <td><?= $mhs1->predikat_ipk()?></td>
      </tr>
      <tr>
        <td class="no">2</td>
        <?= $mhs2->cetak()?>
        <td><?= $mhs2->predikat_ipk()?></td>
      </tr>
      <tr>
        <td class="no">3</td>
        <?= $mhs3->cetak()?>
        <td><?= $mhs3->predikat_ipk()?></td>
      </tr>
      <tr>
        <td class="no">4</td>
        <?= $mhs4->cetak()?>
        <td><?= $mhs4->predikat_ipk()?></td>
      </tr>
      </table>
    </div>
    <div class="bawah_tabel">
      <h6>Showing 1 to 4 of 4 entries</h6>
      <h6><a href="#" style="text-decoration: none;">Previous&emsp;</a><input type="text" value="4" style="width: 18px;"><a href="#" style="text-decoration: none;">&emsp;Next</a></h6>
    </div>
    <div class="container-fluid">

      <p><b>Lab Pemrograman Web Lanjutan</b><br>
      Dosen Sirojul Munir S.SI M.KOM<br>
      STT-NF - Kampus B
      </p>

    </div>

  </body>
</html>