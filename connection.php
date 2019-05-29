<?php
try
{
    $user='root';
    $pass='';
    $cnx= new PDO('mysql:host=localhost;dbname=portfolio',$user,$pass);
}
catch (PDOException $e)
{
    echo 'ERROR', $e->getMessage(),"\n";
}
?>