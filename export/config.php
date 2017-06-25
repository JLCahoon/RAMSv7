<?php
function getdb(){
$servername = "localhost:8889";
$username = "root";
$password = "root";
$db = "RiskManagement";
 
try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>
