<?php
include 'views/header.php'; 
?> 

<div class="container"> 
<?php
 
		include 'connection.php';

		$pagetitle=$_POST['page-title'];
		$pagedes=$_POST['page-disc'];

		$insert = "INSERT INTO pages(page_title, page_description)
		 VALUES('$pagetitle', '$pagedes')";

		if(mysqli_query($connect, $insert)){
			echo "<br>Record has been saved successfully";
			
		}else{
			echo "<br> insertion error";
			
			
		}
 

?>
 
 </div> 