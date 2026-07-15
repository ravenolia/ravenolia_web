<?php
session_start();
include "koneksi.php";

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$query = mysqli_query($conn,"SELECT * FROM users
WHERE username='$username'
AND password='$password'");

if(mysqli_num_rows($query)>0){

$_SESSION['username']=$username;

header("Location: dashboard.php");

}else{

echo "<script>

alert('Username atau Password Salah');

window.location='index.php';

</script>";

}
?>
