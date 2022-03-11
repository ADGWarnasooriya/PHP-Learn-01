<?php

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];
$mobile = $_GET["mobile"];
$password = $_GET["pw"];
$city = $_GET["city"];

// echo $fname;
// echo "<br>";
// echo $lname;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $mobile;
// echo "<br>";
// echo $password;
// echo "<br>";
// echo $city;

$dbms = new mysqli();
