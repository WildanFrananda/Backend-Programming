<?php
class Persegipanjang {
    public $panjang;
    public $lebar;

    function getLuas() {
        return $this->luas = $this->panjang * $this->lebar;
    }
    function getKeliling() {
        return $this->keliling = 2 * ($this->panjang + $this->lebar);
    }
}
?>