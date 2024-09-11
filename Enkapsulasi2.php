<?php
class Manusia {
    // Properti private
    private $nama;
    private $umur;
    // Constructor untuk menginisialisasi properti
    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }
    // Method public untuk menampilkan informasi
    public function tampilkanInfo() {
        return "Nama: " . $this->nama . ", Umur: " . $this->umur . " tahun<br/>";
    }
}

// Instansiasi class Manusia
$manusia1 = new Manusia("Andi", 25);
// Memanggil method public untuk menampilkan informasi
echo $manusia1->tampilkanInfo();

echo "Mengakses langsung properti private nama: " . $manusia1->nama . "<br/>";
echo "Mengakses langsung properti private umur: " . $manusia1->umur . "<br/>";

?>
