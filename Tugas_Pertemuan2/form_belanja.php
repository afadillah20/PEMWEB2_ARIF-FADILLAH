<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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


<table border="1" style="float: right; margin-right: 1cm;">
    <thead style="background-color: skyblue; text-align:center;">
        <tr >
            <th>Nomor</th>
            <th>Daftar</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="nomer">1</td>
            <td>TV</td>
            <td>Rp.4.200.000,-</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="nomer">2</td>
            <td>KULKAS</td>
            <td>Rp.3.100.000,-</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td class="nomer">3</td>
            <td>MESIN CUCI</td>
            <td>Rp.3.800.000,-</td>
        </tr>
    </tbody>
</table >
<div class="container">
    <h2>Form Daftar Belanja</h2>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="costumer" name="costumer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

<?php

    $nama = $_POST['costumer'];
    $barang = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    if($barang == 'TV') {
        $harga = 4200000;
    } elseif($barang == 'KULKAS') {
        $harga = 3100000;
    } elseif($barang == 'MESIN CUCI') {
        $harga = 3800000;
    }
    $total = $jumlah * $harga;
    echo "Nama Customer : ".$nama;
    echo "<br/>Produk Pilihan : ".$barang;
    echo "<br/>Jumlah : ".$jumlah;
    echo "<br/>Total Harga : Rp.".$total;
?>
</div>