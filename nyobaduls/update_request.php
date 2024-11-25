<?php

    // update_process.php  
    include 'conn.php';  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $id = $_POST['id'];  
        $nama = $_POST['nama'];  
        $nilai = $_POST['nilai'];  

        $sql = "UPDATE siswa SET nama='$nama', nilai=$nilai WHERE id=$id";  
        
        if ($conn->query($sql) === TRUE) {  
            echo "Data berhasil diperbarui!";  
        } else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
    }  

$conn->close();
?>