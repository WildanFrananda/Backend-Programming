<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];

if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$uts;
    echo '<br/>Nilai UAS : '.$uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$tugas;
}

$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.35;
$nilai_tugas = $tugas * 0.35;

$nilai_total = $nilai_uts + $nilai_uas + $nilai_tugas;

// Cetak hasil nilai siswa.
if($nilai_total > 55) {
    $hasil = 'LULUS';
}
else {
    $hasil = 'TIDAK LULUS';
}

// Cetak grade nilai siswa.
if($nilai_total >= 80) {
    $grade = 'A';
}
elseif($nilai_total >= 70) {
    $grade = 'B';
}
elseif($nilai_total >= 56) {
    $grade = 'C';
}
elseif($nilai_total >= 36) {
    $grade = 'D';
}
elseif($nilai_total >= 0) {
    $grade = 'E';
}
else {
    $grade = 'I';
}

echo '<br/><b>Nilai Akhir Mahasiswa</b>';
echo '<br/>Total Nilai : '.$nilai_total;
echo '<br/>Grade : '.$grade;
echo '<br/>Dinyatakan : '.$hasil.'<br/>';

//cetak predikat grade.
switch($grade) {
    case 'A':
        echo 'Sangat Memuaskan';
        break;
    case 'B':
        echo 'Memuaskan';
        break;
    case 'C':
        echo 'Cukup';
        break;
    case 'D':
        echo 'Kurang';
        break;
    case 'E':
        echo 'Sangat Kurang';
        break;
    default:
        echo 'Tidak Ada';
}
?>