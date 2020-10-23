<?php 
		$connect1 = mysqli_connect("127.0.0.1","root","","proj");
		$text_query1 = 'SELECT * FROM items';
		$query1 = mysqli_query($connect1,$text_query1);

		$text_zaprosa_vstavit = "INSERT INTO items(title, descrip, img, price)
		VALUES ('{$_GET['title']}', '{$_GET['descrip']}', '{$_GET['img']}', '{$_GET['price']}')";

		$zapros_vvoda = mysqli_query($connect1,$text_zaprosa_vstavit);
                                            
                                            
        header("Location: index.php");

	 ?>