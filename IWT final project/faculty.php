<?php
	session_start();

	require_once "config/config.php";
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>SLBM Help Desk</title>
	
    <link rel="stylesheet" href="styles/aboutus_facul.css" >
	<script src="JS/aboutus.js"></script>

</head>
<body> 
    <!--Header-->
    <div class="Top">
        <img class="logo" src="image/Logo.png" width="10%" height="10%">
        <div class="buttonlog">
            <button type="button"><samp>Sing in</samp> </Samp></button>
            <button type="button"><Samp>Login </Samp></button><br>
            
        </div>
        <h4><a class=" forgetpw" href = "#">Forgotten your username or password?</a></h4>
        <form class="search-bar">
            <input type="text" placeholder="Search">
            <div >
        </div>
        </form>
        </div>
    <!--End Header-->

    <!--Navigation bar-->	
    <div class="menu">
        <ul>
            <li class="active"><a href= "HomeA_L.html">Home</a></li>
            <li><a href= "faculty.html">Faculties</a>
                <div class="sub-menu-1">
                    <ul>
                        <li class="hover-me"><a href="faculty.html">Faculty of Computing</a>
                            <div class="sub-menu-2">
                                <ul>
                                    <li><a href="faculty.html">1st Year</a></li>
                                    <li><a href="#">2nd Year</a></li>
                                    <li><a href="#">3rd Year</a></li>
                                    <li><a href="#">4th Year</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Faculty of Engineering</a></li>
                        <li><a href="#">Faculty of Business</a></li>
                        <li><a href="#">Faculty of Humanities</a></li>
                        <li><a href="#">Faculty of Art</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="library.html">Library</a></li>
            <li><a href= "contactUS.html">Contact us</a></li>
            <li><a href= "#">Help</a></li>
            <li><a href= "user.html">User Profile</a></li>
        </ul>
    </div>
        
		<ul class="breadcrumb">
	  <li><a href="HomeA_L.html">Home</a></li>
	  <li><a href="course.html">courses</li>
	  <li><a href="#">Faculty of Computing</a></li>
	  <li><a href="#">Faculty of Computing</a></li>
	  <li>B.Sc (Hons)Information Technology</li>
	</ul>
       
		<?php
			date_default_timezone_set('Asia/Colombo');
		    $REAL_TIMEZONE = "-05:00"; 
						
			$query1  = mysqli_query($link, "SELECT * FROM lec_recodings"); 
			
			$lec_count = mysqli_num_rows($query1); 
		?>
		
		<br>
		<center><h2>Hi <?php echo $_SESSION['username']; ?>, You have <?php echo $lec_count; ?> Lecture Access!</h2></center>
		
		<section class="videos" id="featured-videos">
			<div class="video-grid front-page" id="front-page-videos">
				<ul class="video-list featured">
        
					<?php  
							
						$sql = "SELECT * FROM lec_recodings";
						$result = mysqli_stmt_init($link);
							if (!mysqli_stmt_prepare($result, $sql)) {
								echo '<p class="error">SQL Error</p>';
							}else{
								mysqli_stmt_execute($result);
								$resultl = mysqli_stmt_get_result($result);
									while ($row = mysqli_fetch_assoc($resultl)){
													
										$datetime = $row["created_at"];
										$datetime_converted = date('F j, Y, g:i A', strtotime("$datetime $REAL_TIMEZONE"));

											echo '<li class="video featured">
													<a data-fancybox href="#" class="featured-video">
														<figure style="background-image: url(https://img.youtube.com/vi/PVs_xZtrtrt46Cxw/hqdrtrefault.jpg);">
															<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
															<figcaption>'.$row["name"].' <small>'.$datetime_converted.'</small><br>['.$row["year"].'year '.$row["semester"].'semester]</figcaption>
														</figure>
													</a>
												</li>';
											}
										}
					?>
				</ul>
			</div
		</section>

    <br>
    <!--Footer-->
    <footer> 
    <!--Quick Links-->
    <div class="Bottom">
        <ul class="ful">
            <h3 class="QuckL">Quick Links </h3>
            <li class="item"><a href = "HomeA_L.html"> Home </a></li>
            <li class="item" ><a href = "course.html"> Courses </a></li>
            <li class="item"><a href = "contactUS.html"> Support Service </a></li>
            <li class="item"><a href = "about us.html"> About us </a></li>
        </ul>


        <!--QR code-->
        <img class="qrcode" src="image/QRcode.png">


        <!--About us -->
        <div class="about" >
        <p>
            <h3><a class="aboutL" href= "about us.html">About US</a></h3>
            An opportunity to make your dreams<br> come 
            true through SLBM University. <br>
            At SLBM University, student success is our priority.
        </div>
        </p>  
    </div>
    
</footer>
</body>



</html>