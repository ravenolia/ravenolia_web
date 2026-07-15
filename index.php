<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Website</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="circle c1"></div>
<div class="circle c2"></div>
<div class="circle c3"></div>

<div class="login-box">

<h1>WELCOME</h1>

<p>Silakan Login Terlebih Dahulu</p>

<form action="login.php" method="POST">

<div class="input-box">

<i class="fa-solid fa-user"></i>

<input
type="text"
name="username"
placeholder="Username"
required>

</div>

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input
type="password"
name="password"
placeholder="Password"
required>

</div>

<button type="submit">
    Login
</button>

<p class="creator">By Ravenolia</p>

</form>

</div>