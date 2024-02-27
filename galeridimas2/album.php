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
			  <a class="navbar-brand" href="#">
			  <h1><span class="bold"style="color:white;">Mypict</span></h1>
			  
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			     
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="index.php">Beranda</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="#blog">Album</a>
			      </li>
				  <li class="nav-item">
			        <a class="nav-link smooth-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin hapus foto')">Logout</a>
			      </li>
			    </ul>
			  </div>
		  </div>
		</nav>


		<section class="padding" id="features">
			<div class="container">
			 <div class="row">
				<section class="padding bg-grey" style="margin-top:100px; width:3000rem;" id="blog">
			      <div class="container">
				 <h2 class="section-title" style="text-align: center; margin-bottom: 30px; margin-top: -50px;">Album</h2>
				 <a href="tambahalbum.php" style="color:white; text-decoration: none;">
					<div style=" margin: 0 auto; width: 200px; background: #222; color: white; border-radius: 99px;
					 text-align: center; padding : 12px 24px; font-size: 16px;">
					 Tambah Album
					</div>
				 </a>
				     <div class="section-body">
					 <div class="row col-spacing" >	
					 <?php
				 		session_start();
						include "koneksi.php";
						$userid=$_SESSION['userid'];
						$query=mysqli_query($koneksi,"select * from album where userid='$userid'");
						while($data=mysqli_fetch_array($query)){	
				        ?>
					 <div class="col-6 col-md-6 col-lg-4">
					 
							<article class="card">
							  <img class="card-img-top" src="img/news/img-08.png" alt="Article Image" style ="height:241px; width: fill; object-fit: contain;">
							  <div class="card-body">
							    <h4 class="card-title"><?php echo $data['namaalbum'];?></h4>
							    <p class="card-text"><?php echo $data['deskripsi'];?></p>
								<div style="align-items: center; display:flex;">
									<div style="width:50%">						    	
										<a href="hapusalbum.php?albumid=<?php echo $data['albumid'];?>" onclick="return confirm('Apakah anda yakin ingin hapus foto')" style="color:black;">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z"/></svg>
										</a>
									</div>
									<div style="width:fit-content; margin: 0 0 0 auto;">						    	
										<a href="foto.php?albumid=<?php echo $data['albumid'];?>" style="color:black; align-items:center;"><b>lihat album</b><i class="ion-ios-arrow-right"></i></a>
									</div>
								</div>
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
