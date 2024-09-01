<?php

#fungsi menghitung keliling lingkaran
function KelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

#fungsi menghitung volume bola
function  VolumeBola($jari) : float {
    $volume = (4/3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

#fungsi menghitung volume tabung
function VolumeTabung($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

#fungsi menghitung volume kerucut
function VolumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

#penggunaan fungsi
$keliling = KelilingLingkaran(7);
echo " Keliling Lingkaran dengan jari - jari 7 adalah {$keliling}\n";

$VolumeBola = VolumeBola(14);
echo " Volume Bola dengan jari - jari 14 adalah {$VolumeBola}\n";

$VolumeTabung = VolumeTabung(7, 20);
echo " Volume Tabung dengan jari - jari 7 dan tinggi 20 adalah {$VolumeTabung}\n";

$VolumeKerucut = VolumeKerucut(14, 30);
echo " Volume Kerucut dengan jari - jari 14 dan tinggi 30 adalah {$VolumeKerucut}\n";

?>