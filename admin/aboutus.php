<?php
include("../config/connection.php");
	
	if($_POST['submit']=="Submit")
	{
	 $ins="insert into aboutus set ab_us='".$_POST['ab_us']."'";
	  mysql_query($ins) or die(" Insert Query Execution failed"); 	
	
	$msg="Successfull Submited";	
		
		
	}
	
	
	
	
	?>





<html>
 <head>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>About Us</title>
 </head>
 <body>
  <div class="outer">
   <div class="header1">
    <div class="logo"><img src="images/tooplate_logo.png"> </div>  
   </div>
   <div class="main">
    <div class="mainl">
     <div class="lbox"> 
     <?php include("lmenu.php")  ?>

     </div><!--lbox-->
    </div><!--mainl-->   
    <div class="mainr">
     <form action="home.php" method="get">
      <div class="htbox">      
       <div class="heading"> Add About Us Text </div>
       <div class="textbox">
        <div class="ltext"> About Us Text  </div>
        <div class="rtext"> 
         <textarea name="ab_us" placeholder="About Us Text" class="textareaab"></textarea>
        </div> 
       </div>
                   <input type="submit" name="submit" value="Update" class="btn_updateab">
       
       </div>      
      </div>
     </form>
    </div>
   </div><!--main-->  
  </div><!--outer-->
 </body>   
</html> 