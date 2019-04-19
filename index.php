<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create VirtualHost</title>
	<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="./public/css/1.css">
</head>
<body>
	<div class="container">		
		<div class="row">
			<h2 class="text-center">CREATE VIRTUALHOST</h2>
			<div class="col-xs-12">
				<form name="createform" method="POST" onsubmit="return validateForm()">
					<div class="row">
						<div class="col-xs-6">							
							  <div class="form-group">
							    <label for="url">Input URL VirtualHost:</label>
							    <input onkeyup="showVhost();" type="text" class="form-control" name="url" id="url" placeholder="Enter URL VirtualHost...">
							    <small class="form-text text-muted">This is URL project you can run by VirtualHost</small>
							  </div>

							  <!-- <div class="form-group">
							    <label for="urli">Input URL VirtualHost:</label>
							    <input type="file"  id="myFile" name="myFile"/>
    							<a href="#" onclick="showFileName()">Show Name</a>
							    <small class="form-text text-muted">This is URL project you can run by VirtualHost</small>
							  </div> -->

							  <div class="form-group">
							    <label for="linkpj">Project Address</label>
							    <input onkeyup="showVhost();" type="text" class="form-control" name="linkpj" id="linkpj" placeholder="Enter Your Project Address...">
							    <small class="form-text text-muted">This is Your Project Address</small>
							  </div>

							  <div class="row">
								<div class="col-xs-6">
									 <div class="form-group">
									  	<label for="drive">Virtual server installation drive</label>
									    <select id="drive" name="drive" class="form-control" required="required" onchange="hiddenCreate();">
									    	<option value="C">C:</option>
									    	<option value="D">D:</option>
									    	<option value="E">E:</option>
									    	<option value="F">F:</option>
									    	<option value="G">G:</option>
									    	<option value="H">H:</option>
									    </select>						        	
							  		</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
									  	<label for="server">Your Virtual server</label>
									    <select id="server" name="server" class="form-control" required="required" onchange="hiddenCreate();">
									    	<option value="ampp">ampp</option>
									    	<option value="wampp">wampp</option>
									    	<option value="xampp">xampp</option>							    	
									    </select>						        	
							  		</div>
								</div>
							  </div>

							  <div class="form-group">
							    <label for="$svaddress">Virtual server installation adddress:</label>
							    <input onchange="showVhost();" type="text" class="form-control" name="svaddress" id="svaddress" placeholder="Virtual server installation Address...">
							    <small class="form-text text-muted">This is URL Virtual server installation Address</small>
							  </div>
						</div>

						<div class="col-xs-6">
							<div class="form-group">
							    <label for="vhost">File httpd-vhost.conf:</label>
							    <textarea class="form-control" name="vhost" id="vhost" rows="10">
						     		
							    </textarea>
							</div>
							<div class="form-group">
							    <label for="path">Path hosts</label>
							    <textarea value="add" class="form-control" name="path" id="path" rows="2"></textarea>
							</div>
						</div>
					</div>
					<button formaction="./app/create.php" name="submit" id="btn-create" type="submit" class="btn btn-primary">Create</button>
				</form>
			</div>
		</div>		
	</div>
	
	<script src="./public/js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="./public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./public/js/1.js" type="text/javascript"></script>
</body>
</html>