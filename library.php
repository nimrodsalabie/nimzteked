<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="library.css"/>
		<link rel="shortcut icon" href="logo.png"/>
<title>Library</title>
</head>

<body>
	
	<div id="header">
		<nav id="navbg">			
			
			
			<ul id="navlist" >
				<a href=""><li id="logosbtn"><b>LOGOS</b></li></a>
				<a href=""><li id="postersbtn"><b>POSTERS</b></li></a>
				<a href=""><li id="flyersbtn"><b>FLYERS</b></li></a>
				<a href=""><li id="ticketsbtn"><b>TICKETS</b></li></a>
				<a href=""><li id="invitationsbtn"><b>INVITATIONS</b></li></a>
				<a href=""><li id=" businesscardbtn"><b>BUSINESS CARDS</b></li></a>
				<a href=""><li id="uisbtn"><b>UIS</b></li></a>
				<a href=""><li id="paintingbtn"><b>PAINTINGS</b></li></a>
			</ul>
		</nav>
	</div>
	<section id="slider" >
		
			
		<button id="leftbutton" class="navbtns" onClick="navleft();"><</button>
		<button id="rightbutton" class="navbtns" class="navbtns" onClick="navright();">></button>
		
	<section id="slide">
		<div id="sposter1"/>
		<div id="sposter2"/>
		<div id="sposter3"/>
	</section>	
	</section>
		
		<section id="library" class="sectionpages">
			<div id="library2"/>
			<div id="library3"/>
			<div id="libraryword"/>
			<a href="index.php"><button id="librarybtn1" ><b>close library</b></button></a>
		</section>
	
	<section class="posterhold">
	<section class="contenthold">
		
		<ul id="row1" class="rowpages">
			<li id="item1" class="items">
				<div id="poster1" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item2" class="items">
				<div id="poster2" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item3" class="items">
				<div id="poster3" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item4" class="items">
				<div id="poster4" class="posters" >
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
		</ul>
		
	</section>
	
	<section class="contenthold">
		
		<ul id="row2" class="rowpages">
			<li id="item1" class="items">
				<div id="poster1" class="posters"  onClick="toggleslider('slider');">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item2" class="items">
				<div id="poster2" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item3" class="items">
				<div id="poster3" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item4" class="items">
				<div id="poster4" class="posters" >
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
		</ul>
		
	</section>
	
	<section class="contenthold">
		
		<ul id="row3" class="rowpages">
			<li id="item1" class="items">
				<div id="poster1" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item2" class="items">
				<div id="poster2" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item3" class="items">
				<div id="poster3" class="posters">
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
			<li id="item4" class="items">
				<div id="poster4" class="posters" >
				
				</div>
				<p class="designers"><b>by Nimrod Salabie</b></p>
			</li>
		</ul>
		
	</section>
	</section>
	
	
		
		<section id="footer">
			
			<ul id="navlist2">
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
			
			function navleft(){
				var slide = document.getElementById('slide');
				slide.style.transform = slide.style.transform - "translateX(100%)";
				
				
			}
			
			function navright(){
				var slide = document.getElementById('slide');
				slide.style.transform = slide.style.transform + "translateX(100%)";
				
				
			}
			
			function toggleslider(slider){
				var slider = document.getElementById('slider');
				slider.style.display = "block";
				slider.style.visibility = "visible";
				
				
			}
			
			function overscroll(){
				var navbg = document.getElementById('navbg');
				
				var posy = window.pageYOffset;
				
				if(posy > 5){
					navbg.style.background = "#f1f1f1";
				}else{
					navbg.style.background = "rgba(0,0,0,0)";
				}
				
				
			}
			window.addEventListener("scroll",overscroll);
			
			
			
				
		</script>
</body>
</html>