<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('h:i');
if ($waktu <"11") {
    echo"Selamat pagi, {$nama}, sekarang pukul {$waktu}\n";
}  else if ($waktu<"15") {
    echo"Selamat siang, {$nama}, sekarang pukul {$waktu}\n";
}  else if ($waktu<"15") {
    echo"Selamat sore, {$nama}, sekarang pukul {$waktu}\n";
}  else if ($waktu>"19") {
    echo"Selamat malam, {$nama}, sekarang pukul {$waktu}\n";
}
?>