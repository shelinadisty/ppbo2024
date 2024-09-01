<?php
class Lingkaran
{
const PHI = 3.14;
public $jari_jari;
public function __construct($jari_jari) {
$this->jari_jari = $jari_jari;
}
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
public $tinggi;
public function __construct($jari_jari) {
$this->jari_jari= $jari_jari;
}
public function volume() : float {
return (4/3)*self::PHI*pow($this->jari_jari,3);
}
}
class Tabung
{
const PHI = 3.14;
public $jari_jari;
public $tinggi;
public function __construct($jari_jari, $tinggi) {
$this->jari_jari = $jari_jari;
$this->tinggi = $tinggi;
}
public function volume() : float {
return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
}
}
class Kerucut
{
const PHI = 3.14;
public $jari_jari;
public $tinggi;
public function __construct($jari_jari, $tinggi) {
$this->jari_jari = $jari_jari;
$this->tinggi = $tinggi;
}
public function volume() : float {
return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
}
}
$lingkaran = new Lingkaran(14);
echo "Keliling Lingkaran : ". $lingkaran -> keliling()." cm\n";
echo "Luas Lingkaran : ". $lingkaran -> luas()."cm^2\n";

$bola = new Bola(14);
echo"volume bola :".$bola->volume()."cm^3\n";

$tabung = new Tabung(5, 11);
echo"Tvolume tabung :". $tabung->volume()."cm^3\n";

$kerucut = new Kerucut(4, 8);
echo "volume kerucut :". $kerucut->volume()."cm^3\n";

?>
