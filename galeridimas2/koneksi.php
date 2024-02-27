<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $db="galeri_foto";

    $koneksi=mysqli_connect($hostname,$username,$password,$db);
    
    if(!$koneksi){
        echo "database tidak terkoneksi";
    }

?>