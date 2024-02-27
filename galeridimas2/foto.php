<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
		<meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
		<title>I'm Stisla</title>
		<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="css/stisla.css">
	</head>

	<body>
	<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">			
			  <a class="navbar-brand">
			  <h1><span class="bold"style="color:white;">Mypict</span></h1>
			  </a>
			 
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a  href="index.php"></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="index.php">Beranda</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="album.php#blog">Album</a>
			      </li>
				  <li class="nav-item">
			        <a class="nav-link smooth-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin hapus foto')">Logout</a>
			      </li>
			    </ul>
			    
			  </div>
		  </div>
		</nav>

		<section class="padding" id="features" >
			<div class="container">
				<div class="row">
				<section class="padding bg-grey" style="margin-top:100px; width:3000rem;" id="blog" >
				<div onclick="location.href='album.php#blog'" style="cursor: pointer;  margin: 0 0 0 30px; width: fit-content; padding: 18px; border-radius: 99px; color: white; background: #222; align-items: center; font-size: 18px; display: flex; gap: 12px;">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M3.076 5.617A1 1 0 0 1 4 5h10a7 7 0 1 1 0 14H5a1 1 0 1 1 0-2h9a5 5 0 1 0 0-10H6.414l1.793 1.793a1 1 0 0 1-1.414 1.414l-3.5-3.5a1 1 0 0 1-.217-1.09"/></g></svg>
		        </div> 
				
			<div class="container">
				<h2 class="section-title" style="text-align: center; margin-bottom: 30px; margin-top: -80px;">Album</h2>
				<a href="tambahfoto.php?albumid=<?php echo $_GET['albumid'];?>" style="color:white;text-decoration: none;">
					<div style=" margin: 0 auto; width: 200px; background: #222; color: white; border-radius: 99px;
					 text-align: center; padding : 12px 24px; font-size: 16px;">
					 Tambah Foto
					</div>
					</a>
				<div class="section-body">
					<div class="row col-spacing" >
					<?php
				 		session_start();
						include "koneksi.php";
						$userid=$_SESSION['userid'];
						$albumid=$_GET['albumid'];
						$query=mysqli_query($koneksi,"select * from foto where userid='$userid' and albumid='$albumid'");
						while($data=mysqli_fetch_array($query)){	
				        ?>
					<div class="col-6 col-md-6 col-lg-4">
					<article class="">
							<article class="">
							  <img onclick="location.href='detailpoto.php?fotoid=<?php echo $data['fotoid'];?>&albumid=<?php echo $data['albumid'];?>'"class="card-img-top" src="img/<?php echo $data['lokasifile'];?>"style= "height:241px; width:fill; object-fit:contain; background: #f0f0f0;" alt="Article Image"></a>
							  <div class="">
						    </div>
						  </article>
					</div>
					<?php
						}	
					?>	
				</div>		
			</div>				
			</div>
		</section>

		

		

		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/jquery.easeScroll.js"></script>
		<script src="sweetalert/dist/sweetalert.min.js"></script>
		<script src="js/stisla.js"></script>
	</body>
</html>