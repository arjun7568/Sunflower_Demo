	<?php

include("config/connection.php");
	
	if($_POST['submit']=="Submit")
	{
	 $ins="insert into enquiry set name='".$_POST['uname']."', email='".$_POST['uemail']."', subject='".$_POST['subject']."' , message='".$_POST['message']."' ";
	  mysql_query($ins) or die(" Insert Query Execution failed"); 	
	
	$msg="Successfull Submited";	
		
		
	}
	
	
	
	
	?>
	







<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<title>Sunflower - Contact Form</title>
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

<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
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
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li class="last"><a href="contact.php" class="current">Contact</a></li>
        </ul>    	
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onFocus="clearText(this)" onBlur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_middle_subpage">
        <h2>Contact Information</h2>
        <p>Suspendisse faucibus felis ut justo hendrerit at porttitor dolor aliquet. Pellentesque iaculis aliquam mi sit amet rhoncus. Proin aliquet aliquam tincidunt. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>Xphp</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
    </div>
	
    <div id="tooplate_main_top"></div>        
    <div id="tooplate_main">
        
        <div class="col_w900 col_w900_last">
            <div class="col_w420 float_l">
           	  <h3>Send a message</h3>
              <div id="cp_contact_form">
                    <form method="post" name="contact" action="#">
					
						<label for="author">Name:</label> <input type="text" id="author" name="uname" class="required input_field" />
						<div class="cleaner h10"></div>
													
						<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="uemail" id="email" />
						<div class="cleaner h10"></div>
											
						<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
						<div class="cleaner h10"></div>
							
						<label for="text">Message:</label> <textarea id="text" name="message" rows="0" cols="0" class="required"></textarea>
						<div class="cleaner h10"></div>				
												
						<input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
						
					</form>
    
                </div>
               
            </div>
            
            <div class="col_w420 float_r" id="map">
            	<h3>Our Location</h3>
                <a href="images/map_big.jpg" title="Our Location">
                    <img src="images/map_thumb.jpg" alt="Our Location in Yangon" />
                </a>

				<div class="cleaner h30"></div>
                                
                <h3>Our Address</h3>
                <h6><strong>Company Name</strong></h6>
                640-980 Duis lacinia dictum, <br />
                Quisque ligula felis, 10840<br />
                Nam rhoncus, diam a mollis tempor<br /><br />
                <b>Tel:</b> 010-040-2410<br />
				<b>Fax:</b> 020-010-8720 
            </div>
        	</div>
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <div id="tooplate_footer">
    	Copyright &copy; 2017 <a href="#">Dmatics</a> - Design: By Punya Pratap Singh </a>
    </div> <!-- end of footer -->
        
</div> <!-- end of wrapper -->
</body>
</html>