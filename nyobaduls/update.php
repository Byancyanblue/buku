<?php
    // update.php  
    include 'conn.php';  

    $id = $_GET['id'];  
    $sql = "SELECT * FROM siswa WHERE id=$id";  
    $result = $conn->query($sql);  
    $row = $result->fetch_assoc();  
?>  

    <!DOCTYPE html>  
    <html lang="en">  
    <head>  
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Form Edit Data</title>  
    </head>  
    <body>  
        <h1>Edit Data Siswa</h1>  
        <form action="update_request.php" method="POST">  
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">  
            <label for="nama">Nama:</label>  
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>  
            <label for="nilai">Nilai:</label>  
            <input type="number" id="nilai" name="nilai" value="<?php echo $row['nilai']; ?>" required><br>  
            <input type="submit" value="Update">  
        </form>  
    </body>  
    </html>

