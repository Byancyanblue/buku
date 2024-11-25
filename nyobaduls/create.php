<?php
    // create.php  
    include 'conn.php'; // Koneksi ke database  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $nama = trim($_POST['nama']);  
        $nilai = $_POST['nilai'];  

        // Validasi input  
        if (empty($nama) || !is_numeric($nilai) || $nilai < 0 || $nilai > 100) {  
            echo "<div class='alert alert-danger'>Data tidak valid. Pastikan nilai antara 0 dan 100.</div>";  
        } else {  
            $sql = "INSERT INTO siswa (nama, nilai) VALUES ('$nama', $nilai)";  
            
            if ($conn->query($sql) === TRUE) {  
                echo "<div class='alert alert-success'>Data berhasil ditambahkan!</div>";  
            } else {  
                echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";  
            }  
        }  
    }  

$conn->close();
?>
<!-- form_create.php -->  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Form Tambah Data</title>  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>  
<body>  
    <div class="container mt-5">  
        <h1 class="mb-4">Tambah Data Siswa</h1>  
        <form action="create.php" method="POST">  
            <div class="form-group">  
                <label for="nama">Nama:</label>  
                <input type="text" class="form-control" id="nama" name="nama" required>  
            </div>  
            <div class="form-group">  
                <label for="nilai">Nilai:</label>  
                <input type="number" class="form-control" id="nilai" name="nilai" required>  
            </div>  
            <button type="submit" class="btn btn-primary">Tambah</button>  
        </form>  
    </div>  

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>  
</html>