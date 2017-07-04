<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
		<h2>Collection of Items</h2>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<a class="marginLink btn btn-success" href="/thaisuWeb/index.php"><span class="glyphicon glyphicon-plus"></span> Add New Item</a>
		<table class="table table-inverse" >
			<thead class="theadd-inverse">
				<tr class="card">
				<td>Image</td>
				<td>Title Name</td>
				<td>Category</td>
				<td>Edit/Delete</td>
				</tr>
			</thead>
			<?php
			include 'session.php';
			$sql = "SELECT * FROM output_images 
			WHERE category <> 'aboutus' 
			AND category <> 'service' 
			AND category <> 'caurosal1' 
			AND category <> 'caurosal2' 
			AND category <> 'caurosal3' 
			AND category <> 'news1'
			AND category <> 'news2'
			AND category <> 'news3'
			ORDER BY imageId DESC";
			$result_set = $db->query($sql);
      		$counts = ($result_set->rowCount() >0 ) ? true : false;
      		if($counts){
			while($row = $result_set->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<tr class="card">
					<td><img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="100" height="100" /></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["category"]; ?></td>
					<td>
						<a class="btn btn-primary" href="editProducts.php?id=<?php echo $row["imageId"]; ?>" >Edit</a>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $row["imageId"]; ?>" onclick="return confirm('Are you sure?')" >Delete</a>
					</td>
				</tr>
				<?php
			}
			}
			?>
		</table>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>