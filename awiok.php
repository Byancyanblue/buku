<?php  
// Menggunakan berbagai tipe data  
$nama = "Alice";       // String  
$usia = 28;           // Integer  
$berat = 55.5;        // Float  
$pegawai = true;      // Boolean  
$hobi = array("membaca", "berenang", "bermain"); // Array  

// Output nilai variabel  
echo "Nama: $nama<br>";  
echo "Usia: $usia<br>";
echo "Usia: $usia<br>";  
echo "Berat: $berat kg<br>";  
echo "Pegawai: " . ($pegawai ? "Ya" : "Tidak") . "<br>";  
echo "Hobi: " . implode(", ", $hobi) . "<br>";  

/*
// Menggunakan karakter newline  
echo "Menggunakan \\n:\n";  
echo "Baris pertama\nBaris kedua\n\n";  

// Menggunakan tag HTML <br>  
echo "Menggunakan <br>:\n";  
echo "Baris pertama<br>Baris kedua<br><br>";  

// Menggunakan nl2br()  
$teks = "Baris pertama\nBaris kedua\nBaris ketiga";  
echo "Menggunakan nl2br():\n";  
echo nl2br($teks);  
*/
?>