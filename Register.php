<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Lobster&family=Montaga&family=Poppins:wght@400;500;600&display=swap');
		
		
		.navbar-brand {
			font-family: Lobster;
			font-size: 40px;
			color: #fff;
		}

		#search-box {
			background: orange;

			border-radius: 30px;


		}

		#search-box #search-txt {
			border: none;
			outline: none;
			background: none;
			padding: 10px 18px;
			font-size: 18px;

		}

		#search-box #search-bt {
			background-color: orange;
			cursor: pointer;
			border: none;
			padding: 15px;
			border-radius: 50px;
		}
		.carousel-inner{
			width: 100%;
			height: 25%;
			margin: auto;
		}
		#wrapper{
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background-image: url(Image-Song/LoginBG.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		#form-register{
			width: 400px;
			background: rgba(0, 0, 0, 0.8);
			flex-grow: 1;
			padding: 30px 30px 50px;
			box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
		}
		.form-heading{
			font-size: 35px;
			color: white;
			text-align: center;
			margin-bottom: 30px;
			font-family: 'Lobster', sans-serif;
		}
		.form-group{
			border-bottom: 1px solid #fff;
			margin-top: 15px;
			margin-bottom: 20px;
			display: flex;
		}
		.form-group i{
			color: #fff;
			font-size: 35px;
			padding-top: 5px;
			padding-right: 10px;

		}
		.form-input{
			background: transparent;
			border: 0px;
			outline: 0px;
			color: #fff;
			flex-grow: 1;
		}
		.form-input::placeholder{
			color: #f5f5f5;
		} 	
		.form-submit{
			background: transparent;
			border: 1px solid #fff;
			color: #fff;
			width: 100%;
			text-transform: uppercase;
			padding: 6px 10px;
			transition: 0.25s ease-in-out;
			margin-top: 30px;
		}		
		
	</style>
</head>
<body>
	<header class="header" id="header">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Power Dream</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				
				<ul class="nav navbar-nav">
					<li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> HOME</a></li>
					<li><a href="index.php"> <span class="glyphicon glyphicon-cd"></span> TOYS</a></li>
					<li><a href="index.php"> <span class="glyphicon glyphicon-list-alt"></span> GENRES</a></li>
					<li><a href="index.php"> <span class="glyphicon glyphicon-star"></span> CONTACT</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form action="Search.php" method="GET" id="search-box">
							<input type="text" name="Search" id="search-txt" placeholder="Search ..." required>
							<button id="search-bt"><i class="fa-solid fa-magnifying-glass"></i></button>
						</form>
					</li>
					<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span>  LOG IN</a></li>
					<li><a href="Login.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div id="wrapper">
		<div>
			<form id="form-register" method="post" action="">
				<h1 class="form-heading">REGISTER</h1>
				<a href="Login.php">Log-in now!</a>
				<div class="form-group">
					
					<!-- <input type="text" name="userid" class="form-input" placeholder="UserID">
				</div>
				<div class="form-group"> -->
					
					<input type="text" name="username" class="form-input" placeholder="Username">
				</div>
				<div class="form-group">
					
					<input type="text" name="fullname" class="form-input" placeholder="Full Name">
				</div>
				<!--<div class="form-group">
					
					<input type="text" name="mail" class="form-input" placeholder="E-Mail">
				</div>-->
				<div class="form-group">
					
					<input type="text" name="password" class="form-input" placeholder="Password">
				</div>
				
				<input  type="submit" name="register" value="REGISTER" class="form-submit">
			</form>
			<?php
		    //Ket noi theo Mysqli procedural
			//$connect = mysqli_connect('localhost','root','','shoptoys');
		    $connect = mysqli_connect('3.132.234.157','sonnc','123@123a','toys');
		    if(!$connect){  # dấu ! là chỉ khi nào thất bại thì mới thông báo còn thành công thì k
		        echo "Failure Connect!";
		    }
		    // Nếu click vào nút register thì mới thực hiện
		    if(isset($_POST['register'])){
		       /* $userID = $_POST['serID'];*/
		        $username = $_POST['username'];
		        $password = $_POST['password'];
		        $fullname = $_POST['fullname'];
		        /*$mail = $_POST['mail'];*/
		    $sql = "INSERT INTO customser VALUES('', '$username', '$password', '$fullname')";
		    $result = mysqli_query($connect, $sql);
		    if($result){
		        echo "<script> alert('SUCCESSFUL!')</script>";
		        echo"<script> window.open('Login.php','_self') </script>";
		    }
		    else{
		        echo "<script> alert('FAILURE!')</script>";
		    }
		    }
		    ?>
		</div>
	</div>
</body>
</html>