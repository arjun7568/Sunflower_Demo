<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<title>Sunflower - Gallery</title>
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
    $('#gallery a').lightBox();
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
            <li><a href="gallery.php" class="current">Gallery</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li class="last"><a href="contact.php">Contact</a></li>
        </ul>    	
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of tooplate_menu -->
    	
	<div id="tooplate_middle_subpage">
        <h2>Photo Gallery</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ante eget nibh tincidunt consequat. Ut molestie leo non lorem consequat at varius arcu commodo. Donec nec aliquet nulla. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>Xphp</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p></p>
    </div>
	
    <div id="tooplate_main_top"></div>        
    <div id="tooplate_main">
        
        <div id="gallery">
				<ul>
                	<li>
                		<h5>Suspendisse at lacus</h5>
	                	<a href="images/gallery/image_01_l.jpg" title="Sed egestas, lacus quis tempus pharetra.">
                		<img src="images/gallery/image_01_s.jpg" alt="Image 01" />
						</a>
					</li>
                	<li>
                        <h5>Mauris iaculis nulla</h5>
                        <a href="images/gallery/image_02_l.jpg" title="Nunc sit amet eros vitae nibh mattis dapibus.">
                        <img src="images/gallery/image_02_s.jpg" alt="Image 02" />
                        </a>
			  		</li>
					<li>
						<h5>Nunc vitae sapien</h5>
                		<a href="images/gallery/image_03_l.jpg" title="Curabitur quis sem eget velit cursus semper.">
                		<img src="images/gallery/image_03_s.jpg" alt="Image 03" />
						</a>
					</li>
                    <li class="fouth">
                        <h5>Praesent placerat dui</h5>
                        <a href="images/gallery/image_04_l.jpg" title="Mauris convallis dignissim tellus id facilisis.">
                        <img src="images/gallery/image_04_s.jpg" alt="Image 04" />
						</a>
                    </li>
                    <li>
                        <h5>Sed mollis elementum</h5>
                        <a href="images/gallery/image_05_l.jpg" title="Fusce rhoncus ipsum ut diam semper tempor.">
                        <img src="images/gallery/image_05_s.jpg" alt="Image 05" />
                        </a>
                    </li>
                    <li>
                        <h5>Duis eu lectus et ante</h5>
                        <a href="images/gallery/image_06_l.jpg" title="Curabitur venenatis aliquam neque vitae sollicitudin.">
                        <img src="images/gallery/image_06_s.jpg" alt="Image 06" />
                        </a>
                    </li>                   
                    <li>
                        <h5>Aenean vulputate tempus</h5>
                        <a href="images/gallery/image_07_l.jpg" title="Nam vitae nibh eu lectus pellentesque sagittis.">
                        <img src="images/gallery/image_07_s.jpg" alt="Image 07" />
                    </a>
                    </li>
                    <li class="fouth">
                        <h5>Fusce vehicula consequat </h5>
                        <a href="images/gallery/image_08_l.jpg" title="Cras nec lectus libero, in aliquet lacus.">
                        <img src="images/gallery/image_08_s.jpg" alt="Image 08" />
                        </a>
                    </li>              
                </ul>
      
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.tooplate.com">tooplate</a>
    </div> <!-- end of footer -->
        
</div> <!-- end of wrapper -->
</body>
</html>