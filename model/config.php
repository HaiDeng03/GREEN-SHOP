<?php
 function connect(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "green";
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
}
?>