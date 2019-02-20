<?php


	try{
		$bdd=new PDO('mysql:host=localhost;dbname=Invoice;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $exception)
	{
		die( 'Erreur : ' . $exception->getMessage() );
	}


	if(isset($_POST['submit'])){
		if(isset($_POST['nomRestaurant']),isset($_POST['nomProduit'])){
			
		}
	}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KSC</title>
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<h1>Facture</h1>
<input type="text">
</body>




<form action="index.php">

  <input type="text" name="nomRestaurant" placeholder="Nom du Restaurant">

  <input type="text" name="nomProduit" placeholder="Produit">

  <input type="submit" name="submit" value="Submit">
</form> 



<script src="assets/script.js" type="text/javascript"></script>
</html>