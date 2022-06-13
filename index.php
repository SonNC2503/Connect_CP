<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

		.carousel-inner {
			width: 100%;
			height: 25%;
			margin: auto;
		}

		.songs p {
			font-family: Lobster;
			font-size: 50px;
			margin-top: 10px;
			padding: 10px;
			color: #34495e;
			text-align: center;
		}

		.col-md-3 {
			margin-top: 20px;
		}



		.about .row {
			display: flex;
			flex-wrap: wrap;
			gap: 1.5rem;
			align-items: center;
		}

		.about .row .image {
			flex: 1 1 45rem;
		}

		.about .row .image img {
			width: 100%;
		}

		.about .row .content {
			flex: 1 1 45rem;
		}

		.about .row .content h3 {
			color: #273c75;
			font-size: 4rem;
			padding: .5rem 0;
		}

		.about .row .content p {
			color: #7f8fa6;
			font-size: 1.5rem;
			padding: .5rem 0;
			line-height: 2;
		}

		.about .row .content .icons-container {
			display: flex;
			gap: 1rem;
			flex-wrap: wrap;
			padding: 1rem 0;
			margin-top: .5rem;
		}

		.about .row .content .icons-container .icons {
			background: #eee;
			border-radius: .5rem;
			border: .1rem solid rgba(0, 0, 0, .2);
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 1rem;
			flex: 1 1 17rem;
			padding: 1.5rem 1rem;
		}

		.about .row .content .icons-container .icons i {
			font-size: 2.5rem;
			color: #2ed573;
		}

		.about .row .content .icons-container .icons span {
			font-size: 1.5rem;
			color: #333;
		}

		/*.card-title h5{
			font-size: 18px;
			font-family: Georgia, 'Times New Roman', Times, serif;
			color: orange;
		}*/
	</style>
</head>

<body>
	<!--Header-->
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
					<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> LOG IN</a></li>
					<li><a href="Login.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<banner class>
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<!--<li data-target="#myCarousel" data-slide-to="4"></li>-->
				</ol>
				<!-- wrapper for slides-->
				<div class="carousel-inner">
					<div class="item active">
						<img src="Image-Toys/B1.jpg" alt="PS6" style="width:100%; height: 500px;">
					</div>
					<div class="item">
						<img src="Image-Toys/B2.jpg" alt="PS9" style="width:100%; height: 500px;">
					</div>
					<div class="item">
						<img src="Image-Toys/B3.jpg" alt="PS8" style="width:100%; height: 500px;">
					</div>
					<div class="item">
						<img src="Image-Toys/B4.jpg" alt="PS4" style="width:100%; height: 500px;">
					</div>
					<!--<div class="item">
						<img src="Image-Song/PS5.jpg" alt="PS5" style="width:100%; height: 500px;">
					</div>-->
				</div>

				<!--  Left and right controls-->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</banner>
	<div>
		<div class="songs">
			<p>TOYS PRODUCT</p>

		</div>
		<?php

		//$connect = mysqli_connect('localhost','root','','shoptoys');
		$connect = mysqli_connect('3.132.234.157', 'sonnc', '123@123a', 'toys');
		//$connect = mysqli_connect('54.213.128.237', 'sonnc', '123@123a', 'toys');
		if (!$connect) {
			echo "Failure Connect!";
		}



		$sql = "SELECT * FROM product";
		// Thực thi, truy vấn
		$result = mysqli_query($connect, $sql);
		//tìm và trả về kết quả dưới dạng 1 mảng và lấy từ dòng dl
		while ($row_P = mysqli_fetch_array($result)) {
			//lấy ra từng dòng dl truy vấn được và hiển thị
			$PID = $row_P['PID'];
			$PName = $row_P['PName'];
			$Genre = $row_P['Genre'];
			$Price = $row_P['Price'];
			$Img = $row_P['Img'];
		?>
			<div class="col-md-3 col-sm-6 col-sm-10 col-12">
				<div class="card card-product mb-3">
					<img class="card-img-top" src="Image-Toys/<?php echo $row_P['Img'] ?>" style="width: 250px;height: 250px;">
					<div class="card-body">
						<h5 class="card-title" style="color: orange; font-family: Georgia; font-size: 18px"><?php echo $row_P['PName'] ?></h5>
						<!--<h5 class="card-title"><?php echo $row_P['PID'] ?></h5>-->
						<p style="color:green; font-size:18px"> <?php echo $row_P['Price'] ?></p>
						<a href='Detail.php?id=<?php echo $PID; ?>' class='btn btn-primary'>Details</a>
					</div>
				</div>
			</div>

		<?php
		}
		?>
	</div>
	</div>
	</div>
	<br>

</body>

</html>