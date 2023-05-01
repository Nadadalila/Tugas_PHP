<?php

$tinggi_segitiga = 10;
/**nilai tinggi segitiga */
	for($a=0; $a<$tinggi_segitiga; $a++)
    { 
    /**Perulangan luar dengan variabel counter $a dipakai untuk membuat tinggi segitiga. Nilai a=0, akan dilakukan perulangan sebanyak a<10 dan setiap kali perulangan nilainya akan bertambah satu */
	for($b=0; $b<$a; $b++)
    {
        /**Perulangan dalam dengan variabel counter $b. nilai b=0 ,akan dilakukan perulangan sebanyak b<a dan setiap kali perulangan nilainya akan bertambah satu  */
		echo "$b";
	}
    /** jika berhasil akan dilanjutkan dengan mencetak $b yang berisi angka(perulangan ke..)*/
	echo "<br>";
	/**lalu akan dilanjutkan dengan mencetak spasi atau enter */
	}

	/** CARA MEMBACA SCRIPT */
	/** 1. sistem akan membaca dan mengeksekusi perulangan luar, yaitu a=0, nilai a < 10 (berhasil) ini merupakan perulangan ke 0, lalu akan dilanjutkan ke perulangan dalam */
	/** 2. setelah perulangan luar berhasil, lanjut ke perulangan dalam. yaitu  b=0, nilai b < a (berhasil) ini merupakan perulangan ke 0, lalu akan dilanjutkan ke pencetakan $b */
	/** 3. setelah mencetak bintang, sistem akan kembali ke perulangan dalam . hingga nilai di perulangan dalam terpenuhi */
	/** 4. setelah nilai perulangan dalam terpenuhi, sistem akan mencetak spasi atau enter */
	/** 5. sistem akan kembali ke perulangan luar, dan begitu seterusnya */
?>