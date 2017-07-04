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
    <link href="css/common.css" rel="stylesheet">
	<link href="css/addNewItem.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="tinymce/tinymce.min.js"></script>
	<script src="tinymce/jquery.tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
		selector: '#detail1',
		toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
	});
	tinymce.init({
		selector: '#detail2',
		toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
	});
	tinymce.init({
		selector: '#detail3',
		toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
	});
	$('#submit-btn').click(function(){
		$('.save-msg').css('display','block');
	});
	</script>
</head>
<body>
	<?php 
	include_once('navbar.php');
	?>
	<div class="headerAddNewItem" align="center">
		<h1>Update Home Slogan</h1>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 card">
			<a class="btn marginLink" href="./view.php">Back to Homepage</a>
			<form action="uploadSlogan.php" method="post" enctype="multipart/form-data" novalidate>
				<?php
				$sql = "SELECT header,detail FROM contact_us WHERE id =2 ";
				$resultQuery1 = $db->query($sql);
				$count1 = ($resultQuery1->rowCount() >0 ) ? true : false;
				if($count1 >0){
					$row1 = $resultQuery1->fetch(PDO::FETCH_ASSOC);
				}
				$sql2 = "SELECT header,detail FROM contact_us WHERE id =3 ";
				$resultQuery2 = $db->query($sql2);
				$count2 = ($resultQuery2->rowCount() >0 ) ? true : false;
				if($count2 >0){
					$row2 = $resultQuery2->fetch(PDO::FETCH_ASSOC);
				}
				$sql3 = "SELECT header,detail FROM contact_us WHERE id =4 ";
				$resultQuery3 = $db->query($sql3);
				$count3 = ($resultQuery3->rowCount() >0 ) ? true : false;
				if($count3 >0){
					$row3 = $resultQuery3->fetch(PDO::FETCH_ASSOC);
				}
				?>
				<div class="form-outline">
					<div class="form-group">
						<label for="name">Title for slogan 1</label>
						<input type="text" id="header1" name="headerone" class="form-control" placeholder="Enter Title here" value="<?php if($count1 >0){echo $row1["header"];} ?>" required/>
					</div>
					<div class="form-group">
						<label for="name">Description</label>
						<textarea id="detail1" name="detailone" class="form-control" placeholder="Enter Description here" required><?php if($count1 >0){echo $row1["detail"];} ?></textarea>
					</div>
					<div class="form-group" hidden>
						<label for="name">Title for slogan 2</label>
						<input type="text" id="header2" name="headertwo" class="form-control" placeholder="Enter Title here" value="<?php if($count2 >0){echo $row2["header"];} ?>" required/>
					</div>
					<div class="form-group" hidden>
						<label for="name">Description</label>
						<textarea id="detail2" name="detailtwo" class="form-control" placeholder="Enter Description here" required><?php if($count2 >0){echo $row2["detail"];} ?></textarea>
					</div>
					<div class="form-group" hidden>
						<label for="name">Title for slogan 3</label>
						<input type="text" id="header3" name="headerthree" class="form-control" placeholder="Enter Title here" value="<?php if($count3 >0){echo $row3["header"];} ?>" required/>
					</div>
					<div class="form-group" hidden>
						<label for="name">Description</label>
						<textarea id="detail3" name="detailthree" class="form-control" placeholder="Enter Description here" required><?php if($count3 >0){echo $row3["detail"];} ?></textarea>
					</div>
					<div class="input-group-btn" hidden>
						<button type="submit" id="submit-btn" class="btn btn-success" name="btn-upload" s>Upload</button>
					</div>
					<div class="form-group">
						<div class="save-msg">
							<h4>&#10003; Saving...</h4>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="form-group">
		</div>
	</div>

</body>
</html>