<?php
include("../config/connection.php");

if($_GET['delid']!="")
{

$del="delete from enquiry where id='".$_GET['delid']."'";	
mysql_query($del);

}

$sel="select * from enquiry";
$exe=mysql_query($sel) or die("Select Query Failed");
?>




<html>
<head>
	<title>Enquiery</title>
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/font-awesome.css" rel="stylesheet">

</head>
<body>

  <div class="outer">
   <div class="header1">
    <div class="logo"><img src="images/tooplate_logo.png"> </div>  
   </div>
   <div class="main">
    <div class="mainl">

<?Php include("lmenu.php"); ?>

    </div><!--mainl-->   
    <div class="mainr">

       <div class="heading"> Enquiery </div>
       <form method="post">
<!-- Heading of Table -->
<div class="viewrow">
	<div class="rowdata w70"> <input type="submit" name="delete" value="Delete"></div>
  	<div class="rowdata1"> ID</div>
	<div class="rowdata w170"> Name</div>
	<div class="rowdata w170">Email</div>
	<div class="rowdata w95">Phone no.</div>
    <div class="rowdata w170">Subject</div>
	<div class="rowdata w200">Message</div>
</div>

<!-- Content of Table -->
<?php while ($fetch=mysql_fetch_array($exe))
{
?>


<div class="viewrow">
	<div class="rowdata w70"> <input type="checkbox" name="chk"></div>
  	<div class="rowdata1"> <?php echo $fetch['id']; ?></div>
	<div class="rowdata w170"> <?php echo $fetch['name']; ?></div>
    <div class="rowdata w170"><?php echo $fetch['email']; ?></div>
  	<div class="rowdata w95"> <?php echo $fetch['phoneno']; ?></div>
	<div class="rowdata w170"> <?php echo $fetch['subject']; ?></div>
    <div class="rowdata w200"><?php echo $fetch['message']; ?></div>
</div>

<?php }?>




</form>

	</div>
   </div><!--main-->  
   </div><!--outer-->





</body>
</html>