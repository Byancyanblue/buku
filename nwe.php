<?php  
session_start();  
$_SESSION["username"] = "Syera Asya Malik";  
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Session Example</title>  
</head>  
<body>  
    <h1>Halo, <?php echo $_SESSION["username"]; ?>!</h1>  
</body>  
</html>