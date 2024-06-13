<?php
//Mendefinisikan variabel dengan berbagai macam tipe data
$nim = "22.11.4666";
$nama = "Ridhwan Abdul Hakim";
$umur = 21;
$nilai = 92.2;
$status = TRUE;
//Menampilkan data
echo "NIM : ".$nim."<br>";
echo "Nama : $nama <br>";
print "Umur : ".$umur."<br>";
printf ("Nilai : %.3f<br>",$nilai);
if($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>