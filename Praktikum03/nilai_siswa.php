<?php
require_once 'libfungsi.php';

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
$hasil_ujian = kelulusan($nilai_total);
$grade_nilai = grade($nilai_total);
$predikat_grade = predikat($grade_nilai);

echo '<br/><b>Nilai Akhir Mahasiswa</b><br/>';
echo '<br/>Total Nilai : '.$nilai_total.'<br/>';
echo '<br/>Grade : '.$grade_nilai.'<br/>';
echo '<br/>Predikat : '.$predikat_grade.'<br/>';
echo '<br/><b>DINYATAKAN</b> : '.$hasil_ujian.'<br/>';
?>