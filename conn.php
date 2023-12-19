<?php
$host = 'localhost';
$username ='root';
$password ='';
$database = 'new';

$conn= mysqli_connect($host,$username,$password,$database);

if(!($conn))
{
    echo "Connect is not successful";
}

?>