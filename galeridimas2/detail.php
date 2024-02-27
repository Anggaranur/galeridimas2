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

		<div onclick="location.href='index.php'" style="cursor: pointer; margin: 40px 0 0 40px; width: fit-content; padding: 18px; border-radius: 99px; color: white; background: #222; align-items: center; font-size: 18px; display: flex; gap: 12px;">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M3.076 5.617A1 1 0 0 1 4 5h10a7 7 0 1 1 0 14H5a1 1 0 1 1 0-2h9a5 5 0 1 0 0-10H6.414l1.793 1.793a1 1 0 0 1-1.414 1.414l-3.5-3.5a1 1 0 0 1-.217-1.09"/></g></svg>
		</div>

		<section id="features" style="padding: 48px;">
		<?php
			session_start();
			include "koneksi.php";
			$fotoid=$_GET['fotoid'];
			$userid=$_SESSION['userid'];
			$query=mysqli_query($koneksi, "select * from foto f JOIN user u ON f.userid=u.userid where fotoid='$fotoid'");
			$data=mysqli_fetch_array($query);
		?>
			<div style="width:100%; height: fit-content; border-radius: 6px; display:flex; gap:24px; padding: 24px; background: #f0f0f0; align-items:center;">
				<div style="width: 50%; border-radius: 12px;">
					<img src="img/<?php echo $data['lokasifile'];?>" style="width: 100%; border-radius: 12px;  background: #d9d9d9; max-height:600px; object-fit:contain;">
				</div>
				<div style="width:50%; border-radius:12px;">
					<div style="display:grid; gap:12px;">
						<div style="display:flex; gap:12px;">
							<img src="img/news/img01.jpg" alt="" style="width: 32px; height: 32px; border-radius: 99px; object-fit: cover;">
							<?php echo $data['username'];?>
						</div>
						<div>
							<p>
								<?php echo $data['judulfoto'];?>
							</p>
							<p>
							    <?php echo $data['deskripsifoto'];?>
							</p>
						</div>
						<div style="display: flex; gap:3px;">
							
						<?php
       $sql=mysqli_query($koneksi, "select * from likefoto where fotoid='$fotoid' and userid='$userid'");
                                    $row=mysqli_fetch_array($sql);
                            

                                    if(isset($row['fotoid']) && isset($row['userid'])){
                                        if($fotoid==$row['fotoid'] && $userid==$row['userid']){
                                ?>
							       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ff1c03" stroke="#222" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z"/></svg>
								<?php
																				}
							     }else{?>
								 <a href="likefoto.php?userid=<?php echo $userid;?>&fotoid=<?php echo $fotoid;?>">
								   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#bd2e2e" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z"/></svg>
								   </a>
								<?php
								 }
							    ?>

								<p>
								
									<?php
									    $sql2=mysqli_query($koneksi,"select count(fotoid) as jumlahlike from likefoto where fotoid=$fotoid");
										  $row2=mysqli_fetch_array($sql2);
									?>
                      <?php echo $row2['jumlahlike']?>
							    </p>	
							
							   <a href="">
							   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 1 0-9-9c0 1.488.36 2.89 1 4.127L3 21l4.873-1c1.236.639 2.64 1 4.127 1"/></svg>
							    </a>

								<?php
								    $sql4=mysqli_query($koneksi,"select count(fotoid) as jumlahkomentar from komentarfoto where fotoid='$fotoid'");
									$row4=mysqli_fetch_array($sql4);
									echo$row4['jumlahkomentar'];
								?>
						</div>
						<div style="width: 100%; height: 200px; border-radius: 6px; background: #d9d9d9; padding: 24px; overflow-y: auto;">
							 <div style="display: flex; gap: 12px;">
								 <!-- <img src="img/news/img01.jpg" alt="" style="width: 32px; height: 32px; border-radius: 99px; object-fit: cover;">
								<p>{{username}}</p> -->

								
								<form action="komentar.php" method="POST">
									<input type="hidden" name="fotoid" value="<?php echo $fotoid;?>">
									<input type="hidden" name="userid" value="<?php echo $userid;?>">
								<div class="komen" style="display: flex; background: #fff; margin-top:110px; border-radius: 12px; padding:6px; position:absolute; z-index:10;">
                        			<input type="text" name="isikomentar" style="width: 470px; outline:none; border:none; padding:6px;  ;" placeholder="ketik">
                        			<input type="submit" value="kirim" style="width: 60px; outline:none; border:none; padding:6px; ">
                    			
								</div>
								</form>
								
								<div style="display:grid; margin-bottom: 54px;">
								<?php
									 $sql3=mysqli_query($koneksi,"select*from komentarfoto k JOIN user u ON k.userid=u.userid where fotoid='$fotoid'");
									 while($row3=mysqli_fetch_array($sql3)){
								?>
									<div style="display:flex; gap:6px; align-items: center;">
										<span>
											<?php echo $row3['username'];?>
										</span>
										<span style="font-size:10px;">
											<?php echo $row3['tanggalkomentar'];?>
										</span>
									</div>
									<div>
										<P>
											<?php echo $row3['isikomentar'];?>
										</P>
									</div>
								<?php
									}
								?>
								</div>
							 </div> 
							
						</div>
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
</html> <!-- <img src="img/news/img01.jpg" alt="" style="width: 32px; height: 32px; border-radius: 99px; object-fit: cover;">
								<p>{{username}}</p> -->