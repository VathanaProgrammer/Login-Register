<?php

$host = 'sql306.infinityfree.com';
$username = 'if0_38146282';
$password = '4coeG7mQe9J9q';
$dbname = 'if0_38146282_signupsignin';
$conn = new mysqli($host, $username, $password, $dbname);

if($conn-> connect_error)
{
    echo "Failed to connect Database ". $conn -> connect_error;
}
?>