<?php
include("config/connection.php");
$sel=" select * from news";
$exe=mysql_query($sel) or die("Select Query Failed");
?>






<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<title>Sunflower - News</title>
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
            <li><a href="news.php" class="current">News</a></li>
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
    
    <div id="tooplate_middle_subpage">
        <h2>Latest News</h2>
        <p>Nunc imperdiet eros in libero pharetra sit amet euismod quam facilisis. Suspendisse at euismod lacus. Etiam a nulla at metus cursus lobortis at at nulla. Sed eget augue sed sapien interdum tristique.</p>
    </div>
	
    <div id="tooplate_main_top"></div>        
    <div id="tooplate_main">
        

        <div class="col_w900 col_w900_last">

<!-- Content of Table -->
<?php while ($fetch=mysql_fetch_array($exe))
{
	if($fetch['visible']==1)
	{
?>



           	  <div class="news_box">
				<img src="newsimages/<?php echo $fetch['image'];?>" width="300" height="150" alt="news">                
                <h2><?php echo $fetch['title']; ?></h2>
                <p class="date">March 24, 2048</p>                
                <p><?php echo $fetch['descr']; ?></p>
                <a class="more" href="#">More</a>
                <div class="cleaner"></div>
            </div>




<?php 
	}
} ?>



          
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.tooplate.com">tooplate</a>
    </div> <!-- end of footer -->
        
</div> <!-- end of wrapper -->
</body>
</html>