<?php
    // read.php  
    include 'conn.php';  

    $sql = "SELECT * FROM siswa";  
    $result = $conn->query($sql);  

    echo "<h1>Daftar Siswa</h1>";  
    echo "<table border='1'>  
    <tr>  
    <th>ID</th>  
    <th>Nama</th>  
    <th>Nilai</th>  
    <th>Aksi</th>  
    </tr>";  

    if ($result->num_rows > 0) {  
        while($row = $result->fetch_assoc()) {  
            echo "<tr>  
            <td>".$row["id"]."</td>  
            <td>".$row["nama"]."</td>  
            <td>".$row["nilai"]."</td>  
            <td>  
                <a href='update.php?id=".$row["id"]."'>Edit</a>  
                <a href='delete.php?id=".$row["id"]."'>Hapus</a>  
            </td>  
            </tr>";  
        }  
    } else {  
        echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";  
    }  
    echo "</table>";  

    $conn->close();

?>