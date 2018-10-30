<?php
include("../config/connection.php");
$selblog="select * from bcategory";	
$exeblog=mysql_query($selblog);
	
	
	
	
	
if($_POST['submit']=="Submit")
{
	$r=rand(2, 200000);
	$name=$r.$_FILES['image']['name'];
	$tmp=$_FILES['image']['tmp_name'];
	$path="../blogimages/".$name;
	move_uploaded_file($tmp,$path);
    $ins="insert into blog set bcategory='".$_POST['bcategory']."',title='".$_POST['title']."', description='".$_POST['descr']."', visible='".$_POST['visible']."' , image='".$name."' ";
    mysql_query($ins) or die(" Insert Query Execution failed"); 	
	$msg="Successfull Submited";	
	}
	
	
	
	
	?>
	







<html>
 <head>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>Add Blog</title>
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
       <div class="heading"> Add Blog </div>
  
       <div class="loginrow"> 
         <div class="ltext"> Blog Category </div>

         <div class="logininfo"> 
 
 <select name="bcategory" class="input">
 <option value="0">Select Category</option>
 <?php 
while( $fetchblog=mysql_fetch_array($exeblog))
{
 ?>
 
 <option value="<?php echo $fetchblog['id']; ?>"><?php echo $fetchblog['bcategory']; ?></option>

<?php 
}
?> 
 
 </select>
 
 
          </div>
       </div>
       
       
       
       
       
       <div class="loginrow"> 
         <div class="ltext"> Title  </div>

         <div class="logininfo"> 
         <input type="text" name="title" placeholder="title" class="input">
         </div>
       </div>
        
        
           
        <div class="textbox">
        <div class="ltext"> Description </div>
        <div class="rtext"> 
         <textarea name="descr" placeholder="Description" class="textarea"></textarea>
        </div> 
       </div>
      
        <div class="ltext1"> Blog Image </div>
        <div class="rtext">  
         <input type="file" name="image" value="" class="choosefile">
        </div>
<div class="row">
        <div class="ltext2"> Visible </div>
        <div class="rtext">  
        </div> 
              <input type="radio" name="visible" value="0" class="checkbox"> Hide
              <input type="radio" name="visible" value="1" class="checkbox"> Show
       
</div>  
                 <input type="submit" name="submit" value="Submit" class="btn_submit">
<br>
					<?php echo $msg; ?>       

       </div>
       
iv>
       
       
       </div>
      </div>
     </form>
    </div>
   </div><!--main-->  
   </div><!--outer-->
 </body>   
</html> 