<?php
    // delete.php  
    include 'conn.php';  

    $id = $_GET['id'];  

    $sql = "DELETE FROM siswa WHERE id=$id";  

    if ($conn->query($sql) === TRUE) {  
        echo "Data berhasil dihapus!";  
    } else {  
        echo "Error: " . $conn->error;  
    }  

    $conn->close();
?>