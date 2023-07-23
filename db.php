<?php
$mysqli = mysqli_connect('localhost','cutietra_atestat','yV@a+,EO?~An','cutietra_atestat'); // server, user, password, db

// Verific conexiunea
if ($mysqli->connect_errno) {
  echo "Eroare conectarea la baza de date: " . $mysqli->connect_error;
  exit();
}