<?php  
// 1. Mendefinisikan array siswa dan nilai mereka  
$siswa = [  
    "Andi" => 75,  
    "Budi" => 85,  
    "Citra" => 90,  
    "Dewi" => 80,  
    "Erik" => 95,  
    "Fina" => 70,  
    "Gina" => 88,  
    "Hendra" => 76,  
    "Intan" => 92,  
    "Joni" => 66,  
    "Kiki" => 89,  
    "Lina" => 72,  
    "Mila" => 91,  
    "Nina" => 67,  
    "Omar" => 84,  
    "Popo" => 73,  
    "Qila" => 96,  
    "Rudi" => 78,  
    "Sari" => 97,  
    "Tina" => 75  
];  

// 2. Mengurutkan siswa berdasarkan nilai  
arsort($siswa); // Mengurutkan array berdasarkan nilai secara descending  

// 3. Mencetak daftar seluruh siswa  
echo "<h2>Daftar Seluruh Siswa Berdasarkan Nilai Akhir</h2>";  
echo "<table border='1'>";  
echo "<tr><th>Nama</th><th>Nilai</th></tr>";  

// Menggunakan foreach untuk membaca data siswa  
foreach ($siswa as $nama => $nilai) {  
    echo "<tr><td>$nama</td><td>$nilai</td></tr>";  
}  

echo "</table>";  

// 4. Mencetak daftar 10 besar siswa  
echo "<h2>10 Besar Siswa Berdasarkan Nilai Akhir</h2>";  
echo "<table border='1'>";  
echo "<tr><th>Peringkat</th><th>Nama</th><th>Nilai</th></tr>";  

$peringkat = 1;  
$counter = 0;  

// Menggunakan foreach untuk membaca data siswa  
foreach ($siswa as $nama => $nilai) {  
    // Hanya mencetak 10 siswa teratas  
    if ($counter < 10) {  
        echo "<tr><td>$peringkat</td><td>$nama</td><td>$nilai</td></tr>";  
        $peringkat++; // Menaikkan peringkat  
    } else {  
        break; // Berhenti jika sudah mencetak 10 siswa  
    }  
    $counter++; // Menaikkan counter untuk setiap siswa yang telah diproses  
}  

echo "</table>";  
?>