<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<title></title>
</head>
<body>
	<div id="head">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10" id="header">
				
				<img src="css/12.png" height="40%" alt="" id="plack">
				
				<input type="text" class="form-control" id="Search" placeholder=" Search">
			</div>
		</div>	
	</div>
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
 	 <div class="container">
	      <ul class="nav navbar-nav">
	        	<li class="active"><a href="index.php">Main <span class="sr-only">(current)</span></a></li>
	        	<li><a href="#">Prices</a></li>
	        	<li><a href="#">About</a></li>
	        	<li class="dropdown">
		         			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="#">Pizza</a></li>
			            <li><a href="#">Sandwiches</a></li>
			            <li><a href="#">Sushi</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Order</a></li>
			        </ul>
	        	</li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="active">
	      	<?php
	      		if($_SESSION["login"] != ""){
	      			print'<li class="dropdown">
		         			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal_profile<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="Personal_profile.php">Personal_profile</a></li>
			            <li><a href="#">Basket</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="Exit.php">Exit</a></li>
			        </ul>
	        	</li>';
	      		}else{
	      			print '<a href="#addNews" class = "btn btn-success btn-block" style="border:0;" data-toggle="modal"> Sign in / Log in <span class="sr-only">(current)</span></a>';
	      		}
	      		?>
	      	</li>
	    	
	      </ul>

     </div>
	</nav>	
		<div id="addNews" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <h4 class="modal-title">Log in</h4>
		      </div>
		      <div class="modal-body">
				<form role="form" action="log_in.php"  enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label for="title_new">Login</label>
							<input type="text" class="form-control" id="title" name="login" required>
						</div>
						<div class="form-group">
							<label for="format_new">Password</label>
							<input type="password" class="form-control" id="format_new" name="password" required>
						</div>									     
		      </div>
		      <div class="modal-footer">
		      	<button style="float:left; background-color: #cfae8b; border: 0; color: black;" class="btn" onclick="location.href='Sign_in.php'">Sign in</button>
		        
		        
		        <button type="sumbit" name="submit" style=" border: 0; color: black;" class="btn btn-success">Log in</button>

		      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>

			<div class="col-md-10" id="content">
				<div class="row">
					<div class="col-md-3" id="item">
						
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-8" id="news">
						
					</div>
				</div>
			</div>	
			<div class="col-md-1"></div>
		</div>
		
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>