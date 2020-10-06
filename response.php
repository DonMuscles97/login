<?php
session_start();

include("nav.html");

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "don" && $password == "password"){
  $_SESSION["isLoggedIn"] = true;
  header("Location: protected-page.php");
} else {
  header("Location: index.php?invalidCredentials=true");
}
?>