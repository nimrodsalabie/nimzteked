<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<link rel="shortcut icon" href="logo.png"/>
		<title>Home</title>
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
		
		<section id="landingscreen" class="sectionpages">
			<div id="nimz1"/>
			<div id="ntekhold">
				<div id="ntekword" />
				<p id="ntekdes">In a dream I had a few nights ago, my friend Cyrus and I were trying to save an apartment building in Scotland from burning to the ground. In a dream I had a few nights ago, my friend Cyrus and I were trying to save an apartment building in Scotland from burning to the ground...</p>
			
			</div>
			<a href="aboutus.php"><button id="readmorebtn1" ><b>read more</b></button></a>
			
		
		</section>
		
		<section id="bookofdesign" class="sectionpages">
			
			
			<div id="bodword"/>
			<div id="bod1"/>
			<div id="bod2"/>
			<div id="bod3"/>
			<div id="bod4"/>
			<a href="bookofdesign.php"><button id="bodbtn1" ><b>open book</b></button></a>
			<div id="bod5"/>
		</section>
		
		<section id="library" class="sectionpages">
			<div id="library1"/>
			<div id="library2"/>
			<div id="library3"/>
			<div id="libraryword"/>
			<a href="library.php"><button id="librarybtn1" ><b>open library</b></button></a>
		</section>
		
		<section id="market" class="sectionpages">
		
		</section>
		
		<section id="tutorials" class="sectionpages">
		
		</section>
		
		<section id="aboutus" class="sectionpages">
			<div id="nimz2"/>
			<div id="aboutusword"/>
			<a href="aboutus.php"><button id="aboutusbtn1" ><b>read more</b></button></a>
		</section>
		
		<section id="contactus" class="sectionpages">
		
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
				var nimz = document.getElementById('nimz1');
				
				var posy = window.pageYOffset;
				
				if(posy > 5){
					navbg.style.background = "#f1f1f1";
				}else{
					navbg.style.background = "rgba(0,0,0,0)";
				}
				
				if(posy > 750){
					if(posy < 900){
					navbg.style.background = "rgba(0,0,0,0)";
				}else{
					navbg.style.background = "#f1f1f1";
				}
				}else{
					navbg.style.background = "#f1f1f1";
				}
				
				
				//nimz.style.marginTop += "-100px";
				
				
			}
			window.addEventListener("scroll",overscroll);			
			
				
		</script>
		
	</body>
</html>