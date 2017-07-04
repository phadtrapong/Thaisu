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
</head>
<body>
	<?php 
	include_once('navbar.php');
	?>
	<div class="headerAddNewItem" align="center">
		<h1>Update Banner</h1>
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
			<form action="updateCaurosal.php" method="post" enctype="multipart/form-data">
				<div class="form-outline form-add-item">
					<?php
                		include 'db.php';
                		$imgUrl = '';
                		$name = '';
                		$imgUrl2 = '';
                		$name2 = '';
                		$imgUrl3 = '';
                		$name3 = '';

                		$query = "SELECT * FROM output_images WHERE category = 'caurosal1' ORDER BY imageId DESC LIMIT 1";
                		$query2 = "SELECT * FROM output_images WHERE category = 'caurosal2' ORDER BY imageId DESC LIMIT 1";
                		$query3 = "SELECT * FROM output_images WHERE category = 'caurosal3' ORDER BY imageId DESC LIMIT 1";

                		$imgResult = $db->query($query);
                		$imgResult2 = $db->query($query2);
                		$imgResult3 = $db->query($query3);

                		$dbResultx = ($imgResult->rowCount() > 0) ? true : false;
                		$dbResultx2 = ($imgResult2->rowCount() > 0) ? true : false;
                		$dbResultx3 = ($imgResult3->rowCount() > 0) ? true : false;

                		if($dbResultx){
                    		$row = $imgResult->fetch(PDO::FETCH_ASSOC);
                    		$imgUrl = 'imageView.php?image_id='.$row["imageId"];
                    		$name = $row["name"];
                    	}
                    	if($dbResultx2){
                    		$row2 = $imgResult2->fetch(PDO::FETCH_ASSOC);
                    		$imgUrl2 = 'imageView.php?image_id='.$row2["imageId"];
                    		$name2 = $row2["name"];
                    	}
                    	if($dbResultx3){
                    		$row3 = $imgResult3->fetch(PDO::FETCH_ASSOC);
                    		$imgUrl3 = 'imageView.php?image_id='.$row3["imageId"];
                    		$name3 = $row3["name"];
                    	}
					?>
					<div class="form-group">
						<label for="name">First Banner</label>
						<input type="text" name="name" class="form-control" placeholder="enter name" value="<?php echo $name; ?>" required/>
					</div>
					<div class="form-group">	
						<span class="btn btn-default btn-file">
								Choose Image<input id="uploadImage" type="file" name="file" />
						</span>
                		<img id="reviewImage" src="<?php echo $imgUrl; ?>" alt="your images">
					</div>
					<hr>
					<div class="form-group">
						<label for="name2">Second Banner</label>
						<input type="text" name="name2" class="form-control" placeholder="enter name" value="<?php echo $name2; ?>" required/>
					</div>
					<div class="form-group">	
						<span class="btn btn-default btn-file">
								Choose Image<input id="uploadImage2" type="file" name="file2" />
						</span>
						<img id="reviewImage2" src="<?php echo $imgUrl2; ?>" alt="your image" />
					</div>
					<hr>
					<div class="form-group">
						<label for="name3">Third Banner</label>
						<input type="text" name="name3" class="form-control" placeholder="enter name" value="<?php echo $name3; ?>" required/>
					</div>
					<div class="form-group">	
						<span class="btn btn-default btn-file">
								Choose Image<input id="uploadImage3" type="file" name="file3" />
						</span>
						<img id="reviewImage3" src="<?php echo $imgUrl3; ?>" alt="your image" />
					</div>
					<div class="input-group-btn">
						<button type="submit" id="submit-btn" class="btn btn-success" name="btn-upload">Save</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/uploadCaurosal.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>