<?php
session_start();

include "koneksi.php";
$email=$_POST ['email'];
$password=$_POST ['password'];
$query= mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
$data=mysqli_fetch_array($query);
$cek=mysqli_num_rows($query);
if($cek>0){
   $_SESSION['userid']=$data['userid'];
    header("location: index.php");
}else{
    header("location: login.php? pesan=logingagal");
}
?>