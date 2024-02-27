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
		
		<section class="padding" id="features">
			<div class="container">
				<div class="row">	
		<section class="padding bg-grey" style="margin-top:10px" id="isi">
			<div class="container">
				<h2 class="section-title text-center">Daftar Akun</h2>
				<div class="section-body">				
					<div class="row col-spacing">
						<div class="col-12 col-md-12">
							<form class="contact row" id="contact-form" action="prosesregistrasi.php" method="POST">
							<?php
								 if(isset($_GET['pesan'])){
									if($_GET['pesan']=="gagal"){?>
										<div class="alert alert-success" style= "margin: 0 auto; margin-bottom: 30px; margin-top: -15px; display: flex; align-items: center; gap: 12px;"
										role="alert">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M23 10a2 2 0 0 0-2-2h-6.32l.96-4.57c.02-.1.03-.21.03-.32c0-.41-.17-.79-.44-1.06L14.17 1L7.59 7.58C7.22 7.95 7 8.45 7 9v10a2 2 0 0 0 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73zM1 21h4V9H1z"/></svg>
										Registrasi Berhasil,Login disini
									   </div>
								<?php
									}
								 }
								?>
								<div class="form-group col-12">
								<label >Nama Lengkap</label>
									<input type="text" class="form-control" placeholder="Subject" name="namalengkap" required="">
								</div>
								<div class="form-group col-12">
								<label >Alamat</label>
									<input type="text" class="form-control" placeholder="Subject" name="alamat" required="">
								</div>
								<div class="form-group col-12">
								<label >Username</label>
									<input type="text" class="form-control" placeholder="Subject" name="username" required="">
								</div>
								<div class="form-group col-12">
								<label >Email</label>
									<input type="email" class="form-control" placeholder="Subject" name="email" required="">
								</div>
								<div class="form-group col-12">
								<label >Password</label>
									<input type="password" class="form-control" placeholder="Subject" name="password" required="">
								</div>
								<button type="submit" class="btn btn-primary" style="margin-left:32rem; margin-top:10px;">
										Simpan
									</button>
                                
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
		</section>

		

		

		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<script src="sweetalert/dist/sweetalert.min.js"></script>
		<script src="js/stisla.js"></script>
	</body>
</html>


					  