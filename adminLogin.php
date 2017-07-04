	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>File Upload</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/addNewItem.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="body-wrapper">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<form action="verifyUser.php" method="post">
					<div class="form-outline form-login">
						<div class="headerAddNewItem" align="center">
							<h1>Login</h1>
						</div>
						<div class="form-group">
							<label for="name">Username</label>
							<input type="text" name="username" class="form-control" placeholder="username" required/>
						</div>
						<div class="form-group">	
							<label for="category">Password</label>
							<input type="password" class="form-control" name="password" placeholder="password" required />
						</div>	
						<div class="input-group-btn">
							<button type="submit" class="btn btn-success" name="btn-upload">Login</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>

	</div>
	</body>
	</html>