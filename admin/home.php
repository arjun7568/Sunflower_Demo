<?php
include("../config/connection.php");

if($_POST['update']=="Update")
	{
	  $upd="update home set htext1='".$_POST['ht1']."', htext2='".$_POST['ht2']."'";
	  
	  mysql_query($upd) or die(" Update Query Execution failed"); 	
	
	echo $msg="Successfull Submited";
	
	}


 $sel="select * from home where sno=1";
 $exe=mysql_query($sel);
$fetch=mysql_fetch_array($exe);

	


?>




<html>
 <head>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>Home</title>
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
     <form action="home.php" method="POST">
      <div class="htbox">      
       <div class="heading"> Add Home Text </div>
       <div class="textbox">
        <div class="ltext"> Home Text 1 </div>
        <div class="rtext"> 
         <textarea name="ht1" placeholder="Home Text 1" class="textarea"><?php echo $fetch['htext1']; ?></textarea>
        </div> 
       </div>
       <div class="textbox">
        <div class="ltext"> Home Text 2 </div>
        <div class="rtext"> 
         <textarea name="ht2" placeholder="Home Text 2" class="textarea"><?php echo $fetch['htext2']; ?></textarea>
        </div>
        <div class="ltext1"> Image </div>
        <div class="rtext">  
         <input type="file" name="Ntitle" value="" placeholder="Title" class="choosefile">
        </div> 
              <input type="submit" name="update" value="Update" class="btn_update" />
       
       </div>      
      </div>
     </form>
    </div>
   </div><!--main-->  
  </div><!--outer-->
 </body>   
</html> 