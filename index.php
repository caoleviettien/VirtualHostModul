<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create VirtualHost</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./public/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="./public/js/jquery-2.1.4.min.js">
</head>
<body>
	<div class="container">
		<h2>CREATE VIRTUALHOST</h2>
		<div class="row">
			<div class="col-xs-6">
				<form name="createform" action="./app/create.php" method="POST" onsubmit="return validateForm()">
					  <div class="form-group">
					    <label for="url">Input URL:</label>
					    <input type="text" class="form-control" name="url" id="url" placeholder="Enter URL VirtualHost...">
					    <small class="form-text text-muted">This is URL project you can run by VirtualHost</small>
					  </div>
					  <div class="form-group">
					    <label for="linkpj">Project Address</label>
					    <input type="text" class="form-control" name="linkpj" id="linkpj" placeholder="Enter Your Project Address...">
					    <small class="form-text text-muted">This is Your Project Address</small>
					  </div>
					  <button type="submit" class="btn btn-primary">Create</button>
				</form>
			</div>		
		</div>		
	</div>

	<script language="javascript">
		function validateForm()
			{
			    // Bước 1: Lấy giá trị của url và linkpj
			    var url = document.getElementById('url').value;
			    var linkpj = document.getElementById('linkpj').value;
			 
			    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
			    if (url == ''){
			        alert('Bạn chưa nhập Input URL');
			    }
			    else if (linkpj == '')
			    {
			        alert('Bạn chưa nhập Project Address');
			    }
			    else{
			        //alert('Dữ liệu hợp lệ, ta có thể chấp nhận submit form');
			        return true;
			    }			 
			    return false;
			}
	</script>	
</body>
</html>