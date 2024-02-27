<?php
 include "koneksi.php";
 $albumid=$_GET['albumid'];
 $fotoid=$_GET['fotoid'];

 $query=mysqli_query($koneksi,"delete from foto where fotoid='$fotoid'");
 if($query){
    $sql1=mysqli_query($koneksi,"delete from komentarfoto where fotoid='$fotoid'");
    $sql2=mysqli_query($koneksi,"delete from likefoto where fotoid='$fotoid'");
    header("location:foto.php?albumid=".$albumid."?pesan=hapussukses");
 }
 else{
    header("location:foto.php?albumid=".$albumid."?pesan=hapusgagal");
 } 
 
?>