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
			$piecesDisponible = [2,1,0.5,0.2,0.1,0.05,0.02,0.01];
			$piecesRendu = [0,0,0,0,0,0,0,0];
			$imageMap = ["2euro", "1euro", "50cents", "20cents", "10cents", "5cents", "2cents", "1cents"];
			$aRendre = $sommeRendu;
			$nbElements = sizeof($piecesDisponible);
			for ($i = 0; $i<$nbElements; $i++){
				$piecesRendu[$i] = floor($aRendre / $piecesDisponible[$i]);
				$aRendre =  fmod($aRendre,$piecesDisponible[$i]);
			}		
			echo "<b>somme rendu ".$sommeRendu." € : </b>";
			echo '<table>
					<tr>
						<td><img src="images/2euro.png" alt="piece 2 euro" /></td>
						<td><img src="images/1euro.png" alt="piece 1 euro" /></td>
						<td><img src="images/50cents.png" alt="piece 50 cents" /></td>
						<td><img src="images/20cents.png" alt="piece 20 cents" /></td>
						<td><img src="images/10cents.png" alt="piece 10 cents" /></td>
						<td><img src="images/5cents.png" alt="piece 5 cents" /></td>
						<td><img src="images/2cents.png" alt="piece 2 cents" /></td>
						<td><img src="images/1cents.png" alt="piece 1 cents" /></td>
					</tr>
					<tr>';
			echo '<td><input type="text" name="count0" size="3" value="'.$piecesRendu[0].'"/></td>';
			echo '<td><input type="text" name="count1" size="3" value="'.$piecesRendu[1].'"/></td>';
			echo '<td><input type="text" name="count2" size="3" value="'.$piecesRendu[2].'"/></td>';
			echo '<td><input type="text" name="count3" size="3" value="'.$piecesRendu[3].'"/></td>';
			echo '<td><input type="text" name="count4" size="3" value="'.$piecesRendu[4].'"/></td>';
			echo '<td><input type="text" name="count5" size="3" value="'.$piecesRendu[5].'"/></td>';
			echo '<td><input type="text" name="count6" size="3" value="'.$piecesRendu[6].'"/></td>';
			echo '<td><input type="text" name="count7" size="3" value="'.$piecesRendu[7].'"/></td></tr></table>';
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