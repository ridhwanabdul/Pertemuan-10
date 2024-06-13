<?php 
    
    $myName = $_POST['myName'];
    $angkaPertama= $_POST['angkaPertama'];
    $angkaKedua= $_POST['angkaKedua'];


    $tambah = $angkaPertama + $angkaKedua;
    $kurang = $angkaPertama - $angkaKedua; 
    $perkalian = $angkaPertama * $angkaKedua; 
    $pembagian = $angkaPertama / $angkaKedua; 
    $modulus = $angkaPertama % $angkaKedua; 

    echo "<h2> Perhitungan Aritmatika </h2>"; 
    
    

    echo "Nama : $myName <br>";

    echo "$angkaPertama + $angkaKedua = $tambah<br>"; 
    echo "$angkaPertama - $angkaKedua = $kurang<br>"; 
    echo "$angkaPertama * $angkaKedua = $perkalian<br>"; 
    echo "$angkaPertama / $angkaKedua = $pembagian<br>"; 
    echo "$angkaPertama % $angkaKedua = $modulus";

    ?>