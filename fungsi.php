<?php //tag pembuka php
	function aritmatika ($a, $b){ 
	// membuat fungsi artimatika, yang terdapat 2 parameter a dan b yang berfungsi seperti variabel di dalam fungsi
		$penjumlahan = $a + $b;
		//variabel penjumlahan yang digunakan untuk menampung hasil operasi penjumlahan variabel a dan b
		$pengurangan = $a - $b;
		//variabel pengurangan yang digunakan untuk menampung hasil operasi pengurangan variabel a dan b
		print("Hasil Penjumlahan $a + $b  : $penjumlahan <br>");
		//untuk mencetak "Hasil Penjumlahan ", kemudian memanggil variabel a, b dan penjumlahan
	}

	function luaspersegipanjang ($panjang, $lebar){
	// membuat fungsi luaspersegipanjang, yang terdapat 2 parameter panjang dan lebar yang berfungsi seperti variabel di dalam fungsi
		$luas = $panjang * $lebar;
		//variabel luas yang digunakan untuk menampung hasil operasi perkalian variabel panjang dan lebar
		print("<br>Luas Persegi Panjang : <br> Panjang x Lebar : <br> $panjang x $lebar : $luas <br> Jadi, Luas Persegi Panjang adalah : $luas <br>");
		//print untuk manmpilkan data ke layar, kemudian memanggil variabel yang sudah di buat sebelumnya
	}
	print("Penjumlahan <br>");
	//mencetak "Penjumlahan"
	aritmatika(50,20);
	//memanggil fungsi aritmatika , dengan a=50, dan b =20 
	aritmatika(100,30);
	//memanggil fungsi aritmatika , dengan a =100 dan b = 30
	luaspersegipanjang(5,10);
	//memanggil fungsi luaspersegipanjang, dengan panjang 5, dan lebar 10

?> <!-- tag penutup php -->