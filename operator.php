<?php 
    $a = 10;
    $b = 20;


    //operator aritmetika
    $c = $a + $b;
    $d = $a - $b;
    $e = $a * $b;
    $f = $a / $b;
    $g = $a % $b;
    $h = $a ** $b;
    echo "Operasi Aritmetika<br>";
    echo "Penambahan :$c<br>";
    echo "Pengurangan :$d<br>";
    echo "Perkalian :$e<br>";
    echo "Pembagian :$f<br>";
    echo "Modulus :$g<br>";
    echo "Pangkat :$h<br>";
    echo "<br><br>";

    //operator penugassss
    echo "Operator Penugas <br>";
    $penugas = 200;
    $penugas += 50;
    echo "Jumlah Penugas : $penugas <br>";
    $penugas -= 20;
    echo "Jumlah Penugas sebelumnya : $penugas <br>";
    $penugas *= 2;
    echo "Jumlah Penugas Pada Dua Tahun yang akan datang : $penugas <br>";
    $penugas /= 2;
    echo "Jumlah Penugas sekarang : $penugas <br>";
    $penugas %= 10;
    echo "Jumlah Gaji Petugas : $penugas <br>";
    //operator perbandingan
    echo "<br>";
    if ($a == $b) {  
        echo "Sama<br>";  
    }else {
        if ($a != $b) {  
            echo "Tidak sama<br>";  
        }
    }
    if ($a === $b) {  
        echo "Sama dan bertipe<br>";  
    } else {
        if ($a !== $b) {  
            echo "Tidak sama atau berbeda tipe<br>";  
        }
    }
    if ($a > $b) {  
        echo "Lebih besar<br>";  
    } else {
        if ($a < $b) {  
            echo "Lebih kecil<br>";  
        }
    }
    if ($a >= $b) {  
        echo "Lebih besar atau sama<br>";  
    }else {
        if ($a <= $b) {  
            echo "Lebih kecil atau sama<br>";  
        }
    }
    echo "<br>";

    //operator logika 
    if ($a > 0 && $b > 0) {  
        echo "Kedua bilangan positif<br>";  
    }
    if ($a > 0 || $b > 0) {  
        echo "Setidaknya satu bilangan positif<br>";  
    }
    if (!($a > 0)) {  
        echo "Bilangan tidak positif<br>";  
    }
    echo "<br>";
    //operator ternary
    $hasil = ($a > $b) ? "a lebih besar" : "b lebih besar";
    echo $hasil . "<br>";


    $array = [1, 2, 3];  
    print_r($array);
?>

