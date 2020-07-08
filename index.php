<?php
include 'views/header.php'; 
?> 


	

	<div class="container"> 
		<form action="create-page.php" method="post">
			  <div class="form-group">
				<label for="page-id">Page Title</label>
				<input type="text" class="form-control" id="page-id" name="page-title" placeholder="Page Name">
			  </div>
			  
			  <div class="form-group">
				<label for="page-disc">Page Description</label>
				<textarea class="form-control" id="page-disc" name="page-disc" rows="5"></textarea>
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Save</button>

		</form>
				
	
	
	</div> 
	


<?php
include 'views/footer.php'; 
?> 