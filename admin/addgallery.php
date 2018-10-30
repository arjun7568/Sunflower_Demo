<?php
include("../config/connection.php");
	
	if($_POST['submit']=="Submit")
	{
$r=rand(2, 200000);
$name=$r.$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$path="../galleryimages/".$name;
move_uploaded_file($tmp,$path);

	 $ins="insert into gallery set title='".$_POST['title']."', image='".$name."', visible='".$_POST['visible']."' , visible='".$_POST['visible']."' ";

	  mysql_query($ins) or die(" Insert Query Execution failed"); 	
	
	$msg="Successfull Submited";	
		
		
	}

?>


<html>
 <head>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>Add Gallery</title>
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
       <div class="heading"> Add Gallery </div>
       <div class="loginrow"> 
   	 <div class="ltext"> Gallery Title </div>
     <div class="logininfo"> 
             <input type="text" name="title" value="" placeholder="Title" class="input">

     </div>
       </div>
           
        <div class="ltext1"> Image </div>
        <div class="rtext">  
         <input type="file" name="image" value=""  class="choosefile">
        </div>
        <div class="ltext2"> Visible </div>
        <div class="rtext">  
        </div> 
              <input type="radio" name="visible" value="0" class="checkbox"> Hide
              <input type="radio" name="visible" value="1" class="checkbox"> Show
       
       
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