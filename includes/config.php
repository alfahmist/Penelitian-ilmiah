<?php

  global $conn;
  $servername = "localhost";
  $username = "id6374795_admin";
  $password = "admin";
  $dbname = "id6374795_borneo";

  $conn = mysqli_connect($servername,
  $username,
  $password,
  $dbname);
  if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
  }
?>