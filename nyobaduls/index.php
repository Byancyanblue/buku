<?php
    include("conn.php");


    $sql = "DELETE FROM users WHERE name = 'Squidward'";  
    if ($conn->query($sql) === TRUE) {  
        echo "Data berhasil dihapus!";  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }

    mysqli_close($conn);

    /*
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["name"] . "<br>";
            echo $row["reg_date"] . "<br>";
            echo $row["address"] . "<br>";
        };
    }
    else {
        echo "No user found";
    }

    mysqli_close($conn);

    /*
    $sql = "UPDATE users SET address = 'Bikini Bottom' WHERE name = 'Patrick'";  
    if ($conn->query($sql) === TRUE) {  
        echo "Data berhasil diperbarui!";  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  


    /*ini untuk insert
    $username = "Patrick";
    $password = "spongebobb2";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(name, password)
            VALUES ('$username', '$hash')";
    try{
        mysqli_query($conn, $sql);
        echo"User is now registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }
    
    mysqli_close($conn);
*/
?>