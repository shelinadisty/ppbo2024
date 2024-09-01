<?php

class LilinAromaterapi {
    public $aroma;
    public $warna;
    public $ukuran;

    public function __construct($aroma, $warna, $ukuran) {
        $this->aroma = $aroma;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
    }

    public function buatLilin() {
        echo "Membuat lilin aromaterapi dengan aroma {$this->aroma}, berwarna {$this->warna}, ukuran {$this->ukuran}.\n";
    }
}

$lilinLavenderBesar = new LilinAromaterapi("Lavender", "Ungu", "Besar");
$lilinLavenderBesar->buatLilin();

$lilinVanilaSedang = new LilinAromaterapi("Vanila", "Putih", "Sedang");
$lilinVanilaSedang->buatLilin();

$lilinRoseKecil = new LilinAromaterapi("Rose", "Merah", "Kecil");
$lilinRoseKecil->buatLilin();

?>