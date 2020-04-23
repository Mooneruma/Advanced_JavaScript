<?php

	
	$cupcakeObject->name = "chocolateCupcake";
	$cupcakeObject->description = "A spooky chocolate cupcake";
	$cupcakeObject->price = "$2";
	$cupcakeObject->image = "<img src='chocolateCupcake.jpg' width='250px' height='auto'>";
		
	$myJSON = json_encode($cupcakeObject);
	
	$my_file = $cupcakeObject->name . ".JSON";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);
	
	$cupcakeObject->name = "redvelvetCupcake";
	$cupcakeObject->description = "A red velvet cupcake with a haunting twist";
	$cupcakeObject->price = "$3";
	$cupcakeObject->image = "<img src='redVelvetCupcake.jpg' width='250px' height='auto'>";
		
	$myJSON = json_encode($cupcakeObject);
	
	$my_file = $cupcakeObject->name . ".JSON";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);	
	
	$cupcakeObject->name = "vanillaCupcake";
	$cupcakeObject->description = "A ghostly vanilla cupcake";
	$cupcakeObject->price = "$1";
	$cupcakeObject->image = "<img src='vanillaCupake.jpg' width='250px' height='auto'>";
		
	$myJSON = json_encode($cupcakeObject);
	
	$my_file = $cupcakeObject->name . ".JSON";
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $myJSON;
	fwrite($handle, $data);	
	

	

	//echo $myJSON;
		
	//Write an output file	

	
	
?>