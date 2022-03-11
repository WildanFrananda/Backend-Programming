<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum 2</title>
</head>
    <!-- link bootstrap bulider -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body style="padding: 40px;">
<!-- nama pelanggan -->
<div class="container">
<div class="row">
<div class="col-7">
  <h1>Belanja Online</h1>
    <form style="text-align: left;" method="POST" action="form_belanja.php">
    <div class="form-group row">  
      <label for="Nama Customer" class="col-4 col-form-label">
        <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Customer</font>
        </font>
      </label> 
    <div class="col-8">
      <input id="Nama Customer" name="customer" type="text" class="form-control">
    </div>
    </div>
<!-- select -->
    <div class="form-group row">
    <div class="col-4 col-form-label">Pilih Produk</div>
        <div class="col">
            <div class="d-flex">
                <div class="form-check pd">
                    <input class="form-check-input" type="radio" id="gridCheck1" name="produk[]" value="4200000">
                    <label class="form-check-label" for="gridCheck1">
                        TV
                    </label>
                </div>
                <div class="form-check pd">
                    <input class="form-check-input" type="radio" id="gridCheck2" name="produk[]" value="3100000">
                    <label class="form-check-label" for="gridCheck2">
                        KULKAS
                    </label>
                </div>
                <div class="form-check pd">
                    <input class="form-check-input" type="radio" id="gridCheck3" name="produk[]" value="3800000" alt="MESIN CUCI">
                    <label class="form-check-label" for="gridCheck3">
                        MESIN CUCI
                    </label>
                </div>
            </div>
        </div>
    </div>
<!-- jumlah -->
<div class="form-group row">
    <label class="col-4 col-form-label">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">jumlah</font>
      </font>
    </label> 
    <div class="col-8">
      <input id="Jumlah" name="jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</form>

<!-- daftar harga -->
<div class="card" style="width : 400px">
  <div class="row align-items-start">
    <div class="col-6">
      <div class="card-header bg-primary" style="width : 380px">
  Daftar Harga
      </div>
      <ul class="list-group list-group-flush" style="width : 380px">
        <li class="list-group-item">TV        4.200.000</li>
        <li class="list-group-item">KULKAS    3.100.000</li>
        <li class="list-group-item">MESIN CUCI   3.800.000</li>
      </ul>
      <div class="card-header bg-primary" style="width : 380px">
    Harga Dapat Berubah Setiap Saat
      </div>
    </div>
  </div>
</div>
<?php 
$customer = $_POST['customer'];
$jumlah = $_POST['jumlah'];
$produk = $_POST['produk'];
$proses = $_POST['proses'];

echo 'Customer: '.$customer.'<br/>';
echo 'Jumlah Beli: '.$jumlah.'<br/>';

foreach ($_POST['produk'] as $key => $value) {
  echo 'Total Belanja: Rp '.number_format($value * $jumlah,0,',', '.').'<br/>';
}
?>
</body>
</html>