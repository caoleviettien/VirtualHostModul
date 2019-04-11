<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create VirtualHost</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css">
</head>
<body>
<!-- 
	<form>
	  <div class="form-group">
	    <label for="url">Input URL:</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form> -->

	<form action="./app/create.php" method="POST">
		input Name: <br>
		<input type="text" name="url"><br>

		input link project:<br>
		<input type="text" name="linkpj"><br>
		<button type="submit">Create</button>
	</form>
</body>
</html>