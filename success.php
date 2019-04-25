<?php 
	session_start();
	$url = $_SESSION['url'];
	$link = $_SESSION['link'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Success</title>
	<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="./public/css/1.css">
</head>
<body>
	<div class="container">
		<div class="row text-center main">
			<div class="col-md-12">
				<h2>Create VirtualHost Successfully</h2>
				<h3>You must restart apache xampps to start virtualhost</h3>
				<div>
					<button class="btn btn-success"><a style="color: #fff !important;" href="<?php echo $link ?>"><?php echo $url ?></a><i class="fa fa-chevron-right"></i></button>	
				</div>
				<br>
				<div>
					<button class="btn btn-primary"><a style="color: #fff !important;" href="index.php"><i class="fa fa-chevron-left"></i> Back to Create Page</a></button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>