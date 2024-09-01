<?php
class Lingkaran
{
const PHI = 3.14;
public $jari_jari;
public function luas() : float {
return self::PHI*$this->jari_jari*$this->jari_jari;
}
public function keliling() : float {
return 2*self::PHI*$this->jari_jari;
}
}
class Bola
{
const PHI = 3.14;
public $jari_jari;

public function volume() : float {
return (4/3)*self::PHI*pow($this->jari_jari,3);
}
}
class Tabung
{
const PHI = 3.14;
public $jari_jari;
public $tinggi;
public function volume() : float {
return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
}
}
class Kerucut
{
const PHI = 3.14;
public $jari_jari;

public $tinggi;
public function volume() : float {
return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
}
}
$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 14;
echo "Lingkaran yang jari-jarinya 14 memiliki luas sebesar = ".
$lingkaran->luas()."cm^2\n serta kelilingnya = ". $lingkaran->keliling(). "cm\n";

$bola = new Bola();
$bola->jari_jari=14;
echo"Bola yang jari-jarinya 14 memiliki volume sebesar = ".
$bola->volume(). "cm^3\n";

$tabung = new Tabung();
$tabung ->jari_jari = 5;
$tabung->tinggi = 11;
echo"Tabung yang jari-jarinya 5 serta tingginya 11 memiliki volume sebesar = ".
$tabung->volume(). "cm^3\n";

$kerucut = new Kerucut();
$kerucut->jari_jari = 4;
$kerucut->tinggi = 8;
echo "Kerucut yang jari-jarinya 4 serta tingginya 8 memiliki volume sebesar = ".
$kerucut->volume(). "cm^3\n";