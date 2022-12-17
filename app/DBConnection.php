<?php
    $server ='localhost';
    $username ='root';
    $password = '';
    $database = 'app';
    try {

      $dbh = new PDO("mysql:host=$server;dbname=$database",$username,$password);
      $dbh->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::FETCH_ASSOC);
      return $dbh;
    } catch (PDOException $e) {
      print("Error ".$e->getMessage().'<br>');
      die();
    }


?>