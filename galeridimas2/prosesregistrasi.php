<?php
     include "koneksi.php";
     //mengambil data imputan user
     $namalengkap=$_POST['namalengkap'];
     $alamat=$_POST['alamat'];
     $username=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     //memasukkan data ke database
    $query= mysqli_query($koneksi,"insert into user (username,password,email,namalengkap,alamat) values ('$username','$password','$email','$namalengkap','$alamat')");

    //mengecek
    if($query){
     header("location:login.php?pesan=sukses");
    }else{
     header("location:daftar.php?pesan=gagal");
     }
?>