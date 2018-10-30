<?php
include("config/connection.php");

/* Fetching Blog Category */
$selblogcat="select * from bcategory";	
$exeblogcat=mysql_query($selblogcat);
	
/* Fetch Blog Items  */	

if($_GET['bcat']=="")
{
	$selblog="select * from blog";	
	$exeblog=mysql_query($selblog);
}
else
{
	$selblog="select * from blog where bcategory='".$_GET['bcat']."'";	
	$exeblog=mysql_query($selblog);
}

	
	
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<title>Sunflower - Blog</title>
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
            <li><a href="news.php">News</a></li>
            <li><a href="blog.php" class="current">Blog</a></li>
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
        <h2>Blog Posts</h2>
        <p>Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.</p>
    </div>
	
    <div id="tooplate_main_top"></div>        
    <div id="tooplate_main">
        
         <div class="col_w900 col_w900_last">
            <div class="col_w580 float_l">
            
           <?php
		   $totblog=mysql_num_rows($exeblog); 
			while( $fetchblog=mysql_fetch_array($exeblog))
			{
				
			if($totblog==0)
			{
				echo "<h1> Sorry.... No Blogs Here.... </h1>";
			}
			else if($fetchblog['visible']==1)
				{
					
 			?>
  
            
            	<div class="post_box">
                    
                    <p class="post_meta"><span class="cat">Posted in <a href="#">Template</a>, <a href="#">Web Design</a></span> | Date: March 24, 2048</p>
                    <h2><?php echo $fetchblog['title'];  ?></h2>
                    <img src="blogimages/<?php echo $fetchblog['image'];  ?>" alt="Image" />
                    <p style="text-align:justify;"><?php echo $fetchblog['description'];  ?></p>
                    <a class="more" href="#">More</a>
                    <div class="cleaner"></div>
                </div>
            
            
 <?php }
			}
 ?>           
              
            </div>
            
            <div class="col_w280 float_r">
                
                <h3>Categories</h3>
                <ul class="tooplate_list">
           <?php 
			while( $fetchblogcat=mysql_fetch_array($exeblogcat))
			{
 			?>
 
                	<li><a href="blog.php?bcat=<?php echo $fetchblogcat['id']; ?>">   <?php echo $fetchblogcat['bcategory']; ?> </a></li>


<?php 
}
?> 

          
          
          
          
          
          
                </ul>
                <div class="cleaner h30"></div>
                <h3>Our Latest Project</h3>
                <div class="sb_lp_box">
                	<img src="images/gallery/image_04_s.jpg" alt="image" />
                    <p>Duis convallis odio et velit venenatis venenatis turpis mattis quam laoreet. <a href="#">More...</a></p>
                </div>
            </div>
            
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