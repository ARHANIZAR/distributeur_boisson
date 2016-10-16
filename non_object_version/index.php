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
    "prixPetite"=>"-", 
    "prixMoyenne"=>3.5, 
    "prixGrande"=>4.5,
    "countPetite"=>0,
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
            		
            		foreach ( $myListsOfBoissons as $boisson){
            			
            			echo "<option value='".$boisson["name"]."'>".$boisson["name"]."</option>";
            		}
            	?>
                             
            </select>
            <select name="taille">
            <option value='Petite'>Petite</option>
            <option value='Moyenne'>Moyenne</option>
            <option value='Grande'>Grande</option>
            </select>


            </select>
            <table>
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
                <tr>
                    <td><input type="checkbox" name="0" value="2" /></td>
                    <td><input type="checkbox" name="1" value="1" /></td>
                    <td><input type="checkbox" name="2" value="0.5" /></td>
                    <td><input type="checkbox" name="3" value="0.2" /></td>
                    <td><input type="checkbox" name="4" value="0.1" /></td>
                    <td><input type="checkbox" name="5" value="0.05" /></td>
                    <td><input type="checkbox" name="6" value="0.02" /></td>
                    <td><input type="checkbox" name="7" value="0.01" /></td>
                </tr>
                <tr>
                    <td><input type="text" name="count0" size="3" value="0"/></td>
                    <td><input type="text" name="count1" size="3" value="0" /></td>
                    <td><input type="text" name="count2" size="3" value="0"/></td>
                    <td><input type="text" name="count3" size="3" value="0"/></td>
                    <td><input type="text" name="count4" size="3" value="0"/></td>
                    <td><input type="text" name="count5" size="3" value="0"/></td>
                    <td><input type="text" name="count6" size="3" value="0"/></td>
                    <td><input type="text" name="count7" size="3" value="0"/></td>                  
                </tr>
            </table>

            <input type="submit" value="Passez ma commande" />
        </form>



   	</body>
</html>

        


