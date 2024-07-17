<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:../login.php?pesan=gagal");
	}
 
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Project</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">


<style>
.box {
    height: 220px;
    width: 800px;
    margin: 20px;
    border: 1px solid #ccc;
  }
  
  .top {
    box-shadow: 0 -5px 5px -5px #333;
  }
  
  .right {
    box-shadow: 5px 0 5px -5px #333;
  }
  
  .bottom {
    box-shadow: 0 5px 5px -5px #333;
  }
  
  .left {
    box-shadow: -5px 0 5px -5px #333;
  }
  
  .all {
    box-shadow: 0 0 5px #333;
  }


.anjay {
  display: inline-block;
  width: auto;
  height: auto;
  padding: 0 30px;
  border: 0px solid blue;    
  margin: 5px;
  margin-top: 100px;
  background-color: yellow; 

            }
        </style>
    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="navbar-black">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.html"><img src="../assets/img/logo2.png" alt="alternative"></a>
                
            
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div> 
            </div><!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->
 

                      <div class="container"><br><br><center>
                        <br><br><br><br><h3>Pesanan Pekerjaan</h3><br>
                    </div> <center>
      
                        <?php 
                        
                include '../config.php';
                $no = 1;
                $idusers = $_SESSION['id_users'];
                $data = mysqli_query($conn,"select * from jasa where category_jasa=2");
                while($d = mysqli_fetch_array($data)){
                    
                    ?>
                        <div class="box all">
                        <p style="padding-bottom: 50px; padding-left: 35px;" align="left">
                        <br><b>Nama Kelompok : </b><?php echo $d['nama_kelompok'];  ?>
                        <br><b>Keterangan : </b><?php echo $d['keterangan'];   ?>
                </p><a href="formtraktor.php?id_pesan=<?=$d['id_jasa']?>" style="padding: 10px 60px; color: white; background-color:#252936;">
                            Pesan
                        </a>
                        </div>
                    <?php 
                }
                ?>
        </center></div>

        <br><br><br><br>

        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    
                    <!-- Image Logo -->
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
                </div>  <!-- end of container -->
        </footer> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Back To Top Button -->
        <a id="myBtn" href="#" data-scroll>
            <img src="images/up-arrow.png" alt="alternative">
        </a>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>