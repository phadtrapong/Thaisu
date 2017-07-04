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
	<script src="js/editProducts.js"></script>
</head>
<body>
	<?php 
	include_once('navbar.php');
	function is_html($string)
	{
  		return preg_match("/<[^<]+>/",$string,$m) != 0;
	}
	$productId = 0;
	if (isset($_GET["id"]) && !is_html($_GET["id"]) && is_numeric($_GET["id"])){
		$productId = $_GET["id"]; 
	}
	?>
	<div class="headerAddNewItem" align="center">
		<h1>Edit Item</h1>
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
		<div class="col-md-6 card main-card">
			<a class="btn marginLink" href="./view.php"><span class="glyphicon glyphicon-chevron-left"></span>Previous</a>
			<form action="updateItem.php" method="post" enctype="multipart/form-data">
				<div class="form-outline form-add-item">
					<div class="form-group">

					</div>
					<div class="form-group">
						<label for="name">Title Name</label>
						<input type="text" id="productKey" name="id" value="<?php echo $productId; ?>" hidden></div>
						<input type="text" id="name" name="name" class="form-control" placeholder="enter name" required/>
					</div>
					<div class="form-group">	
						<label for="category">Category Name</label>
						<select class="form-control" name="category" id="category">
							<option value="KAD">KAD</option>
							<option value="KA">KA</option>
							<option value="KOD">KOD</option>
							<option value="KO">KO</option>
							<option value="KH">KH</option>
							<option value="KADE">KADE</option>
							<option value="KR">KR</option>
							<option value="KOFN">KOFN</option>
							<option value="KRE">KRE</option>
							<option value="KRFN">KRFN</option>
							<option value="LB">LB</option>
						</select>
					</div>	
					<div class="form-group">	
						<span class="btn btn-default btn-file">
								Upload Image<input id="uploadImage" type="file" name="file" />
						</span>
						<img id="reviewImage" src="<?php if($productId!=0)echo 'imageView.php?image_id='.$productId; else echo '#'; ?>" alt="your image" />
					</div>
					<div class="input-group-btn">
						<button type="submit" id="submit-btn" class="btn btn-success" name="btn-upload">Upload</button>
					</div>
						<p class="save-msg" >saved</p>
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