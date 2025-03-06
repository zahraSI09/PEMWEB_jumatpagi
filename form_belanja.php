<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="d-flex">
    <div class="col-8">
        <h5 class="card-title">Belanja Online</h5>
        <form method="post" action="form_belanja.php">
            <div class="form-group row">
              <label for="" class="col-4 col-form-label">Costumer</label> 
              <div class="col-8">
                <input id="" name="nama" placeholder="Nama Costumer" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Pilih Produk</label> 
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="_0" type="radio" class="custom-control-input" value="TV"> 
                  <label for="_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="_1" type="radio" class="custom-control-input" value="kulkas"> 
                  <label for="_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                  <label for="_2" class="custom-control-label">MESIN CUCI</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="angka" class="col-4 col-form-label">Jumlah</label> 
              <div class="col-8">
                <input id="angka" name="angka" placeholder="Jumlah" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>
        </form>
        </div>
    <table  class="table col-4">
      <tr>
        <td class="text-light bg-primary">Daftar Harga</td>
      </tr>
      <tr>
      <td>TV : 4.200.000</td>
      </tr>
      <tr>
      <td>Kulkas : 3.100.000</td>
      </tr>
      <tr>
      <td>Mesin Cuci : 3.800.000</td>
      </tr>
      <tr>
      <td class="text-light bg-primary">Harga Dapat Berubah Setiap Saat</td>
      </tr>
    </table>
</div>

<?php 
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['angka'];

  $harga_produk = [
    "TV" => 4200000,
    "kulkas" => 3100000,
    "mesin_cuci" => 3800000
  ];

  $total_belanja = $harga_produk[$produk] * $jumlah;

  echo "<p>Nama : $nama</p>";
  echo "<p>Produk : $produk</p>";
  echo "<p>Barang : $jumlah</p>";
  echo "<p>Total Harga : $total_belanja</p>";
}
?>

</body>
</html>