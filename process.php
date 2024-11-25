<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $name = htmlspecialchars($_POST['name']);  
    echo "Nama Anda adalah: " . $name;  
}  
?>