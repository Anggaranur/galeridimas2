<?php
include "koneksi.php";
$userid=$_GET['userid'];
$fotoid=$_GET['fotoid'];
$query=mysqli_query($koneksi,"insert into likefoto (fotoid,userid,tanggallike) values ('$fotoid','$userid',NOW())");
if($query){
    header("location: index.php?fotoid=");
}else{
    header("location: index.php?fotoid=");
}


?>