<?php



$myListsOfBoissons['fanta'] = array(
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
    "prixPetite"=>2.5, 
    "prixMoyenne"=>3.5, 
    "prixGrande"=>4.5,
    "countPetite"=>6,
    "countMoyenne"=>7,
    "countGrande"=>20); 





?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exo php</title>
    </head>
    <body>
    	<table border="1" width="50%">
    		<tr>
     			<th>Boisson</th>
     			<th>Petite</th>
     			<th>Moyenne</th>
     			<th>Grande</th>
     		</tr> 
     		<?php

            foreach($myListsOfBoissons as $boisson){
                echo "<tr><td>".$boisson["name"]."</td><td>".$boisson["prixPetite"]."$</td><td>".$boisson["prixMoyenne"]."$</td><td>".$boisson["prixGrande"]."$</td>";
            }
 
     		?>           
            
   		</table>

   		Faites votre choix ci dessous: <br>

   		<form action="distribution.php" method="POST">
            <select name="boisson">
            	<?php
            		

            	?>
                             
            </select>
            <select name="taille">
            <option value='petite'>petite</option>
            <option value='moyenne'>moyenne</option>
            <option value='grande'>grande</option>
            </select>
        	<input type="submit" value="Passez ma commande" />
        </form>



   	</body>
</html>

        


