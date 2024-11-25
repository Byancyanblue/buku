<?php
echo "Looping for<br>";
for ($i = 1; $i <= 10; $i++) {  
    echo "Angka: " . $i . "<br>";  
}
echo "<br><br>";

echo "Looping while<br>";
$j = 1;  
while ($j <= 10) {  
    echo "Angka: " . $j . "<br>";  
    $j++;  
}
echo "<br><br>";

echo "Looping do-while<br>";
$k = 1;  
do {  
    echo "Angka: " . $k . "<br>";  
    $k++;  
} while ($k <= 10);
echo "<br><br>";

echo "Looping foreach<br>";
$warna = array("Merah", "Hijau", "Biru");  

foreach ($warna as $value) {  
    echo "Warna: " . $value . "<br>";  
}
echo "<br><br>";

echo "Looping nested-loop<br>";
for ($a = 1; $a <= 3; $a++) {  
    for ($b = 1; $b <= 2; $b++) {  
        echo "a = $a, b = $b<br>";  
    }  
}
echo "<br><br>";

echo "Looping break<br>";
for ($i = 1; $i <= 5; $i++) {  
    if ($i == 3) {  
        break; // Menghentikan loop saat $i sama dengan 3  
    }  
    echo "Iterasi ke: $i<br>";  
}
echo "<br><br>";

echo "Looping continue<br>";
for ($i = 1; $i <= 5; $i++) {  
    if ($i == 3) {  
        continue; // Melewatkan iterasi saat $i sama dengan 3  
    }  
    echo "Iterasi ke: $i<br>";  
}
echo "<br><br>";
?>