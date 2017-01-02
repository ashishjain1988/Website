<!-- <section id="" style="margin-top:0%;"> -->
<div id="contents" style="margin-top:7%;">
		<div id="picture">
			<img src="<?php echo base_url(); ?>assets/images/ashish.jpg" alt="Img" style="width:450px;height:280px;">
			<div>
			<h1>Ashish Jain</h1>
			<p>
			Graduate Student,<br/>
			Bioinformatics and Computational Biology (BCB),<br/>
			Iowa State University, Ames, IA<br/>
			Director of Information and Technology,<br/>
			BCB-Graduate Student Organisation,
			</p>
			</div>
		</div>
		<div id="featured" class="body">
			<div id="main">
				<h1>Research Interests</h1>
				<ul id="interests">
					<li>
						Biological Databases<br/>
					</li>
					<li>
					Next-Generation Sequencing<br/>
					</li>
					<li>	
						Systems Biology<br/>
					</li>	
					<li>
						Machine Learning<br/>
					</li>
				</ul>
				
				
				
				<ul>
				
				<div class="slideshow-container">
				  <div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="<?php echo base_url(); ?>assets/images/UI.png" style="width:100%">
					<div class="text">Caption Text</div>
				  </div>

				  <div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="<?php echo base_url(); ?>assets/images/GEMINE-datamodel.png" style="width:100%">
					<div class="text">Caption Two</div>
				  </div>

				  <div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="<?php echo base_url(); ?>assets/images/colon-cancer-survival-plots.png" style="width:100%">
					<div class="text">Caption Three</div>
				  </div>
				<br>
				  <div style="text-align:center">
				  <span class="dot"></span>
				  <span class="dot"></span>
				  <span class="dot"></span>
				</div>
				
					<p>I am a graduate student currently pursuing his doctorate in the field of Bioinformatics and Computational Biology at Iowa State University. I did my bachelors in biotechnology from Delhi College of Engineering in the year 2011. After that, I worked in the software industry in India for three years working in telecommunications and healthcare industry. I also have a two years of experience of working experience in a bioinformatics research lab.
					</p>
				</ul>
				
			</div>
			<div id="sidebar">
			<h4>Associations:</h4>
			<img src="<?php echo base_url(); ?>assets/images/wordcloud.png" alt="Img" style="width:150%;height:150%;">
			<a href="http://www.bcb.iastate.edu/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/isu-logo.png" alt="Img" style=
"width:150%;height:150%;"></a>
			<a href="http://www.cancergenetics.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/cgix.png" alt="Img" style="width:150%;height:150%;"
></a>
			<a href="https://soic.iupui.edu/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/IUPUI-Logo.jpg" alt="Img" style="width:150%;height:150%;"
></a>
			<a href="https://www.hcentive.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/HCentive_logo.png" alt="Img" style=
"width:150%;height:150%;"></a>
			<a href="https://www.onmobile.com/"target="_blank"><img src="<?php echo base_url(); ?>assets/images/OnMobile_Logo.gif" alt="Img" style=
"width:150%;height:150%;"></a>
			<a href="http://dtu.ac.in//"target="_blank"><img src="<?php echo base_url(); ?>assets/images/dtu-logo.png" alt="Img" style="width:125%;height:125%;"><a>
				<h1></h1>
				<ul>
					<li>
						<p>
							
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<script>
$(document).ready(function() {
	$('#homeButton').addClass('active');
	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";
	    }
	    slideIndex++;
	    if (slideIndex> slides.length) {slideIndex = 1}
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace("active", "");
	    }
	    slides[slideIndex-1].style.display = "block";
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	
	var slideIndex = 0;
	showSlides();
	
});
</script> 