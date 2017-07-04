<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/addNewItem.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/uploadItem.js"></script>
</head>
<body>
	<?php 
	include_once('navbar.php');
	?>
	<div class="headerAddNewItem" align="center">
		<h1>Create New Item</h1>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 card save-msg" style="margin-bottom: 20px;">
			<h4>&#10003; Saving...</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 card">
			<a class="btn marginLink" href="./view.php"><span class="glyphicon glyphicon-chevron-left"></span>Previous</a>
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-outline form-add-item">
					<div class="form-group">

					</div>
					<div class="form-group">
						<label for="name">Title Name</label>
						<input type="text" name="name" class="form-control" placeholder="enter name" required/>
					</div>
					<div class="form-group">	
						<label for="category">Category Name</label>
						<select class="form-control" name="category">
							<option>KAD</option>
							<option>KA</option>
							<option>KOD</option>
							<option>KO</option>
							<option>KH</option>
							<option>KADE</option>
							<option>KR</option>
							<option>KOFN</option>
							<option>KRE</option>
							<option>KRFN</option>
							<option>LB</option>
						</select>
					</div>	
					<div class="form-group">	
						<span class="btn btn-default btn-file">
								Upload Image<input id="uploadImage" type="file" name="file" required/>
						</span>
						<img id="reviewImage" src="#" alt="your image" />
					</div>
					<div class="input-group-btn">
						<button type="submit" id="submit-btn" class="btn btn-success" name="btn-upload">Upload</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>