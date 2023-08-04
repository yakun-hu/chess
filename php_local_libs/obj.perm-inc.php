<?php if(session_status() === PHP_SESSION_NONE) { session_start(); } // Create connection
$conn = mysqli_connect("localhost", "root", "", "dash-test");
// Check connection, echo err 
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } else { /* echo "Connection successful!"; */ } // echo "this.is-req'd"; ?>

<head><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="php_local_libs/CSS-external.php"></head>
  <style>.prot-E{background-color:00FF00}.neutr{background-color:607399;color:white}.eE{background-color:red;color:white}</style>

<!-- refs: http://chess/php_local_libs/obj.perm-inc.php
WP.MIC-PHP Permanuscale: $snap-var -> $_POST -> $_SESSION -> db -->