<?php
include("../config/connection.php");
	
	if($_POST['submit']=="Submit")
	{


$r=rand(2, 200000);
$name=$r.$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$path="../newsimages/".$name;
move_uploaded_file($tmp,$path);







	 $ins="insert into news set title='".$_POST['title']."', descr='".$_POST['descr']."', visible='".$_POST['visible']."' , image='".$name."' ";
	  mysql_query($ins) or die(" Insert Query Execution failed"); 	
	
	$msg="Successfull Submited";	
		
		
	}
	
	
	
	
	?>
	







<html>
 <head>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>Add News</title>
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
 <form action="home.php" method="post"> 
      <div class="htbox">      
      <div class="heading"> Change Password </div>
      <div class="loginbox"> 
     <div class="loginrow"> 
      <div class="loginlable">Old Password </div>
   	  <div class="logininfo"> 
       <input type="text" name="oldpass" value="" placeholder="User Name" class="input">
      </div>
     </div>
    <div class="loginrow"> 
   	 <div class="loginlable">New Password </div>
     <div class="logininfo"> 
      <input type="password" name="newpass" value="" placeholder="Password" class="input">
     </div>
    </div>
     <div class="loginrow"> 
   	 <div class="loginlable">Confirm Password </div>
     <div class="logininfo"> 
      <input type="password" name="confirmpass" value="" placeholder="Password" class="input">
     </div>
    </div>
   
    <div class="loginrow1"> 
     <div class="loginlable1"></div>
   	 <div class="logininfo1"> 
      <input type="submit" name="submit" value="Submit" class="btn_submit">
     </div>
    </div>
   </div>
   </form>  
  
    </div>
   </div><!--main-->  
   </div><!--outer-->
 </body>   
</html> 