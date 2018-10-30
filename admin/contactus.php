<?php
include("../config/connection.php");
	
	if($_POST['submit']=="Submit")
	{
	 $ins="insert into contactus set cperson='".$_POST['cperson']."', pno.='".$_POST['pno.']."', mno.='".$_POST['mno.']."' , image='".$_POST['image']."' ";
	  mysql_query($ins) or die(" Insert Query Execution failed"); 	
	
	$msg="Successfull Submited";	
		
		
	}

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
       <?php include("lmenu.php") ?> </div><!--lbox-->
    </div><!--mainl-->   
    <div class="mainr">
     <form action="home.php" method="get">
      <div class="htbox">      
       <div class="heading"> Contact Us </div>
       <div class="textbox">
         <div class="loginrow"> 
   	 <div class="ltext"> Contact Person </div>
     <div class="logininfo"> 
             <input type="text" name="cperson" value="" placeholder="Name" class="input">

     </div>
       </div>
       <div class="loginrow"> 
   	 <div class="ltext"> Phone No. </div>
     <div class="logininfo"> 
             <input type="text" name="pno." value="" placeholder="Phone No." class="input">

     </div>
       </div>
       <div class="loginrow"> 
   	 <div class="ltext"> Mobile No. </div>
     <div class="logininfo"> 
             <input type="text" name="mno." value="" placeholder="Mobile No." class="input">

     </div>
       </div>
     
       
        <div class="ltext"> Address </div>
        <div class="rtext"> 
         <textarea name="address" placeholder="Address" class="textarea"></textarea>
        </div> 
       </div>
       <div class="loginrow"> 
   	 <div class="ltext"> Pincode </div>
     <div class="logininfo"> 
             <input type="text" name="pincode" value="" placeholder="Pincode" class="input">

     </div>
       </div>
       <div class="loginrow"> 
   	 <div class="ltext"> Fax </div>
     <div class="logininfo"> 
             <input type="text" name="fax" value="" placeholder="Fax" class="input">

     </div>
       </div>
       <div class="loginrow"> 
   	 <div class="ltext"> Email </div>
     <div class="logininfo"> 
             <input type="text" name="email" value="" placeholder="Email" class="input">

     </div>
       </div>
     
     
              <input type="submit" name="submit" value="Update" class="btn_update">
       
       </div>      
      </div>
     </form>
    </div>
   </div><!--main-->  
   <div class="footer1"> </div>  
  </div><!--outer-->
 </body>   
</html> 