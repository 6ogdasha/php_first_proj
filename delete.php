<?php 
	$connect = mysqli_connect("127.0.0.1","root","","proj");
	$text_zaprosa = "DELETE FROM items WHERE id ='11'";

	$zapros_vvoda = mysqli_query($connect,$text_zaprosa);
 ?>