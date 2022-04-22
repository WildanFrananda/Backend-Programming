<?php
// Cetak Nilai siswa.
function kelulusan($nilai_total) {
    if($nilai_total > 55) {
        return 'LULUS';
    }
    else {
        return 'TIDAK LULUS';
    }
}

// Cetak grade nilai siswa.
function grade($nilai_total) {
    if($nilai_total >= 80) {
        return 'A';
    }
    elseif($nilai_total >= 70) {
        return 'B';
    }
    elseif($nilai_total >= 56) {
        return 'C';
    }
    elseif($nilai_total >= 36) {
        return 'D';
    }
    elseif($nilai_total >= 0) {
        return 'E';
    }
    else {
        return 'I';
    }
}


// Cetak predikat grade siswa.
function predikat($grade_nilai) {
    switch($grade_nilai) {
        case 'A':
            return 'Sangat Memuaskan';
            break;
        case 'B':
            return 'Memuaskan';
            break;
        case 'C':
            return 'Cukup';
            break;
        case 'D':
            return 'Kurang';
            break;
        case 'E':
            return 'Sangat Kurang';
            break;
        default:
            return 'Tidak Ada';
    }
}
?>