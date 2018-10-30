<?php
include("../config/connection.php");
	
	if($_POST['submit']=="Submit")
	{
	 $ins="insert into bcategory set bcategory='".$_POST['bcategory']."'";
	  mysql_query($ins) or die(" Insert Query Execution failed"); 	
	
	$msg="Successfull Submited";	
		
		
	}
	
	
	
	
	?>
	







<html>
 <head>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>Blog Category</title>
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
     <form method="post" enctype="multipart/form-data">
      <div class="htbox">      
       <div class="heading"> Add Blog CAtegory </div>
  
       <div class="loginrow"> 
         <div class="ltext"> Blog Category  </div>
         <div class="logininfo"> 
         <input type="text" name="bcategory" placeholder="Category" class="input">
         </div>
       </div>
           
  
                 <input type="submit" name="submit" value="Submit" class="btn_submit">
<br>
					<?php echo $msg; ?>       

       </div>
       
       
       </div>
      </div>
     </form>
    </div>
   </div><!--main-->  
   </div><!--outer-->
 </body>   
</html> 