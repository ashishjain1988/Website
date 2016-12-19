<!-- <div id="app"> -->
        <div id="header">
		<div>
			<!--<div id="logo">
				<a href="index.html"><span>Ask For Advice</span></a>
			</div>-->
			<ul id="navigation">
				<li id="homeButton">
					<a href="<?php echo base_url();?>">Home</a>
				</li>
				<li id="researchButton" >
					<a href="<?php echo base_url();?>index.php/research">Research Projects</a>
				</li>
				<li id="expButton" >
					<a href="<?php echo base_url();?>index.php/experience">Experience</a>
				</li>
				<li id="softButton"  >
					<a href="<?php echo base_url();?>index.php/softwares">Softwares</a>
				</li>
				<li id="blogButton">
					<a href="<?php echo base_url();?>index.php/blog">Blog</a>
				</li>
				<li id="photoButton">
					<a href="<?php echo base_url();?>index.php/photography">Photography</a>
				</li>
				<li id="contactButton" class="selected">
					<a href="<?php echo base_url();?>index.php/contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
<div id="contents">
		<div id="contact" class="body">
			<h1>Contact</h1>
			<p>
				Please contact for any query or concern.
			</p>
			<form>
				<label>Your Name:</label>
				<input type="text" value="" class="txtfield">

				<label>Email Address:</label>
				<input type="text" value="" class="txtfield">

				<label>Subject:</label>
				<input type="text" value="" class="txtfield">

				<label class="msg">Concern:</label>
				<textarea></textarea>
				<input type="submit" value="Send message" class="btn">

			</form>
		</div>
	</div>