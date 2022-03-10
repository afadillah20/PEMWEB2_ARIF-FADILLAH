<!DOCTYPE html>

<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<<style>
    .container {
    margin-top: 50px;
    margin-bottom: 50px;
    width: 500px;
    box-shadow: 0 3px 20px rgba(0,0,0,0.4);
    padding: 10px 20px 10px 20px;
    }
    h2 {
        text-align: center;
        padding-bottom: 20px;
    }

</style>
    <body>
        <div class="container">
            <h2>Nilai Siswa</h2>
            <form action="form_nilai.php" method="GET">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="text" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BDI">Basis Data 1</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>

<?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;

?>