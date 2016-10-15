<?php
require_once "Distributeur.php";
require_once "Boisson.php";

$fanta = new Boisson("fanta","Fanta, le gout de l'orange, sans l'orange !",10,2,2.5,3);
$coca = new Boisson("coca","Coca, c'est plus fort que toi !",12,2,2.5,3);
$sprite = new Boisson("sprite","Sprite, et ça repart !",13,null,2.5,3);
$icetea = new Boisson("red bull","La seul boisson qui contient des roubigol de torreau !",6,2.5,3.5,4.5);

$distributeur = new Distributeur();
$distributeur->addBoisson($fanta);
$distributeur->addBoisson($coca);
$distributeur->addBoisson($sprite);
$distributeur->addBoisson($icetea);

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
     			for ($i = 0; $i < $distributeur->countBoissonsByType(); $i++){
     				$boisson = $distributeur->getBoisson($i);
     				echo "<tr><td>".$boisson->getName()."</td><td>".$boisson->getPrixPetite()."$</td><td>".$boisson->getPrixMoyenne()."$</td><td>".$boisson->getPrixGrande()."$</td>";
     			}
     		?>           
            
   		</table>

   		Faites votre choix ci dessous: <br>

   		<form action="distribution.php" method="POST">
            <select name="boisson">
            	<?php
            		$boissons = $distributeur->getBoissons();
            		foreach ( $boissons as $boisson){
            			$name = $boisson->getName();
            			echo "<option value='".$name."'>".$name."</option>";
            		}
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

        


