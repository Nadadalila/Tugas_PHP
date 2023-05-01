<?php
class Luas {
    /** Luas Persegi Panjang */
    public function persegi_panjang ($p, $l){
        return $p * $l;
    }

    /** Luas Persegi */
    public function persegi ($s){
        return $s * $s;

    }

    /** Luas Jajar Genjang */
    public function jajar_genjang($a,$t){
        return $a * $t;
    }

    /** Luas Segitiga */
    public function segitiga($a,$t){
        return 0.5 * $a * $t;
    }

    /** Luas Lingkaran */
    public function lingkaran($r){
        return pi() * (pow($r,2));
    }
}
 
/** PERHITUNGAN LUAS PERSEGI PANJANG */
$luas = new Luas();
$p = 4;
$l = 5;
echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "Panjang = $p<br />";
echo "Lebar = $l<br />";
echo "Maka luas persegi panjang sama dengan $p * $l = " . $luas->persegi_panjang($p,$l);

/** PERHITUNGAN LUAS PERSEGI */
$luas = new Luas();
$s = 6;
echo " <br /> <br /> Hasil hitung luas persegi adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "sisi = $s<br />";
echo "Maka luas persegi sama dengan $s * $s = ". $luas->persegi($s);

/** PERHITUNGAN LUAS JAJAR GENJANG */
$luas = new Luas();
$a = 7;
$t = 8;
echo " <br /> <br /> Hasil hitung luas jajar genjang adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "alas = $a <br />";
echo "tinggi = $t <br />";
echo "Maka luas jajar genjang sama dengan $a * $t = ". $luas->jajar_genjang($a,$t);

/** PERHITUNGAN LUAS SEGITIGA */
$luas = new Luas();
$a = 4;
$t = 6;
echo " <br /> <br /> Hasil hitung luas segitiga adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "alas = $a <br />";
echo "tinggi = $t <br />";
echo "Maka luas segitiga sama dengan 0.5 * $a * $t = ". $luas->segitiga($a,$t);

/** PERHITUNGAN LUAS LINGKARAN */
$luas = new Luas();
$r = 9;
echo " <br /> <br /> Hasil hitung luas Lingkaran adalah sebagai berikut:<br />";
echo "Diketahui;<br />";
echo "jari jari = $r <br />";
echo "Maka luas lingkaran sama dengan Phi * [$r * $r]  = ". $luas->lingkaran($r);

?>
