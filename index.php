<?php
include("config/connection.php");

 $sel="select * from home where sno=1";
 $exe=mysql_query($sel);
$fetch=mysql_fetch_array($exe);

?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<title>Sunflower</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2039 Sunflower
http://www.tooplate.com/view/2039-sunflower
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(
function() 
{
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:100,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.7, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
    	
        <div id="site_title"><h1><a href="#">Sunflower</a></h1></div>
        
        <div id="social_box">
            <a href="#"><img src="images/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="images/myspace.png" alt="myspace" /></a>
            <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
        </div>
        
        <div class="cleaner"></div>
    </div>
    
    <div id="tooplate_menu">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li class="last"><a href="contact.php">Contact</a></li>
        </ul>    	
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onFocus="clearText(this)" onBlur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_middle">
    	<div id="middle_left">
        	<h2>Our Latest Projects</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ante eget nibh tincidunt consequat. Donec nec aliquet nulla. Pellentesque ut viverra lacus.</p>
        </div>
		<div id="slider_wrapper">    
            <div id="slider">
                <a href="#"><img src="images/slideshow/01.jpg" alt="Image 01" title="Lorem ipsum dolor sit amet." /></a>
                <a href="#"><img src="images/slideshow/02.jpg" alt="Image 02" title="Nullam ante leo, consectetur eget." /></a>
                <a href="#"><img src="images/slideshow/03.jpg" alt="Image 03" title="Suspendisse sit amet enim elit." /></a>
                <a href="#"><img src="images/slideshow/04.jpg" alt="Image 04" title="Nulla faucibus luctus quam eget placerat." /></a>
                <a href="#"><img src="images/slideshow/05.jpg" alt="Image 05" title="Phasellus aliquet viverra posuere." /></a>
            </div>
        </div>
	</div>
	
    <div id="tooplate_main_top"></div>        
    <div id="tooplate_main">
        <div class="col_w900">
            <div class="col_allw280 fp_service_box">
                <div class="con_tit_02">Digital Marketing</div>
                <img src="images/onebit_18.png" alt="Image" />
                <p>Credit goes to <a rel="nofollow" href="http://www.icojoy.com">icojoy.com</a> for Onebit icons #2 used in this template. Etiam vel elit massa, sit amet.</p>
                <a class="more" href="#">Detail</a>
            </div>
      <div class="col_allw280 fp_service_box">
                <div class="con_tit_02">Social Networking</div>
                <img src="images/onebit_15.png" alt="Image" />
                <p>Nunc imperdiet eros in libero pharetra sit amet euismod quam facilisis. Nullam quis erat mi.</p>
                <a class="more" href="#">Detail</a>
            </div>
            <div class="col_allw280 fp_service_box col_last">
                <div class="con_tit_02">Online Advertising</div>
                <img src="images/onebit_16.png" alt="Image" />
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <a class="more" href="#">Detail</a>
            </div>
            <div class="cleaner"></div>
		</div>
    
    	 <div class="col_w900 col_w900_last">
    		<div class="col_w580 float_l">
                    <div class="con_tit_01">Welcome <span>to Sunflower</span></div>
                    <img src="images/tooplate_image_01.jpg" alt="Image" class="image_wrapper image_fl" />
                    <p><em><?php echo $fetch['htext1']; ?></em></p>
                    <p align="justify"><?php echo $fetch['htext2']; ?></p>	
                    <div class="cleaner"></div>
           </div>
	        
                <div class="col_w280 float_r">
                	
                    <h2>Latest Updates</h2>
                    <div class="lbe_box">
                    <p class="date">March 27, 2048</p>
                    <h3><a href="#">Etiam a Dui et Eros Imperdiet</a></h3>
                    <p>Morbi pellentesque, libero vitae fermentum tincidunt libero accumsan erat.</p>
                    
                    </div>
                    <div class="lbe_box">
                    	<p class="date">March 17, 2048</p>
                        <h3><a href="#">Aenean Quis Nulla ac Nisl Rutrum</a></h3>
                        <p>Libero accumsan erat, sit amet ornare lectus urna a turpis libero nibh vulputate.</p>
                        
                        
                    </div>
                    <div class="lbe_box">
                    	<p class="date">March 10, 2048</p>
                        <h3><a href="#">Etiam bibendum cursus tristiqu</a></h3>
                        <p>Nam ac iaculis sapien. Duis nunc nisl, dignissim sed dictum in, eleifend a turpis.</p>
                    </div>                 
                	<div class="cleaner"></div>
            	</div>
			</div>
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.tooplate.com">tooplate</a>
    </div> <!-- end of footer -->
        
</div> <!-- end of wrapper -->
</body>
</html>