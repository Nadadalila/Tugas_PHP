<?php
class Volume {
    /** Volume Kubus */
    public function Kubus ($r){
        return pow($r,3);
    }

    /** Volume Balok */
    public function Balok ($p, $l, $t){
        return $p * $l * $t;

    }

    /** Volume Tabung */
    public function Tabung($r,$t){
        return pi() * (pow($r,2)) * $t;
    }
}

/**PERHITUNGAN VOLUME KUBUS */
$volume = new Volume();
$r = 3;
echo "Hasil hitung volume kubus adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "Rusuk = $r<br />";
echo "Maka volume kubus sama dengan $r * $r * $r = " . $volume->kubus($r);

/** PERHITUNGAN VOLUME BALOK */
$volume = new Volume();
$p = 8;
$l = 5;
$t = 7;
echo "  <br /> <br /> Hasil hitung volume balok adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "Panjang = $p<br />";
echo "Lebar = $l<br />";
echo "Tinggi = $t<br />";
echo "Maka volume Balok sama dengan $p * $l * $t = " . $volume->Balok($p , $l, $t);

/** PERHITUNGAN VOLUME TABUNG */
$volume = new Volume();
$r = 9;
$t = 7;
echo "  <br /> <br /> Hasil hitung volume tabung adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "jari jari = $r<br />";
echo "Tinggi = $t<br />";
echo "Maka volume Tabung sama dengan Phi * [$r * $r] * $t = " . $volume->Tabung($r , $t);

?>