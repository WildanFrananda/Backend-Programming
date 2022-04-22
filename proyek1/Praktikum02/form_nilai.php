<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form class="form-horizontal" method="POST" action="nilai_siswa.php">
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="name" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" size="30">
        </div>
    </div>
    <div class="form-group row">
    <label for="study" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
        <select id="study" name="matkul" class="custom-select">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data I</option>
            <option value="WEB1">Pemrograman Web</option>
        </select>
    </div>
    </div> 
    <div class="form-group row">
        <label for="test1" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="test1" name="nilai_uts" type="text" class="form-control" size="6">
        </div>
    </div>
    <div class="form-group row">
        <label for="test2" class="col-4 col-form-label">NIlai UAS</label> 
        <div class="col-8">
        <input id="test2" name="nilai_uas" type="text" class="form-control" size="6">
        </div>
    </div>
    <div class="form-group row">
        <label for="test3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
        <input id="test3" name="nilai_tugas" type="text" class="form-control" size="6">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
    <?php
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $uts = $_GET['nilai_uts'];
    $uas = $_GET['nilai_uas'];
    $tugas = $_GET['nilai_tugas'];

    echo 'proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$uts;
    echo '<br/>Nilai UAS : '.$uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$tugas;
    ?>
</body>
</html>