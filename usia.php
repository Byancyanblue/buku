<?php  
// Fungsi untuk menentukan kategori usia  
function kategoriUsia($umur) {  
    // Menggunakan if...else untuk memeriksa kategori usia  
    if ($umur < 12) {  
        return "Anak-anak";  
    } elseif ($umur >= 12 && $umur < 18) {  
        return "Remaja";  
    } elseif ($umur >= 18 && $umur < 65) {  
        return "Dewasa";  
    } else {  
        return "Lansia";  
    }  
}  

// Fungsi tambahan menggunakan switch untuk memberikan rekomendasi berdasarkan usia  
function rekomendasiAktivitas($umur) {  
    switch (true) {  
        case ($umur < 12):  
            return "Main di taman.";  
        case ($umur < 18):  
            return "Berolahraga di sekolah.";  
        case ($umur < 65):  
            return "Bekerja dan berkumpul dengan teman.";  
        default:  
            return "Berlibur atau beristirahat di rumah.";  
    }  
}  

// Mengambil input umur dari pengguna  
if (isset($_POST['umur'])) {  
    $umur = intval($_POST['umur']);  
    $kategori = kategoriUsia($umur);  
    $aktivitas = rekomendasiAktivitas($umur);  

    echo "Anda berusia $umur tahun, kategori usia: $kategori.<br>";  
    echo "Rekomendasi aktivitas: $aktivitas";  
} else {  
    // Form input agar pengguna bisa memasukkan usia  
    echo '<form method="post" action="">  
            <label for="umur">Masukkan umur Anda: </label>  
            <input type="number" name="umur" id="umur" required>  
            <input type="submit" value="Kirim">  
          </form>';  
}  
?>