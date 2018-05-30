<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="aboutus.css"/>
		<link rel="shortcut icon" href="logo.png"/>
<title>About Us</title>
</head>

<body>
	
	<div id="header">
		<nav id="navbg">			
			
			
			<ul id="navlist" >
				<a href="index.php"><li id="homebtn"><b>HOME</b></li></a>
				<a href="bookofdesign.php"><li id="bodbtn"><b>BOOK OF DESIGN</b></li></a>
				<a href="library.php"><li id="librarybtn"><b>LIBRARY</b></li></a>
				<a href="market.php"><li id="marketbtn"><b>MARKET</b></li></a>
				<a href="tutorials.php"><li id="tutorialsbtn"><b>TUTORIALS</b></li></a>
				<a href="aboutus.php"><li id="aboutusbtn"><b>ABOUT US</b></li></a>
				<a href="contactus.php"><li id="contactusbtn"><b>CONTACT US</b></li></a>
			</ul>
			
			<div id="logo"/>
		</nav>
		</div>
	
	<section id="aboutus" class="sectionpages">
			<div id="nimz2"/>
			<div id="aboutusword"/>
		</section>
	
	<section id="footer">
			
			<ul id="navlist2" >
				<a href="index.php"><li id="homebtn2"><b>HOME</b></li></a>
				<a href="bookofdesign.php"><li id="bodbtn2"><b>BOOK OF DESIGN</b></li></a>
				<a href="library.php"><li id="librarybtn2"><b>LIBRARY</b></li></a>
				<a href="market.php"><li id="marketbtn2"><b>MARKET</b></li></a>
				<a href="tutorials.php"><li id="tutorialsbtn2"><b>TUTORIALS</b></li></a>
				<a href="aboutus.php"><li id="aboutusbtn2"><b>ABOUT US</b></li></a>
				<a href="contactus.php"><li id="contactusbtn2"><b>CONTACT US</b></li></a>
			</ul>
			
			<div id="nimztekword2"/>
			
			<div id="contactinfo"/>
			
		
		</section>
		
		
		<script type="text/javascript">
			
			function overscroll(){
				var navbg = document.getElementById('navbg');
				
				var posy = window.pageYOffset;
				
				if(posy > 5){
					navbg.style.background = "#f1f1f1";
				}else{
					navbg.style.background = "rgba(0,0,0,0)";
				}
				
				//nimz.style.marginTop += "-100px";
				
				
			}
			window.addEventListener("scroll",overscroll);			
			
				
		</script>
	
</body>
</html>