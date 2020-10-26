<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		@font-face{
			font-family: Monster;
			src: url('Montserrat-Medium.ttf');
		}
		.scale{
			transform: scale(1);
			transition:0.2s;
		}
		.scale:hover{
			transform: scale(1.05);
			transition:0.2s;
		}
		.pos{
			position:fixed;
			z-index:2;
		}
		
		
	</style>
</head>
<body style="font-family:Monster">
<!--Шапка-->
	<div class="col-12  pt-2 pb-2 pos shadow " style="background:#3d3d3d">
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-1">
					<img src="bogdan.jpg" class=" mx-auto rounded-circle w-50">
				</div>
				
				<a href="index.php" class="mx-auto text-light ">Главная</a>
				<a href="#katalog" class="mx-auto text-light">Каталог</a>
				
				<a href="admin.php" class="mx-auto text-light">Aдминка</a>
				<a href="delete.php" class="mx-auto text-light">Удалить товар</a>
			</div>
		</div>
		
	</div>

<!--Основа-->

<div class="col-12 mx-auto pt-1 " style="background:#3d3d3d;z-index: 1">
	<h1 class="text-center text-light mt-5">
		6ogdasha.store
	</h1>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-50 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-50 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-50 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="4.jpg" class="d-block w-50 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="5.jpg" class="d-block w-50 mx-auto" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<a name="katalog"></a>
	<h2 class="text-center mt-4 font-weight-bold  mb-4">Каталог товаров</h2>

	
	<div class="col-8 mx-auto pl-0 pr-0 mt-3">
		<div class="row">
			<div class="col-3 mx-auto border text-center scale">
			<?php 

				$connect1 = mysqli_connect("127.0.0.1","root","","proj");
				$text_query1 = 'SELECT * FROM items';
				$query1 = mysqli_query($connect1,$text_query1);
				$result1 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result1['title']."</h5>";
				echo "<img class = 'w-75'src='".$result1['img']."'>";
				echo "<p>".$result1['descrip']."</p>";
				echo "<p>".$result1['price']."</p>";
				if($result1['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
	 		
			</div>
		
			<div class="col-3 mx-auto border text-center scale">
			<?php 

			
				$result2 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result2['title']."</h5>";
				echo "<img class = 'w-75'src='".$result2['img']."'>";
				echo "<p>".$result2['descrip']."</p>";
				echo "<p>".$result2['price']."</p>";
				if($result2['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}

	 		?>
			</div>

			<div class="col-3 mx-auto border text-center scale">
			<?php 

			
				$result3 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result3['title']."</h5>";
				echo "<img class = 'w-75'src='".$result3['img']."'>";
				echo "<p>".$result3['descrip']."</p>";
				echo "<p>".$result3['price']."</p>";
				if($result3['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>

			
		</div>
		
		<div class="row mt-3">
			<div class="col-3 mx-auto border text-center scale">
			<?php 

				
				$result4 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result4['title']."</h5>";
				echo "<img class = 'w-75'src='".$result4['img']."'>";
				echo "<p>".$result4['descrip']."</p>";
				echo "<p>".$result4['price']."</p>";
				if($result4['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>
		
			<div class="col-3 mx-auto border text-center scale">
			<?php 

			
				$result5 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result5['title']."</h5>";
				echo "<img class = 'w-75'src='".$result5['img']."'>";
				echo "<p>".$result5['descrip']."</p>";
				echo "<p>".$result5['price']."</p>";
				if($result5['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>

			<div class="col-3 mx-auto border text-center scale">
			<?php 

			
				$result6 = $query1->fetch_assoc();
				$result6 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result6['title']."</h5>";
				echo "<img class = 'w-50'src='".$result6['img']."'>";
				echo "<p>".$result6['descrip']."</p>";
				echo "<p>".$result6['price']."</p>";
				if($result6['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>

			
			
		</div>


		<div class="row mt-3">
			<div class="col-3 mx-auto border text-center scale">
			<?php 

				
				$result7 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result7['title']."</h5>";
				echo "<img class = 'w-75'src='".$result7['img']."'>";
				echo "<p>".$result7['descrip']."</p>";
				echo "<p>".$result7['price']."</p>";
				if($result7['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>
		
			<div class="col-3 mx-auto border text-center scale">
			<?php 

			
				$result8 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result8['title']."</h5>";
				echo "<img class = 'w-75'src='".$result8['img']."'>";
				echo "<p>".$result8['descrip']."</p>";
				echo "<p>".$result8['price']."</p>";
				if($result8['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>

			<div class="col-3 mx-auto border text-center scale">
			<?php 

			
				$result9 = $query1->fetch_assoc();
				$result9 = $query1->fetch_assoc();
				echo "<h5 class='font-weight-bold'>".$result9['title']."</h5>";
				echo "<img class = 'w-50'src='".$result9['img']."'>";
				echo "<p>".$result9['descrip']."</p>";
				echo "<p>".$result9['price']."</p>";
				if($result9['title'] != ''){
					echo "<button class='btn bg-primary text-light '>Купить</button>";
				}
	 		?>
			</div>

			
			
		</div>
	</div>
	

<!-- фтуре-->

<div class="col-12 pt-3" style="height:100px;background:#3d3d3d">
	<p class="text-center text-light">Мои контакты: 8 914 2 705 597</p>
</div>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>