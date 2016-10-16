<?php
session_start();                    
if(isset($_SESSION['list']) && isset($_POST["boisson"]) && isset($_POST["taille"]) ){

	$myListOfBoissons = $_SESSION['list'];

    $name = $_POST["boisson"];
	$taille = $_POST["taille"];

	$pieces = array()

	for ($i = 0; i<8; $i++){
		$piece[] = $_POST[$i];
	}


	

	$boisson = $myListOfBoissons[$name];

	if($boisson["count".$taille] > 0){
		echo " Vous aves reçu une cannete de ".$name." de taille ".$taille."</br>";
		echo $boisson["slogan"];
	}else{
		echo "Nous sommes désolé, mais la boisson que vous avez selectionné n'éxiste pas dans pour cette taille";
	}
}else{
	echo " <h1> Do not be evil !!! </h1>";
}



?>