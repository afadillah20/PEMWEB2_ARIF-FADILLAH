
<style>
    .container {
    margin-top: 200px;
    margin-bottom: 200px;
    width: 500px;
    box-shadow: 0 3px 20px rgba(0,0,0,0.4);
    padding: 10px 20px 10px 20px;
    margin:auto;
    }
    h2 {
        text-align: center;
        padding-bottom: 20px;
    }
    body{
        margin-top:100px;
    }

</style>
<body>
    
<div class="container">
    <h2>Nilai Siswa</h2>
    <?php

    require_once 'libfungsi.php';
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;
    $hasil_ujian = kelulusan($nilai);
    $predikat = grade($nilai);


    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;

    echo '<br/>Nilai Akhir: '.$nilai;
    echo '<br/>Status : '.$hasil_ujian;
    echo '<br/>Predikat : '.$predikat;

    ?>
</div>
</body>

