<?php
    // create.php  
    include 'conn.php'; // Koneksi ke database  
 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $nama = trim($_POST['nama']);  
        $nilai = $_POST['nilai'];  

        // Validasi input  
        if (empty($nama) || !is_numeric($nilai) || $nilai < 0 || $nilai > 100) {  
            echo "Data tidak valid. Pastikan nilai antara 0 dan 100.";  
        } else {  
            $sql = "INSERT INTO siswa (nama, nilai) VALUES ('$nama', $nilai)";  
            
            if ($conn->query($sql) === TRUE) {  
                echo "Data berhasil ditambahkan!";  
            } else {  
                echo "Error: " . $sql . "<br>" . $conn->error;  
            }  
        }  
    }  

    $conn->close();

?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Studi Kasus Desain Responsif</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  
    <div class="container">  
            <div class="col-md-6">  
                <h2>Form Tambah Data</h2>  
                <form action="create.php" method="POST">  
                    <div class="form-group">  
                        <label for="nama">Nama</label>  
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">  
                    </div>  
                    <div class="form-group">  
                        <label for="nilai">Nilai</label>  
                        <input type="number" class="form-control" id="nilai" placeholder="Masukkan Nilai">  
                    </div>  
                    <button type="submit" class="btn btn-primary">Tambah Data</button>  
                </form>  
            </div>  
        </div>  
    </div>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>