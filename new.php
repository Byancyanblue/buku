<?php  
$name = "Alice";  
$age = 30;  

function introduce($name, $age) {  
    return "Nama saya " . $name . " dan saya berusia " . $age . " tahun.";  
}  

echo introduce($name, $age);  
?>