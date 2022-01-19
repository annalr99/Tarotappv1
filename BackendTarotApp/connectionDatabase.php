<?php
try
{
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length:0');
    header('Content-Type: text/plain');

    $user = 'root';
    $password = '';
    //Connect to database.
    $connectionDatabase = new PDO('mysql:host=localhost;dbname=TarotApp', $user, $password);
}
catch(PDOException $e)
{
    //Error message
    die("Error: ".$e->getMessage());
}



?>