<?php

//php code here

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
    <nav>
        <ul class = "menu">
        <li><a href= "HomeA_L.html">Home</a></li>
        <li><a href= "faculty.html">Faculties</a></li>
        
        <li><a href="library.htnl">Library</a></li>
        <li><a href= "contactUS.html">Contact us</a></li>
        <li><a href= "about us.html">About us</a></li>
        <li><a href= "#">Help</a></li>
		<li><a href= "#">User Profile</a></li>
    </ul>
    </nav>
	
	<ul class="breadcrumb">
	  <li><a href="#">Home</a></li>
	  <li>About us</li>
	</ul>
	
	<div class="slideshow-container">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 4</div>
		  <img src="image/university.jpg" style="width:100%">
		 
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 4</div>
		  <img src="image/image2.jpg" style="width:100%">
		  
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 4</div>
		  <img src="image/img3.jpg" style="width:100%">
		  
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">4 / 4</div>
		  <img src="image/img4.jpg" style="width:100%">
		  
		</div>
		
		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span>
		  <span class="dot"></span> 
		</div>
	</div>
	<br>

	<p>The University of SLBM was established to provide independent, professional, and specialist advice and support to help you make the right degree choice and submit a successful application to university. We help students to understand university entry requirements, and how to apply to university to study around the world.</p>
	<main class="page-content">

		<div class="card">
			<div class="content">
			  <h2 class="title">ENGINEERING</h2>
			  <p class="copy"> The faculty of Engineering is perfect if you’re looking for a future career with opportunities to travel, have fun and experience diverse employment.</p>
			</div>
		</div>
		  
		<div class="card">
			<div class="content">
			  <h2 class="title">LOGICTIC</h2>
			  <p class="copy">The faculty of logistic and management to Choose from our logistics courses in Sri Lanka that offer prestigious degrees.</p>
			</div>
		</div>
		  
		<div class="card">
			<div class="content">
			  <h2 class="title">COMPUTING</h2>
			  <p class="copy">Are you curious to discover how things work? Tomorrow web designers, software engineers, and app developers take their first step with a SLBM Information Technology degree.</p>
			</div>
		</div>
		  
		<div class="card">
			<div class="content">
			  <h2 class="title">HUMANITIES</h2>
			  <p class="copy">The Faculty of Humanities & Sciencess of SLBM is the epicenter of humanities education,research, knowledge creation and distribution in Sri Lanka.</p>
			</div>
		</div>
		  
		<div class="card">
			<div class="content">
			  <h2 class="title">BUSINESS</h2>
			  <p class="copy">Do you have a passion for marketing, want to get into the world of finance, or are keen to learn how the economy drives business decision-making? SLBM College business programs are designed to help get you a Business or Bachelor of Economics.</p>
			</div>
		  </div>
		  
		  <div class="card">
			<div class="content">
			  <h2 class="title">RESEARCH</h2>
			  <p class="copy">Learn about our latest breakthroughs, industry collaborations and strategic initiatives, plus access our wide range of publications..</p>
			</div>
		  </div>
		  
	</main>
	
	<script>
	let slideIndex = 0;
	showSlides();

	function showSlides() {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 3500); 
	}
	</script>

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
            <h3><a class="aboutL" href= "#">About US</a></h3>
            An opportunity to make your dreams<br> come 
            true through SLBM University. <br>
            At SLBM University, student success is our priority.
        </div>
        </p>  
    </div>
    
</footer>
</body>
</html>