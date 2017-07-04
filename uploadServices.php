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
	<script src="js/uploadAboutUs.js"></script>
	<script type="text/javascript">
	tinymce.init({
		selector: '#mytextarea',
		toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
		setup: function(ed) {
        ed.on("change", function(e){
            $('#previewDetail').html(tinymce.activeEditor.getContent());
        });
        ed.on("keyup", function(){
            $('#previewDetail').html(tinymce.activeEditor.getContent());
        });
    	}	
	});
	</script>
</head>
<body>
	<?php 
	include_once('navbar.php');
	?>
	<div class="headerAddNewItem" align="center">
		<h1>Update Services Content</h1>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<a class="btn marginLink" href="./view.php">Back to Homepage</a>
			<form action="serviceUpload.php" method="post" enctype="multipart/form-data">
				<?php
				$sql = "SELECT header,detail FROM contact_us WHERE id =5 ";
				$resultQuery = $db->query($sql);
				$count = ($resultQuery->rowCount() >0 ) ? true : false;
				if($count >0){
					$row = $resultQuery->fetch(PDO::FETCH_ASSOC);
				}
				$query = "SELECT * FROM output_images WHERE category = 'service' ORDER BY imageId DESC LIMIT 1";
                $imgResult = $db->query($query);
                $dbResultx = ($imgResult->rowCount() > 0) ? true : false;
                if($dbResultx){
                    $row2 = $imgResult->fetch(PDO::FETCH_ASSOC);
                }
				?>
				<div class="form-outline">
					<div class="form-group">
						<label for="name">Title</label>
						<input type="text" id="header" name="header" class="form-control" placeholder="Enter Title here" value="<?php if($count >0){echo $row["header"];} ?>" required/>
					</div>
					<div class="form-group">
						<span id="outer-upload" class="btn btn-default btn-file">
								Upload Image <input type="file" id="imageaboutus" name="file" />
						</span>
    					<img id="reviewImage" src="imageView.php?image_id=<?php if($dbResultx){ echo $row2["imageId"]; }else{ echo "0"; } ?>" alt="your image" />
    				</div>
    				<div class="form-group">
						<label for="name">Description</label>
						<textarea id="mytextarea" name="detail" class="form-control" placeholder="Enter Description here" required><?php if($count >0){echo $row["detail"];} ?></textarea>
					</div>
					<div class="input-group-btn">
						<button type="submit" class="btn btn-success" name="btn-upload">Upload</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
	<hr>
	<!-- Page Content -->
    <div class="container card">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Preview Service
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="home.html">Home</a>
                    </li>
                    <li class="active">Service</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img id="previewImg" class="img-responsive" src="imageView.php?image_id=<?php if($dbResultx){ echo $row2["imageId"]; }else{ echo "0"; } ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 id="previewHeader" class="page-header"><?php if($count >0){echo $row["header"];} ?></h2>
            </div>
            <div class="col-lg-12">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <div id="previewDetail">
                        	<?php if($count >0){echo $row["detail"];} ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; THAI SU 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

</body>
</html>