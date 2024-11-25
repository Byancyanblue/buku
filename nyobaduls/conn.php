<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "123fourfive";
    $db_name = "business_db";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo "Error connecting to database";
    }
   
    /*
    if($conn){
        echo "You are Connected!";
    }else {
        echo "No Connection";
    }
        */
?>
