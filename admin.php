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
<body style="font-family: Monster">
	<div class="col-12  pt-2 pb-2 pos shadow " style="background:#3d3d3d">
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-1">
					<img src="bogdan.jpg" class=" mx-auto rounded-circle w-50">
				</div>
				<a href="index.php" class="mx-auto text-light ">Главная</a>
				<a href="#katalog" class="mx-auto text-light">Каталог</a>
				
				<a href="admin.php" class="mx-auto text-light">Aдминка</a>
			</div>
		</div>
		
	</div>


<div class="col-2 mx-auto pt-5 pl-0 pr-0">
	<h3 class="text-center font-weight-bold">Добавление товаров</h3>
	<form action="insert.php" method="GET" >
		<div class="col-12 text-center">
			<input type="" name="title" placeholder="Введи название" class="rounded mt-3 pt-1 pb-1 border text-center"> 
			<input type="" name="descrip" placeholder="Введи описание" class="rounded mt-3 pt-1 pb-1 border text-center">
			<input type="" name="img" placeholder="Введи картинку" class="rounded mt-3 pt-1 pb-1 border text-center">
			<input type="" name="price" placeholder="Введи цену" class="rounded mt-3 pt-1 pb-1 border text-center ">
		</div>
		
		<div class="text-center col-12">
			<button class="btn mt-3 bg-primary text-light">Добавить</button>
		</div>
		
	</form>
</div>
	
</body>
</html>