<?php 
	session_start();
 
	if($_SESSION['level']=="buyer"){

 
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Project</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="../css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>

        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.php"><img src="../assets/img/logo.png" alt="alternative"></a>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div> <!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->

        
 <!-- Customers -->
 <div class="customers bg-black">
            <div class="slider">
		<figure>
			<div class="slide">
				<img src="../assets/img/g1.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g2.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g3.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g4.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g5.jpg">
			</div>
		</figure>
	</div>
    <br>        
                <div class="container grid grid-4">
                <button onclick="location.href='buruhtani.php'" class="form-control-submit-button-as">Jasa Buruh Tani</button>
                <button onclick="location.href='traktor.php'" class="form-control-submit-button-as">Jasa Traktor</button>
                <button onclick="location.href='berita.php'" class="form-control-submit-button-as">Berita Pertanian</button>
                <button onclick="location.href='Panduan.php'" class="form-control-submit-button-as">Kebijakan & Ketentuan</button>
                </div><br>

        <div id="contact" class="contact bg-gray">
            <center>
            <h3>Pesanan Pekerjaan</h3><br>
                <table border="1" width="90%" style=" text-align:center" cellspacing='0'>
                <tr style=" background-color:black;" height="50px">
                <th>ID</th>
                <th>Tanggal Kerja</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Pekerjaan</th>
                <th>Lokasi</th>
                <th>Details</th> 
                <th>Status</th> 
                <th>Aksi</th> 
                </tr>
                <?php 
                
		include '../config.php';
		$no = 1;
        $id_users = $_SESSION['id_users'];
		$data = mysqli_query($conn,"select * from notif where id_buyer=$id_users");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_notif']; ?></td>
				<td><?php echo $d['date']; ?></td>
				<td><?php echo $d['namebuyer']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['job']; ?></td>
				<td><?php echo $d['location']; ?></td>
			
                <td>
                <a href="detail.php?id_notif=<?=$d['id_notif']?>">
                    Detail
                </a>
                </td>
                <td><?php echo $d['status']; ?></td>
                <td>					<a style="
                    background-color: red;
                    color: white;   
                    " href="delete.php?del=<?php echo $d['id_notif']; ?>">Hapus</a></td>
			</tr>
			<?php 
		}
		?>
</table></center></div>
                <!-- end of contact form -->

            </div> <!-- end of container -->
        </div> <!-- end of contact -->
        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    <a class="logo-image" href="index.html"><img src="../assets/img/logo2.png" alt="alternative"></a> 
                    
                </div>  
        <div>
          <ul class="li-space-lg">
          <li><p>Hak Cipta 2024</p></li>
          </ul>
        </div>
                <div>
                    <a href="#"><img src="../assets/img/twitter.png" height="40px"></i></a>
                    <a href="#"><img src="../assets/img/facebook.png" height="40px"></i></a>
                    <a href="#"><img src="../assets/img/linkedin.png" height="40px"></i></a>
                    <a href="#"><img src="../assets/img/instagram.png" height="40px"></i></a>
                </div>
            </div> <!-- end of container -->
        </footer> <!-- end of footer -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>

<?php
    }
    error_reporting(0);

		header("location:../login.php?pesan=gagal");
        

?>