var url = "<?php echo echo base_url(); ?>";  
$(document).ready(function() {

	if(window.location.href === url+"index.php" || window.location.href === url)
	{
		//$('#homeButton').addClass('selected');
	}else if(window.location.href === url+"index.php/research" || window.location.href === url+"index.php/research/")
	{
	//$('#researchButton').addClass('selected');
	}/*
	else if()
	{
	$('#expButton').addClass('selected');
	}
	else if()
	{
	$('#softButton').addClass('selected');
	}
	else if()
	{
	$('#blogButton').addClass('selected');
	}
	else if()
	{
	$('#photoButton').addClass('selected');
	}*/else{
	//$('#contactButton').addClass('selected');
	}
    var $listItems = $('#navigation li');
	//alert(window.location.href);
    $listItems.click(function() {
        $listItems.removeClass('selected'); 
        $(this).addClass('selected'); 
    });
	
	
	var slideIndex = 0;
	showSlides();
	
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
 });
 
 