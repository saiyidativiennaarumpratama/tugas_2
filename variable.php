<!-- //Variable adalah suatu pengenal di dalam program yang merepresentasikan nilai atau data tertentu. Nilai variabel dapat diubah sesuai dengan kebutuhan program. -->
<?php //tag pembuka php
$a=10; // membuat variabel a dengan value 10
$b=15; // membuat variabel b dengan value 15
$c=50; // membuat variabel c dengan value 50
$d=17; // membuat variabel d dengan value 17

print("Penjumlahan <br>"); // digunakan untuk menampilkan teks ke layar, akan menampilkan Penjumlahan
//<br> digunakan untuk membuat baris baru atau disebut dengan enter
$penjumlahan = $a+$d; // membuat variabel penjumlahan yang digunakan untuk melakukan operasi penjumlahan, dengan memanggil variabel a dan d
print("Hasil Penjumlahan dari $a + $d = $penjumlahan<br><br>"); // digunakan untuk menampilkan teks ke layar, akan menampilkan "Hasil Penjumlahan dari", kemudian memanggil variabel a, d dan penjumlahan. 

print("Pengurangan <br>"); // untuk mencetak kata "Pengurangan"
$pengurangan = $c-$a; //membuat variabel pengurangan yang digunakan untuk melakukan operasi pengurangan, dengan memanggil variabel c dan a
print("Hasil Pengurangan dari $c - $a = $pengurangan<br><br>"); // digunakan untuk menampilkan teks ke layar, akan menampilkan "Hasil Pengurangan dari", kemudian memanggil variabel c, a dan pengurangan. 

print("Perkalian <br>"); // untuk mencetak kata "Perkalian"
$perkalian = $a*$c*$b; //membuat variabel perkalian yang digunakan untuk melakukan operasi pengurangan, dengan memanggil variabel a, c dan b
print("Hasil Perkalian dari $a x $c x $b = $perkalian<br><br>"); // digunakan untuk menampilkan teks ke layar, akan menampilkan "Hasil Perkalian dari", kemudian memanggil variabel a, c, b dan perkalian. 

print("Pembagian <br>"); // untuk mencetak kata "Pembagian"
$pembagian = $c/$a; //membuat variabel pembagian yang digunakan untuk melakukan operasi pembagian, dengan memanggil variabel c dan a
print("Hasil Bagi dari $c : $a = $pembagian<br>"); // digunakan untuk menampilkan teks ke layar, akan menampilkan "Hasil Bagi dari", kemudian memanggil variabel  c, a dan pembagian. 

?> <!-- tag penutup php -->

