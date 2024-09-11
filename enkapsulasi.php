<?php
class Manusia {
    // Properti private hanya bisa diakses dari dalam kelas ini
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
    // Method untuk mengubah nama (masih di dalam kelas)
    public function ubahNama($namaBaru) {
        $this->nama = $namaBaru;
    }
    // Method untuk mengubah umur (masih di dalam kelas)
    public function ubahUmur($umurBaru) {
        if ($umurBaru > 0) {
            $this->umur = $umurBaru;
        } else {
            echo "Umur harus lebih besar dari 0!<br/>";
        }
    }
}
// Instansiasi class Manusia
$manusia1 = new Manusia("Andi", 25);
// Memanggil method public untuk menampilkan informasi
echo $manusia1->tampilkanInfo();
// Mengubah properti melalui method internal
$manusia1->ubahNama("Budi");
$manusia1->ubahUmur(30);
// Menampilkan informasi yang diubah
echo $manusia1->tampilkanInfo();
// Mencoba mengubah umur dengan nilai negatif (akan gagal karena ada validasi)
$manusia1->ubahUmur(-5);

?>
