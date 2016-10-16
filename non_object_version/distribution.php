<?php

$myListsOfBoissons["fanta"] = array(
    "name"=>"fanta", 
    "slogan"=>"Fanta, le gout de l'orange, sans l'orange !", 
    "prixPetite"=>2, 
    "prixMoyenne"=>2.5, 
    "prixGrande"=>3,
    "countPetite"=>6,
    "countMoyenne"=>7,
    "countGrande"=>20); 

$myListsOfBoissons['coca'] = array(
    "name"=>"coca", 
    "slogan"=>"Coca, c'est plus fort que toi !", 
    "prixPetite"=>2, 
    "prixMoyenne"=>2.5, 
    "prixGrande"=>3,
    "countPetite"=>6,
    "countMoyenne"=>7,
    "countGrande"=>20); 

$myListsOfBoissons['redBull'] = array(
    "name"=>"red bull", 
    "slogan"=>"La seul boisson qui contient des roubigol de torreau !", 
    "prixPetite"=>"-", 
    "prixMoyenne"=>3.5, 
    "prixGrande"=>4.5,
    "countPetite"=>0,
    "countMoyenne"=>7,
    "countGrande"=>20); 


                 
if( isset($_POST["boisson"]) && isset($_POST["taille"]) ){


    $name = $_POST["boisson"];
	$taille = $_POST["taille"];


	$pieces = array();

	for ($i = 0; $i<8; $i++){
		$piece[] = $_POST[$i];
	}

	$countPieces = array();

	for ($i = 0; $i<8; $i++){
		$countPieces[] = $_POST["count".$i];
	}

	$total = 0;
	for ($i = 0; $i<8; $i++){
		$total += $piece[$i]*$countPieces[$i];
	}

	
	

	$boisson = $myListsOfBoissons[$name];

	if($boisson["count".$taille] > 0){

		if($total >= $boisson["prix".$taille]){
			echo " Vous aves reçu une cannete de ".$name." de taille ".$taille."</br>";
			echo $boisson["slogan"]."</br>";
			$sommeRendu = $total - $boisson["prix".$taille];
			echo "-------------------------------</br>";
			echo "somme rendu ".$sommeRendu;
		} else {
			echo "vous n'avez pas sufisament d'agrgent pour effectuer cette achat";
		}


	}else{
		echo "Nous sommes désolé, mais la boisson que vous avez selectionné n'éxiste pas dans pour cette taille";
	}
}else{
	echo " <h1> Do not be evil !!! </h1>";
}



?>